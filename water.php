<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: login.php");
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
This is where you would be able to purchase bottles of water.
<?php readfile("lib/footer.html"); ?>
</body>
</html>
