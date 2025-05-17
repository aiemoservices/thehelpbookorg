<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Helpbook Foundation | Join Us Form</title>
  <?php require 'style.php'; ?>
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
    .form-container {
      margin: 0 auto;
      width: 100%;
      max-width: 50%;
      padding: 20px;
      margin-top: 150px;
    }

    @media (max-width: 800px) {
      .form-container {
        max-width: 90%;
      }
    }

    .form-header {
      color: #fc5f7c;
      text-align: center;
      font-weight: bold;
      margin-bottom: 10px;
    }

    h2 {
      color: #fc5f7c;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #333;
      font-weight: bold;
    }

    input,
    textarea,
    select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-buttons {
      display: flex;
      justify-content: flex-end;
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
    <form action="./admin/join.php" method="POST" id="joinUsForm">
      <script src="https://cdn.tailwindcss.com"></script>
      <h2 class="text-4xl font-bold center mb-2 relative inline-block">
        Join Us - The HelpBook Foundation
      </h2>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <span id="errorName" class="error"></span>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <span id="errorEmail" class="error"></span>

      <label for="phone">Phone No:</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      <span id="errorPhone" class="error"></span>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="3" placeholder="Tell us why you want to join" required></textarea>
      <span id="errorMessage" class="error"></span>

      <label for="role">Select Role:</label>
      <select id="role" name="role" required>
        <option value="">Select Role</option>
        <option value="Volunteer">Volunteer</option>
        <option value="Intern">Intern</option>
        <option value="Member">Member</option>
      </select>
      <span id="errorRole" class="error"></span>

      <div class="form-buttons">
        <button type="submit" class="btn">Submit</button>
      </div>
    </form>

    <p class="text-xs text-gray-500 mt-2">
      By submitting this form, you agree to comply with the HelpBook Foundation's policies and <a
        href="/terms.php">terms</a>. The foundation reserves the right to review and accept your application based on
      eligibility and available opportunities. Your information will be kept confidential and will be used solely for
      the purpose of processing your application.
    </p>
  </div>

  <?php include 'footer.php'; ?>

  <script>
    // Auto select role based on query param
    window.onload = function () {
      const urlParams = new URLSearchParams(window.location.search);
      const role = urlParams.get('q');
      if (role) {
        document.getElementById('role').value = role.charAt(0).toUpperCase() + role.slice(1).toLowerCase();
      }
    };
  </script>

</body>

</html>