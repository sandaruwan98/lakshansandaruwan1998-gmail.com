<?php

session_start();

$host="localhost";
$dbname="loginsys";
$errors=[];
//connct to database
$db=mysqli_connect($host,"root","",$dbname,'8080') or die("could not connect to database");

//get inputs to register
$username=mysqli_real_escape_string($db,$_POST["username"]);
$email=mysqli_real_escape_string($db,$_POST["email"]);
$pass1=mysqli_real_escape_string($db,$_POST["pass1"]);
$pass2=mysqli_real_escape_string($db,$_POST["pass2"]);

//form validation
if (empty($username)) { array_push($errors,"Username is not entered");}
if (empty($email)) { array_push($errors,"Email is not entered");}
if (empty($pass1)) { array_push($errors,"Password is not entered");}
if (empty($pass2)) { array_push($errors,"Password2 is not entered");}
if ($pass1!=$pass2) { array_push($errors,"Passwords does not match");}

$user_check_query="SELECT username FROM user WHERE username = $username OR email = $email LIMIT 1";
$result=mysqli_query($db,$user_check_query);
$user_record=mysqli_fetch_assoc($result);

if ($user_record) {
    if($user_record["username"] == $username){ array_push($errors,"Username already exists"); }
    if($user_record["email"] == $email){ array_push($errors,"Email already exists"); }
}


?>