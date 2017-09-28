<?php
function head($title)
{
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
}

function footer()
{
  echo "</body></html>";
}
?>
