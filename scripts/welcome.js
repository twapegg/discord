document.getElementById("link").addEventListener("mouseenter", function () {
  // Show the preview box
  document.getElementById("preview").style.display = "block";
});

document.getElementById("link").addEventListener("mouseleave", function () {
  // Hide the preview box
  document.getElementById("preview").style.display = "none";
});
