// Default USERNAME: AAAAaaaa
// Default PASSWORD: @2Aaaaaa
function validate() {
  // Get the username and password from the form
  var form = document.getElementById("form");
  var popup = document.getElementById("popup");
  var username = document.querySelector("#username").value;
  var password = document.querySelector("#password").value;
  var usernameCheck = false;
  var passwordCheck = false;

  // Validate the username
  if (/^[a-zA-Z]{8}$/.test(username)) {
    // The username is valid
    usernameCheck = true;
  } else {
    // The username is invalid
    popup.style.display = "block";
  }

  // Validate the password
  if (
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
      password
    )
  ) {
    // The password is valid
    passwordCheck = true;
  }

  if (passwordCheck == true && usernameCheck == true) {
    popup.style.display = "block";
  } else {
    // The password is invalid
    popup.style.display = "block";
  }
  document.getElementById("close-popup").addEventListener("click", function () {
    // Hide popup
    popup.style.display = "none";
  });
}
