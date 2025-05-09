<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Foster A Pet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php include 'metacommon.php'; ?>
</head>

<body>

<?php include 'header.php'; ?>

<style>
    .mainContainer {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-container {
        margin-top: 100px;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px 40px;
        width: 40%;
    }

    @media (max-width: 800px) {
        .form-container {
            width: 90%;
        }
    }

    .form-container h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container label {
        font-size: 16px;
        color: #666;
        display: block;
        margin-top: 30px
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="tel"],
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 15px;
        border: 1px solid #eee;
        border-radius: 4px;
        font-size: 14px;
    }

    .form-container textarea {
        resize: vertical;
        height: 80px;
    }

    .form-container .submit-btn {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 12px 0;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    .form-container .submit-btn:hover {
        background-color: #218838;
    }

    .error-message {
        color: red;
        font-size: 0.9rem;
        margin-top: 5px;
        display: none;
    }
</style>

<div class="mainContainer">
    <div class="form-container">
        <h1>Foster a Pet</h1>
        <form action="./admin/foster.php" method="POST" onsubmit="return validateFosterForm()">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <span class="error-message" id="errorName">Please enter your name.</span>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message" id="errorEmail">Please enter a valid email address.</span>

            <label for="adhar">Aadhar</label>
            <input type="file" id="adhar" name="adhar" required>


            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
            <span class="error-message" id="errorPhone">Please enter a valid phone number.</span>

            <label for="experience">Fostering Experience</label>
            <textarea id="experience" name="experience" placeholder="Describe your experience or interest in fostering." required></textarea>
            <span class="error-message" id="errorExperience">Please describe your fostering experience.</span>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

<script>
    function validateFosterForm() {
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

        // Phone validation
        const phone = document.getElementById('phone');
        const errorPhone = document.getElementById('errorPhone');
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone.value)) {
            errorPhone.style.display = 'block';
            isValid = false;
        } else {
            errorPhone.style.display = 'none';
        }

        // Experience validation
        const experience = document.getElementById('experience');
        const errorExperience = document.getElementById('errorExperience');
        if (experience.value.trim() === '') {
            errorExperience.style.display = 'block';
            isValid = false;
        } else {
            errorExperience.style.display = 'none';
        }

        return isValid;
    }
</script>

</body>

</html>
