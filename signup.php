<html lang="en">

<head>
  <!-- the following meta tags tell the browser the following:
        - to use UTF-8 in interpreting to machine code
        - to allow suport for older versions of IE
        - sets the width of the page to follow the device's screen -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Discord | Sign Up</title>
  <link rel="stylesheet" href="stylesheets/sign-up_styles.css" />
</head>

<body>

  <section>
    <!--displays the background image-->
    <img src="images/bg-signup.png" />
    <!--start of the container-->
    <form action="signup.php" method="post" class="container">
      <!-- start of the input section-->
      <span class="header">Create an Account</span>
      <!-- starts the columned inputs -->
      <div class="column1">
        <label class="label">FIRST NAME</label>
        <input type="text" class="input" placeholder="Enter first name" />
        <label class="label">USERNAME</label>
        <input type="text" class="input" name="username" placeholder="Enter username" />
        <label class="label">MOBILE NUMBER</label>
        <input type="text" class="input" placeholder="+63 000 0000 000" />
      </div>
      <!-- asks for input -->
      <div class="column2">
        <label class="label">LAST NAME</label>
        <input type="text" class="input" placeholder="Enter last name" />
        <label class="label">PASSWORD</label>
        <input type="text" class="input" name="password" placeholder="Enter password" />
        <!-- asks the user their gender identification from
                            a series of choicees -->
        <label class="label">GENDER</label>
        <br />
        <!-- the choicees -->
        <select class="input">
          <option>--Gender--</option>
          <option>Male</option>
          <option>Female</option>
          <option>Non-Binary</option>
          <option>Attack Helicopter</option>
          <option>Toyota Camry</option>
          <option>Other</option>
          <option>Rather Not Say</option>
        </select>
      </div>
      <!-- end of the columned inputs -->
      <div class="sec-box">
        <div class="email">
          <!-- email input -->
          <label class="label">EMAIL</label>
          <input type="text" class="input" placeholder="kimfaburada@domain.com" />
        </div>
        <div class="birthday">
          <!-- start of the birthdate inputs -->
          <label class="label">DATE OF BIRTH</label>
          <br />
          <!-- selection of birthmonths -->
          <select id="month" class="birthdate">
            <option>--Birth Month--</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
          <!-- selection of the choices are looped using JavaScript-->
          <select id="day" class="birthdate">
            <option value="">--Birth Date--</option>
          </select>
          <!-- selection of birthyears the choices are looped using JavaScript -->
          <select id="year" class="birthdate">
            <option value="">--Birth Year--</option>
          </select>
        </div>
        <!-- end of the input section -->
        <div class="lower">
          <!-- button for submission of form -->
          <button type="submit" name="submit" value="Submit" class="continue">Continue</button>
          <br />
          <span>
            <!-- redirects to a page if user has no account yet -->
            <a href="login.html"> Already have an account? </a>
          </span>
        </div>
      </div>
    </form>


    <!-- 
    <form action="login.php" method="post">
      Username: <input type="text" name="username"><br>
      Password: <input type="password" name="password"><br>
      <input type="submit" value="Submit">
    </form> -->
  </section>
</body>

</html>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (checkUsername($username) && checkPassword($password)) {
    echo "
    <script>
alert('Successfully signed up!');
    </script>";
  } else {
    echo "<script>alert('Invalid username or password')</script>";
  }
}

function checkUsername($username)
{
  if (strlen($username) == 8 && preg_match('/^[a-zA-Z]+$/', $username)) {
    return true;
  }
}

function checkPassword($password)
{
  if (strlen($password) == 8 && preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/', $password)) {
    return true;
  }
}
?>