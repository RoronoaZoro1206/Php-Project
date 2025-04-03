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

document.querySelectorAll('.read-more-btn').forEach(button => {
    button.addEventListener('click', function() {
      const cardBody = this.closest('.card-body');
      const cardText = cardBody.querySelector('.card-text');
      const fullText = cardText.getAttribute('data-full-text');
      const previewText = cardText.getAttribute('data-preview-text');
      
      if (this.textContent === 'Read More') {
        cardText.textContent = fullText;
        this.textContent = 'Read Less';
      } else {
        cardText.textContent = previewText;
        this.textContent = 'Read More';
      }
    });
  });
  