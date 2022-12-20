// initializes the starting year
var currentYear = 2022;
// puts the form in one variable for easy manipulation
var yearDropdown = document.getElementById("year");
// loops for the year options (birthdates are from present day until people who are 100 years old)
for (var i = currentYear - 100; i <= currentYear; i++) {
  // initializes a variable to create an option
  var option = document.createElement("option");
  // makes the value of each option be the value of i
  option.value = i;
  // adds the value to the html page
  option.innerHTML = i;
  // creates another option element
  yearDropdown.appendChild(option);
}

// puts the form in one variable for easy manipulation
var ageDropdown = document.getElementById("day");
// loops day options
for (var j = 1; j <= 31; j++) {
  // initializes the variable to create an option
  var option = document.createElement("option");
  // sets the value of each option to whatever the value of j
  option.value = j;
  // displays the value of j to the html page
  option.innerHTML = j;
  // creates another option element
  ageDropdown.appendChild(option);
}

function verify() {
  const form = document.getElementById("myForm");

  const firstname = form.elements.firstname.value;
  const lastname = form.elements.lastname.value;

  const fullname = firstname + " " + lastname;

  // store the values in variables (or you could use local storage or a cookie)
  window.fullname = fullname;

  // redirect to the next page
  window.location = "verify.html";

  // display full name
  var fncont = document.getElementById("fncont");
}

document.getElementById("close-popup").addEventListener("click", function () {
  // Hide popup
  popup.style.display = "none";
});
document.getElementById("close-popup1").addEventListener("click", function () {
  // Hide popup
  popup1.style.display = "none";
});
