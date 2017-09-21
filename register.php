<?php
session_start();
include 'functions.php';
head("Register");
if (condition) {
  # code...
}

 ?>
<div class="goback"><a href="index.php"><== Go Back</a></div>
 <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <label for="inputUsername">Username:</label><input type="text" name="username" id="inputUsername"></br>
 <label for="inputEmail">E-Mail:</label><input type="email" name="email" id="inputEmail"></br>
 <label for="inputPass">Password:</label><input type="text" name="password" id="inputPass"></br>
 <label for="inputR_pass">Repeat Password:</label><input type="text" name="repeat_password" id="inputR_pass"></br>
 </form>




<?php
footer();
 ?>
