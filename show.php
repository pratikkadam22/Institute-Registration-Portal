<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="success.jpg">
<?php
$username="root";
$password="";
$hostname="localhost";
$r=$_POST['roll'];
$n=$_POST['name'];
$m=$_POST['marks'];
$b=$_POST['batch'];
$d=$_POST['dbms'];
$w=$_POST['wp'];
$c=$_POST['city'];
$u=$_POST['username'];
$p=$_POST['password'];

echo "<table border=1 id='tablecss1'>";
echo "<tr>";
echo "<th>Roll No</th>";
echo "<th>Name</th>";
echo "<th>Marks</th>";
echo "<th>Batch</th>";
echo "<th>DBMS Score</th>";
echo "<th>WP Score</th>";
echo "<th>City</th>";
echo "<th>Username</th>";
echo "<th>Password</th></tr>";
echo "<tr>";
echo "<td>".$r."</td><td>".$n."</td><td>".$m."</td>
<td>".$b."</td><td>".$d."</td><td>".$w."</td>
<td>".$c."</td><td>".$u."</td><td>".$p."</td>";
echo "</tr>";
echo "</table>";

echo "<div class='profile'><h3>MHATRE INSTITUTE REGISTRATION SUCCESSFUL!!!</h3></div>";
$dbhandle=mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySql");
$selected=mysqli_select_db($dbhandle,"student")
or die("Could not use example");
$result=mysqli_query($dbhandle, "insert into student values($r,'$n',$m,$b,$d,$w,'$c','$u','$p')");
mysqli_close($dbhandle);
?>
<b>
<a style="position:absolute;left:1000;top:630" href='index.php'>CLICK HERE TO GO BACK TO HOMEPAGE</a></b>
</body>
</html>
