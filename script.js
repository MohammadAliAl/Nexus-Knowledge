document.addEventListener("scroll", function() {
    const revealDiv = document.getElementById("revealDiv");
    const rect = revealDiv.getBoundingClientRect();

    // Check if the element is in the viewport
    if (rect.top <= window.innerHeight && rect.bottom >= 0) {
        revealDiv.classList.add("visible"); // Add class to trigger animation
    }
});

const buttons = document.querySelectorAll('button');

buttons.forEach(button =>{
    button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const targetElement = document.getElementById(targetId);

        targetElement.classList.toggle('hidden');
        
    })
})

// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function() {
    const closeButton = document.getElementById('closeButton');

    // Close button functionality
    closeButton.addEventListener('click', function() {
        // Remove the floating video component from the DOM
        const floatingVideo = document.getElementById('floatingVideo');
        floatingVideo.remove(); // Remove the component
    });
});

function studentContact() {
    window.location.href = "StudentContact.html";
  }

  function teacherContact() {
    window.location.href = "TeachersContact"
  }