<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>	
<html>
<head>
<title>MHATRE INSTITUTE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="books.jpg"><br>
<h1><div id="title"><center>WELCOME TO MHATRE INSTITUTE</center></div></h1>
<div class="signup">
<form name="signup" method="post" action="show.php">
<h2><center><b>NEW TO MHATRE Institute???<b></center></h2><br>
<a href="signup.php"><h3>SIGN UP NOW!<h3></a>
</form>
</div>
<div class="visit">
<form name="visit">
<h2><center><b>JUST A VISITOR???</b></center></h2><br>
<a href="display.php"><h3>TAKE A LOOK AT OUR STARS!!!</h3></a>
</form>
</div>
<div class="form-style-8">
<form action="" method="post">
<h2><center><b>LOG IN TO YOUR ACCOUNT</b></center></h2><br><br>
<input id="username" name="username" placeholder="username" type="text"><br><br><br>
<input id="password" name="password" placeholder="**********" type="password"><br><br><br><br>
<input name="submit" type="submit" value=" LOGIN ">
<span><?php echo "<br>"."<br>"."<br>"."<br>".$error; ?></span>
</form>
</div>
</body>
</html>