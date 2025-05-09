console.warn("Please do not paste anything you do not know about!!!!");

// document.head.appendChild(link);

// document.addEventListener('click', function(event) {
//     const dropdowns = document.querySelectorAll('.dropdown');
//     dropdowns.forEach(dropdown => {
//         if (!dropdown.parentElement.contains(event.target)) {
//             dropdown.style.display = 'none';
//         }
//     });
// });


// Scroller



document.getElementById('back-to-top').onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'});
};


window.onscroll = function() {
    const button = document.querySelector('.topBtn');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
}



// Section Seven

let currentIndex = 0;
const carousel = document.getElementById('carousel');
const cards = document.querySelectorAll('.card2');
const totalCards = cards.length;
const visibleCards = 2; // Updated to show 2 cards

function slideLeft() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalCards - visibleCards;
    updateCarousel();
}

function slideRight() {
    currentIndex = (currentIndex < totalCards - visibleCards) ? currentIndex + 1 : 0;
    updateCarousel();
}

function updateCarousel() {
    const translateX = -((100 / visibleCards) * currentIndex);
    carousel.style.transform = `translateX(${translateX}%)`;
}



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


// Section Eight

const swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 3000, // Adjust auto-swipe speed (in milliseconds)
        disableOnInteraction: false,
    },
    pauseOnHover: true, // Stops on hover
});




let currentSlide = 1;

function showSlide(slideIndex) {
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');

    slides.forEach((slide, index) => {
        slide.classList.remove('active');
        indicators[index].classList.remove('active');

        // Adjust the transform property for sliding effect
        if (index === slideIndex - 1) {
            slide.classList.add('active');
            slide.style.transform = 'translateX(0)';
        } else if (index < slideIndex - 1) {
            slide.style.transform = 'translateX(-100%)';
        } else {
            slide.style.transform = 'translateX(100%)';
        }
    });
    indicators[slideIndex - 1].classList.add('active');
    currentSlide = slideIndex; // Update the current slide
}


    // Auto slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide % 3) + 1;
        showSlide(currentSlide);
    }, 5000);



    function validateEmailNotify() {
        const emailField = document.getElementById('email');
        const name = document.getElementById('name').value;
        const email = emailField.value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false; // Prevent form submission
        }

        if (name == '' || name == ' ') {
            alert("Please enter a valid name.");
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }

    let currentIndex13 = 0;
    const track = document.querySelector('.carousel-track1');
    const items = document.querySelectorAll('.carousel-item1');
    const totalItems = items.length;
    const slideInterval = 5000;
    
    function showSlide(index) {
      const slideWidth = items[0].clientWidth;
      track.style.transform = `translateX(-${index * slideWidth}px)`;
    }
    
    function nextSlide() {
      currentIndex13 = (currentIndex13 + 1) % totalItems;
      showSlide(currentIndex13);
    }
    
    // Start the carousel
    setInterval(nextSlide, slideInterval);
    


