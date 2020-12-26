<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" type="text/css" href="../css/start2.css">
</head>

<body>

<br>
<footer id="myFooter"

    <div class="w3-container w3-theme-l2 w3-padding-20">
    	<br>
    	<img class = "circle" alt="This is a logo of RK Learning" src="../images/RK_final.jpg">
      	<h4 class = "makeItRight">RK Learning</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p></p>
    </div>

</footer>
<br>
<div class = "ELearning">
	Welcome to E-Learning

</div>
<div class="first">
	<div class="second"></div>
	<br>
    <div class="container1">
    	<div class="c1">
    		<div class="c2">Student</div>
    		<br>
    		To access, please login with your Id and Password
    		<br><br><br>
            <a href="#" id="button1" class="button">Student</a>
    		<br><br>
    	</div>
    </div>

    <iframe class = "myVideo" src="https://player.vimeo.com/video/71249732?autoplay=1" width="450" height="220" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    
    <div class="container2">
    	<div class="c1">
    		<div class="c2">Faculty/Staff</div>
    		<br>
    		To access, please login with your Id and Password
    		<br><br><br>
    		<a href="#" id="button2" class="button">Faculty/Staff</a>
    		<br><br>
    	</div>
    </div>
<div style="text-align:center">
<h4>
    <?php
         echo $_GET['WrongPassword'];
    ?>
</h4>
</div>
</div>
</div>

<div class = "bg-modal">
	<div class = "modal-contents">
        <div class = "close">+</div>

        <img alt="This is a small image/logo of University student" src="../images/student.png" width = "100" height = "100">

        <form method="POST" action="login.php">
            <input type = "email" name = "email" placeholder = "Email ID" required></input>
            <input type = "password" name = "pswd" placeholder = "Password" required></input>
            <button class = "button">Sumbit</button>
            <input type="hidden" id = "s_or_t" name="sort" value="hi"></input>
        </form>

	</div>
</div>
<?php include '../js/start2.js';?>
</body>
</html>