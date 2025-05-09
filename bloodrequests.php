<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation Form</title>
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

.submit-button {
  width: 100%;
  padding: 12px;
  margin-top: 20px;
  background-color: #fc5f7c;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 18px;
  transition: background-color 0.3s ease;
}

.submit-button:hover {
  background-color: #e04c6a;
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
    <h2>Request Blood</h2>
    <form id="requestForm" action="./admin/submit_requests.php" method="POST" enctype="multipart/form-data">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="patient_name">Patient's Name:</label>
      <input type="text" id="patient_name" name="patient_name" required>
      
      <label for="blood_group">Blood Group Needed:</label>
      <select id="blood_group" name="blood_group" required>
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
      
      <label for="adhar">Aadhar Number:</label>
      <input type="text" id="adhar" name="adhar" maxlength="12" required>
      

      <div class="form-group">
        <label for="aadhar">Aadhar</label>
        <input type="file" id="aadhar" name="aadhar" required>
      </div>



      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
      
      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required>
      
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      
      
      <label for="request_type">Request Type:</label>
      <select id="request_type" name="request_type" required>
        <option value="">Select Type</option>
        <option value="emergency">Emergency</option>
        <option value="normal">Normal</option>
      </select>
      
      <label for="medical_details">Medical Details (Document - Max 200KB):</label>
      <input type="file" id="medical_details" name="medical_details" accept="image/*" required>
      
      <button type="submit" class="submit-button">Submit Request</button>
    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const donationForm = document.getElementById("donationForm");
  const requestForm = document.getElementById("requestForm");

  function validateForm(event) {
    const aadhar = document.getElementById("adhar").value;
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
  if (requestForm) requestForm.addEventListener("submit", validateForm);
});

  </script>
  <?php
  
  include 'footer.php';

  ?>
      <script src="./script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>
</html>
