<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Student Donation Form</title>
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
      margin: 0;
    }
    .donation-form {
        margin-top: 100px;
      width: 100%;
      max-width: 40%;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;

      @media (max-width: 1000px) {
        max-width: 90%;
      }

    }
    .donation-form h1 {
      text-align: center;
      color: #888;
      margin-bottom: 40px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      font-weight: bold;
      color: #555;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      border: none;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 15px;
      transition: background-color 0.3s ease;
    }
    .submit-btn:hover {
      background-color: #218838;
    }
  </style>

  <div class="mainContainer">

  <form action="./admin/studentdon.php" class="donation-form" method="POST" onsubmit="return validateForm()">
    <h1>Student Donation Registration</h1>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="adhar">Aadhar</label>
      <input type="file" id="adhar" name="adhar" required>
    </div>


    <div class="form-group">
      <label for="age">Age Group</label>
      <select id="age" name="age" required>
        <option value="">Select age group</option>
        <option value="5-10">5-10</option>
        <option value="10-15">10-15</option>
        <option value="15-20">15-20</option>
      </select>
    </div>

    <div class="form-group">
      <label for="item">Item You Want to Donate</label>
      <select id="item" name="item" required>
        <option value="">Select an item</option>
        <option value="toys">Toys</option>
        <option value="books">Books</option>
        <option value="stationary">Stationary</option>
        <option value="dress">Dress</option>
        <option value="shoes">Shoes</option>
        <option value="bag">Bag</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="description">Additional Description</label>
      <textarea id="description" name="description" placeholder="Provide more details about the item if necessary"></textarea>
    </div>

    <button type="submit" class="submit-btn">Register for Donation</button>
  </form>

  </div>

<?php include 'footer.php'; ?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <script>
      function validateForm() {
        // Get form elements
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const age = document.getElementById('age').value;
        const item = document.getElementById('item').value;
        
        // Simple email pattern check
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (name === "") {
          alert("Please enter your name.");
          return false;
        }
        if (email === "" || !emailPattern.test(email)) {
          alert("Please enter a valid email address.");
          return false;
        }
        if (age === "") {
          alert("Please select your age group.");
          return false;
        }
        if (item === "") {
          alert("Please select an item to donate.");
          return false;
        }
        
        return true; // Submit the form if all checks pass
      }
    </script>
</body>

</html>
