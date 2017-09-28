<?php
include 'functions.php';
head("Register");
if (!$_SESSION['is_logged']===true) {
  if ($_SERVER['REQUEST_METHOD']===POST) {

    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $r_pass=$_POST['repeat_password'];

  try {
    if (!empty($username)) {
      if (preg_match('/^[a-zA-Z0-9]{5,16}$/', $username)) {

      }
      else {
        throw new Exception("Invalid username");
      }
    }
    else {
      throw new Exception("Must enter username");
    }


  } catch (Exception $e) {
    $error = $error . $e -> getMessage();
  }

  }
  else {
    // echo "<p>Not submitted</p>";
  }
}
else {
  header('Location:index.php');
}
 ?>
<div class="goback"><a href="index.php"><== Go Back</a></div>
 <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <label for="inputUsername">Username:</label><input type="text" name="username" id="inputUsername"></br>
 <label for="inputEmail">E-Mail:</label><input type="email" name="email" id="inputEmail"></br>
 <label for="inputPass">Password:</label><input type="text" name="password" id="inputPass"></br>
 <label for="inputR_pass">Repeat Password:</label><input type="text" name="repeat_password" id="inputR_pass"></br>
 <input type="submit" name="submit" value="SUBMIT">
 <p><?php echo $error; ?></p>
</form>




<?php
footer();
 ?>
