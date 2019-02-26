<?php
include('session.php');
?>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="work.jpg">
<div id="profile"><h1>
<b class="welcome">Welcome :  <i><?php echo $login_session; ?></i></b></h1><br><br>
</div>
<?php
$connection = mysqli_connect("localhost", "root", "", "student");
$query = mysqli_query($connection,"SELECT * from student where username='$user_check'");
echo "<table border=1 id='tablecss'>";
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
while($row=mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>".$row{'roll'}."</td><td>".$row{'name'}."</td><td>".$row{'marks'}."</td>
<td>".$row{'batch'}."</td><td>".$row{'dbms'}."</td><td>".$row{'wp'}."</td>
<td>".$row{'city'}."</td><td>".$row{'username'}."</td><td>".$row{'password'}."</td>";
echo "</tr>";
}
echo "</table>";
?>
<div class="logout">
<form action="logout.php">
<input name="submit" type="submit" value=" LOGOUT ">
</form>
</div>
</body>
</html>
