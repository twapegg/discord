<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="stylesheets/verify.css" />
  <link rel="icon" href="../images/icon (1).png" type="image/x-icon" />
  <title>Verify Your Details</title>
</head>

<body>
  <section>
    <img src="images/bg-verify.png" alt="bg" />
    <!-- Details Verification -->
    <div class="container">
      <h1>Verify Your Details</h1>
      <p>Full Name: <span><?php
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $fullname = $firstname . ' ' . $lastname;
      echo "$fullname";
      ?></span>
      </p>
      <p>Username: <span><?php
      $username = $_POST['username'];
      echo "$username";
      ?></span></p>
      <p>Password: <span><?php
      $password = $_POST['password'];
      echo "$password";
      ?></span></p>
      <p>Email: <span><?php
      $email = $_POST['email'];
      echo "$email";
      ?></span></p>
      <p>Gender: <span><?php
      $gender = $_POST['gender'];
      echo "$gender";
      ?></span></p>
      <p>Mobile No.: <span><?php
      $username = $_POST['username'];
      echo "$username";
      ?></span></p>
      <p>Birthdate: <span><?php
      $birth_day = $_POST['birthday'];
      $birth_month = $_POST['birthmonth'];
      $birth_year = $_POST['birthyear'];
      $birthdate = $birth_month . ' ' . $birth_day . ', ' . $birth_year;
      echo "$birthdate";
      ?>
        </span></p>
      <div class="buttons">
        <button id="cancel"><a href="login.html">Cancel</a></button>
        <button id="confirm" onclick="validate()">Confirm</button>
      </div>
    </div>

    <!-- Popup box here -->
    <div id="popup" class="popup">
      <div class="up">
        <i class="bi bi-check-circle"></i>
        <h2>Success</h2>
      </div>
      <p>You have successfully created your account!</p>

      <div class="con"><a href="welcome.html">Continue</a></div>
      <button id="close-popup">
        <i class="bi bi-x-circle-fill"></i>
      </button>
    </div>
  </section>
</body>

</html>