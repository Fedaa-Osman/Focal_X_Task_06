<?php
    session_start();
    
    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'fo_db');

    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    $phnum = $_POST['phnum'];

    $dt = " SELECT * from fo_tb where uname = '$uname'";

    $result = mysqli_query($con, $dt);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "The Username You Entered is in use Try Another One Please !";
    }else {
        $reg = " Insert Into fo_tb (uname , name , password , phnum) values ('$uname','$name','$pass','$phnum') ";
        mysqli_query($con, $reg);
        echo " Successfully registered in the database ";
    }