<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

$name = $_POST['idd'];
$pwd = $_POST['pwdd'];

$servername = "usrsS";
$username = "root";
$password = "";
$host = "localhost";

$conn = mysqli_connect($host,$username,$password,$servername);

if(mysqli_connect_errno()){
    die("connection failed because :" . mysqli_connect_error());
}
$sql = "SELECT * FROM usrs WHERE names = '$name'";
$result = mysqli_query($conn, $sql);

$que_ry = "SELECT * FROM usrs WHERE names = '$name'";
$res = mysqli_query($conn, $que_ry);
$all = mysqli_fetch_array($res);


if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        if (password_verify($pwd,$row['passwords'])){
            $_SESSION['myid'] = $row['id'];
            $_SESSION['myname'] = $row['names'];
            $_SESSION['myemail'] = $row['emails'];
            $_SESSION['mytitle'] = $row['title'];
            $_SESSION['mycolor'] = $row['colors'];
            $_SESSION['mypp'] = $row['pp'];
            $_SESSION['mygrad'] = $row['grad'];
            // echo $_SESSION['mytitle'];
            header("Location:../html/home.php",true,302);
        }
        else{
            header("Location:../html/connection.php",true,302);
            $_SESSION['visible'] = 1;
        }
        
    }
}
else{
    header("Location:../html/connection.php",true,302);
    $_SESSION['visible'] = 2;
}
?>