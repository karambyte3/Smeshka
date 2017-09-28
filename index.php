<?php
session_start();
include 'functions.php';
head("Home");
if ($_SESSION['is_logged']===true) {

}
else {
  echo '<a href="register.php">Register here</a>';
}
?>

<?php
footer();
 ?>
