<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Blood Donation</title>
            <?php

        require 'style.php';
        
        ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Meta Description and Keywords -->
    <meta name="description" content="Donate blood to save lives. Join HelpBook Foundation's blood donation drive to support those in need and make a life-saving difference.">
    <meta name="keywords" content="HelpBook Foundation, blood donation, donate blood, save lives, community support, blood drive">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="HelpBook Foundation - Blood Donation">
    <meta property="og:description" content="Help save lives by donating blood. Join our community efforts to make a meaningful impact.">
    <meta property="og:url" content="https://thehelpbook.org/blood.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/logo.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HelpBook Foundation - Blood Donation">
    <meta name="twitter:description" content="Help save lives by donating blood. Join our community efforts to make a meaningful impact.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/logo.png">

    <!-- Favicon and Icons -->
    <link rel="icon" href="https://thehelpbook.org/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://thehelpbook.org/favicon.png">
    <link rel="icon" sizes="192x192" href="https://thehelpbook.org/favicon.png">
    <link rel="icon" sizes="32x32" href="https://thehelpbook.org/favicon.png">
    <link rel="icon" sizes="96x96" href="https://thehelpbook.org/favicon.png">

    <!-- Theme Color for Browsers -->
    <meta name="theme-color" content="#fc5f7c">



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
            background-image: url('./assets/blooddon.webp'); /* Placeholder for education background */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 20px;
            text-align: center;
            min-height: 700px; /* Keeps this height as is */
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            padding-top: 200px;
            height: 100vh;
            align-items: flex-start;
            backdrop-filter: brightness(10%);

            

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
        
        
        section:nth-of-type(3) {
            color: gray;
        
            h2 {
                color: #fb9d9d;
            }
        
            .register {
                background-color: #fb9d9d;
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
            cursor: pointer;
        }
        
        .img:hover img {
            transform: rotate(0);
        }
        
        .awareness {
            margin-top: -10px;
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
            background-color: #ffebdb; /* Light tomato background */
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row;
            gap: 20px;
            position: relative;
        }
        
        .quote-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fb9d9d;
            opacity: 0.4;
            border-radius: 8px;
            z-index: 0;
        }
        
        .quote-text {
            color: #333; /* Dark color for contrast */
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
            line-height: 1.3; /* Spacing between lines */
            text-align: left;
            color: #754141;
        }
        
        .quote-text p {
            font-size: 1.2rem; /* Font size for the author's name */
            margin-top: 10px; /* Space between quote and author's name */
            text-align: right;
            margin-right: 50px;
        }
        
        
        
        
        
        
        .quote-section {
            margin-top: 100px;
            background-color: #e0f7e9; /* Light green background */
            padding: 40px 20px; /* Padding for the section */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
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
            background: #15945f;
            opacity: 0.4; /* Make the pattern semi-transparent */
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
            color: #2c3e50; /* Dark green/blue text color */
            max-width: 600px;
        }
        
        .quote-text h2 {
            font-size: 1.8rem; /* Font size for the quote */
            margin: 0; /* Remove default margin */
            line-height: 1.3; /* Spacing between lines */
            text-align: left;
            color: #083f28;
        }
        
        .quote-text p {
            font-size: 1.2rem; /* Font size for the author's name */
            margin-top: 10px; /* Space between quote and author's name */
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


.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.3); /* Adjust opacity to control brightness */
    mix-blend-mode: multiply; /* Optional: Use this for a darker effect */
    z-index: -1;
}
       
.register {
    background-color: #fb9d9d;
    color: #fff;
}
        
</style>

        


   <?php 
   
   include 'header.php';
   
   ?>


    <section class="hero blood">
        <div class="carousel-content1">
          <h1>Donate Blood, Save Lives</h1>
          <p>Your Generosity Can Be Someone’s Second Chance — Join Us in Making a Difference Today</p>
          <div class="pg-follow">
            <a href="./notify.php" class="follow-btn1">Notify Later</a>
          </div>
        </div>
      </section>
    
      
          <!-- Community Initiative Section -->
          <section class="community openbtn" id="community">
              <div class="img">
                  <img src="./assets/new1.webp" alt="Community Clean-up">
              </div>
              <div class="content">
                  <h2>Be a Lifeline: Donate Blood Today</h2>
                  <p>Every blood donation brings hope to those in need. By giving a little, you offer a lot — a chance at life, health, and recovery. Join us in making a difference.</p>
                  <span class="register"><a href="./blooddonation.php">Help</a></span>
              </div>
          </section>
      
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#ffeeee">
              <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
              <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
              <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
          </svg>
      
          <div class="plusContainer">
            <div class="plusContains"><i class="fa-solid fa-plus"></i></div>
          </div>


          <!-- Wildlife Conservation Section -->
          <section class="wildlife openbtn" id="wildlife">
              <div class="img">
                  <img src="./assets/new2.webp" alt="Wildlife Conservation">
              </div>
              <div class="content right">
                  <h2>Urgent Need: Request Blood Today</h2>
                  <p>In critical moments, every drop counts. Request blood to help loved ones receive the essential care they need. Together, we can support life-saving treatments when it matters most.</p>
                  <span class="register"><a href="./bloodrequests.php">Book</a></span>
              </div>
          </section>

          <div class="margin-50"></div>

          <div class="plusContainer">
            <div class="plusContains equalsRot"><i class="fa-solid fa-equals"></i></div>
          </div>

          <div class="margin-50"></div>
      

    <div class="center" style="flex-direction: column;">    <p>OR SUPPORT</p><br>

    <span class="register"><a href="./join.php">Helpbook</a></span></div>


       
<!-- 
    <div class="quote-section">
        <div class="quote-content">
            <img src="./assets/mahatmagandhi.webp" alt="Dr. A.P.J. Abdul Kalam" class="quote-image">
            <div class="quote-text">
                <h2>“The Earth provides enough to satisfy every man's needs, but not every man's greed.”</h2>
                <p>- Mahatma Gandhi</p>
            </div>
        </div>
    </div>
     -->
 




    <?php
    

    include 'footer.php';

    
    ?>

            <?php

        require 'script.php';
        
        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
