<html>
<head>
	<title>info</title>
</head>
<body>

<?php
$user='root';
$pass='';
$db='paper';
$conn =  new mysqli('localhost',$user,$pass,$db);
if($conn->connect_errno > 0)
 {
		die("Unable to connect to database [" . $conn->connect_errno . "]");
 }

$b=$_POST["numb"];
$add1=$_POST["authors"];
$auth=array();

for ($x = 1; $x <= $add1; $x++) {
	$auth[$x]=$_POST["$x"];

$sql = "INSERT INTO author_info(id1,name) VALUES ('$b','$auth[$x]')";
}

$status1=$_POST["pres"];
$name1=$_POST['name'];
$add12 =$_POST['link'];
$b=$_POST['numb'];
$sql = "INSERT INTO pres_info(id1,status,name,link) VALUES ('$b','$status1','$name1','$add12')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</body>
</html>
