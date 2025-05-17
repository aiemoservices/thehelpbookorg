<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Education (The Helpbook Pathsala) | The Helpbook Foundation</title>
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
        <img src="/assets/slides/one.jpg" class="max-w-full h-auto" />
      </div>
    </div>
  </div>




  <div class="w-full p-6 bg-gradient-to-r from-green-400 to-green-600 shadow-lg overflow-hidden relative">
    <div class="flex flex-col md:flex-row items-center justify-center text-center gap-8 relative z-10">
      <div class="w-full md:w-2/3">
        <h2 class="text-white text-3xl md:text-4xl font-bold mb-4 tracking-tight">From <span class="text-yellow-300">The
            HelpBook Foundation</span></h2>
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

  <div class="margin-50"></div>
  <section class="bg-white flex flex-row py-16 px-4 sm:px-6 lg:px-16">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <!-- Right Image -->
      <div class="right flex justify-center">
        <img src="/assets/education.webp" alt="Children Learning">
      </div>
      <!-- Left Content -->
      <div class="w-[90%] md:w-full mx-auto">
        <h2 class="text-4xl font-bold text-yellow-800 mb-4 !text-left">📚 Empowering Education</h2>
        <p class="text-gray-700 text-lg leading-relaxed text-justify">Education is the foundation for
          a brighter future.
          At <strong>HelpBook Foundation</strong>, we believe that every child, regardless of their background or
          circumstances, deserves access to quality education. Education not only equips children with knowledge and
          skills but also empowers them to dream big, break the cycle of poverty, and become changemakers in their
          communities. Our focus is to bridge the educational divide by reaching out to underprivileged children and
          ensuring they receive the tools and opportunities they need to succeed.
        </p>
      </div>
    </div>
  </section>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
    <path fill="#ffeeee" fill-opacity="1"
      d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <section class="bg-[#FFEEEE] py-16 px-4 sm:px-6 lg:px-16">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center flex-row-reverse">

      <!-- Right Content -->
      <div class="w-[90%] md:w-full mx-auto">
        <h2 class="text-4xl font-bold text-blue-800 mb-4 !text-left">🎯 Our Educational Programs</h2>
        <p class="text-lg text-justify">
          We run and support a variety of educational programs designed to meet the diverse needs of children in
          underserved communities. From distributing school supplies and providing scholarships to organizing community
          classes and mentoring sessions, our efforts are rooted in compassion and sustainability. Through partnerships
          with local schools and volunteers, we aim to create a nurturing learning environment where children can thrive
          academically and personally. Join us in building a future where education is not a privilege, but a right for
          every child.
        </p>
      </div>

      <!-- Left Image -->
      <div class="right flex justify-center">
        <img src="/assets/educational_drive.jpeg" alt="Educational Support">
      </div>
    </div>
  </section>



  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#FFEEEE">
    <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
    <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
    <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
  </svg>

  <div class="margin-50"></div>


  <section class="education-123 openbtn flex justify-center items-center flex-row w-[90%] mx-auto flex-wrap"
    id="education-section">
    <div class="right flex justify-center lg:w-1/2">
      <img src="./assets/children_with_disabilities.webp" alt="" srcset="">
    </div>
    <style>
      .right img {
        transition: 0.3s all ease-in-out;
        width: 100%;
        /* Use full width of the container */
        max-width: 450px;
        /* Maximum width set to 350px */
        height: auto;
        /* Fixed height to crop the image */
        border: 8px solid white;
        /* Thicker white border around the image */
        border-bottom: 12px solid #ffffff;
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

      .right img:hover {
        transform: rotate(0deg);
      }
    </style>

    <div class="content right lg:w-1/2">
      <h2 class="text-4xl font-bold mb-4 relative inline-block">
        Support
        <span
          class="absolute bottom-0 left-0 w-full h-2 bg-green-500 transform origin-left transition-transform duration-300 hover:scale-x-110"></span>
      </h2>
      <p class="text-lg text-justify">Education is the most powerful tool for personal and societal transformation. It
        opens doors to opportunities,
        builds confidence,
        and empowers individuals to shape their own future. For children,
        education lays the foundation for critical thinking,
        creativity,
        and growth. It not only helps break the cycle of poverty but also fosters equality,
        awareness,
        and progress in communities. A well-educated generation leads to a more just,
        inclusive,
        and developed society.</p>

      <a class="relative overflow-hidden group inline-block border-2 border-[#fc5f7c] text-red-600 bg-transparent font-semibold py-2 px-4 rounded-full shadow-sm transition-all duration-300 mt-4"
        href="/help.php">
        <span
          class="absolute inset-0 bg-[#fc5f7c] w-0 group-hover:w-full transition-all duration-300 ease-out z-0"></span>
        <span
          class="relative z-10 transform transition-transform duration-300 group-hover:scale-125 group-hover:text-white">❤️</span>
        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Support Now&nbsp;&rarr;</span>
      </a>


    </div>
  </section>

  <div class="margin-50">
  </div>

  <div class="margin-50">
  </div>
  <div
    class="bg-gradient-to-r from-yellow-100 via-pink-100 to-blue-100 py-12 px-6 md:px-16 rounded-2xl shadow-lg max-w-5xl mx-auto">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="./assets/apj2008.webp" alt="Dr. A.P.J. Abdul Kalam"
        class="w-36 h-36 md:w-44 md:h-44 object-cover rounded-full border-4 border-pink-300 shadow-md" />
      <div class="text-center md:text-left">
        <h2 class="text-2xl md:text-3xl font-semibold text-pink-700 leading-snug font-sans">
          “Education is the most powerful weapon which you can use to change the world.”
        </h2>
        <p class="mt-4 text-lg text-blue-700 font-bold">– Dr. A.P.J. Abdul Kalam</p>
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