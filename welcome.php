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
Welcome the the homepage!
<?php readfile("lib/footer.html"); ?>
</body>
</html>
