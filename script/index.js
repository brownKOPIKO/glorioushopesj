// script\script.js
document.addEventListener('DOMContentLoaded', function () {
    // Initialize the offcanvasNavbar
    var offcanvasNavbar = new bootstrap.Offcanvas(document.getElementById('offcanvasNavbar'));

    // Add event listener for toggle switch
    var sidebarLinks = document.querySelectorAll('.nav-link');

    sidebarLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default anchor link behavior

            // Get the target section id from the href attribute
            var targetId = this.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetId);

            // Close the offcanvas sidebar
            offcanvasNavbar.hide();

            // Scroll to the target section smoothly after a short delay to allow the offcanvas to close
            setTimeout(function () {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 300); // Adjust the delay as needed
        });
    });

    // Add event listener for scrolling
    function setActiveLink(targetId) {
        // Remove "active" class from all links
        sidebarLinks.forEach(function (link) {
            link.classList.remove('active');
        });

        // Add "active" class to the link corresponding to the current section
        var activeLink = document.querySelector('a[href="#' + targetId + '"]');
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }

    function handleScroll() {
        var scrollPosition = window.scrollY;

        // Iterate through each section and find the one in view
        document.querySelectorAll('section').forEach(function (section) {
            var sectionId = section.getAttribute('id');
            var sectionOffsetTop = section.offsetTop - 100; // Adjust the offset as needed

            if (scrollPosition >= sectionOffsetTop) {
                setActiveLink(sectionId);
            }
        });
    }

    // Event listener for scrolling
    window.addEventListener('scroll', function () {
        handleScroll();
    });

    // Highlight the correct link on page load based on the initial hash
    var initialHash = window.location.hash.substring(1);
    if (initialHash) {
        setActiveLink(initialHash);
    }
});
