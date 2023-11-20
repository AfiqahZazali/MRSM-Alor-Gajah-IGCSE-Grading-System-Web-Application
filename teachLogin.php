<?php 
session_start(); 
include("header.php");
include("sidebar.php");
include("heading.php");

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: teacherLogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: teacherLogin.php?error=Password is required");
	    exit();
	}else{
        
		$sql = "SELECT * FROM teacher WHERE teacherUserName='$uname' AND teacherPassword='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_array($result);
            if ($row['user_type'] == 'admin'){
                header('Location: adminPage.php');
            }else if($row['user_type'] == 'user'){
                header('Location: userPage.php');
			}
		}else{
			header("Location: teacherLogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: teacherLogin.php");
	exit();
}
