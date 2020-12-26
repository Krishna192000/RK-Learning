<?php

$servername = "localhost";
$username = "brahmbhk";
$password = "Ganesh@19012000";
$dbname = "database";

// Create connection
if (!$link = mysql_connect($servername, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}
if (!mysql_select_db($dbname, $link)) {
    echo 'Could not select database';
    exit;
}

?>


<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" type="text/css" href="../css/start2.css">
<br>
<a style="float:right;clear: both;background-color: grey;border: 2px solid white;border-radius: 10px;color: white;display: inline-block;"class = "button floatRight" href = "logout.php">Logout</a>

<footer id="myFooter">

    <div class="w3-container w3-theme-l2 w3-padding-20">
    	<img class = "circle" alt="This is a logo of RK Learning" src="../images/RK_final.jpg">
    </div>

    <div class="w3-container w3-theme-l1">
      <p></p>
    </div>

</footer>
<br><h3>
Welcome to 
<?php
echo $_GET['Name1'];
?>
,<br><br>
<div style="width:70%; margin-right: auto; margin-left:auto; border-radius: 10px; background-color: lightgrey;padding-bottom:30px; padding-top:30px; padding-left:30px; padding-right:30px">
<?php
echo $_GET['courseID'];
?>
</div>
</h3>
</body>
</html>