<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Our Team</title>
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



    <div class="w-full p-6 bg-gradient-to-r from-green-400 to-green-600 shadow-lg overflow-hidden relative">
        <div class="flex flex-col md:flex-row items-center justify-center text-center gap-8 relative z-10">
            <div class="w-full md:w-2/3">
                <h2 class="text-white text-3xl md:text-4xl font-bold mb-4 tracking-tight">FROM <span
                        class="text-yellow-300">THE
                        HELPBOOK FOUNDATION</span></h2>
                <p class="text-green-100 text-lg mb-6">The Helpbook Foundation is dedicated to empowering communities
                    through
                    education-first initiatives. It works to improve access to learning for underprivileged children by
                    supporting
                    book drives, scholarships, and digital education. Alongside education, the foundation also addresses
                    environmental sustainability, healthcare, and animal welfare. Believing that small efforts create
                    big change,
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


    <!-- Section Four -->

    <script src="https://cdn.tailwindcss.com"></script>
    <div class="imgTreeHead margin-50 mx-auto">
        <h2 class="text-4xl font-bold center mb-2 relative inline-block w-100">
            Our Leadership Team
        </h2>
    </div>




    <div class="leaderContainer">
        <div class="leaderBox">
            <div class="backgroundG"></div>
            <div class="contentContains">
                <img src="./assets/new/aman.webp" alt="President">
                <div class="textContains">
                    <h3>Aman Mahajan</h3>
                    <span class="post">President</span>
                    <span class="quote">"𝗦𝗼𝗰𝗶𝗮𝗹 𝘀𝗲𝗿𝘃𝗶𝗰𝗲 𝗵𝗮𝘀 𝘁𝗼 𝗯𝗲 𝗽𝗿𝗼𝗺𝗼𝘁𝗲𝗱 𝗮𝗹𝗹 𝗼𝘃𝗲𝗿
                        𝗜𝗻𝗱𝗶𝗮."</span>
                    <div class="link-containerProf">
                        <a class="link facebook" href="https://m.facebook.com/aman.mahajan.35110/" target="_blank"
                            rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/aman.mahajan.2024/" target="_blank"
                            rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                        <a class="link linkedin" href="https://www.linkedin.com/in/aman-mahajan-250a30268"
                            target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="leaderBox">
            <div class="backgroundG"></div>
            <div class="contentContains">
                <img src="./assets/new/jayesh.webp" alt="Vice President">
                <div class="textContains">
                    <h3>Jayesh Mahajan</h3>
                    <span class="post">Vice President</span>
                    <span class="quote">"Be like sun who gives light in life to every star."</span>
                    <div class="link-containerProf">
                        <a class="link facebook" href="https://m.facebook.com/jayesh.mahajan.52493/" target="_blank"
                            rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/jayesshhhxh/" target="_blank"
                            rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                        <!-- <a class="link linkedin" href="https://linkedin.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="leaderBox">
            <div class="backgroundG"></div>
            <div class="contentContains">
                <img src="./assets/new/akshat.webp" alt="Secretary">
                <div class="textContains">
                    <h3>Akshat More</h3>
                    <span class="post">Secretary</span>
                    <span class="quote">"Passionate about making a difference with Helpbook."</span>
                    <div class="link-containerProf">
                        <a class="link facebook" href="https://m.facebook.com/profile.php?id=100086337357187"
                            target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/akshxt_001/" target="_blank"
                            rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="margin-50"></div>



    <div class="imgTreeHead margin-20">
        <h2 class="text-4xl font-bold center mb-2 relative inline-block w-100">
            The Helpbook Team
        </h2>
    </div>



    <div class="team-section">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Repeat this block for each team member -->
                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/18.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Sharad Ahirwar</strong></span>
                        <span><strong>Joint Secretary</strong></span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/1.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Ashwini Mahajan</strong></span>
                        <span><strong>Leader</strong><br>IT Sector</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/4.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Priya Mishra</strong></span>
                        <span><strong>Leader</strong><br>Education & Awareness</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/8.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Bhaskar Verma</strong></span>
                        <span><strong>Leader</strong><br>Management & Digital marketing</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/11.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Mansi Shejwal</strong></span>
                        <span><strong>Leader</strong><br>Education & Awareness</span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/12.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Akash More</strong></span>
                        <span><strong>Leader</strong><br>Management, Digital Marketing & Finance</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/19.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Taslim Khan</strong></span>
                        <span><strong>Leader</strong><br>Graphics Designer</span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/16.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Raju lovanshi</strong></span>
                        <span><strong>Leader</strong><br>Animal, Rescue & Feeding</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/2.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Ashmita Mahajan</strong></span>
                        <span><strong>Member</strong><br>Communication & Counseling</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/5.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Roshan Mahajan</strong></span>
                        <span><strong>Member</strong><br>Animal Rescue, Feeding, Helping</span>
                    </div>
                </div>


                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/6.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Dorina Khan</strong></span>
                        <span><strong>Member</strong><br>Education & Awareness</span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/10.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Sanjay Rangeele</strong></span>
                        <span><strong>Member</strong><br>Animal Rescue, Feeding, Helping</span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/17.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Mangesh Khare</strong></span>
                        <span><strong>Member</strong><br>Public Volunteering & Communication</span>
                    </div>
                </div>

                <div class="swiper-slide team-member">
                    <img src="./assets/new/members/20.webp" alt="Team Member">
                    <div class="cont">
                        <span><strong>Arvind Chaudhary</strong></span>
                        <span><strong>Member</strong><br>Food & Health</span>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                320: {
                    slidesPerView: 1,
                }
            }
        });
    </script>

    <style>
        .swiper-container {
            width: 100%;
            padding: 20px 0;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Fix layout issues */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>


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