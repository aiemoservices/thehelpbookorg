<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Helpbook Foundation | Home</title>
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
      <div class="slide flex-shrink-0 w-full flex justify-center items-center bg-red-500">
        <img src="/assets/slides/two.jpg" class="max-w-full h-auto" />
      </div>
      <div class="slide flex-shrink-0 w-full flex justify-center items-center bg-blue-500">
        <img src="/assets/slides/three.jpg" class="max-w-full h-auto" />
      </div>
      <div class="slide flex-shrink-0 w-full flex justify-center items-center bg-orange-500">
        <img src="/assets/slides/four.jpg" class="max-w-full h-auto" />
      </div>
    </div>

    <button
      class="nav-button absolute top-1/2 left-4 transform -translate-y-1/2 bg-transparent text-white text-3xl border-none p-3 cursor-pointer rounded-full z-10"
      onclick="prevSlide()">❮</button>
    <button
      class="nav-button absolute top-1/2 right-4 transform -translate-y-1/2 bg-transparent text-white text-3xl border-none p-3 cursor-pointer rounded-full z-10"
      onclick="nextSlide()">❯</button>
  </div>

  <script>
    const track = document.getElementById('carouselTrack');
    const container = document.getElementById('carouselContainer');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function updateSlide() {
      track.style.transform = `translateX(-${currentSlide * 100}%)`;
      updateHeight();
    }

    function updateHeight() {
      const current = slides[currentSlide];
      container.style.height = current.offsetHeight + 'px';
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      updateSlide();
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      updateSlide();
    }

    // Auto-slide every 4 seconds
    setInterval(() => {
      nextSlide();
    }, 4000);

    // Set initial height after images load
    window.addEventListener('load', () => {
      updateHeight();
    });

    window.addEventListener('resize', () => {
      updateHeight();
    });
  </script>


  <div class="markContains w-full bg-gradient-to-r from-green-400 to-green-600">
    <div class="marquee-container">
      <div id="marqueeText" class="marquee-text">
        <ul>
          <li>Government Approved</li>
          <li>Affiliated with niti aayog through NGO Darpan</li>
          <li>registered number: 01/01/01/40967/24</li>
          <li>Darpan Id Number: MP/2024/0441339</li>
        </ul>
        <ul>
          <li>Government Approved</li>
          <li>Affiliated with niti aayog through NGO Darpan</li>
          <li>registered number: 01/01/01/40967/24</li>
          <li>Darpan Id Number: MP/2024/0441339</li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    // Get the marquee text and container elements
    const marqueeText = document.getElementById('marqueeText');
    const marqueeContainer = document.querySelector('.marquee-container');

    // Duplicate the text for seamless scrolling
    marqueeText.innerHTML += marqueeText.innerHTML;

    // Set up variables for scrolling
    let scrollPosition = 0;

    function scrollText() {
      // Move the text by adjusting its transform property
      scrollPosition -= 1;
      marqueeText.style.transform = `translateX(${scrollPosition}px)`;

      // Reset position to create seamless effect
      if (Math.abs(scrollPosition) >= marqueeText.scrollWidth / 2) {
        scrollPosition = 0;
      }

      // Request the next frame
      requestAnimationFrame(scrollText);
    }

    // Start scrolling
    scrollText();
  </script>


  <div class="w-full p-6 bg-gradient-to-r from-green-400 to-green-600 shadow-lg overflow-hidden relative">
    <div class="flex flex-col md:flex-row items-center justify-center text-center gap-8 relative z-10">
      <div class="w-full md:w-2/3">
        <h2 class="text-white text-3xl md:text-4xl font-bold mb-4 tracking-tight">FROM <span class="text-yellow-300">THE
            HELPBOOK FOUNDATION</span></h2>
        <p class="text-green-100 text-lg mb-6">The Helpbook Foundation is dedicated to empowering communities through
          education-first initiatives. It works to improve access to learning for underprivileged children by supporting
          book drives, scholarships, and digital education. Alongside education, the foundation also addresses
          environmental sustainability, healthcare, and animal welfare. Believing that small efforts create big change,
          it promotes community collaboration for a better future.</p>
        <div class="mt-2">

          <a class="bg-transparent border-2 border-white text-white font-semibold py-3 px-8 rounded-full inline-flex items-center hover:bg-white hover:text-green-800 transition-colors duration-300"
            href="/help.php">
            <span class="material-symbols-outlined">favorite</span>&nbsp;Help Now
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="imgTreeHead text-3xl md:text-4xl font-bold margin-20">
    <h2>What We Do?</h2>
    <div class="sepratorHr"></div>
  </div>

  <div class="works my-10">
    <div class="card">
      <div class="icon edu-icon"><i class="fa-solid fa-school"></i></div>
      <h3>Education</h3>
      <span class="sep"></span>
      <p>This section covers all Education initiatives and drives.</p>
      <a href="./education.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
    </div>
    <div class="card">
      <div class="icon ani-icon"><i class="fa-solid fa-paw"></i></div>
      <h3>Animals</h3>
      <span class="sep"></span>
      <p>This section covers all Animals & Pets initiatives and drives.</p>
      <a href="./adoption.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
    </div>
    <div class="card">
      <div class="icon env-icon"><i class="fa-solid fa-tree"></i></div>
      <h3>Environment</h3>
      <span class="sep"></span>
      <p>This section covers all Environment initiatives.</p>
      <a href="./environment.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
    </div>
    <div class="card">
      <div class="icon food-icon"><i class="fa-solid fa-notes-medical"></i></div>
      <h3>Food & Health</h3>
      <span class="sep"></span>
      <p>This section covers all Food & Health initiatives and drives.</p>
      <a href="./food.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
    </div>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
    <path fill="#eee" fill-opacity="1"
      d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
  </svg>
  <div class="w-full p-6 md:p-8 font-sans mx-auto relative overflow-hidden bg-[#eee]">

    <div class="flex flex-col lg:flex-row gap-12 items-center">
      <div class="w-full lg:w-1/2">
        <div class="relative">
          <div class="absolute -left-4 -top-4 w-24 h-24 bg-green-100 rounded-full -z-10"></div>
          <div class="right flex justify-center">
            <img src="./assets/tree (9).webp" alt="" srcset="">
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
          <div class="absolute -right-4 -bottom-4 w-32 h-32 bg-red-100 rounded-full -z-10"></div>
        </div>
      </div>

      <div class="w-full lg:w-1/2">
        <h2 class="text-4xl font-bold mb-2 relative inline-block">
          Who We Are
          <span
            class="absolute bottom-0 left-0 w-full h-2 bg-green-500 transform origin-left transition-transform duration-300 hover:scale-x-110"></span>
        </h2>
        <p class="text-xl text-gray-600 mt-6 text-justify">The Helpbook Foundation is a community-driven non-profit
          organization
          committed to empowering underprivileged individuals through education, health support, and skill development.
          We work at the grassroots level to bring real change, focusing on creating opportunities for children, youth,
          and families in need. With a network of dedicated volunteers and supporters, we aim to build a more inclusive,
          compassionate, and self-reliant society.</p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-red-500 transition-all">
            <span class="material-symbols-outlined text-4xl text-red-400">volunteer_activism</span>
            <h3 class="text-xl font-semibold mt-3 mb-2">Our Mission</h3>
            <p class="text-gray-600">Our mission is to foster a world where every...</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500 transition-all">
            <span class="material-symbols-outlined text-4xl text-green-600">lightbulb</span>
            <h3 class="text-xl font-semibold mt-3 mb-2">Our Vision</h3>
            <p class="text-gray-600">Our vision is to provide social services...</p>
          </div>
        </div>

        <div class="mt-10">
          <a class="bg-green-600 !inline-block hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2"
            href="/about.php">
            Learn More About Us&nbsp;<i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="mt-16 md:mx-10 bg-gray-50 p-8 rounded-xl shadow-inner">
      <h3 class="text-2xl font-bold text-center mb-8">Our Impact So Far</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center">
        <div>
          <div class="text-4xl font-bold text-red-600 mb-2">01</div>
          <p class="text-gray-600">State</p>
        </div>
        <div>
          <div class="text-4xl font-bold text-blue-500 mb-2">1.3K</div>
          <p class="text-gray-600">People</p>
        </div>
        <div>
          <div class="text-4xl font-bold text-yellow-500 mb-2">52.2K+</div>
          <p class="text-gray-600">Community Members</p>
        </div>
        <div>
          <div class="text-4xl font-bold text-green-500 mb-2">85%</div>
          <p class="text-gray-600">Success Rate</p>
        </div>
      </div>
    </div>

    <div class="mt-16 text-center">
      <h3 class="text-2xl font-bold mb-6">Join Our Community</h3>
      <p class="text-gray-600 max-w-2xl mx-auto mb-8">Be part of a movement that believes in human connection...</p>
      <div class="flex justify-center gap-4 flex-wrap">
        <a href="https://m.facebook.com/profile.php?id=61565408164554" target="_blank" rel="noopener noreferrer"
          class="w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center shadow-md">
          <i class="fa-brands fa-facebook-f"></i>
        </a>

        <a href="https://www.instagram.com/the_Helpbook/" target="_blank" rel="noopener noreferrer"
          class="w-12 h-12 rounded-full bg-pink-600 hover:bg-pink-700 text-white flex items-center justify-center shadow-md">
          <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="https://chat.whatsapp.com/D2amvjNlcqLCxl68LNdZmI" target="_blank" rel="noopener noreferrer"
          class="w-12 h-12 rounded-full bg-green-600 hover:bg-green-700 text-white flex items-center justify-center shadow-md">
          <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a href="https://www.youtube.com/@the_helpbook" target="_blank" rel="noopener noreferrer"
          class="w-12 h-12 rounded-full bg-red-500 hover:bg-red-700 text-white flex items-center justify-center shadow-md">
          <i class="fa-brands fa-youtube"></i>
        </a>

        <a href="https://www.linkedin.com/in/the-helpbook-foundation-310143339/" target="_blank"
          rel="noopener noreferrer"
          class="w-12 h-12 rounded-full bg-blue-700 hover:bg-blue-800 text-white flex items-center justify-center shadow-md">
          <i class="fa-brands fa-linkedin-in"></i>
        </a>

      </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
    <path fill="#eee" fill-opacity="1"
      d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
    </path>
  </svg>

  <div class="margin-50"></div>

  <div class="bg-white md:w-[80%] w-[100%] py-12 px-4 sm:px-6 lg:px-8 mx-auto">
    <h2 class="text-3xl font-bold text-center mb-12">Be Part Of The Helpbook Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Volunteership Card -->
      <div class="flex flex-col items-center">
        <div class="w-full h-44 mb-4 overflow-hidden rounded-lg">
          <img src="/assets/join/second.jpg" alt="Volunteer supporting community"
            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300 ease-in-out" />
        </div>
        <h3 class="text-xl font-semibold text-[#fc5f7c] mb-2">Volunteer</h3>
        <p class="text-md text-gray-600 text-center mb-6">
          Join our network of passionate volunteers to participate in on-ground events, awareness drives, and
          educational campaigns. Whether online or offline, your time and effort can bring real change to
          underprivileged communities.
        </p>
        <a class="bg-[#fc5f7c] hover:bg-red-400 text-white font-medium py-2 px-8 rounded-full transform hover:scale-105 transition-all duration-300 ease-in-out mt-auto"
          href="/join.php?q=volunteer">
          Join Now
        </a>
      </div>

      <!-- Internship Card -->
      <div class="flex flex-col items-center">
        <div class="w-full h-44 mb-4 overflow-hidden rounded-lg">
          <img src="/assets/join/first.jpg" alt="Interns planning project"
            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300 ease-in-out" />
        </div>
        <h3 class="text-xl font-semibold text-[#fc5f7c] mb-2">Internship</h3>
        <p class="text-md text-gray-600 text-center mb-6">
          Gain hands-on experience by contributing to impactful projects at Helpbook Foundation. From managing digital
          outreach to organizing local programs — internships come with mentorship and a certificate upon completion.
        </p>
        <a class="bg-[#fc5f7c] hover:bg-red-400 text-white font-medium py-2 px-8 rounded-full transform hover:scale-105 transition-all duration-300 ease-in-out mt-auto"
          href="/join.php?q=intern">
          Apply Now
        </a>
      </div>

      <!-- Membership Card -->
      <div class="flex flex-col items-center">
        <div class="w-full h-44 mb-4 overflow-hidden rounded-lg">
          <img src="/assets/join/third.jpg" alt="Supporters together for cause"
            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300 ease-in-out" />
        </div>
        <h3 class="text-xl font-semibold text-[#fc5f7c] mb-2">Member</h3>
        <p class="text-md text-gray-600 text-center mb-6">
          Become a valued member of Helpbook Foundation by contributing. Your support helps us
          provide education kits, sponsor children, and fund ongoing community development programs.
        </p>
        <a class="bg-[#fc5f7c] hover:bg-red-400 text-white font-medium py-2 px-8 rounded-full transform hover:scale-105 transition-all duration-300 ease-in-out mt-auto"
          href="/join.php?q=member">
          Contribute
        </a>
      </div>

    </div>
  </div>



  <section class="py-20 mt-20 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Stories in Motion</h2>
        <p class="text-gray-300 max-w-3xl mx-auto">Watch how our programs are making a real difference in
          people&#x27;s lives around the world.</p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="relative rounded-xl overflow-hidden group cursor-pointer">
          <div class="relative w-full aspect-video">
            <iframe class="absolute top-0 left-0 w-full h-full"
              src="https://www.youtube.com/embed/jhLRAcPUkRQ?si=7ZKyq0GjGlZ9yz4n" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
          </div>
        </div>
        <div class="space-y-6">
          <div class="bg-gray-800 p-6 rounded-xl hover:bg-gray-700 transition-colors cursor-pointer group">
            <a class="flex items-center" href="https://www.youtube.com/shorts/Om-0qaq2-0g" target="_blank">
              <div
                class="w-12 h-12 rounded-md md:rounded-full bg-green-600 flex items-center justify-center mr-4 group-hover:bg-green-500 transition-colors">
                <span class="material-symbols-outlined text-white">play_arrow</span>
              </div>
              <div>
                <h3 class="text-lg font-bold mb-1">Education First: Every child is a seed...</h3>
                <p class="text-gray-300 text-sm">Short | 01:00 min</p>
              </div>
            </a>
          </div>
          <div class="bg-gray-800 p-6 rounded-xl hover:bg-gray-700 transition-colors cursor-pointer group">
            <a class="flex items-center" href="https://www.youtube.com/shorts/Tb2gjYW741I" target="_blank">
              <div
                class="w-12 h-12 rounded-md md:rounded-full bg-green-600 flex items-center justify-center mr-4 group-hover:bg-green-500 transition-colors">
                <span class="material-symbols-outlined text-white">play_arrow</span>
              </div>
              <div>
                <h3 class="text-lg font-bold mb-1">Celebrations: Precious momemnts filled...</h3>
                <p class="text-gray-300 text-sm">Short | 01:00 min</p>
              </div>
            </a>
          </div>
          <div class="bg-gray-800 p-6 rounded-xl hover:bg-gray-700 transition-colors cursor-pointer group">
            <a class="flex items-center" href="https://www.youtube.com/shorts/vlmMnrjZv0Y" target="_blank">
              <div
                class="w-12 h-12 rounded-md md:rounded-full bg-green-600 flex items-center justify-center mr-4 group-hover:bg-green-500 transition-colors">
                <span class="material-symbols-outlined text-white">play_arrow</span>
              </div>
              <div>
                <h3 class="text-lg font-bold mb-1">The Helpbook: Helping street dogs...</h3>
                <p class="text-gray-300 text-sm">Short | 01:00 min</p>
              </div>
            </a>
          </div>
          <div class="pt-4"> <a href="https://www.youtube.com/@The_Helpbook"
              class="inline-block px-6 py-3 bg-green-600 text-white font-medium rounded-full hover:bg-green-700 transform hover:scale-105 transition-all shadow-md"
              target="_blank">
              View All Videos </a> </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mx-auto p-6 w-full rounded-lg bg-[#eee]">
    <div class="form-header my-4 text-center">
      <h2 class="text-4xl font-bold mb-2 relative inline-block">
        FAQs
      </h2>
    </div>

    <div class="space-y-4 md:max-w-4xl mx-auto">
      <!-- FAQ Item Template -->
      <details
        class="border border-l-4 border-l-green-300 border-gray-300 rounded-lg p-4 group overflow-hidden bg-white shadow-sm">
        <summary class="flex items-center justify-between cursor-pointer font-medium text-gray-800 focus:outline-none">
          What is the Helpbook Foundation’s mission?
          <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180 text-gray-600">
            expand_more
          </span>
        </summary>
        <p class="mt-2 text-gray-600">
          Our mission is to provide educational resources and support to children in need, helping them access quality
          learning materials and opportunities for a brighter future.
        </p>
      </details>

      <details
        class="border border-l-4 border-l-green-300 border-gray-300 rounded-lg p-4 group overflow-hidden bg-white shadow-sm">
        <summary class="flex items-center justify-between cursor-pointer font-medium text-gray-800 focus:outline-none">
          How can I donate books or toys?
          <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180 text-gray-600">
            expand_more
          </span>
        </summary>
        <p class="mt-2 text-gray-600">
          You can donate new or gently used books, educational toys, and school supplies by filling out our
          <a href="/help.php" class="text-blue-600 underline">Help Form</a>. Our team will guide you on how and where to
          send your donations.
        </p>
      </details>

      <details
        class="border border-l-4 border-l-green-300 border-gray-300 rounded-lg p-4 group overflow-hidden bg-white shadow-sm">
        <summary class="flex items-center justify-between cursor-pointer font-medium text-gray-800 focus:outline-none">
          How can I join The Helpbook Foundation
          <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180 text-gray-600">
            expand_more
          </span>
        </summary>
        <p class="mt-2 text-gray-600">
          You can reach us for joining the helpbook foundation via <a href="/join.php" class="text-blue-300">Join
            Now</a> form.
        </p>
      </details>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
    <path fill="#eee" fill-opacity="1"
      d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
    </path>
  </svg>




  <section class="bg-white py-20 px-6 sm:px-12 mb-[-20px] text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-4xl font-bold mb-2 relative inline-block">Stay Updated!</h2>
      <p class="text-lg text-gray-600 mb-8">Subscribe to our newsletter and never miss an update.</p>

      <form action="/admin/newsletter.php" method="POST"
        class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <input type="email" name="email" placeholder="Enter your email"
          class="w-full !mb-0 sm:w-auto px-5 py-3 !rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#fc5f7c] transition"
          required />
        <button type="submit"
          class="px-6 py-3 bg-[#fc5f7c] text-white font-semibold rounded-full hover:bg-[#e44d6a] transition">
          Subscribe
        </button>
      </form>

      <!-- Note -->
      <p class="text-sm text-gray-500 mt-4">
        By subscribing you agree to our
        <a href="/privacy.php" class="text-[#fc5f7c] hover:underline">privacy policy</a>.
        You can <a href="/unsubscribe.php" class="text-[#fc5f7c] hover:underline">unsubscribe</a> anytime.
      </p>
    </div>
  </section>

  <section class="md:w-[80%] w-[100%] mb-[-30px] mx-auto pt-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Stories of Impact</h2>
        <p class="text-gray-600 max-w-3xl mx-auto">Real stories from the communities we serve that demonstrate the
          lasting impact of our work.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <article class="bg-white rounded-xl shadow-md overflow-hidden group">
          <div class="overflow-hidden h-56">
            <img src="/assets/book_reading_drive.webp" alt="Children in a classroom"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              keywords="education, children, classroom, learning, school" />
          </div>
          <div class="p-6">
            <span
              class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium mb-4">Education</span>
            <h3 class="text-xl font-bold mb-2 truncate">Aman's Initiative - Teaching and Sports Skills for Children</h3>
            <a href="/posts/book_reading_drive.php"
              class="text-red-500 font-semibold flex items-center hover:text-red-800 transition-colors">
              Read the full story
              <span
                class="material-symbols-outlined ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
          </div>
        </article>
        <article class="bg-white rounded-xl shadow-md overflow-hidden group">
          <div class="overflow-hidden h-56">
            <img src="/assets/books_reading_drive.webp" alt="Medical clinic in rural area"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              keywords="education, children, classroom, learning, school" />
          </div>
          <div class="p-6">
            <span
              class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium mb-4">Education</span>
            <h3 class="text-xl font-bold mb-2 truncate">Mobile Clinics Reaching the Unreached</h3>

            <a href="/posts/books_reading_drive.php"
              class="text-red-500 font-semibold flex items-center hover:text-red-800 transition-colors">
              Read the full story
              <span
                class="material-symbols-outlined ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
          </div>
        </article>
        <article class="bg-white rounded-xl shadow-md overflow-hidden group">
          <div class="overflow-hidden h-56">
            <img src="/assets/rescuing_forgotten_puppies.webp" alt="Woman with clean water"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              keywords="animal, animal adoption, puppies, the helpbook" />
          </div>
          <div class="p-6">
            <span
              class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium mb-4">Adoption</span>
            <h3 class="text-xl font-bold mb-2 truncate">The Journey of Rescuing Forgotten Puppies</h3>
            <a href="/posts/rescuing_forgotten_puppies.php"
              class="text-red-500 font-semibold flex items-center hover:text-red-800 transition-colors">
              Read the full story
              <span
                class="material-symbols-outlined ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
          </div>
        </article>
      </div>
      <div class="mt-12 text-center">
        <a href="/news.php"
          class="inline-block px-8 py-3 border-2 border-red-500 text-red-500 font-semibold rounded-full hover:bg-red-500 hover:text-white transition-all">
          View All Stories
        </a>
      </div>
    </div>
  </section>


  <div class="joinPopupNew">
    <span class="closeBtnP">x</span>
    <div class="contentContainsP">
      <span class="catP">Important</span>
      <div class="contentP">
        <h3>
          Join The Helpbook Foundation to Educate Children, Protect the Environment, and Support Animal Welfare.
        </h3>
        <p>Click The Button Below</p>
      </div>
      <a class="btnP" href="https://thehelpbook.org/join.php">Join Now →</a>
    </div>
  </div>
  <style>
    .joinPopupNew {
      background: #eee;
      color: #444;
      position: fixed;
      bottom: 30px;
      right: 40px;
      padding: 28px;
      transition: 0.3s all;
      max-width: 90%;
      width: 330px;
      line-height: 1.4;
      z-index: 1000;
      display: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

    .joinPopupNew .catP {
      color: tomato;
    }

    .joinPopupNew .closeBtnP {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #444;
      padding: 3px 10px;
      border-radius: 50%;
      color: #ccc;
      border: 1px solid #888;
      cursor: pointer;
      text-align: center;
      font-weight: bold;
    }

    .joinPopupNew .contentContainsP {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }


    .joinPopupNew .contentP h3 {
      margin-bottom: 30px;
      font-size: 1.5rem;
    }

    .joinPopupNew .contentP p {
      font-weight: bold;
    }

    .joinPopupNew .btnP {
      text-decoration: none;
      display: inline-block;
      color: white;
      text-align: center;
      background: #15945f;
      padding: 8px 0;
      font-weight: bold;
      border: 2px solid #15945f;
    }

    .joinPopupNew .btnP:hover {
      background: transparent;
      border: 2px solid #333;
      color: #333;
    }

    @media (max-width: 600px) {
      .joinPopupNew {
        width: 90%;
        right: 5%;
        bottom: 30px;
      }

      .joinPopupNew .contentP h3 {
        font-size: 1.4rem;
      }
    }
  </style>
  <script>
    const popupNew = document.querySelector(".joinPopupNew");
    setTimeout(() => {
      popupNew.style.display = "block";
    }, 2000)
    const closepopupNew = document.querySelector(".closeBtnP");
    closepopupNew.addEventListener("click", () => {
      popupNew.style.display = "none";
    })
  </script>


  <?php

  include 'footer.php'

    ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <?php

  require 'script.php';

  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>