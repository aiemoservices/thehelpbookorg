<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | The Helpbook Foundation</title>
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
                <h2 class="text-white text-3xl md:text-4xl font-bold mb-4 tracking-tight">From <span
                        class="text-yellow-300">The
                        HelpBook Foundation</span></h2>
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


    <div class="w-full md:w-[90%] mx-auto p-6 font-sans">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div
                class="bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center mb-4"> <span
                        class="material-symbols-outlined text-white text-3xl mr-3">volunteer_activism</span>
                    <h2 class="text-2xl font-bold text-white">Our Mission</h2>
                </div>
                <p class="text-white leading-relaxed"> Helpbook Foundation is dedicated to supporting and empowering
                    underprivileged children through education. Our mission is to ensure that every child, especially
                    those from marginalized communities, gets equal access to learning, growth, and opportunity. We work
                    to connect donors, volunteers, and educators with children in need—providing school supplies,
                    tuition support, mentorship, and emotional care. Through community-driven efforts, we aim to reduce
                    educational inequality and create a strong foundation for every child&#x27;s future. Because when we
                    invest in a child&#x27;s education, we invest in a better tomorrow. </p>
            </div>
            <div
                class="bg-gradient-to-br from-red-400 to-red-600 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center mb-4"> <span
                        class="material-symbols-outlined text-white text-3xl mr-3">lightbulb</span>
                    <h2 class="text-2xl font-bold text-white">Our Vision</h2>
                </div>
                <p class="text-white leading-relaxed"> At Helpbook Foundation, we envision a world where every
                    child—regardless of their background—has access to quality education, support, and opportunities to
                    thrive. Our mission is rooted in the belief that education is not just a right, but a powerful tool
                    for breaking the cycle of poverty and building a brighter future. We are committed to bridging the
                    educational gap for underprivileged children by connecting them with the resources, guidance, and
                    compassionate individuals who care. Whether through learning materials, sponsorship, or personal
                    mentorship, our goal is to uplift young minds and empower the next generation to dream, learn, and
                    achieve. Together, we can help children rise above circumstances and build a future full of hope and
                    possibility. </p>
            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
        <path fill="#eee" fill-opacity="1"
            d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <div class="w-full p-6 md:p-8 font-sans mx-auto relative overflow-hidden bg-[#eee]">

        <div class="flex md:w-[90%] flex-col lg:flex-row gap-12 items-center">
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
                    Who We Are?
                    <span
                        class="absolute bottom-0 left-0 w-full h-2 bg-blue-500 transform origin-left transition-transform duration-300 hover:scale-x-110"></span>
                </h2>

                <div class="mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500 transition-all">
                        <span class="material-symbols-outlined text-4xl text-blue-400">favorite</span>
                        <p class="text-gray-600 text-lg text-justify">At HelpBook Foundation, we are a passionate group
                            of individuals committed to creating lasting change through the power of education and
                            compassion. Founded on the belief that every child deserves a chance to learn, grow, and
                            succeed, our mission is to bridge the gap between opportunity and access for underserved
                            communities.

                            We work hand-in-hand with volunteers, donors, educators, and changemakers to empower the
                            next generation—especially those who need it most. Whether it's providing school supplies,
                            organizing mentorship programs, or supporting families in crisis, every action we take is
                            rooted in empathy and driven by impact.

                            We believe in a world where no child is left behind, and every heart that wants to help can
                            find a place to give. Together, we are building a future that’s brighter, fairer, and filled
                            with possibilities—for everyone.</p>
                    </div>
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
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">Be part of a movement that believes in human connection...
            </p>
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


    <section class="education-123 openbtn flex justify-center items-center flex-row-reverse w-[90%] mx-auto flex-wrap"
        id="education-section">
        <div class="right flex justify-center lg:w-1/2">
            <img src="./assets/jivaan_story.webp" alt="" srcset="">
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
            <p class="text-lg text-justify">Education is the most powerful tool for personal and societal
                transformation. It
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
                <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Support
                    Now&nbsp;&rarr;</span>
            </a>


        </div>
    </section>


    <?php

    include 'footer.php'

        ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php require 'script.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>