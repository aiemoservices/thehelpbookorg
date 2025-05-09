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
  /* Container styling */
  .carousel-container {
    width: 500px;
    max-width: 100%;
    position: relative;
    overflow: hidden;
    margin: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  /* Carousel items (images and video) */
  .carousel-item {
    display: none;
    width: 100%;
    height: 350px;
    transition: opacity 0.5s ease;
    object-fit: cover;
  }

  video.carousel-item {
    object-fit: contain;
  }

  .carousel-item.active {
    display: block;
    opacity: 1;
  }

  /* Navigation buttons */
  .carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;


  }

  .carousel-button.left2 {
    left: 5px;
  }
  .carousel-button.right2 {
    right: 5px;
  }
</style>

<div class="margin-50"></div><br>
<div class="margin-50"></div>


<div class="carousel-container">
  <!-- Image 1 -->
  <img src="./assets/bella1.webp" alt="Image 1" class="carousel-item active">
  
  <!-- Image 2 -->
  <img src="./assets/bella2.webp" alt="Image 2" class="carousel-item">
  
  <!-- Video -->
  <video class="carousel-item" controls>
    <source src="./assets/bella.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

    <!-- Video -->
    <video class="carousel-item" controls>
    <source src="./assets/bella2.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Navigation buttons -->
  <button class="carousel-button left2" onclick="showPrevious()">&#10094;</button>
  <button class="carousel-button right2" onclick="showNext()">&#10095;</button>
</div>


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


    .mainContainer .description {
        margin: 40px 0;
        display: block;

        li {
            margin: 20px;
        }
    }


</style>

<div class="mainContainer">
    <div class="form-container">
        <h1>Adopt Bella</h1>
        <span class="description">
        <ul>
            <li>This is Bella, a female dog, 2.5 years old.</li>
            <li>She is comfortable around other dogs.</li>
            <li>She takes a little time to warm up to new people but enjoys the company of those who are confident around her.</li>
            <li>She would be perfect for a farm or a large home with a garden.</li>
            <li>I’m relocating her to a good home because I’ve moved to the US and sold my farm to someone who isn’t a dog person.</li>
        </ul>

        </span>
        <form action="./admin/adoptFormSpec.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
                <span class="error-message" id="errorName">Please enter your full name.</span>
            </div>

            <div class="form-group">
                <input type="hidden" name="nameOfPet" value="bella" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <span class="error-message" id="errorEmail">Please enter a valid email address.</span>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
                <span class="error-message" id="errorPhone">Please enter a valid phone number.</span>
            </div>
            
            
            <div class="form-group">
                <label for="message">Details/Other Description</label>
                <textarea id="message" name="message" required></textarea>
                <span class="error-message" id="errorMessage">Messaege</span>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>

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

  const items = document.querySelectorAll('.carousel-item');
  let currentIndex3 = 0;

  function showItem(index) {
    items[currentIndex3].classList.remove('active');
    currentIndex3 = (index + items.length) % items.length;
    items[currentIndex3].classList.add('active');
  }

  function showNext() {
    showItem(currentIndex3 + 1);
  }

  function showPrevious() {
    showItem(currentIndex3 - 1);
  }

  setInterval(showNext, 40000)
</script>

<?php
include 'footer.php'
?>

<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
