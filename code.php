<?php
session_start();
require 'header.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($connect, $_POST['delete_student']);
    $query = "DELETE FROM student WHERE Id='$student_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: studReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: studReg.php");
        exit(0);
    }
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($connect, $_POST['student_id']);
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $u = mysqli_real_escape_string($connect, $_POST['uname']);
    $ph = mysqli_real_escape_string($connect, $_POST['phoneno']);
    $e = mysqli_real_escape_string($connect, $_POST['email']);
    $ad = mysqli_real_escape_string($connect, $_POST['address']);
    $f = mysqli_real_escape_string($connect, $_POST['form']);
    $cl = mysqli_real_escape_string($connect, $_POST['class']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);
    
    $query = "UPDATE student SET studName='$n',studUserName='$u',studPhoneNo='$ph',studEmail='$e',
    studAddress='$ad',studForm='$f',studClass='$cl',studPassword='$pass' WHERE id='$student_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: studReg.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: studReg.php");
        exit(0);
    }
}

if(isset($_POST['update_mark']))
{
    $student_id = mysqli_real_escape_string($connect, $_POST['student_id']);
    $n = mysqli_real_escape_string($connect, $_POST['uname']);
    $m = mysqli_real_escape_string($connect, $_POST['math']);
    $am = mysqli_real_escape_string($connect, $_POST['addmath']);
    $b = mysqli_real_escape_string($connect, $_POST['bio']);
    $c = mysqli_real_escape_string($connect, $_POST['chem']);
    $p = mysqli_real_escape_string($connect, $_POST['physics']);
    $e = mysqli_real_escape_string($connect, $_POST['esol']);
    
    $query = "UPDATE student SET studUserName='$n',mathResult='$m',addMathResult='$am',bioResult='$b',chemResult='$c',
    physicResult='$p',esolResult='$e' WHERE id='$student_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {

        $ins="INSERT INTO exam(studUserName,mathResult,addMathResult,bioResult,chemResult,physicResult,esolResult) 
        VALUES ('$n','$m','$am','$b','$c','$p','$e')";
        $quey=mysqli_query($connect,$ins);
        if($quey){

            $result="UPDATE exam SET G01 = CASE WHEN mathResult >= 90 AND mathResult <=100 THEN 'A*' WHEN mathResult >= 80 AND mathResult <=89 THEN 'A'
            WHEN mathResult >= 70 AND mathResult <=79 THEN 'B' WHEN mathResult >= 60 AND mathResult <=69 THEN 'C'
            WHEN mathResult >= 50 AND mathResult <=59 THEN 'D' WHEN mathResult >= 40 AND mathResult <=49 THEN 'E' ELSE 'U'
            END";
            $result_run=mysqli_query($connect, $result);

            $result1="UPDATE exam SET G02 = CASE WHEN addMathResult >= 90 AND addMathResult <=100 THEN 'A*' WHEN addMathResult >= 80 AND addMathResult <=89 THEN 'A'
            WHEN addMathResult >= 70 AND addMathResult <=79 THEN 'B' WHEN addMathResult >= 60 AND addMathResult <=69 THEN 'C'
            WHEN addMathResult >= 50 AND addMathResult <=59 THEN 'D' WHEN addMathResult >= 40 AND addMathResult <=49 THEN 'E' ELSE 'U'
            END";
            $result1_run=mysqli_query($connect, $result1);

            $result2="UPDATE exam SET G03 = CASE WHEN bioResult >= 90 AND bioResult <=100 THEN 'A*' WHEN bioResult >= 80 AND bioResult <=89 THEN 'A'
            WHEN bioResult >= 70 AND bioResult <=79 THEN 'B' WHEN bioResult >= 60 AND bioResult <=69 THEN 'C'
            WHEN bioResult >= 50 AND bioResult <=59 THEN 'D' WHEN bioResult >= 40 AND bioResult <=49 THEN 'E' WHEN bioResult >= 30 AND bioResult <=39 THEN 'F' 
            WHEN bioResult >= 20 AND bioResult <=29 THEN 'G'ELSE 'U'
            END";
            $result2_run=mysqli_query($connect, $result2);

            $result3="UPDATE exam SET G04 = CASE WHEN chemResult >= 90 AND chemResult <=100 THEN 'A*' WHEN chemResult >= 80 AND chemResult <=89 THEN 'A'
            WHEN chemResult >= 70 AND chemResult <=79 THEN 'B' WHEN chemResult >= 60 AND chemResult <=69 THEN 'C' WHEN chemResult >= 50 AND chemResult <=59 THEN 'D' 
            WHEN chemResult >= 40 AND chemResult <=49 THEN 'E' WHEN chemResult >= 30 AND chemResult <=39 THEN 'F' 
            WHEN chemResult >= 20 AND chemResult <=29 THEN 'G'ELSE 'U'
            END";
            $result3_run=mysqli_query($connect, $result3);

            $result4="UPDATE exam SET G05 = CASE WHEN physicResult >= 90 AND physicResult <=100 THEN 'A*' WHEN physicResult >= 80 AND physicResult <=89 THEN 'A'
            WHEN physicResult >= 70 AND physicResult <=79 THEN 'B' WHEN physicResult >= 60 AND physicResult <=69 THEN 'C' WHEN physicResult >= 50 AND physicResult <=59 THEN 'D' 
            WHEN physicResult >= 40 AND physicResult <=49 THEN 'E' WHEN physicResult >= 30 AND physicResult <=39 THEN 'F' 
            WHEN physicResult >= 20 AND physicResult <=29 THEN 'G'ELSE 'U'
            END";
            $result4_run=mysqli_query($connect, $result4);

            $result5="UPDATE exam SET G06 = CASE WHEN esolResult >= 90 AND esolResult <=100 THEN 'A*' WHEN esolResult >= 80 AND esolResult <=89 THEN 'A'
            WHEN esolResult >= 70 AND esolResult <=79 THEN 'B' WHEN esolResult >= 60 AND esolResult <=69 THEN 'C'
            WHEN esolResult >= 50 AND esolResult <=59 THEN 'D' WHEN esolResult >= 40 AND esolResult <=49 THEN 'E' ELSE 'U'
            END";
            $result5_run=mysqli_query($connect, $result5);

            $res="UPDATE exam SET Bil01 = (CASE WHEN G01 = 'A*' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'A*' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'A*' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'A*' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'A*' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'A*' THEN 1 ELSE 0 END)";
            $res_run=mysqli_query($connect, $res);

            $res2="UPDATE exam SET Bil02 = (CASE WHEN G01 = 'A' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'A' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'A' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'A' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'A' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'A' THEN 1 ELSE 0 END)";
            $res2_run=mysqli_query($connect, $res2);

            $res3="UPDATE exam SET Bil03 = (CASE WHEN G01 = 'B' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'B' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'B' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'B' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'B' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'B' THEN 1 ELSE 0 END)";
            $res3_run=mysqli_query($connect, $res3);

            $res4="UPDATE exam SET Bil04 = (CASE WHEN G01 = 'C' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'C' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'C' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'C' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'C' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'C' THEN 1 ELSE 0 END)";
            $res4_run=mysqli_query($connect, $res4);

            $res5="UPDATE exam SET Bil05 = (CASE WHEN G01 = 'D' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'D' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'D' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'D' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'D' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'D' THEN 1 ELSE 0 END)";
            $res5_run=mysqli_query($connect, $res5);

            $res6="UPDATE exam SET Bil06 = (CASE WHEN G01 = 'E' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'E' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'E' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'E' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'E' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'E' THEN 1 ELSE 0 END)";
            $res6_run=mysqli_query($connect, $res6);

            $res7="UPDATE exam SET Bil07 = (CASE WHEN G01 = 'F' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'F' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'F' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'F' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'F' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'F' THEN 1 ELSE 0 END)";
            $res7_run=mysqli_query($connect, $res7);

            $res8="UPDATE exam SET Bil08 = (CASE WHEN G01 = 'G' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'G' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'G' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'G' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'G' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'G' THEN 1 ELSE 0 END)";
            $res8_run=mysqli_query($connect, $res8);

            $res9="UPDATE exam SET Bil09 = (CASE WHEN G01 = 'U' THEN 1 ELSE 0 END) + (CASE WHEN G02 = 'U' THEN 1 ELSE 0 END) +
            (CASE WHEN G03 = 'U' THEN 1 ELSE 0 END) + (CASE WHEN G04 = 'U' THEN 1 ELSE 0 END) + (CASE WHEN G05 = 'U' THEN 1 ELSE 0 END) +
            (CASE WHEN G06 = 'U' THEN 1 ELSE 0 END)";
            $res9_run=mysqli_query($connect, $res9);
            
        $_SESSION['message'] = "Mark Inserted Successfully";
        header("Location: studentList.php");
        exit(0);
        }
        
    }
    else
    {
        $_SESSION['message'] = "Mark Not Inserted";
        header("Location: studentList.php");
        exit(0);
    }
}



if(isset($_POST['save_student']))
{
    $n = mysqli_real_escape_string($connect, $_POST['name']);
    $u = mysqli_real_escape_string($connect, $_POST['uname']);
    $ph = mysqli_real_escape_string($connect, $_POST['phoneno']);
    $e = mysqli_real_escape_string($connect, $_POST['email']);
    $ad = mysqli_real_escape_string($connect, $_POST['address']);
    $f = mysqli_real_escape_string($connect, $_POST['form']);
    $cl = mysqli_real_escape_string($connect, $_POST['class']);
    $pass = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "INSERT INTO student (studName,studUserName,studPhoneNo,studEmail,studAddress,studForm,
    studClass,studPassword) VALUES ('$n','$u','$ph','$e','$ad','$f','$cl','$pass')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: studentReg.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not Created";
        header("Location: studentReg.php");
        exit(0);
    }
}
?>