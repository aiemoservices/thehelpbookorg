<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Now | The Helpbook Foundation</title>
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

    <?php
    include 'metacommon.php';
    ?>

    <style>
        .form-container {
            width: 100%;
            max-width: 50%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            margin-top: 70px;

            @media (max-width: 800px) {
                max-width: 95%;
                margin-top: 50px;
            }
        }

        h2 {
            color: #fc5f7c;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #fc5f7c;
        }

        .contains-btn123 {
            display: flex;
            justify-content: right;
            align-items: center;
            gap: 10px;
            width: 100%;
        }

        @media (max-width: 768px) {
            .contains-btn123 {
                justify-content: center;
            }
        }

        .contains-btn123 button {
            padding: 8px 14px;
            margin-top: 20px;
            background-color: #fc5f7c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s all ease;
        }

        .contains-btn123 button:hover {
            background-color: rgb(245, 55, 90);
        }

        .btn-sb {
            background-color: #28a745;
        }

        .submit-button:hover {
            filter: brightness(10%);
        }
    </style>
    <?php

    include 'metacommon.php';

    ?>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="form-container">
        <form id="helpForm" action="./admin/help.php" method="POST">

            <script src="https://cdn.tailwindcss.com"></script>
            <div class="form-header">
                <h2 class="text-4xl font-bold center mb-2 relative inline-block">
                    Help Now
                </h2>
            </div>

            <br />

            <!-- Personal Details -->
            <label for="fullName">Full Name: <span class="required">*</span></label>
            <input type="text" name="fullName" class="form-control" placeholder="Enter your full name" required>

            <label for="email">Email: <span class="required">*</span></label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>

            <label for="phone">Phone Number: <span class="required">*</span></label>
            <input type="tel" name="phone" class="form-control p-[10px]" placeholder="Enter your phone number" required>

            <label for="city">City: <span class="required">*</span></label>
            <input type="text" name="city" class="form-control" placeholder="Enter your city" required>

            <!-- Help Category -->
            <label for="helpCategory">Select Help Type: <span class="required">*</span></label>
            <select name="helpCategory" class="form-control p-[10px]" required>
                <option value="">-- Select One --</option>
                <option value="donor">I want to be a Donor</option>
                <option value="needy">I am in Need of Help</option>
            </select>

            <br>
            <!-- Conditional Fields (based on selection) -->
            <div id="donorFields" style="display:none;">
                <label for="donorType">Type of Donation: <span class="required">*</span></label>
                <select name="donorType" class="form-control form-control p-[10px]" required>
                    <option value="">-- Select Donation Type --</option>
                    <option value="books">Books</option>
                    <option value="toys">Toys</option>
                    <option value="student_sponsor">Sponsor a Student</option>
                    <option value="other_help">Other (Please Specify Below)</option>
                </select>

                <label for="donorDetails">Details:</label>
                <input type="text" name="donorDetails" class="form-control" placeholder="Enter more details...">
            </div>

            <br>

            <div id="needyFields" style="display:none;">
                <label for="needyType">Type of Help Needed: <span class="required">*</span></label>
                <select name="needyType" class="form-control form-control p-[10px]" required>
                    <option value="">-- Select Help Type --</option>
                    <option value="books">Books</option>
                    <option value="pet_help">Help for a Pet</option>
                    <option value="other_help">Other (Please Specify Below)</option>
                </select>
                <label for="needyDetails">Details:</label>
                <input type="text" name="needyDetails" class="form-control" placeholder="Enter more details...">
            </div>

            <label for="message">Additional Message: <span class="required">*</span></label>
            <textarea name="message" class="form-control p-[10px]" placeholder="Any extra information..."
                required></textarea>

            <div class="contains-btn123">
                <button type="submit" class="btn btn-sb">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const helpCategory = document.querySelector('select[name="helpCategory"]');
        const donorFields = document.getElementById('donorFields');
        const needyFields = document.getElementById('needyFields');
        const donorType = document.querySelector('select[name="donorType"]');
        const needyType = document.querySelector('select[name="needyType"]');

        helpCategory.addEventListener('change', function () {
            if (this.value === 'donor') {
                donorFields.style.display = 'block';
                needyFields.style.display = 'none';
                donorType.setAttribute('required', 'required');
                needyType.removeAttribute('required');
            } else if (this.value === 'needy') {
                donorFields.style.display = 'none';
                needyFields.style.display = 'block';
                needyType.setAttribute('required', 'required');
                donorType.removeAttribute('required');
            } else {
                donorFields.style.display = 'none';
                needyFields.style.display = 'none';
                donorType.removeAttribute('required');
                needyType.removeAttribute('required');
            }
        });
        // JavaScript Validation
        document.getElementById("helpForm").addEventListener("submit", function (event) {
            let valid = true;
            let fields = document.querySelectorAll("#helpForm [required]");

            // Loop through all required fields and check if they are empty
            fields.forEach(function (field) {
                if (field.value.trim() === "") {
                    valid = false;
                    alert("Please fill out all required fields.");
                    field.focus();
                    event.preventDefault();
                }
            });

            if (!valid) {
                return false;
            }
        });

        // Show fields based on the selected help category
        document.querySelector('select[name="helpCategory"]').addEventListener('change', function () {
            var donorFields = document.getElementById('donorFields');
            var needyFields = document.getElementById('needyFields');
            if (this.value === 'donor') {
                donorFields.style.display = 'block';
                needyFields.style.display = 'none';
            } else if (this.value === 'needy') {
                needyFields.style.display = 'block';
                donorFields.style.display = 'none';
            } else {
                donorFields.style.display = 'none';
                needyFields.style.display = 'none';
            }
        });
    </script>


    <?php

    include 'footer.php';

    ?>
    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>