// Default USERNAME: Silliman
// Default PASSWORD: IluvU$1r

var attempts = 3;
function validate() {
  // variable declaration to connect with html elements
  var form = document.getElementById("form");
  var message = document.getElementById("try");
  var popup = document.getElementById("popup");
  var popup1 = document.getElementById("popup1");
  var popup2 = document.getElementById("popup2");
  var username = document.querySelector("#username").value;
  var password = document.querySelector("#password").value;
  var currentAttempt = document.getElementById("counter");
  var usernameCheck = false;
  var passwordCheck = false;

  // Validate the username
  if (/^[a-zA-Z]{8}$/.test(username)) {
    // The username is valid
    usernameCheck = true;
  }
  // Validate the password
  if (
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8}$/.test(
      password
    )
  ) {
    // The password is valid
    passwordCheck = true;
  }
  // if both username and password are valid
  if (passwordCheck == true && usernameCheck == true) {
    // display login successful message
    popup.style.display = "block";
  }

  // if either username or password is invalid
  else if (passwordCheck == false || usernameCheck == false) {
    // displays failure message and attempts counter
    popup1.style.display = "block";
    attempts--;
    currentAttempt.innerHTML = attempts;
  }
  // if attempts reaches zero
  if (attempts == 0) {
    // hides the form and displays restricted message
    form.style.display = "none";
    popup1.style.display = "block";
    message.innerHTML = "Restricted";
  }

  document.getElementById("close-popup").addEventListener("click", function () {
    // Hide popup
    popup.style.display = "none";
  });
  document
    .getElementById("close-popup1")
    .addEventListener("click", function () {
      // Hide popup
      popup1.style.display = "none";
    });

  document.getElementById("try").addEventListener("click", function () {
    // Hide popup
    popup1.style.display = "none";
  });

  document
    .getElementById("close-popup2")
    .addEventListener("click", function () {
      // Hide popup
      popup2.style.display = "none";
    });
}

// function to view password as text
function viewPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// function to view popup
function view() {
  var popup2 = document.getElementById("popup2");

  popup2.style.display = "block";
}

// function to exit popup
function exit() {
  var popup2 = document.getElementById("popup2");

  popup2.style.display = "none";
}
