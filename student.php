<html>
<body>
<?php
$username="root";
$password="";
$hostname="localhost";
$r=$_POST['roll'];
$n=$_POST['name'];
$m=$_POST['marks'];
echo "<h2> Your Info is ".$r." ".$n." ".$m."<br>";
$dbhandle=mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySql");
echo "Connected to MySql<br>";
$selected=mysqli_select_db($dbhandle,"student")
or die("Could not use example");
$result=mysqli_query("insert into student values($r,'$n',$m)");
echo "Successful<br>";
$result=mysqli_query("select * from student");
echo "<table border=1>";
echo "<tr>";
echo "<td>Roll No</td>";
echo "<td>Name</td>";
echo "<td>Marks</td></tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row{'roll'}."</td><td>".$row{'name'}."</td><td>".$row{'marks'}."</td>";
echo "</tr>";
}
echo "</table></h2>";
mysqli_close($dbhandle);
?>
</body>
</html>
