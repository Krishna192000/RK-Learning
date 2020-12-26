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
$c1 = $_GET['course1'];
$c2 = $_GET['course2'];
$sql    = "SELECT * FROM Courses WHERE Cid='$c1'";
$sql1   = "SELECT * FROM Courses WHERE Cid='$c2'";

$result = mysql_query($sql, $link);
$result1 = mysql_query($sql1, $link);
if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mfnameysql_error();
    exit;
}
if (!$result1) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mfnameysql_error();
    exit;
}
if($rs = mysql_fetch_assoc($result)) {
}
if($rs1 = mysql_fetch_assoc($result1)) {
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
<br>
<div style="font-size: 25px;">
Welcome  <?php
         echo $_GET['Name'];
         $ct = $_GET['cort'];
    ?>,

<div class="courses">

Courses you <?php 
if($ct == "t") 
{
echo "are teaching,";
}
elseif($ct == "s")
{
echo "have taken,";
}
?>
<br><br>
<button id = "button1">
<?php
echo $_GET['course1'];
?></button><br><?php
echo $rs['Name'];
?><br><?php
echo $rs['Timings'];

?><br><br>
<button id = "button2">
<?php
echo $_GET['course2'];
?></button><br><?php
echo $rs1['Name'];
?><br><?php
echo $rs1['Timings'];
?><br>
</div>
</div>

<form id="jsform1" method="get" action="dynamic.php" style="display: none;">
<input type = "text" name = "Name1" value="<?php echo $rs['Name'] ?>">
<input type = "text" name = "courseID" value="<?php echo $rs['Descriptions'] ?>">
</form>
<form id="jsform2" method="get" action="dynamic.php" style="display: none;">
<input type = "text" name = "Name1" value="<?php echo $rs1['Name'] ?>">
<input type = "text" name = "courseID" value="<?php echo $rs1['Descriptions'] ?>">
</form>

<?php include '../js/login_success.js';?>

</body>
</html>