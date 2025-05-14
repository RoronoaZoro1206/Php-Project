
window.recentDownloads = {};

// Helper function to prevent multiple downloads from being counted in a short time
function shouldTrackDownload(pdfName) {
    const now = new Date().getTime();
    if (window.recentDownloads[pdfName] && (now - window.recentDownloads[pdfName] < 3000)) {
        console.log('Skipping duplicate download tracking for', pdfName);
        return false;
    }
    window.recentDownloads[pdfName] = now;
    return true;
}

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

// Function to load download counts for all PDFs
function loadDownloadCounts() {
    const pdfCards = document.querySelectorAll('.card');
    
    pdfCards.forEach(card => {
        const button = card.querySelector('.open-pdf-modal');
        if (button) {
            const pdfSrc = button.getAttribute('data-pdf-src');
            if (pdfSrc) {
                const pdfName = pdfSrc.split('/').pop();
                fetchDownloadCount(pdfName, card);
            }
        }
    });
}

// Fetch download count for a specific PDF
function fetchDownloadCount(pdfName, card) {
    // Add timestamp to prevent caching
    const timestamp = new Date().getTime();
    fetch(`track-download.php?pdf=${encodeURIComponent(pdfName)}&nocache=${timestamp}`, {
        headers: {
            'Cache-Control': 'no-cache, no-store, must-revalidate',
            'Pragma': 'no-cache',
            'Expires': '0'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        // Rest of your code remains the same
        let countDisplay = card.querySelector('.download-count');
        if (!countDisplay) {
            countDisplay = document.createElement('div');
            countDisplay.className = 'download-count';
            const cardBody = card.querySelector('.card-body') || card;
            cardBody.appendChild(countDisplay);
        }
        
        let downloadInfo = `<div class="download-header"><i class='bx bx-download'></i> Downloads: <span class="count-number">${data.count}</span></div>`;
        if (data.last_downloaded) {
            downloadInfo += `<div class="download-timestamp">Last: ${data.last_downloaded}</div>`;
        }
        countDisplay.innerHTML = downloadInfo;
    })
    .catch(error => console.error('Error fetching download count:', error));
}

// Track download and update counter function
function trackPdfDownload(pdfName, cardSelector) {
    if (!shouldTrackDownload(pdfName)) {
        console.log('Skipped duplicate download tracking for:', pdfName);
        return;
    }
    
    console.log('Tracking download for:', pdfName);
    
    // Send tracking event
    const formData = new FormData();
    formData.append('pdf', pdfName);
    
    fetch('track-download.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Download tracked successfully');
            // Update the count display if we have a card selector
            if (cardSelector) {
                const card = typeof cardSelector === 'function' ? cardSelector() : cardSelector;
                if (card) {
                    setTimeout(() => fetchDownloadCount(pdfName, card), 500);
                }
            }
        }
    })
    .catch(error => console.error('Error tracking download:', error));
}

// DOWNLOAD TRACKING - MAIN IMPLEMENTATION
document.addEventListener('DOMContentLoaded', function() {
    // Initialize download counters
    loadDownloadCounts();
    
    // 1. Track main download button clicks
    document.querySelectorAll('[id^="downloadPdfLink"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const pdfPath = this.getAttribute('href');
            const pdfName = pdfPath.split('/').pop();
            
            const modalId = this.closest('.modal').id;
            const button = document.querySelector(`[data-bs-target="#${modalId}"]`);
            const card = button ? button.closest('.card') : null;
            
            trackPdfDownload(pdfName, card);
        });
    });

    // Add this function at the beginning of your file, right after the shouldTrackDownload function
    function isCloseButton(element) {
        // Check if this is a Bootstrap modal close button
        return (
            element.classList.contains('close') || 
            element.classList.contains('btn-close') ||
            element.getAttribute('data-bs-dismiss') === 'modal' ||
            element.getAttribute('data-dismiss') === 'modal' ||
            element.classList.contains('modal-header-close') ||
            (element.tagName === 'BUTTON' && element.closest('.modal-header')) ||
            element.closest('[data-bs-dismiss="modal"]') ||
            element.closest('[data-dismiss="modal"]') ||
            // Check for the X icon in the modal header
            (element.textContent === '×' && element.closest('.modal-header')) ||
            element.classList.contains('btn-close') ||
            // The specific X button in your modal
            (element.textContent === '×' && 
            element.style && 
            (element.style.position === 'absolute' || 
            element.closest('[style*="position: absolute"]')))
        );
    }
        
    // Listen for clicks in toolbar areas that might be download buttons
    document.addEventListener('click', function(e) {
        // Target raw svg elements, toolbar buttons, etc.
        const isDownloadButton = 
            (e.target.matches('[title="Download"]') || 
             e.target.matches('[download]') ||
             e.target.matches('svg path[d*="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"]') || 
             e.target.classList.contains('download-icon')) || 
            (e.target.closest('button') && (
                e.target.closest('button').matches('[title="Download"]') ||
                e.target.closest('button').matches('[download]') ||
                e.target.closest('button').classList.contains('download')
            )) ||
            (e.target.closest('.pdf-toolbar-download') || e.target.closest('[data-download]'));
            
        if (isDownloadButton) {
            // Find containing modal and associated PDF
            const modal = e.target.closest('.modal');
            if (modal) {
                const iframe = modal.querySelector('iframe');
                if (iframe) {
                    const pdfPath = iframe.getAttribute('src');
                    const pdfName = pdfPath.split('/').pop();
                    
                    // Find corresponding card
                    const button = document.querySelector(`[data-bs-target="#${modal.id}"]`);
                    const card = button ? button.closest('.card') : null;
                    
                    trackPdfDownload(pdfName, card);
                }
            }
        }
    }, true);
});

