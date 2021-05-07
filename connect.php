


<?php

$lovefrom = filter_input(INPUT_POST, 'lovefrom');
$loveto = filter_input(INPUT_POST, 'loveto');

if (!empty($lovefrom)){
if (!empty($loveto)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "love";
// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO calcalutor (lovefrom, loveto)
values ('$lovefrom','$loveto')";

if ($conn->query($sql)){
   
 echo "submited";
 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Name should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}


?>