function validate() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

function verify() {
  // get a reference to the elements on the page
  const fncont = document.getElementById("fncont");

  // set the text content of the elements to the stored values
  fncont.innerHTML = window.fullname;
}

document.getElementById("close-popup").addEventListener("click", function () {
    // Hide popup
    popup.style.display = "none";
  });