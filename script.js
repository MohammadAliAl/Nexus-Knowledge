document.addEventListener("scroll", function() {
    const revealDiv = document.getElementById("revealDiv");
    const rect = revealDiv.getBoundingClientRect();

    // Check if the element is in the viewport
    if (rect.top <= window.innerHeight && rect.bottom >= 0) {
        revealDiv.classList.add("visible"); // Add class to trigger animation
    }
});
