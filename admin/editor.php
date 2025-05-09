<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        /* General Styling */
        *{

            box-sizing: border-box;
        }
body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f4fffb;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    max-width: 90%;
    margin: 0 auto;
}

/* Editor Container */
.editor-container {
    max-width: 800px;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-left: 5px solid #007BFF;
}

/* Headings */
h2 {
    color: #00d7c2;
    text-align: center;
    font-weight: bold;
}

/* Labels */
label {
    font-weight: bold;
    color: #00d7c2;
    display: block;
    margin: 10px 0 5px;
}

/* Input Fields */
input[type="text"],
input[type="file"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    transition: all 0.3s ease;
}

/* Focus Effects */
input:focus,
textarea:focus {
    border-color: #00d7c2;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0, 91, 187, 0.4);
}

/* Textarea Styling */
textarea {
    min-height: 65vh;
    resize: vertical;
}

/* Submit Button */
button.publish {
    background-color: #00d7c2;
    color: white;
    border: none;
    padding: 10px 18px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
    width: 100%;
    font-weight: bold;
    margin: 15px 0;
}


/* File Upload Input */
input[type="file"] {
    padding: 8px;
    background-color: #e3fdf3;
    border: 1px solid #00d7c2;
    cursor: pointer;
}

/* Image Preview */
.image-preview {
    width: 100%;
    height: auto;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

/* Responsive */
@media (max-width: 600px) {
    .editor-container {
        width: 90%;
        padding: 15px;
    }

    button {
        font-size: 14px;
        padding: 10px;
    }
}

.logoutForm {
    position: fixed;
    top: 8px;
    right: 8px;
}

.logout-btn {
    text-align: center;
    display: inline-block;
    margin: 10px 0;
    background:#ff4772;
    text-decoration: none;
    cursor: pointer;
    border: none;
    font-weight: bold;
    color: white;
    border-radius: 5px;
    padding: 8px 10px;
}

    </style>
</head>
<body>
    <h2>Create a New Post</h2>
    <form action="save_post.php" method="POST" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Content of the post (Use h2 tag for headings and p tag for paragraphs )</label>:</label>
        <textarea name="content1" required></textarea>

        <label>Upload Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit" name="publish" class="publish">Publish</button>
        
    </form>
    <form action="logout.php" method="post" class="logoutForm">
            <button type="submit" class="logout-btn">Logout</button>
    </form>
</body>
</html>