<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'fo_db');

function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);

    $dt = "SELECT * from fo_tb where uname = '$uname' and password = '$password'";

    $result = mysqli_query($con, $dt);

    if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['uname'] === $uname && $row['password'] === $password) {

        echo " Sign in Successfully ... ";
					exit();
				}else{
        echo " Incorect User name or password Try Again Please !! ";
					exit();
				}
			}else{
                echo " Incorect User name or password Try Again Please !! ";
				exit();
			}
		
?>