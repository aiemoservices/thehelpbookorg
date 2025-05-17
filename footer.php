<?php
if (basename($_SERVER['PHP_SELF']) == 'footer.php') {
    header("HTTP/1.0 403 Forbidden");
    exit;
}
?>
<style>
    @import url(https://fonts.googleapis.com/css2?family=Montserrat&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css);
</style>
<script src="https://cdn.tailwindcss.com"></script>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#001a24" fill-opacity="1"
        d="M0,256L120,245.3C240,235,480,213,720,202.7C960,192,1200,192,1320,192L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
    </path>
</svg>
<footer class="bg-[#001a24] text-white pt-8 pb-4 sm:pt-16 sm:pb-8 border-b-4 border-red-400">

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div>
                <h3 class="text-xl font-bold mb-6">About HelpBook</h3>
                <div class="logo-box-container m-4">
                    <div class="parallelogram parallelogram-bottom"></div>
                    <div class="parallelogram parallelogram-middle"></div>
                    <div class="parallelogram parallelogram-top">
                        <a href="/">
                            <img src="https://thehelpbook.org/assets/logo.png" alt="Helpbook Logo" class="logo">
                        </a>
                    </div>
                </div>
                <p class="text-gray-400 mb-6 text-justify">The Helpbook Foundation is dedicated to empowering
                    communities
                    through
                    education, youth engagement, and compassionate support. We focus on accessible learning, healthcare,
                    and
                    sustainability to build a brighter, more informed future..</p>
                <div class="flex space-x-4"> <a href="https://m.facebook.com/profile.php?id=61565408164554"
                        target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#0b3c2e] transition-colors">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="https://www.instagram.com/the_Helpbook/" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#e4405f] transition-colors">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://chat.whatsapp.com/D2amvjNlcqLCxl68LNdZmI" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#25D366] transition-colors">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="https://www.youtube.com/@the_helpbook" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#FF0000] transition-colors">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/the-helpbook-foundation-310143339/" target="_blank"
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#0a66c2] transition-colors">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>

                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Pages</h3>
                <ul class="space-y-3">
                    <li><a href="/about.php" class="text-gray-400 hover:text-white">About</a></li>
                    <li><a href="/contact.php" class="text-gray-400 hover:text-white">Contact</a></li>
                    <li><a href="/education.php" class="text-gray-400 hover:text-white">Education</a></li>
                    <li><a href="/adoption.php" class="text-gray-400 hover:text-white">Animals</a></li>
                    <li><a href="/environment.php" class="text-gray-400 hover:text-white">Environment</a></li>
                    <li><a href="/food.php" class="text-gray-400 hover:text-white">Food & Health</a></li>
                    <li><a href="/blood.php" class="text-gray-400 hover:text-white">Blood Donation</a></li>
                    <li><a href="/ourteam.php" class="text-gray-400 hover:text-white">Our Team</a></li>

                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Contact</h3>
                <ul class="space-y-3">
                    <li class="flex items-start"> <span
                            class="material-symbols-outlined mr-3 text-blue-500">location_on</span>
                        <span class="text-gray-400">HOUSE NO :192 KARAMVEER NAGAR,NERELA SHANKARI JK ROAD BHOPAL -
                            462022</span>
                    </li>
                    <li class="flex items-start"> <span
                            class="material-symbols-outlined mr-3 text-yellow-500">phone</span>
                        <span class="text-gray-400">+91 7909402024</span>
                    </li>
                    <li class="flex items-start"> <span class="material-symbols-outlined mr-3 text-red-500">email</span>
                        <span class="text-gray-400">info@thehelpbook.org</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Newsletter</h3>
                <p class="text-gray-400 mb-4">Join our mailing list to receive updates on our work and how you can help.
                </p>
                <form> <input type="email" placeholder="Your email address"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-md focus:ring-2 focus:ring-red-500 focus:border-red-400 mb-0"
                        required="" /> <button type="submit"
                        class="w-full px-4 py-2 bg-red-400 text-white font-medium rounded-md mt-[-20px] hover:bg-red-500 transition-colors">
                        Subscribe </button> </form>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © <span id="year"></span> The HelpBook Foundation. All rights reserved.
                </p>
                <script>
                    document.getElementById("year").textContent = new Date().getFullYear();
                </script>

                <div class="flex space-x-6 mt-4 md:mt-0"> <a href="/privacy.php"
                        class="text-gray-400 text-sm hover:text-white transition-colors">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</footer>