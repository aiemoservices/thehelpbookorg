<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>

.form-container {
  width: 100%;
  max-width: 50%;
  margin: 0 auto;
  padding: 20px;
  border-radius: 8px;
  margin-top: 100px;
  
    @media (max-width: 800px) {
    max-width: 95%;
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

input, select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 16px;
}

input:focus, select:focus {
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

button {
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
    <form action="submitHelp.php" method="POST" enctype="multipart/form-data">
  <h2>Help Form</h2>
 <center style="color:green">Manual Testing Version</center>
 <br />
  <!-- Personal Details -->
  <label for="fullName">Full Name:</label>
  <input type="text" name="fullName" class="form-control" required>

  <label for="email">Email:</label>
  <input type="email" name="email" class="form-control" required>

  <label for="phone">Phone Number:</label>
  <input type="tel" name="phone" class="form-control" required>

  <label for="city">City:</label>
  <input type="text" name="city" class="form-control" required>

  <!-- Help Category -->
  <label for="helpCategory">Select Help Type:</label>
  <select name="helpCategory" class="form-control" required>
    <option value="">-- Select One --</option>
    <option value="donate_food">I want to Donate Food</option>
    <option value="need_food">I need Food</option>
    <option value="sponsor_student">I want to Sponsor a Student</option>
    <option value="student_seeking_help">I am a Student in Need</option>
    <option value="blood_donor">I want to Donate Blood</option>
    <option value="need_blood">I need Blood</option>
    <option value="donate_pet">I want to Donate a Pet</option>
    <option value="help_pet">I want to Help a Street Animal</option>
    <option value="need_pet_help">I found a Sick/Injured Animal</option>
    <option value="general_help">Other Help</option>
  </select>

  <!-- Conditional Fields -->
  <label for="address">Full Address (if applicable):</label>
  <textarea name="address" class="form-control" placeholder="Enter detailed address if required"></textarea>

  <label for="bloodGroup">Blood Group (if donating or needing blood):</label>
  <select name="bloodGroup" class="form-control">
    <option value="">-- Select Blood Group --</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
  </select>

  <label for="aadhar">Aadhar Number (if applicable):</label>
  <input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhar Number">

  <label for="studentDetails">Student Name / Age / Class (if applicable):</label>
  <input type="text" name="studentDetails" class="form-control" placeholder="e.g. Raju / 10 / Class 5">

  <label for="petDetails">Pet/Animal Details (Type, Age, Condition):</label>
  <input type="text" name="petDetails" class="form-control" placeholder="e.g. Dog / 3 yrs / Injured leg">

  <label for="medicalDetails">Medical Details (Document - Max 200KB):</label>
  <input type="file" name="medicalDetails" class="form-control">

  <label for="message">Additional Message:</label>
  <textarea name="message" class="form-control" placeholder="Any extra information..."></textarea>

<div class="contains-btn123">
  <button type="reset" class="btn">Reset</button>
  <button type="submit" class="btn btn-sb">Submit</button>
</div>
</form>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const donationForm = document.getElementById("donationForm");

  function validateForm(event) {
    const aadhar = document.getElementById("aadhar").value;
    const medicalDetails = document.getElementById("medical_details").files[0];

    // Validate Aadhar number (should be 12 digits)
    if (!/^\d{12}$/.test(aadhar)) {
      alert("Aadhar number must be a 12-digit number.");
      event.preventDefault();
      return false;
    }

    // Validate Medical Document size (should not exceed 200KB)
    if (medicalDetails && medicalDetails.size > 200 * 1024) {
      alert("Medical document must be less than 200KB.");
      event.preventDefault();
      return false;
    }

    return true;
  }

  // Attach validation function to forms if they exist on the page
  if (donationForm) donationForm.addEventListener("submit", validateForm);
});

  </script>
  <?php
  
  include 'footer.php';

  ?>
      <script src="./script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>
</html>
