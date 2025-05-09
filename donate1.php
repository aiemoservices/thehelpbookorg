<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Donation Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="description" content="Support HelpBook Foundation’s mission by making a donation. Every contribution goes towards impactful initiatives in education, environment, and health.">
    <meta name="keywords" content="HelpBook Foundation, donate, charity, community support, social impact">

    <meta property="og:title" content="Donate to HelpBook Foundation">
    <meta property="og:description" content="Make a difference by donating to our community-driven initiatives in health, education, and the environment.">
    <meta property="og:url" content="https://thehelpbook.org/donate.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/education.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Donate to HelpBook Foundation">
    <meta name="twitter:description" content="Make a difference by donating to our community-driven initiatives in health, education, and the environment.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/education.webp">

    <?php
     include 'metacommon.php'
     ?> </head>

<body>

<?php

include 'header.php';

?>

<style>
    .form-container {
        img {
            width: 300px; 
            max-width: 100%;
        }
    }
</style>


    <div class="containerDon">
        <div class="description">
            <h1>Show Your Support To Community.</h1>
            <p>Your support empowers The Helpbook Foundation to impact lives by funding environmental initiatives, education, healthcare, and animal welfare. Each contribution strengthens our mission to create a healthier, compassionate world where everyone can thrive.</p>
        </div>
        <div class="form-container">
            <h1>Support By Donation....</h1>


            <form action="./admin/donate.php" method="POST" id="donationForm" onsubmit="return validateForm()">
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Name" name="name">

                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Email Address" name="email">

                <label for="phone">Phone</label>
                <input type="text" id="phone" placeholder="+91 0000000000" name="phone">


                <label for="tid">Transection ID</label>
                <div class="phone-input">

                    <input type="text" id="tid" placeholder="070 123 4567" name="tid">
                </div>

                <!--<div class="goal-section">-->
                <!--    <div>-->
                <!--        <span>₹0 Raised</span>-->
                <!--        <span>0 Donations</span>-->
                <!--        <span>₹10000 Goal</span>-->
                <!--    </div>-->
                <!--    <div class="progress-bar">-->
                <!--        <div class="progress" style="width: 40%;"></div>-->
                <!--    </div>-->
                <!--</div>-->

                <label for="goal">Donation (In Rupees)</label>
                <input type="number" id="goal" value="1000" name="goal">
                
                <img src="./assets/qr.webp" alt="Payment QR Code">
            

                <div class="buttons">
                    <button type="submit">Submit</button>
                </div>
                
                <small>(Submit After Payment) If we recieve your payment you will recieve a thank you email...</small>

            </form>
            
            
        </div>
    </div>

<script>
function validateForm() {
    // Name validation: check if it's not empty and is only letters and spaces
    const name = document.getElementById('name').value.trim();
    const nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(name)) {
        alert("Please enter a valid name (letters and spaces only).");
        return false;
    }

    // Email validation: HTML5 email input already does basic validation
    const email = document.getElementById('email').value.trim();
    if (!email) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone validation: check if it matches Indian phone format (e.g., +91 0000000000 or 0000000000)
    const phone = document.getElementById('phone').value.trim();
    const phoneRegex = /^(\+91\s?)?[6-9]\d{9}$/; // Allows optional +91 and validates 10-digit Indian mobile numbers
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid phone number (e.g., +91 0000000000 or 0000000000).");
        return false;
    }

    // Transaction ID validation: check if it's not empty
    const tid = document.getElementById('tid').value.trim();
    if (!tid) {
        alert("Please enter a valid transaction ID.");
        return false;
    }

    // Donation amount validation: ensure it's a positive number
    const goal = document.getElementById('goal').value;
    if (goal <= 0) {
        alert("Donation amount must be greater than zero.");
        return false;
    }

    // All validations passed
    return true;
}
</script>



    <div class="howDon">
        <h3>How is this going to help.</h3>
        <div class="sepratorHr"></div>
        <p>Your donation directly supports critical projects, from providing learning materials to underprivileged children to ensuring timely medical care in underserved areas. By donating, you help empower lives, uplift communities, and protect our planet for future generations.</p>
    </div>




<?php

include 'footer.php';

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
