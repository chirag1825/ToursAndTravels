<?php
error_reporting(0);
$con = new mysqli('localhost', 'root', 'chirag@1825', 'data');
if ($con->connect_error) {
    die('Connection Failed   : ' . $con->connect_error);
} else {
    echo ("connected");
}

$uname = $_POST['uname'];
$ename = $_POST['ename'];
$pname = $_POST['pname'];
$dobname = $_POST['dobname'];
if (isset($uname) && isset($ename) && isset($pname) && isset($dobname)) {



    $stmt = $con->prepare("insert into login(uname,ename,pname,dobname) values(?,?,?,?)");
    $stmt->bind_param("ssss", $uname, $ename, $pname, $dobname);
    $stmt->execute();
    echo "Login successfull....";
    header('location:index.html');
    $stmt->close();
}
$con->close();
