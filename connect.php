<?php

use PhpParser\Node\Expr\New_;

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    

    $mysql="insert into `data` (name,email,gender,mobile,password) Values ('$name','$email','$gender','$mobile','$password')";
    $connect=New mysqli('localhost','root','','form');

    $result=mysqli_query($connect,$mysql);
    if ($result) {
        echo "Data submitted";}
        else {
            die(mysqli_error($connect));
        }
        # code...
    }
























?>