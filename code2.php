<?php
session_start();
require 'header.php';

if(isset($_POST['delete_subject']))
{
    $subject_id = mysqli_real_escape_string($connect, $_POST['delete_subject']);
    $query = "DELETE FROM subjects WHERE id='$subject_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Subject Deleted Successfully";
        header("Location: subReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Subject Not Deleted";
        header("Location: subReg.php");
        exit(0);
    }
}


if(isset($_POST['update_subject']))
{
    $subject_id = mysqli_real_escape_string($connect, $_POST['subject_id']);
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $c = mysqli_real_escape_string($connect, $_POST['code']);
    
    $query = "UPDATE subjects SET subjectName='$n',subjectCode='$c' WHERE id='$subject_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Subject Updated Successfully";
        header("Location: subReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Subject Not Updated";
        header("Location: subReg.php");
        exit(0);
    }
}



if(isset($_POST['save_subject']))
{
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $c = mysqli_real_escape_string($connect, $_POST['code']);
   

    $query = "INSERT INTO subjects (subjectName,subjectCode) VALUES ('$n','$c')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Subject Created Successfully";
        header("Location: subjectReg.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Subject Not Created";
        header("Location: subjectReg.php");
        exit(0);
    }
}
?>