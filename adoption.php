<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Support Page | Animals</title>
            <?php

        require 'style.php';
        
        ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <meta name="description" content="Find loving homes for animals through HelpBook Foundation’s adoption programs. Support our mission in animal welfare and adoption.">
    <meta name="keywords" content="HelpBook Foundation, animal adoption, animal welfare, pet adoption, rescue animals">

    <meta property="og:title" content="Animal Adoption by HelpBook Foundation">
    <meta property="og:description" content="Help find loving homes for animals through our adoption programs. Support animal welfare initiatives.">
    <meta property="og:url" content="https://thehelpbook.org/adoption.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/pets.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Animal Adoption by HelpBook Foundation">
    <meta name="twitter:description" content="Help find loving homes for animals through our adoption programs. Support animal welfare initiatives.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/pets.webp">



    <?php
     include 'metacommon.php'
     ?> </head>
<body>



    <style>
       
        h1 {
            font-size: 3rem;
        }
        
        /* Hero Section Styles */
        .hero {
            position: relative;
            background-image: url('./assets/pets.webp'); /* Placeholder for education background */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 20px;
            text-align: center;
            min-height: 700px; /* Keeps this height as is */
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            flex-direction: column;
            padding-top: 200px;
            height: 100vh;


            @media (max-width: 900px) {
                justify-content: center;
                align-items: center;
                
            }

        }
        

        .hero p {
            font-size: 1.2rem;
        }
        
        /* Section Styles */
        section {
            padding: 40px 20px; /* Increased padding for sections */
            /* margin: 10px 0; */
            background-color: white;
            border-radius: 8px;
            min-height: 150px; /* Default height for sections */
        
        
            h2 {
                color: #228e61;
                font-size: 2rem;
                text-align: center;
            }
        }
        
        .bgChange {
            background-color: white;
        }
        
        section:nth-of-type(2) {
            margin-top: -10px;
            padding-top: 100px;
            background-color: #ffeeee;
            flex-direction: row-reverse;

            h2 {
                color: #fb9d9d;
            }
        
            .register {
                background-color: #fb9d9d;
                color: #fff;
            }
        }
        
        
        .content {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            max-width: 50%;
        
            p {
                font-size: 16px;
                /* text-align: center; */
            }
        }
        /* 
        .content.right {
            align-items: flex-end;
        
            p {
                text-align: right;
            }
        } */
        
        
        section:nth-of-type(4) {
            background-color: #f2effd;
            flex-direction: row-reverse;
            color: gray;
        
            h2 {
                color: #b4a1f7;
            }
        
            .register {
                background-color: #b4a1f7;
                color: rgb(255, 255, 168);
            }
        }
        
        
        section:nth-of-type(5) {
            
            h2 {
                color: #eed764;
            }
            
            .register {
                background-color: #eed764;
                color: white;
            }
        }
        
        
        .img img {
            transition: 0.3s all ease-in-out;
            width: 100%; /* Use full width of the container */
            max-width: 350px; /* Maximum width set to 350px */
            height: 200px; /* Fixed height to crop the image */
            border: 10px solid white; /* Thicker white border around the image */
            border-bottom: 20px solid #ffffff; /* Thicker bottom border for realism */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5); /* More realistic shadow for depth */
            overflow: hidden; /* Hide overflow to crop the image */
            background-color: white; /* White background for the image */
            padding: 5px; /* Padding to create space between the image and border */
            object-fit: cover; /* Ensure image covers the area and maintains aspect ratio */
            transform: rotate(3deg); /* Tilt the image to the right */
            cursor: pointer;
        }
        
        .img:hover img {
            transform: rotate(0);
        }
        
        .awareness {
            margin-top: 100px;
        }
        
        
        
        /* Header and Paragraph Styles */
        h2, h3 {
            padding: 20px 0; /* Increased padding for headers */
            margin: 0; /* Reset margin for better spacing */
        }
        
        p {
            padding: 15px 0; /* Increased padding for paragraphs */
        }
        
        .openbtn {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        
        
        .img img {
            max-width: 500px;
            height: auto;
        }
        
        .areu {
            h2 {
                font-size: 3rem;
                text-align: center;
            }
        
            .seprate {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px 0;
                margin-left: 100px;
                margin-bottom: 30px;
            }
        }
        
        /* Button Styles */
        .register, .support-btn {
            transition: 0.2s ease-in-out all;
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: rgb(39, 160, 110);
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.4);
            cursor: pointer;
        }
        
        .register:hover, .support-btn:hover {
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15);
        }
        
        
        .center {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .student {
            background-color: none;
        
        }
        
        
        .closebtn {
            position: fixed;
            top: 20px;
            color: grey;
            right: 30px;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        
        .closebtn:hover {
            color: #ff6767;
        }
        
        
        .seprate {
            height: 5px;
            width: 50px;
            background-color: #228e61;
            margin: 30px 0;
        }
        
        
        
        .bgFixed {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #5a5a5a88;
            width: 100%;
            height: 100vh;
            display: none;
            justify-content: center;
            align-items: center;
        }
        
        
        /* Updated Card Container Styles */
        .card-container {
            display: flex; /* Enable flexbox */
            gap: 20px; /* Space between cards */
            flex-wrap: wrap;
            width: 100%;
            background-color: none;
        }
        
        /* Card Styles */
        .student-card {
            border: 1px solid #ddd;
            padding: 15px;
            width: 250px; /* Two cards per row, accounting for gap */
            border-radius: 5px;
            background-color: #fff;
            text-align: center;
            background-color: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        
        .student-card:hover {
            transform: translateY(-5px);
        }
        
        
        .fixedSectionButton {
            background-color: rgba(0, 0, 0, 0.164);
        }
        
        
        
        
        
        
        .quote-section {
            margin: 100px;
            background-color: #fff3cd; /* Light yellow background */
            padding: 40px 20px; /* Padding for the section */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row; /* Align content horizontally */
            gap: 20px; /* Space between image and text */
            position: relative; /* Positioning context for the pseudo-element */
        }
        
        .quote-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background: repeating-linear-gradient(
                45deg,
                rgba(255, 255, 200, 0.5) 0,
                rgba(255, 255, 200, 0.5) 10px,
                rgba(255, 255, 50, 0.5) 10px,
                rgba(255, 255, 50, 0.5) 20px
            ); */
            background-color: #eed764;
            opacity: 0.3; /* Make the pattern semi-transparent */
            border-radius: 8px; /* Match the border radius of the section */
            z-index: 0; /* Place behind other content */
        }
        
        .quote-content {
            display: flex; /* Enable flex for inner content */
            align-items: center; /* Center vertically */
            margin: 0 auto; /* Center the section */
            position: relative; /* Positioning context for stacking order */
            z-index: 1; /* Place above the background pattern */
            justify-content: space-around;
            width: 80%;
        }
        
        .quote-image {
            width: 300px; /* Set a width for the image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Slightly rounded corners for the image */
            border: 5px solid white; /* White border around the image */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            background-color: white; /* White background for the image */
            padding: 5px; /* Padding to create space between the image and border */
        }
        
        .quote-text {
            color: #5a4504; /* Darker yellow/brown text color */
            max-width: 600px;
        }
        
        .quote-text h2 {
            font-size: 1.8rem; /* Font size for the quote */
            margin: 0; /* Remove default margin */
            color: #706630;
            line-height: 1.3; /* Spacing between lines */
            text-align: left;
        }
        
        .quote-text p {
            font-size: 1.2rem; /* Font size for the author's name */
            margin-top: 10px; /* Space between quote and author's name */
            text-align: right;
            margin-right: 50px;
        }
        
        
        
        
        
        
        @media (max-width: 970px) {
            
            .openbtn {
                flex-direction: column;
        
                .img {
                    margin: 20px 0;
                }
            }
        
            section:nth-of-type(2), section:nth-of-type(4) {
                flex-direction: column;
            }
        
            .content {
                max-width: 90%;
            }
        
            .quote-section {
                flex-direction: column;
                width: 100%;
                justify-content: center;
                align-items: center;
                padding: 10px;
                margin: 0;
                margin-top: 30px;
            }
        
            .quote-section::before {
                /* display: none; */
            }
        
            .quote-content {
                margin-top: 40px;
                flex-direction: column;
            }
        
        
        
        }


.adoptList {

    margin: 80px 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    
    .cardContains {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;

        @media (max-width: 800px) {
            width: 95%;
        }
    }


  .adoption-card {
    width: 450px;
    /* padding: 20px; */
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    color: #333;
    text-align: center;
  }

  /* Carousel container */
  .carousel2 {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  /* Carousel images */
  .carousel2 img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: none;
    transition: opacity 0.5s ease-in-out;
  }
  .carousel2 img.active {
    display: block;
    opacity: 1;
  }

  p {
    margin: 0 8px;
  }

  /* Adopt button */
  .adopt-button {
    background-color: #04c58b;
    color: white;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 15px;
  }
  
  .adopt-button:hover {
    background-color: #00864e;
  }
  
    .adopt-button[disabled] {
    background-color: #83cfb8;
    cursor: auto;
  }

    .adopt-button[disabled]:hover {
    background-color: #83cfb8;
    cursor: auto;
  }


}

.shareButton1 {
    margin-top: 8px;
    background: none;
    border: none;
    font-size: 1.1rem;
    color: #bbb;
    cursor: pointer;
}

.shareButton1:hover {
    color: #999;
}


.shareContainer {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    background: #00000022;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    display: none;
    z-index: 1100;
    
    a {
        display: block;
    }
}


.plusContainer .plusContains.equalsRot {
    background: #f2effd;
    color: #d8d0f5;
}
        
        
</style>


<?php


include 'header.php';

?>

    <!-- Hero Section -->
    <section class="hero animals-hero">
        <div class="carousel-content1">
          <h1>Protect and Care for Animals</h1>
          <p>Your contribution helps in the welfare and adoption of homeless animals.</p>
          <div class="pg-follow">
            <a href="./notify.php" class="follow-btn1">Notify Later</a>
          </div>
        </div>
    </section>

    <div class="margin-50"></div>

<div class="adoptList">
  <div class="cardContains">
    <div class="adoption-card">
        <div class="carousel2">
            <img src="./assets/bella1.webp" class="active" alt="Bella image 1">
        </div>
        <h2>Meet Bella!</h2>
        <p>Bella is a playful, affectionate friend looking for a home.</p>
        <p>She takes a little time to warm up to new people but enjoys the company of those who are confident around her.</p>
        <!--<button id="shareButton">Share&nbsp;<i class="fa-solid fa-share"></i></button>-->
        <button class="shareButton1" disabled>Share&nbsp;<i class="fa-solid fa-share"></i></button>
        <a class="register adopt-button" disabled>Adopted</a>
    </div>
 </div>
 
 <div class="cardContains">
    <div class="adoption-card">
        <div class="carousel2">
            <img src="./assets/puppies.webp" class="active" alt="Puppies 1">
        </div>
        <h2>Meet The Puppies!</h2>
       <p>Playful and affectionate, these adorable pups are looking for loving homes. They enjoy cuddles, fun, and are ready to be your new best friends!</p><br>
       <br>
       <button class="shareButton1" id="shareButton">Share&nbsp;<i class="fa-solid fa-share"></i></button>
       <a class="register adopt-button" href="https://thehelpbook.org/proc_adoption.php">Adopt</a>
    </div>
 </div>

<div class="cardContains">
    <div class="adoption-card">
        <div class="carousel2">
            <img src="./assets/labrador_mix.webp" class="active" alt="Labrodor 1">
        </div>
        <h2>Labrador Mix!</h2>
        <p>Playful and affectionate, adorable pup is looking for loving home. He enjoys cuddles, fun, and are ready to be your new best friend!</p><br><br>
        <!--<button id="shareButton">Share&nbsp;<i class="fa-solid fa-share"></i></button>-->
        <button class="shareButton1" disabled>Share&nbsp;<i class="fa-solid fa-share"></i></button>
        <a class="register adopt-button" disabled>Adopted</a>
    </div>
 </div>
 
 
 
 <div class="cardContains">
    <div class="adoption-card">
        <div class="carousel2">
            <img src="./assets/indie.webp" class="active" alt="Indie 1">
        </div>
        <h2>Breed - Indie</h2>
        <p>Adopt, don't shop. Give a dog a second chance to fill your heart with love and joy</p><br><br>
        <!--<button id="shareButton">Share&nbsp;<i class="fa-solid fa-share"></i></button>-->
        <button class="shareButton1" id="shareButton">Share&nbsp;<i class="fa-solid fa-share"></i></button>
        <a class="register adopt-button" href="https://thehelpbook.org/proc_adoption.php">Adopt</a>
    </div>
 </div>
 
 </div>



<div class="shareContainer">
 <!-- WhatsApp Share Button -->
        <a href="https://api.whatsapp.com/send?text=Adopt%20Bella.%20This%20is%20Bella,%20a%20female%20dog,%202.5%20years%20old.%20https%3A%2F%2Fwww.thehelpbook.org%2FadoptSpec.php"
           target="_blank" class="share-button whatsapp">WhatsApp</a>
        
        <!-- Facebook Share Button -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.thehelpbook.org/adoptSpec.php&quote=Adopt%20Bella.%20This%20is%20Bella,%20a%20female%20dog,%202.5%20years%20old."
           target="_blank" class="share-button facebook">Facebook</a>
        
        <!-- Instagram Link (Direct Sharing Not Supported) -->
        <a href="https://www.instagram.com"
           target="_blank" class="share-button instagram">Instagram</a>

        <!-- Twitter Share Button -->
        <a href="https://twitter.com/intent/tweet?url=https://www.thehelpbook.org/adoptSpec.php&text=Adopt%20Bella.%20This%20is%20Bella,%20a%20female%20dog,%202.5%20years%20old."
           target="_blank" class="share-button twitter">Twitter</a>
</div>


    <div class="margin-50"></div>


    <!-- Adopt Section -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"><path fill="#ffeeee" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <section class="adopt openbtn" id="adopt">
        <div class="img">
            <img src="./assets/new/cow.webp" alt="">
        </div>
        <div class="content">
            <h2>Foster</h2>
            <p>"Our foster program offers temporary homes to animals until they find a permanent family. By fostering, you offer these animals a safe space and a chance at a new life. Join us in caring for these animals in their time of need."</p>
            <span class="register"><a href="./fosterForm.php">Help</a></span>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#FFEEEE"><path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path></svg>

          <div class="plusContainer">
            <div class="plusContains"><i class="fa-solid fa-plus"></i></div>
          </div>


    <!-- Foster Section -->
    <section class="foster openbtn" id="foster">
        <div class="img">
            <img src="./assets/new/dog.webp" alt="">
        </div>
        <div class="content">
            <h2>Donate</h2>
            <p>""Moving to a new place or country? Through our Pet Donation Program, The Helpbook Foundation provides a safe and caring environment for pets that need rehoming. By donating your pet, you can ensure they’ll receive the love and care they deserve, connecting them with a future family ready to welcome them.""</p>
            <span class="register"><a href="adoptForm.php">Book</a></span>
        </div>
    </section>
    
            <div class="margin-50"></div>
            
            <div class="plusContainer">
            <div class="plusContains equalsRot"><i class="fa-solid fa-equals"></i></div>
            </div>

    <!-- Support Section -->


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"><path fill="#f2effd" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    
    <section class="support openbtn" id="support" style="margin-top: -10px;">
        <div class="img">
            <img src="./assets/birds.webp" alt="">
        </div>
        <div class="content">
            <h2>Support</h2>
            <p>"Open your heart and make a difference in an animal's life today. By adopting, you’re giving a loving home to a pet in need and supporting our mission to create a compassionate world."</p>
            <span class="register"><a href="https://thehelpbook.org/proc_adoption.php">Helpbook</a></span>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#F2EFFD"><path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path></svg>


    <!-- Quote Section -->


      <div class="quote-section">
                <div class="quote-content">
                    <img src="./assets/ratantata400.webp" alt="Food Initiative Quote" class="quote-image">
                    <div class="quote-text">
                        <h2>"A pet is no different from a member of one's family today..."</h2>
                        <p>- Ratan N. Tata</p>
                    </div>
                </div>
            </div>


<?php

include 'footer.php';

?>

<script>
        const sButton = document.querySelectorAll('.shareButton1');
        sButton.forEach(shareButton => {
        shareButton.addEventListener('click', () => {
            if (navigator.share) {
                navigator.share({
                    title: 'Adopt Pet | The HelpBook Foundation',
                    text: 'Meet your playful, affectionate friend looking for a home.',
                    url: 'https://www.thehelpbook.org/adoption.php'
                })
                .then(() => console.log('Successfully shared'))
                .catch((error) => console.error('Error sharing:', error));
            } else {
                alert('Web Share API not supported on this browser.');
            }
        });
        });

</script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <        <?php

        require 'script.php';
        
        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
