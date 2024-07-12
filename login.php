
<?php
require ("connection.php"); // assumes connection.php has the connection code


$username = $_POST['username']; // Username to insert
$password = $_POST['password']; // Password to insert

$sql = "INSERT INTO login(username,pwd) VALUES('$username','$password')";
if(mysqli_query($conn,$sql)){
    echo "sucess";
}else{
echo "error".$sql."<br>".mysqli_error($conn);
}
?>
