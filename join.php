<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Helpbook Foundation | Join Us Form</title>
        <?php

        require 'style.php';
        
        ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <meta name="description" content="Join the HelpBook Foundation and become part of a community committed to social and environmental impact. Together, we can create positive change.">
<meta name="keywords" content="HelpBook Foundation, join us, volunteer, community, social impact, environmental action">

<meta property="og:title" content="Join HelpBook Foundation">
<meta property="og:description" content="Become a member of HelpBook Foundation and contribute to impactful social and environmental change.">
<meta property="og:url" content="https://thehelpbook.org/join.php">
<meta property="og:type" content="website">
<meta property="og:image" content="https://thehelpbook.org/assets/logo.png">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Join HelpBook Foundation">
<meta name="twitter:description" content="Become a member of HelpBook Foundation and contribute to impactful social and environmental change.">
<meta name="twitter:image" content="https://thehelpbook.org/assets/logo.png">

<?php
include 'metacommon.php';
?>
</head>
<body>

<?php

include 'header.php';

?>
  <style>

    .form-container {
      margin: 0 auto;
      margin-top: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 40%;

      @media (max-width: 800px) {
        width: 90%;
      }

      form {
        width: 100%;
      }
    }

    .form-header {
      color: #fc5f7c;
      text-align: center;
      font-weight: bold;
      margin-bottom: 10px;
      
      h1 {
        font-size: 24px;
      }
    }

    .form-step {
      display: none;
      width: 100%;
    }

    .steptrack {
      display: flex;
      width: 100%;
      height: 15px;
      border-radius: 10px;
      overflow: hidden;
      background: #eee;
      margin: 30px 0;

      .first, .second {
        background: #fc5f7c;
        height: 100%;
        width: 50%;
        border-radius: 10px;
        font-size: 12px;
        color: white;
        text-align: center;
      }

      .second {
        width: 100%;
      }


    }

    .form-step.active {
      display: block;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #333;
      font-weight: bold;
    }

    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      background-color: #fc5f7c;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #e0566c;
    }

    .error {
      color: red;
      font-size: 12px;
    }
  </style>

<div class="form-container">
  <div class="form-header"><h1>Join Us - HelpBook Foundation</h1></div>
  
  <form action="./admin/joinReq.php" method="POST" id="joinUsForm">
  <div id="step1" class="form-step active">
    <div class="steptrack">
      <div class="first">50%</div>
    </div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <span id="errorName" class="error"></span>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <span id="errorEmail" class="error"></span>

    <label for="phone">Phone No:</label>
    <input type="tel" id="phone" name="phone" required>
    <span id="errorPhone" class="error"></span>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="3" required></textarea>
    <span id="errorMessage" class="error"></span>
  </div>
  
  <div id="step2" class="form-step">
    <div class="steptrack">
      <div class="second">100%</div>
    </div>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <span id="errorAge" class="error"></span>

    <label for="bloodGroup">Blood Group:</label>
    <select id="bloodGroup" name="bloodGroup" required>
      <option value="">Select Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select>
    <span id="errorBloodGroup" class="error"></span>

    <label for="education">Education Qualification:</label>
    <input type="text" id="education" name="education" required>
    <span id="errorEducation" class="error"></span>

    <label for="profession">Profession:</label>
    <input type="text" id="profession" name="profession" required>
    <span id="errorProfession" class="error"></span>

    <label for="adhar">Aadhar</label>
    <input type="file" id="adhar" name="adhar" required>

    <label for="skills">Skill Of Interest:</label>
    <input type="text" id="skills" name="skills" required>
    <span id="errorSkills" class="error"></span>
  </div>

  <div class="form-buttons">
    <button type="button" id="prevBtn" class="btn" onclick="prevStep()" style="display: none;">Previous</button>
    <button type="button" id="nextBtn" class="btn" onclick="nextStep()">Next</button>
  </div>
</form>

</div>

<script>
    let currentStep = 1;

function showStep(step) {
  document.querySelectorAll('.form-step').forEach((el, index) => {
    el.classList.toggle('active', index + 1 === step);
  });
  document.getElementById('prevBtn').style.display = step === 1 ? 'none' : 'inline-block';
  document.getElementById('nextBtn').textContent = step === 2 ? 'Submit' : 'Next';
}

function validateStep(step) {
  let isValid = true;
  if (step === 1) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();

    document.getElementById('errorName').textContent = name ? '' : 'Name is required';
    document.getElementById('errorEmail').textContent = email ? '' : 'Email is required';
    document.getElementById('errorPhone').textContent = phone ? '' : 'Phone is required';
    document.getElementById('errorMessage').textContent = message ? '' : 'Message is required';

    isValid = name && email && phone && message;
  } else if (step === 2) {
    const age = document.getElementById('age').value.trim();
    const bloodGroup = document.getElementById('bloodGroup').value.trim();
    const education = document.getElementById('education').value.trim();
    const profession = document.getElementById('profession').value.trim();
    const skills = document.getElementById('skills').value.trim();

    document.getElementById('errorAge').textContent = age ? '' : 'Age is required';
    document.getElementById('errorBloodGroup').textContent = bloodGroup ? '' : 'Blood Group is required';
    document.getElementById('errorEducation').textContent = education ? '' : 'Education is required';
    document.getElementById('errorProfession').textContent = profession ? '' : 'Profession is required';
    document.getElementById('errorSkills').textContent = skills ? '' : 'Skill is required';

    isValid = age && bloodGroup && education && profession && skills;
  }
  return isValid;
}

function nextStep() {
  if (validateStep(currentStep)) {
    if (currentStep === 2) {
      document.getElementById('joinUsForm').submit();
    } else {
      currentStep++;
      showStep(currentStep);
    }
  }
}

function prevStep() {
  currentStep--;
  showStep(currentStep);
}
</script>

<?php



include 'footer.php'



?>
        <?php

        require 'script.php';
        
        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
