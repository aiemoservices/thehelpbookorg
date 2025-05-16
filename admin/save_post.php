<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get title and format filename
    $title = trim($_POST['title']);
    $words = preg_split('/\s+/', $title);
    $filename = strtolower(implode('_', array_slice($words, 0, 5))) . ".php";

    $contents = [$_POST['content1']];

    // Handle image upload
    $imgn = basename($_FILES["image"]["name"]); // Example: image.png
    $extimg = pathinfo($filename, PATHINFO_EXTENSION); // Extracts 'png'
    $imagePath = "../assets/" . strtolower(implode('_', array_slice($words, 0, 5))) . $extimg;
    move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    $imageUrl = "https://thehelpbook.org/assets/posts/" . strtolower(implode('_', array_slice($words, 0, 5))) . $extimg;

    // Generate HTML content for the new post
    $html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$title</title>
    <?php 
    require './posts.php';
    require '../style.php';
    ?>

    <!-- SEO Meta Tags -->
    <meta name='description' content='$title'>
    <meta name='keywords' content='HelpBook Foundation, social impact, humanitarian efforts, education, health'>

    <!-- Open Graph Meta Tags -->
    <meta property='og:title' content='$title'>
    <meta property='og:description' content='$title'>
    <meta property='og:url' content='https://thehelpbook.org/posts/$filename'>
    <meta property='og:type' content='article'>
    <meta property='og:image' content='$imageUrl'>

    <!-- Twitter Meta Tags -->
    <meta name='twitter:card' content='summary_large_image'>
    <meta name='twitter:title' content='$title'>
    <meta name='twitter:description' content='$title'>
    <meta name='twitter:image' content='$imageUrl'>
    <?php include '../metacommon.php'; ?>

</head>
<body>
<?php require '../header.php'; ?>

<main class='content'>
    <nav aria-label='breadcrumb' class='breadcrumb'>
        <ol>
            <li><a href='../'>Home</a></li>
            <li><a href='../news.php'>News</a></li>
            <li class='active' aria-current='page'>$title</li>
        </ol>
    </nav>
    <header>
        <h1>$title</h1>
        <p><strong>Author:</strong> Admin | <strong>Date:</strong> " . date('d-m-Y') . "</p>
    </header>
    <section class='head-image'>
        <img src='$imagePath' alt='$title'>
    </section>";

    // Add sections
    for ($i = 0; $i < 4; $i++) {
        $html .= "<section>
            {$contents[$i]}
        </section>";
    }

    $html .= "</main>
<?php include '../footer.php'; ?>

<script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>
    <?php 
    require '../script.php';
    ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js'></script>
</body>

</html>";

    // Save the new post file
    file_put_contents("../posts/$filename", $html);

    // Prepare the new update card for news.php
    $newCard = "\n                <div class=\"update-card\">
                    <img src='$imageUrl' alt='$title' class='update-image'>
                    <p>$title.</p>
                    <a href='./posts/$filename' class='btnMin btNews'>Read More&nbsp;<i class='fa-solid fa-arrow-right'></i></a>
                </div>\n";

    // Modify news.php: Insert new card inside "updates-container"
    $newsFile = "../news.php";
    $newsContent = file_get_contents($newsFile);

    // Find the position of the updates-container div closing tag and insert new card before it
    $position = strpos($newsContent, '<div class="update-card">');

    if ($position !== false) {
        $updatedNewsContent = substr_replace($newsContent, $newCard, $position, 0);
        file_put_contents($newsFile, $updatedNewsContent);
    }

    // *Update sitemap.xml*
    $sitemapFile = "../sitemap.xml";
    $sitemapContent = file_get_contents($sitemapFile);
    
    // Create new sitemap entry
    $newSitemapEntry = "
  <url>
    <loc>https://thehelpbook.org/posts/$filename</loc>
    <lastmod>" . date('Y-m-d') . "</lastmod>
  </url>";

    // Insert before </urlset>
    $sitemapContent = str_replace("</urlset>", $newSitemapEntry . "\n</urlset>", $sitemapContent);
    
    // Save updated sitemap
    file_put_contents($sitemapFile, $sitemapContent);

    echo "Post created: <a href='../posts/$filename'>View Post</a>&nbsp;<a href='../news.php'>View News Page</a>";
}
?>
<form action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
</form>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: Arial, Sans-Serif;
}


    a{
        text-decoration: none;
        font-weight: bold;
    }
    
    button {
        border: none;
        background: #00dbb2;
        padding: 7px 10px;
        font-weight: bold;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }
</style>