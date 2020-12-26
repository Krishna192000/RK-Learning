<?php

$servername = "localhost";
$username = "brahmbhk";
$password = "Ganesh@19012000";
$dbname = "database";

$myusername = $_POST['email'];
$mypassword = $_POST['pswd'];
$s_or_t = $_POST['sort'];

// Create connection
if (!$link = mysql_connect($servername, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}
if (!mysql_select_db($dbname, $link)) {
    echo 'Could not select database';
    exit;
}

$sql    = "SELECT * FROM Person WHERE userId='$myusername' and password='$mypassword' and student_or_teacher='$s_or_t'";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mfnameysql_error();
    exit;
}
if($rs = mysql_fetch_assoc($result)) {
echo $rs['fname'];
?>
<html>
<body>
<form id="jsform" method="get" action="login_success.php">
<input type = "text" name = "Name" value="<?php echo $rs['fname'] ?>">
<input type = "text" name = "course1" value="<?php echo $rs['course1'] ?>">
<input type = "text" name = "course2" value="<?php echo $rs['course2'] ?>">
<input type = "text" name = "cort" value="<?php echo $rs['student_or_teacher'] ?>">
</form>
<?php include '../js/login.js';?>
</body>
</html>

<?php

}
else
{
?>
<html>
<body>
<form id="jsform" method="get" action="start2.php">
<input type = "text" name = "WrongPassword" value="Incorrect password, please try again.">
</form>
<?php include '../js/login.js';?>
</body>
</html>

<?php
}
$conn->close();
?>