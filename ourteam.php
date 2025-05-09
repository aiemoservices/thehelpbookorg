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

    <?php
     include 'metacommon.php'
     ?>
     <style>
         h1 {
            font-size: 3rem;
        }
        
        /* Hero Section Styles */
        .hero.env {
            backdrop-filter: blur(5px);
            position: relative;
            background-image: url('./assets/team.webp'); /* Placeholder for education background */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 20px;
            text-align: left;
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
     </style>
</head>

<body>

<?php

include 'header.php';

?>

<section class="hero env">
<div class="carousel-content1">
    <h1>Creating Change Together</h1>
    <p>At The HelpBook Foundation, we foster sustainability and social responsibility, inspiring communities to act for a better tomorrow.</p>
    <div class="pg-follow">
    <a href="./news.php" class="follow-btn1">News and Blogs</a>
    </div>
</div>
</section>


    <div class="margin-50"></div>


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




<?php

include 'footer.php';

?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <?php

        require 'script.php';
        
        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
