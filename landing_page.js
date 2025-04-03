// JAVASCRIPT FOR HAMBURGER ICON IN MEDIA QUERY
document.addEventListener('DOMContentLoaded', () => {
    // Get references to the hamburger menu and navigation links
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    // Toggle the 'active' class on the navigation links and 'open' class on the hamburger when clicked
    hamburger.addEventListener('click', () => {
        // Toggle the 'active' class to show or hide the nav links
        const isActive = navLinks.classList.toggle('active');
        
        // Toggle the 'open' class on the hamburger icon to change its appearance
        hamburger.classList.toggle('open');
        
        // Update the 'aria-expanded' attribute for accessibility purposes
        hamburger.setAttribute('aria-expanded', isActive);
    });
});

// JAVASCRIPT FOR BACK TO TOP ICON OR BACK TO HEADER
window.onscroll = function() {
    // Get the back-to-top button element
    var backToTopButton = document.getElementById("back-to-top");

    // Check if the scroll position is greater than 50 pixels
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        // If yes, display the back-to-top button
        backToTopButton.style.display = "flex";
    } else {
        // If not, hide the back-to-top button
        backToTopButton.style.display = "none";
    }
};

// JAVASCRIPT FOR CAROUSEL
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('cebu-city-gov-carousel');
    const carouselItems = carousel.querySelectorAll('.carousel-item');
    const indicators = carousel.querySelectorAll('.carousel-indicators button');
    const prevButton = carousel.querySelector('.carousel-control-prev');
    const nextButton = carousel.querySelector('.carousel-control-next');

    let currentIndex = 0; // Tracks the current slide
    let interval; // Holds the auto-slide interval
    let carouselInitialized = false; // Prevent reinitialization

    // Function to clear all active states
    const clearActiveStates = () => {
        carouselItems.forEach((item) => item.classList.remove('active'));
        indicators.forEach((indicator) => indicator.classList.remove('active'));
    };

    // Function to update the active slide and indicator
    const updateSlide = (index) => {
        clearActiveStates(); // Ensure no duplicate active states
        currentIndex = index;
        carouselItems[currentIndex].classList.add('active');
        indicators[currentIndex].classList.add('active');
    };

    // Function to change the slide based on direction (1 for next, -1 for prev)
    const changeSlide = (direction) => {
        const newIndex = (currentIndex + direction + carouselItems.length) % carouselItems.length;
        updateSlide(newIndex);
    };

    // Function to restart the auto-slide interval
    const restartInterval = () => {
        clearInterval(interval); // Clear the existing interval
        interval = setInterval(() => changeSlide(1), 5000); // Start a new interval
    };

    // Function to initialize the carousel
    const initializeCarousel = () => {
        if (carouselInitialized) return; // Prevent reinitialization
        carouselInitialized = true;

        // Clear any existing active states
        clearActiveStates();

        // Ensure the first slide is active
        carouselItems[currentIndex].classList.add('active');
        indicators[currentIndex].classList.add('active');

        // Start the auto-slide interval
        restartInterval();

        // Add event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                clearInterval(interval); // Stop auto-transition for manual interaction
                updateSlide(index); // Update to the selected slide
                restartInterval(); // Restart the auto-slide interval
            });
        });

        // Add event listeners to navigation buttons
        nextButton.addEventListener('click', () => {
            clearInterval(interval); // Stop auto-transition
            changeSlide(1); // Move to the next slide
            restartInterval(); // Restart the auto-slide interval
        });

        prevButton.addEventListener('click', () => {
            clearInterval(interval); // Stop auto-transition
            changeSlide(-1); // Move to the previous slide
            restartInterval(); // Restart the auto-slide interval
        });
    };

    // Use Intersection Observer to detect when the carousel is visible
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !carouselInitialized) {
                    initializeCarousel(); // Initialize the carousel when visible
                    observer.unobserve(carousel); // Stop observing after initialization
                }
            });
        },
        {
            root: null, // Viewport is the root
            threshold: 0.5, // Trigger when at least 50% of the carousel is visible
        }
    );

    // Observe the carousel element
    observer.observe(carousel);
});


// JAVASCRIPT FOR SCROLL ANIMATION WITH ITS VARIATIONS
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // Check if the element is in view
        if (entry.isIntersecting) {
            entry.target.classList.add('show'); // Add 'show' class to make the element visible
        } else {
            entry.target.classList.remove('show'); // Remove 'show' class to hide the element
        }
    });
});

// Observe elements with the 'hidden' class
const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el)); // Add each hidden element to the observer

// Observe elements with the 'hidden2' class
const hiddenElements2 = document.querySelectorAll('.hidden2');
hiddenElements2.forEach((el) => observer.observe(el)); // Add each hidden element to the observer

// Observe elements with the 'hidden3' class
const hiddenElements3 = document.querySelectorAll('.hidden3');
hiddenElements3.forEach((el) => observer.observe(el)); // Add each hidden element to the observer