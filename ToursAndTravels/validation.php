<?php

error_reporting(0);
$con = new mysqli('localhost', 'root', 'chirag@1825', 'data');
if ($con->connect_error) {
    die('Connection Failed   : ' . $con->connect_error);
} else {
    echo ("connected");
}

$email = $_POST['email'];
$pass = $_POST['pass'];




$sql="select ename and pname from login where ename = '$email' && pname = '$pass'";
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>"; 
    header('location:index.html');
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>"; 
    header('location:login.html'); 
}     
?>