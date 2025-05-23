<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Environment (The Helpbook Vraksharopan) | The Helpbook Foundation</title>
  <?php

  require 'style.php';

  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

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
  include 'metacommon.php'
    ?>
</head>

<body>

  <?php

  require 'header.php';

  ?>

  <div class="carousel-container relative w-full overflow-hidden" id="carouselContainer">
    <div class="carousel-track flex transition-transform duration-1000 ease-in-out" id="carouselTrack">
      <div class="slide flex-shrink-0 w-full flex justify-center items-center bg-green-500">
        <img src="/assets/slides/two.jpg" class="max-w-full h-auto" />
      </div>
    </div>
  </div>




  <div class="w-full p-6 bg-gradient-to-r from-green-400 to-green-600 shadow-lg overflow-hidden relative">
    <div class="flex flex-col md:flex-row items-center justify-center text-center gap-8 relative z-10">
      <div class="w-full md:w-2/3">
        <h2 class="text-white text-3xl md:text-4xl font-bold mb-4 tracking-tight">FROM <span
                        class="text-yellow-300">THE
                        HELPBOOK FOUNDATION</span></h2>
        <p class="text-green-100 text-lg mb-6">The Helpbook Foundation is dedicated to empowering communities through
          education-first initiatives. It works to improve access to learning for underprivileged children by supporting
          book drives, scholarships, and digital education. Alongside education, the foundation also addresses
          environmental sustainability, healthcare, and animal welfare. Believing that small efforts create big change,
          it promotes community collaboration for a better future.</p>
        <div class="mt-2">

          <a class="bg-white text-green-800 font-semibold py-3 px-8 rounded-full inline-flex items-center hover:bg-white hover:bg-gray-200 transition-colors duration-300"
            href="/help.php">
            <span class="material-symbols-outlined">favorite</span>&nbsp;Help Now
          </a>
        </div>
      </div>
    </div>
  </div>


  <style>
    h1 {
      font-size: 3rem;
    }

    /* Hero Section Styles */
    .hero {
      position: relative;
      background-image: url('./assets/env.webp');
      /* Placeholder for education background */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 60px 20px;
      text-align: center;
      min-height: 700px;
      /* Keeps this height as is */
      display: flex;
      justify-content: flex-start;
      flex-direction: column;
      padding-top: 200px;
      height: 100vh;
      align-items: flex-start;


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
      padding: 40px 20px;
      /* Increased padding for sections */
      /* margin: 10px 0; */
      background-color: white;
      border-radius: 8px;
      min-height: 150px;
      /* Default height for sections */


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
      width: 100%;
      /* Use full width of the container */
      max-width: 350px;
      /* Maximum width set to 350px */
      height: 200px;
      /* Fixed height to crop the image */
      border: 10px solid white;
      /* Thicker white border around the image */
      border-bottom: 20px solid #ffffff;
      /* Thicker bottom border for realism */
      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
      /* More realistic shadow for depth */
      overflow: hidden;
      /* Hide overflow to crop the image */
      background-color: white;
      /* White background for the image */
      padding: 5px;
      /* Padding to create space between the image and border */
      object-fit: cover;
      /* Ensure image covers the area and maintains aspect ratio */
      transform: rotate(3deg);
      /* Tilt the image to the right */
      cursor: pointer;
    }

    .img:hover img {
      transform: rotate(0);
    }

    .awareness {
      margin-top: -10px;
    }



    /* Header and Paragraph Styles */
    h2,
    h3 {
      padding: 20px 0;
      /* Increased padding for headers */
      margin: 0;
      /* Reset margin for better spacing */
    }

    p {
      padding: 15px 0;
      /* Increased padding for paragraphs */
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
    .register,
    .support-btn {
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

    .register:hover,
    .support-btn:hover {
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
      display: flex;
      /* Enable flexbox */
      gap: 20px;
      /* Space between cards */
      flex-wrap: wrap;
      width: 100%;
      background-color: none;
    }

    /* Card Styles */
    .student-card {
      border: 1px solid #ddd;
      padding: 15px;
      width: 250px;
      /* Two cards per row, accounting for gap */
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
      background-color: #ffebdb;
      /* Light tomato background */
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
      /* background: repeating-linear-gradient(
        45deg,
        rgba(255, 99, 71, 0.5) 0,
        rgba(255, 99, 71, 0.5) 15px,
        rgba(255, 69, 0, 0.5) 15px,
        rgba(255, 69, 0, 0.5) 30px,
        rgba(255, 160, 122, 0.5) 30px,
        rgba(255, 160, 122, 0.5) 45px
    ); */
      background-color: #fb9d9d;
      opacity: 0.4;
      border-radius: 8px;
      z-index: 0;
    }

    .quote-text {
      color: #333;
      /* Dark color for contrast */
    }

    .quote-content {
      display: flex;
      /* Enable flex for inner content */
      align-items: center;
      /* Center vertically */
      margin: 0 auto;
      /* Center the section */
      position: relative;
      /* Positioning context for stacking order */
      z-index: 1;
      /* Place above the background pattern */
      justify-content: space-around;
      width: 80%;
    }

    .quote-image {
      width: 300px;
      /* Set a width for the image */
      height: auto;
      /* Maintain aspect ratio */
      border-radius: 10px;
      /* Slightly rounded corners for the image */
      border: 5px solid white;
      /* White border around the image */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Soft shadow for depth */
      background-color: white;
      /* White background for the image */
      padding: 5px;
      /* Padding to create space between the image and border */
    }

    .quote-text {
      color: #5a4504;
      /* Darker yellow/brown text color */
      max-width: 600px;
    }

    .quote-text h2 {
      font-size: 1.8rem;
      /* Font size for the quote */
      margin: 0;
      /* Remove default margin */
      line-height: 1.3;
      /* Spacing between lines */
      text-align: left;
      color: #754141;
    }

    .quote-text p {
      font-size: 1.2rem;
      /* Font size for the author's name */
      margin-top: 10px;
      /* Space between quote and author's name */
      text-align: right;
      margin-right: 50px;
    }






    .quote-section {
      margin-top: 100px;
      background-color: #e0f7e9;
      /* Light green background */
      padding: 40px 20px;
      /* Padding for the section */
      border-radius: 8px;
      /* Rounded corners */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      /* Soft shadow for depth */
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-direction: row;
      /* Align content horizontally */
      gap: 20px;
      /* Space between image and text */
      position: relative;
      /* Positioning context for the pseudo-element */
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
        rgba(150, 255, 150, 0.5) 0,
        rgba(150, 255, 150, 0.5) 15px,
        rgba(75, 255, 75, 0.5) 15px,
        rgba(75, 255, 75, 0.5) 30px,
        rgba(100, 255, 100, 0.5) 30px,
        rgba(100, 255, 100, 0.5) 45px
    ); */
      background: #15945f;
      opacity: 0.4;
      /* Make the pattern semi-transparent */
      border-radius: 8px;
      /* Match the border radius of the section */
      z-index: 0;
      /* Place behind other content */
    }

    .quote-content {
      display: flex;
      /* Enable flex for inner content */
      align-items: center;
      /* Center vertically */
      margin: 0 auto;
      /* Center the section */
      position: relative;
      /* Positioning context for stacking order */
      z-index: 1;
      /* Place above the background pattern */
      justify-content: space-around;
      width: 80%;
    }

    .quote-image {
      width: 300px;
      /* Set a width for the image */
      height: auto;
      /* Maintain aspect ratio */
      border-radius: 10px;
      /* Slightly rounded corners for the image */
      border: 5px solid white;
      /* White border around the image */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Soft shadow for depth */
      background-color: white;
      /* White background for the image */
      padding: 5px;
      /* Padding to create space between the image and border */
    }

    .quote-text {
      color: #2c3e50;
      /* Dark green/blue text color */
      max-width: 600px;
    }

    .quote-text h2 {
      font-size: 1.8rem;
      /* Font size for the quote */
      margin: 0;
      /* Remove default margin */
      line-height: 1.3;
      /* Spacing between lines */
      text-align: left;
      color: #083f28;
    }

    .quote-text p {
      font-size: 1.2rem;
      /* Font size for the author's name */
      margin-top: 10px;
      /* Space between quote and author's name */
    }


    @media (max-width: 970px) {

      .openbtn {
        flex-direction: column;

        .img {
          margin: 20px 0;
        }
      }

      section:nth-of-type(2),
      section:nth-of-type(4) {
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
  </style>

  <div class="margin-50"></div>

  <section class="awareness openbtn" id="awareness">
    <div class="img">
      <img src="./assets/new/cleaning3.webp" alt="Environmental Awareness">
    </div>
    <div class="content">
      <h2>Environmental Awareness</h2>
      <p>"The Helpbook Foundation’s Environment Awareness initiatives focus on educating communities about sustainable
        practices and environmental stewardship. Through workshops, campaigns, and local events, we inspire positive
        changes like waste reduction, energy conservation, and ecosystem protection, promoting a cleaner, greener future
        for all."</p>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
    <path fill="#ffeeee" fill-opacity="1"
      d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <section class="community openbtn" id="community">
    <div class="img">
      <img src="./assets/new/cleaning1.webp" alt="Community Clean-up">
    </div>
    <div class="content">
      <h2>Community Initiatives</h2>
      <p>"The Helpbook Foundation’s Environmental Care initiatives inspire communities to act sustainably. Through
        clean-ups, waste management, and tree-planting, we promote a culture of stewardship, empowering everyone to
        protect ecosystems and create healthier environments for future generations."</p>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#ffeeee">
    <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
    <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
    <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
  </svg>

  <div class="quote-section">
    <div class="quote-content">
      <img src="./assets/mahatmagandhi.webp" alt="Dr. A.P.J. Abdul Kalam" class="quote-image">
      <div class="quote-text">
        <h2>“The Earth provides enough to satisfy every man's needs, but not every man's greed.”</h2>
        <p>- Mahatma Gandhi</p>
      </div>
    </div>
  </div>

  <?php

  include 'footer.php'

    ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php require 'script.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>