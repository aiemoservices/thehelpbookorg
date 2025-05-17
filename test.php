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
        <img src="/assets/health.webp" class="max-w-full h-auto" />
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


  <?php

  include 'footer.php'

    ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php require 'script.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>