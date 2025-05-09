<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <meta name="description" content="Welcome to the HelpBook Foundation - a platform for social, environmental, and humanitarian efforts. Join us in making a difference through impactful community-driven actions.">
    <meta name="keywords" content="HelpBook Foundation, social impact, humanitarian initiatives, community service, environmental action, health support">

    <meta property="og:title" content="HelpBook Foundation - Home">
    <meta property="og:description" content="Join HelpBook Foundation's mission for social, environmental, and humanitarian betterment. Together, we can make a difference.">
    <meta property="og:url" content="https://thehelpbook.org/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/images/tree9.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HelpBook Foundation - Home">
    <meta name="twitter:description" content="Join HelpBook Foundation's mission for social, environmental, and humanitarian betterment. Together, we can make a difference.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/images/tree9.webp">


    <?php
     include 'metacommon.php'
     ?> </head>

<body>

<?php

require 'header.php';

?>

<div class="carousel13">
    <div class="carousel-track1">
  
      <div class="carousel-item1">
        <div class="carousel-content1">
          <h1>Empower Through Education</h1>
          <p>Join us to provide quality education for underprivileged children.</p>
          <div class="pg-follow">
            <a href="./education.php" class="follow-btn1">View More</a>
          </div>
        </div>
        <img src="./assets/new/education2.webp" alt="Education Slide">
      </div>
      
      <!-- Environment Slide -->
      <div class="carousel-item1">
        <div class="carousel-content1">
          <h1>Protect Our Planet</h1>
          <p>Be a part of our environmental conservation initiatives.</p>
          <div class="pg-follow">
            <a href="./environment.php" class="follow-btn1">View More</a>
          </div>
        </div>
        <img src="./assets/new/cleaning2.webp" alt="Environment Slide">
      </div>
      
      <!-- Animal Adoption Slide -->
      <div class="carousel-item1">
        <div class="carousel-content1">
          <h1>Adopt, Don't Shop</h1>
          <p>Help us find loving homes for abandoned and rescued animals.</p>
          <div class="pg-follow">
            <a href="./adoption.php" class="follow-btn1">View More</a>
          </div>
        </div>
        <img src="./assets/pets.webp" alt="Animal Adoption Slide">
      </div>
      
      <!-- Blood Donation Slide -->
      <div class="carousel-item1">
        <div class="carousel-content1">
          <h1>Donate Blood, Save Lives</h1>
          <p>Contribute to saving lives by becoming a blood donor.</p>
          <div class="pg-follow">
            <a href="./blood.php" class="follow-btn1">View More</a>
          </div>
        </div>
        <img src="./assets/blood0.webp" alt="Blood Donation Slide">
      </div>

    </div>
  </div>


    <div class="markContains">
          <div class="marquee-container">
            <div id="marqueeText" class="marquee-text">
                <ul><li>Government Approved</li><li>Affiliated with niti aayog through NGO Darpan</li><li>registered number: 01/01/01/40967/24</li><li>Darpan Id Number: MP/2024/0441339</li></ul>
                <ul><li>Government Approved</li><li>Affiliated with niti aayog through NGO Darpan</li><li>registered number: 01/01/01/40967/24</li><li>Darpan Id Number: MP/2024/0441339</li></ul>
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
    
   

    <div class="aboutBlock">
        <div class="sideOne">
            <h2>IN A NEED OR <br />WANT TO HELP...</h2>
            <a href="./join.php">Join Us</a>
        </div>
        <div class="seprator"></div>
        <div class="content">
            The Helpbook Foundation is dedicated to create positive change in the community by addressing social, environmental and humanitarian issues. The organization prioritizes environmental sustainability through tree planting, pollution reduction and clean-up drives. Its mission extends beyond environmental action, as it aims to improve access to education, healthcare and animal welfare. The foundation believes that small acts, when combined together than can lead to significant change and it encourages community collaboration to achieve a brighter future.
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>




    <!-- Section Three -->


    
    <div class="imgTreeHead margin-20">
        <h2>What we do?</h2>
        <div class="sepratorHr"></div>
    </div>

    <div class="works">
        <div class="card">
        <div class="icon edu-icon"><i class="fa-solid fa-school"></i></div>
        <h3>Education</h3>
        <span class="sep"></span>
        <p>This section covers all Education initiatives and drives.</p>
        <a href="./education.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
    </div>
        <div class="card">
        <div class="icon env-icon"><i class="fa-solid fa-tree"></i></div>
            <h3>Environment</h3>
            <span class="sep"></span>
            <p>This section covers all Environment initiatives.</p>
            <a href="./environment.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
        </div>
        <div class="card">
    <div class="icon ani-icon"><i class="fa-solid fa-paw"></i></div>
    <h3>Animals</h3>
    <span class="sep"></span>
    <p>This section covers all Animals & Pets initiatives and drives.</p>
    <a href="./adoption.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
</div>
<div class="card">
    <div class="icon food-icon"><i class="fa-solid fa-notes-medical"></i></div>
    <h3>Food & Health</h3>
    <span class="sep"></span>
    <p>This section covers all Food & Health initiatives and drives.</p>
    <a href="./food.php"><i class="fa-solid fa-eye"></i>&nbsp;View More</a>
</div>

</div>



    <!-- Section Four -->

    <div class="imgTreeHead margin-50">
        <h2>Leadership Team</h2>
        <div class="sepratorHr"></div>
    </div>




    <div class="leaderContainer">
        <div class="leaderBox">
            <div class="backgroundG"></div>
            <div class="contentContains">
                <img src="./assets/new/aman.webp" alt="President">
                <div class="textContains">
                    <h3>Aman Mahajan</h3>
                    <span class="post">President</span>
                    <span class="quote">"𝗦𝗼𝗰𝗶𝗮𝗹 𝘀𝗲𝗿𝘃𝗶𝗰𝗲 𝗵𝗮𝘀 𝘁𝗼 𝗯𝗲 𝗽𝗿𝗼𝗺𝗼𝘁𝗲𝗱 𝗮𝗹𝗹 𝗼𝘃𝗲𝗿 𝗜𝗻𝗱𝗶𝗮."</span>
                    <div class="link-containerProf">
                        <a class="link facebook" href="https://m.facebook.com/aman.mahajan.35110/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/aman.mahajan.2024/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                        <a class="link linkedin" href="https://www.linkedin.com/in/aman-mahajan-250a30268" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
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
                        <a class="link facebook" href="https://m.facebook.com/jayesh.mahajan.52493/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/jayesshhhxh/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
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
                        <a class="link facebook" href="https://m.facebook.com/profile.php?id=100086337357187" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="link instagram" href="https://www.instagram.com/akshxt_001/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                        <!-- <a class="link linkedin" href="https://linkedin.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="margin-50"></div>


    <section class="impact-section12" id="scrollPos">
    <!-- Parallax Background -->
    <div class="background12"></div>
    <!-- Overlay -->
    <div class="overlay12"></div>
    <!-- Parallax Content -->
    <div class="content-wrapper12">
      <h2 class="section-heading">Our Impact</h2>
      <div class="sepratorHr thick"></div>
      <div class="impact-details">
        <!-- Box 1 -->
        <div class="impact-box">
            <div>
                <h3 class="impact-value">01</h3>
                <p class="impact-label">State</p>
            </div>
        </div>
        <!-- Separator line -->
        <div class="separator mob"></div>
        <div class="vertical-separator pc"></div>
        <!-- Box 2 -->
        <div class="impact-box">
          <h3 class="impact-value">1.3K</h3>
          <p class="impact-description">People</p>
        </div>
        <!-- Separator line -->
        <div class="separator mob"></div>
        <div class="vertical-separator pc"></div>
        <!-- Box 3 -->
        <div class="impact-box">
          <h3 class="impact-value">52.2K</h3>
          <p class="impact-description">People with awareness & campaigns</p>
        </div>
      </div>
      <!-- <div class="social-follow">
        <a href="#" class="follow-btn">View More</a>
      </div> -->
    </div>
  </section>


<div class="margin-50"></div>
    
<div class="imgTreeHead margin-20">
    <h2>The Helpbook Team</h2>
    <div class="sepratorHr"></div>
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
                <img src="./assets/new/members/3.webp" alt="Team Member">
                <div class="cont">
                    <span><strong>Swati Singh</strong></span>
                    <span><strong>Leader</strong><br>Environment & Awareness</span>
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
                <img src="./assets/new/members/7.webp" alt="Team Member">
                <div class="cont">
                    <span><strong>Thakur Yogendra Singh Parmar</strong></span>
                    <span><strong>Leader</strong><br>Food Donation & Healthcare</span>
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


            <!--<div class="swiper-slide team-member">-->
            <!--    <img src="./assets/new/members/13.webp" alt="Team Member">-->
            <!--    <div class="cont">-->
            <!--        <span><strong>Nitya Shrivastava</strong></span>-->
            <!--        <span><strong>Member</strong><br>Education & Awareness</span>-->
            <!--    </div>-->
            <!--</div>-->


            <!--<div class="swiper-slide team-member">-->
            <!--    <img src="./assets/new/members/14.webp" alt="Team Member">-->
            <!--    <div class="cont">-->
            <!--        <span><strong>Sejal Gupta</strong></span>-->
            <!--        <span><strong>Member</strong><br>Management & Digital Marketing</span>-->
            <!--    </div>-->
            <!--</div>-->

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







<div class="margin-50"></div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>



<div class="sixPartTwo">
    <div class="left">
        <h3>United in Compassion and Commitment to Making a Difference</h3>
        <div class="sepBegin"></div>
        <p>At The Helpbook Foundation, our dedicated team is the heart of our mission. Comprised of passionate individuals from diverse backgrounds, we are united by a common goal, to create  the positive change in our communities and for animals in need. Each team member brings unique skills, experiences for contributing to a collaborative environment where innovative ideas thrive.</p><p>From organizing community outreach programs to fostering animals and advocating for their welfare, our team works tirelessly to make a meaningful impact. We believe that teamwork and compassion are essential in driving our initiatives forward, and we are committed to inspiring others to join us in our journey to make the world a better place for all. Together, we are stronger and  we can create lasting change.</p>
        <div class="btnMincontainer2">
            <a href="./about.php" class="btnMin"><i class="fas fa-book-reader"></i>&nbsp;Read More...</a>
        </div>
        
    </div>
    <div class="right">
        <img src="./assets/tree (9).webp" alt="" srcset="">
    </div>
</div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>



    <div class="imgTreeHead margin-20">
        <h2>Newsroom</h2>
        <div class="sepratorHr"></div>
    </div>

    <div class="sectionSeven">


        <div class="updates-section">
            <div class="updates-container">
            <div class="update-card">
                    <img src="./assets/new/news1.webp" alt="News Image 1" class="update-image">
                   
                    <p>Cleaning Drive by the Helpbook Foundation at Kaliyasot Dam.</p>
                    <a href="./posts/kaliyasaut_dam_cleaning_drive.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="update-card">
                    <img src="./assets/new/news2.webp" alt="News Image 2" class="update-image">
                    
                    <p>Educational Drive 2024 by the Helpbook Foundation.</p>
                    <a href="./posts/education_drive_news.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="update-card">
                    <img src="./assets/paper3.webp" alt="News Image 3" class="update-image">
                    
                    <p>Second Cleaning Drive by the Helpbook Foundation at Kaliyasot Dam.</p>
                    <a href="./posts/kaliyasaut_dam_cleaning_drive_two.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
        
            </div>
            <div class="margin-20 center">
                <a href="./news.php" class="viewNews">View More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

    </div>



    <!-- Section Six -->


    <div class="margin-50"></div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    



    <div class="sevenPartTwo" id="vision">
    <div class="left">
        <img src="./assets/new/vision.webp" alt="" srcset="">
    </div>
    <div class="right">
        <h3>Our<br>
      <strong>Vision</strong></h3>
        <div class="sepBegin"></div>
        <p>Our vision is to provide social services across India, inspiring youth to engage in meaningful work that improves communities. By empowering the next generation, we aim to build a better future for all, ensuring access to essential resources and opportunities for growth and development.</p>
        <div class="adopt margin-50">
            <a href="./about.php" class="register"><i class="fas fa-eye"></i>&nbsp;View More...</a>
        </div>
    </div>
</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

       <!-- Clean Energy Section -->
       <section class="clean-energy ourMission openbtn" id="mission">
        <div class="img">
            <img src="./assets/new/mission.webp" alt="Clean Energy Initiatives">
        </div>
        <div class="content right">
          <h2>Our<br><strong>Mission</strong></h2>
        <p>Our mission is to foster a world where every individual has the opportunity to access quality education, where no one goes to bed hungry and where the environment is preserved for future generations. Our mission is to create a society where these fundamental needs are met with dignity, sustainability and ensuring a better future for all.</p>
        <ul>
            <li><strong>Education and Skill Development:</strong> Ensuring access to quality education and vocational training.</li>
            <li><strong>Healthcare:</strong> Enhancing health through medical services and awareness programs.</li>
            <li><strong>Environment and Sustainability:</strong> Addressing environmental challenges and promoting conservation.</li>
            <li><strong>Animal Welfare:</strong> Rescuing, feeding, and caring for animals in need.</li>
        </ul>
        </div>
    </section>



<!-- Section Eight -->




<div class="imgTreeHead">
    <h2>Newsletter</h2>
    <div class="sepratorHr"></div>
</div>



<div class="subscribe-section">
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
    <div class="shape shape4"></div>
    
    <form class="subscribe-form" action="./admin/notify.php" method="POST" onsubmit="return validateEmailNotify()">
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <button type="submit">Subscribe</button>
    </form>
</div>

<div class="sepO1"></div>

<div class="sectionDonate">
    <div class="right1">
        <h3>Please Donate Now...</h3>
        <br>
        <p>A/C Name:- THE HELPBOOK FOUNDATION</p>
        <p>A/C IFSC:- AUBL0002572</p>
        <p>A/C Number:- 2401257261716171</p>
        <div class="margin-30"></div>
        <small>*Or donate with your details...</small>&nbsp;&nbsp;
        <a class="register" href="./donate.php">Donate Now</a>
    </div>
    <div class="left">
        <img src="./assets/qr.webp" alt="QR Code">
    </div>
</div>

<div class="sepO2"></div>


 <!-- Popup Container -->
 <div class="popup-overlay" id="popup">
    <div class="popup-box">
      <!-- Placeholder Image -->
      <img src="./assets/education.webp" alt="HelpBook Foundation" class="popup-image" />
      
      <!-- Popup Message -->
      <span class="popup-message">
        <h2>Support Helpbook</h2>
        <br>
        <p>Your support makes a world of difference! Join us in building a brighter future for our community. Together, we can create positive change. Donate or Join Us today!</p>
      </span>
      
      <!-- Action Buttons -->
      <div class="popup-buttons">
        <a href="/donate.php" class="popup-button donate-button">Donate</a>
        <a href="/join.php" class="popup-button join-button">Join Us</a>
      </div>
      
      <!-- Close Button -->
      <button class="popup-close" onclick="closePopup()">✖</button>
    </div>
  </div>


  <script>

</script>




<?php

include 'footer.php'

?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./script.js?v4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
