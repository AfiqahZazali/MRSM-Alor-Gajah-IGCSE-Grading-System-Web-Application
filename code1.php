<?php
session_start();
require 'header.php';

if(isset($_POST['delete_teacher']))
{
    $teacher_id = mysqli_real_escape_string($connect, $_POST['delete_teacher']);
    $query = "DELETE FROM teacher WHERE id='$teacher_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Teacher Deleted Successfully";
        header("Location: teachReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Teacher Not Deleted";
        header("Location: teachReg.php");
        exit(0);
    }
}


if(isset($_POST['update_teacher']))
{
    $teacher_id = mysqli_real_escape_string($connect, $_POST['teacher_id']);
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $u = mysqli_real_escape_string($connect, $_POST['uname']);
    $ph = mysqli_real_escape_string($connect, $_POST['phoneno']);
    $e = mysqli_real_escape_string($connect, $_POST['email']);
    $ut = mysqli_real_escape_string($connect, $_POST['user_type']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);
    
    $query = "UPDATE teacher,subjects SET teacherName='$n',teacherUserName='$u',teacherPhoneNo='$ph',teacherEmail='$e',user_type='$ut',teacherPassword='$pas',teacherPassword='$pass' WHERE id='$teacher_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Teacher Updated Successfully";
        header("Location: teachReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Teacher Not Updated";
        header("Location: teachReg.php");
        exit(0);
    }
}



if(isset($_POST['save_teacher']))
{
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $u = mysqli_real_escape_string($connect, $_POST['uname']);
    $ph = mysqli_real_escape_string($connect, $_POST['phoneno']);
    $e = mysqli_real_escape_string($connect, $_POST['email']);
    $ut = mysqli_real_escape_string($connect, $_POST['user_type']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "INSERT INTO teacher (teacherName,teacherUserName,teacherPhoneNo,teacherEmail,user_type,
    teacherPassword) VALUES ('$n','$u','$ph','$e','$ut','$pass')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Teacher Created Successfully";
        header("Location: teacherReg.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Teacher Not Created";
        header("Location: teacherReg.php");
        exit(0);
    }
}
?>