<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Adoption</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php include 'metacommon.php'; ?>
</head>

<body>
    
<?php include 'header.php'; ?>

<style>
    .mainContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .form-container {
        margin-top: 100px;
        background-color: #fff;
        border-radius: 10px;
        max-width: 600px;
        padding: 30px;
        width: 100%;
    }

    .form-container h1 {
        color: #333;
        font-size: 1.8rem;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #666;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        color: #333;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #5cb85c;
        outline: none;
        box-shadow: 0 0 6px rgba(92, 184, 92, 0.3);
    }

    .submit-btn {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #5cb85c;
        color: #fff;
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #4cae4c;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 100px;
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
        <h1>Donate a Pet</h1>
        <form action="./admin/adoptForm.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
                <span class="error-message" id="errorName">Please enter your full name.</span>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <span class="error-message" id="errorEmail">Please enter a valid email address.</span>
            </div>
            

            <div class="form-group">
                <label for="aniimage">Image 1</label>
                <input type="file" id="aniimage" name="aniimage" required>
            </div>
            
            <div class="form-group">
                <label for="aniimage2">Image 2</label>
                <input type="file" id="aniimage2" name="aniimage2" required>
            </div>
            
            <div class="form-group">
                <label for="anivideo">Video</label>
                <input type="file" id="anivideo" name="anivideo">
            </div>
            

            <div class="form-group">
                <label for="adhar">Aadhar</label>
                <input type="file" id="adhar" name="adhar" required>
            </div>

            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
                <span class="error-message" id="errorPhone">Please enter a valid phone number.</span>
            </div>
            
            <div class="form-group">
                <label for="petType">Type of Pet</label>
                <select id="petType" name="petType" required>
                    <option value="">Select a pet</option>
                    <option value="Dog">Dog</option>
                    <option value="Cow">Cow/Calf</option>
                    <option value="Bird">Bird</option>
                    <option value="Cat">Cat</option>
                    <option value="Other">Other (Please Specify in Description)</option>
                </select>
                <span class="error-message" id="errorPetType">Please select a type of pet.</span>
            </div>
            
            <div class="form-group">
                <label for="message">Why Do You Want to Donate?</label>
                <textarea id="message" name="message" required></textarea>
                <span class="error-message" id="errorMessage">Please explain why you want to donate.</span>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
<script>
    function validateForm() {
        let isValid = true;

        // Full Name validation
        const fullName = document.getElementById('fullName');
        const errorName = document.getElementById('errorName');
        if (fullName.value.trim() === '') {
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

        // Pet Type validation
        const petType = document.getElementById('petType');
        const errorPetType = document.getElementById('errorPetType');
        if (petType.value === '') {
            errorPetType.style.display = 'block';
            isValid = false;
        } else {
            errorPetType.style.display = 'none';
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
