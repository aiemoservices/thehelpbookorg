<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>This is another post 1</title>
    <?php 
    require './posts.php';
    require '../style.php';
    ?>

    <!-- SEO Meta Tags -->
    <meta name='description' content='This is another post 1'>
    <meta name='keywords' content='HelpBook Foundation, social impact, humanitarian efforts, education, health'>

    <!-- Open Graph Meta Tags -->
    <meta property='og:title' content='This is another post 1'>
    <meta property='og:description' content='This is another post 1'>
    <meta property='og:url' content='https://thehelpbook.org/posts/this_is_another_post_1.php'>
    <meta property='og:type' content='article'>
    <meta property='og:image' content='https://thehelpbook.org/assets/this_is_another_post_1php'>

    <!-- Twitter Meta Tags -->
    <meta name='twitter:card' content='summary_large_image'>
    <meta name='twitter:title' content='This is another post 1'>
    <meta name='twitter:description' content='This is another post 1'>
    <meta name='twitter:image' content='https://thehelpbook.org/assets/this_is_another_post_1php'>
    <?php include '../metacommon.php'; ?>

</head>
<body>
<?php require '../header.php'; ?>

<main class='content'>
    <nav aria-label='breadcrumb' class='breadcrumb'>
        <ol>
            <li><a href='../'>Home</a></li>
            <li><a href='../news.php'>News</a></li>
            <li class='active' aria-current='page'>This is another post 1</li>
        </ol>
    </nav>
    <header>
        <h1>This is another post 1</h1>
        <p><strong>Author:</strong> Admin | <strong>Date:</strong> 14-03-2025</p>
    </header>
    <section class='head-image'>
        <img src='../assets/this_is_another_post_1php' alt='This is another post 1'>
    </section><section>
            <h2>Example post</h2>
Example Post
        </section><section>
            
        </section><section>
            
        </section><section>
            
        </section></main>
<?php include '../footer.php'; ?>

<script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>
    <?php 
    require '../script.php';
    ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js'></script>
</body>

</html>