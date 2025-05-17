<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Contact Us</title>
    <?php

    require 'style.php';

    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="description"
        content="HelpBook Foundation is dedicated to empowering underprivileged children through quality education. Join us in shaping brighter futures with inclusive learning initiatives and community-driven academic support.">
    <meta name="keywords"
        content="HelpBook Foundation, children's education, education for all, nonprofit education, literacy, learning support, student sponsorship, school access, educational empowerment, underprivileged students">

    <meta property="og:title" content="HelpBook Foundation - Education for Every Child">
    <meta property="og:description"
        content="Transforming lives through education. HelpBook Foundation provides learning opportunities to children in need. Be part of the movement to educate every child.">
    <meta property="og:url" content="https://thehelpbook.org/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/place.jpg">

    <meta name="twitter:title" content="HelpBook Foundation - Education for Every Child">
    <meta name="twitter:description"
        content="Empowering young minds through education. Support HelpBook Foundation in providing quality education to underserved communities.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/place.jpg">

    <?php include 'metacommon.php'; ?>
</head>

<body>

    <?php include 'header.php'; ?>

    <style>
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
            display: none;
        }
    </style>

    <div class="wrapperCon">
        <div class="container-form">
            <script src="https://cdn.tailwindcss.com"></script>
            <div class="form-header mb-4">
                <h2 class="text-4xl font-bold center mb-2 relative inline-block">
                    Contact Us
                </h2>
            </div>
            <form action="./admin/contact.php" id="contactForm" method="POST" onsubmit="return validateContactForm()">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <span class="error-message" id="errorName">Please enter your name.</span>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <span class="error-message" id="errorEmail">Please enter a valid email address.</span>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                <span class="error-message" id="errorSubject">Please enter a subject.</span>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                <span class="error-message" id="errorMessage">Please enter your message.</span>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <?php

    require 'script.php';

    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

    <script>
        function validateContactForm() {
            let isValid = true;

            // Name validation
            const name = document.getElementById('name');
            const errorName = document.getElementById('errorName');
            if (name.value.trim() === '') {
                errorName.style.display = 'block';
                isValid = false;
            } else {
                errorName.style.display = 'none';
            }

            // Email validation
            const email = document.getElementById('email');
            const errorEmail = document.getElementById('errorEmail');
            const emailPattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email.value)) {
                errorEmail.style.display = 'block';
                isValid = false;
            } else {
                errorEmail.style.display = 'none';
            }

            // Subject validation
            const subject = document.getElementById('subject');
            const errorSubject = document.getElementById('errorSubject');
            if (subject.value.trim() === '') {
                errorSubject.style.display = 'block';
                isValid = false;
            } else {
                errorSubject.style.display = 'none';
            }

            // Message validation
            const message = document.getElementById('message');
            const errorMessage = document.getElementById('errorMessage');
            if (message.value.trim() === '') {
                errorMessage.style.display = 'block';
                isValid = false;
            } else {
                errorMessage.style.display = 'none';
            }

            return isValid;
        }
    </script>

</body>

</html>