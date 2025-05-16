<?php
if (basename($_SERVER['PHP_SELF']) == 'header.php') {
    header("HTTP/1.0 403 Forbidden");
    exit;
}
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W14SL53CKM"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-W14SL53CKM');
</script>

<div class="navbar">
    <div class="navbar-left">
        <div class="logo-box-container">
            <div class="parallelogram parallelogram-bottom"></div>
            <div class="parallelogram parallelogram-middle"></div>
            <div class="parallelogram parallelogram-top">
                <a href="/">
                    <img src="https://thehelpbook.org/assets/logo.png" alt="Helpbook Logo" class="logo">
                </a>
            </div>
        </div>
        <div class="navbar-links">
            <a href="/">Home</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <a href="/education.php">Education</a>
            <a href="/adoption.php">Animals</a>

            <div class="dropdown">
                <a class="dropdown-toggle block">More&nbsp;<small><i class="fa-solid fa-angle-down"></i></small>
                </a>
                <div class="dropdown-menu">
                    <a href="/environment.php">Environment</a>
                    <a href="/food.php">Food & Health</a>
                    <a href="/blood.php">Blood Donation</a>
                </div>
            </div>

            <a href="/ourteam.php">Our Team</a>

            <style>
                .dropdown {
                    position: relative;
                    cursor: pointer;
                    display: inline-block;
                }

                .dropdown-menu {
                    display: none;
                    position: absolute;
                    border-radius: 5px;
                    backdrop-filter: blur(10px);
                    background-color: rgba(0, 26, 36, 0.8);
                    min-width: 180px;
                    z-index: 1000;
                }

                .dropdown-menu a {
                    color: white;
                    padding: 10px 15px;
                    display: block;
                    text-decoration: none;
                    white-space: nowrap;
                }

                .dropdown:hover .dropdown-menu {
                    display: block;
                }

                .dropdown-menu a:hover {
                    color: white;
                }
            </style>

        </div>

    </div>
    <a href="./join.php" class="help-now"><i class="fa-solid fa-heart"></i>&nbsp;Join Now</a>
    <div class="barsbtn">
        <i class="fa-solid fa-bars"></i>
    </div>
</div>



<div class="navbarBg"></div>

<nav class="navbarMob">
    <ul>
        <li><a href="/">Home</a>
            <div class="line"></div>
        </li>
        <li><a href="/about.php">About</a>
            <div class="line"></div>
        </li>
        <li><a href="/contact.php">Contact</a>
            <div class="line"></div>
        </li>
        <li><a href="/education.php">Education</a>
            <div class="line"></div>
        </li>
        <li><a href="/adoption.php">Animals</a>
            <div class="line"></div>
        </li>
        <li><a href="/environment.php">Environment</a>
            <div class="line"></div>
        </li>
        <li><a href="/food.php">Food & Health</a>
            <div class="line"></div>
        </li>
        <li><a href="/blood.php">Blood Donation</a>
            <div class="line"></div>
        </li>
        <li><a href="/ourteam.php">Our Team</a>
            <div class="line"></div>
        </li>
    </ul>
    <div class="sepratorSocial"></div>
    <div class="socialNav">
        <a href="https://m.facebook.com/profile.php?id=61565408164554" target="_blank" rel="noopener noreferrer"><i
                class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/the_Helpbook/" target="_blank" rel="noopener noreferrer"><i
                class="fa-brands fa-instagram"></i></a>
        <a href="https://chat.whatsapp.com/D2amvjNlcqLCxl68LNdZmI" target="_blank" rel="noopener noreferrer"><i
                class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.youtube.com/@the_helpbook" target="_blank" rel="noopener noreferrer"><i
                class="fa-brands fa-youtube"></i></a>
        <a href="https://www.linkedin.com/in/the-helpbook-foundation-310143339/" target="_blank"
            rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
    </div>
</nav>

<div class="navclose">
    <i class="fa-solid fa-xmark"></i>
</div>


<script>
    const navbarBtn = document.querySelector(".barsbtn")
    navbarBtn.addEventListener('click', () => {
        document.querySelector(".navclose").classList.add("showNav")
        document.querySelector(".navbarBg").classList.add("showNav")
        document.querySelector(".navbarMob").classList.add("showNav")

    })



    const navbarClose = document.querySelector(".navclose")

    navbarClose.addEventListener('click', () => {
        document.querySelector(".navclose").classList.remove("showNav")
        document.querySelector(".navbarBg").classList.remove("showNav")
        document.querySelector(".navbarMob").classList.remove("showNav")
    })


</script>