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

// JAVASCRIPT FOR PDF DOWNLOAD
document.addEventListener("DOMContentLoaded", () => {
    // Select all buttons that open the modal
    const pdfButtons = document.querySelectorAll(".open-pdf-modal");
    const pdfPreview = document.getElementById("pdfPreview");
    const downloadPdfLink = document.getElementById("downloadPdfLink");

    // Add click event listeners to all buttons
    pdfButtons.forEach(button => {
        button.addEventListener("click", () => {
            // Get the PDF source URL from the button's data attribute
            const pdfSrc = button.getAttribute("data-pdf-src");

            // Update the iframe source for preview
            pdfPreview.src = pdfSrc;

            // Update the download link's href attribute
            downloadPdfLink.setAttribute("href", pdfSrc);
        });
    });

    // Prevent the default action of the download link to avoid immediate download
    downloadPdfLink.addEventListener("click", function (event) {
        // Prevent default action (so it doesn't start downloading before user clicks)
        event.preventDefault();

        // Get the download URL from the link's href attribute
        const downloadUrl = downloadPdfLink.getAttribute("href");

        // Trigger the download by creating a temporary link and clicking it
        const tempLink = document.createElement("a");
        tempLink.href = downloadUrl;
        tempLink.download = "";  // Keep the download attribute empty
        tempLink.click();
    });
});

// JAVASCRIPT FOR SEARCH OR FILTER BASE ON CARD TITLE
document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchInput");
    const cards = document.querySelectorAll(".card-item");

    searchInput.addEventListener("input", () => {
        const query = searchInput.value.toLowerCase().trim();

        cards.forEach(card => {
            const title = card.querySelector(".card-title").textContent.toLowerCase().trim();

            // Show only cards that include the exact query
            if (title.includes(query) && query !== "") {
                card.classList.remove("hidden");
            } else {
                card.classList.add("hidden");
            }
        });

        // Show all cards if the search query is empty
        if (query === "") {
            cards.forEach(card => card.classList.remove("hidden"));
        }
    });
});
