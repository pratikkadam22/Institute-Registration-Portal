<html>
<head>
<style>
#tablecss {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
	position:absolute;
	left:265px;
	top:190px;
}

#tablecss td, #tablecss th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#tablecss tr {background-color: #ddd}

#tablecss tr:hover {background-color: ;}

#tablecss th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
}

#title {
	color: 	#4CAF50;
	text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 0px 3px 0px #777, 0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 0px #333, 0px 8px 7px #001135;
	font: 60px 'ChunkFiveRegular';
	position:absolute;
	top:70px;
	left:250px;
}
</style>
</head>
<body background="trophy.jpg">
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySql");
$selected=mysqli_select_db($dbhandle,"student")
or die("Could not use example");
ECHO "<h1><div id='title'><center>MHATRE INSTITUTE TOPPERS</center></div></h1>";
$result=mysqli_query($dbhandle, "select roll, name, marks from student");
echo "<table border=3 id='tablecss'>";
echo "<tr>";
echo "<th>Roll No</th>";
echo "<th>Name</th>";
echo "<th>Marks</td></th>";
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
