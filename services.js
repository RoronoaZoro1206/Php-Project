document.addEventListener('DOMContentLoaded', () => {
    // Get references to the hamburger menu and navigation links
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');
  
    // Ensure the navigation links are hidden by default on small screens
    // This is done by default in CSS, but we'll ensure JavaScript doesn't override it.
    navLinks.classList.remove('active'); // Make sure nav links are hidden initially
  
    // Toggle the 'active' class on the navigation links and 'open' class on the hamburger when clicked
    hamburger.addEventListener('click', () => {
      // Toggle the 'active' class to show or hide the nav links
      const isActive = navLinks.classList.toggle('active');
      
      // Toggle the 'open' class on the hamburger icon to change its appearance
      hamburger.classList.toggle('open');
      
      // Update the 'aria-expanded' attribute for accessibility purposes
      hamburger.setAttribute('aria-expanded', isActive);
    });
  
    // JavaScript for back-to-top icon or back to header functionality
    window.onscroll = function() {
      var backToTopButton = document.getElementById("back-to-top");
      
      // Check if the scroll position is greater than 50 pixels
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        backToTopButton.style.display = "flex";
      } else {
        backToTopButton.style.display = "none";
      }
    };
  
    // Modal window functionality
  const buttons1 = document.querySelectorAll('.buttons1');
  const buttons2 = document.querySelectorAll('.buttons2');
  
  // Open modal functionality
  buttons1.forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
  
      const targetModalId = button.getAttribute('href').substring(1); // Get the modal ID from the href
      const modal = document.getElementById(targetModalId);
      
      if (modal) {
        modal.style.display = "block"; // Show the modal
      }
    });
  });
  
  buttons2.forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();
  
      const targetModalId = button.getAttribute('href').substring(1);
      const modal = document.getElementById(targetModalId);
      
      if (modal) {
        modal.style.display = "block";
      }
    });
  });
  
  // Close modal functionality
  const closeButtons = document.querySelectorAll('.close');
  closeButtons.forEach(button => {
    button.addEventListener('click', function() {
      const modal = button.closest('.modal');
      if (modal) {
        modal.style.display = 'none'; // Hide the modal
      }
    });
  });
  
  // Optional: Close modal when clicking outside of the modal content
  window.addEventListener('click', function(event) {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
      if (event.target === modal) {
        modal.style.display = 'none'; // Hide modal if clicked outside the content
      }
    });
  });
  
  
    // Close modal when clicking outside of it
    window.addEventListener('click', function(event) {
      const modal = document.querySelector('.modal');
      if (modal && event.target === modal) {
        modal.style.display = 'none';
      }
    });
  
    // JavaScript for scroll animation with its variations
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
  
    // Observe elements with the 'hidden', 'hidden2', and 'hidden3' classes
    const hiddenElements = document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => observer.observe(el)); // Add each hidden element to the observer
    
    const hiddenElements2 = document.querySelectorAll('.hidden2');
    hiddenElements2.forEach((el) => observer.observe(el)); // Add each hidden element to the observer
    
    const hiddenElements3 = document.querySelectorAll('.hidden3');
    hiddenElements3.forEach((el) => observer.observe(el)); // Add each hidden element to the observer
  });
  