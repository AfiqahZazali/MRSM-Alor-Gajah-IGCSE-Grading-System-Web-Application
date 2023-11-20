<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSM ALOR GAJAH</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawespm.com/a076d05399.js"></script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        user-select: none;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    .sidebar{
        position: fixed;
        width: 260px;
        height: 100%;
        left: 0;
        background: #1b1b1b;
    }
    .sidebar .text{
        color: white;
        font-size: 19px;
        font-weight:600;
        line-height: 40px;
        text-align: center;
        background: #1e1e1e;
        letter-spacing: 1px;
    }
    nav ul{
        background: #1b1b1b;
        height: 100%;
        width: 100%;
        list-style: none;
    }
    nav ul li{
        line-height: 60px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    nav ul li a{
        color: white;
        text-decoration: none;
        font-size: 17px;
        padding-left: 40px;
        display: block;
        width: 100%;
        border-left: 3px solid transparent;
    }
    nav ul li a:hover{
        color: lightblue;
        background: #1e1e1e;
        border-left-color: lightblue;
    }
    nav ul ul{
        position: static;
        display: none;
    }
    nav ul .reg-show.show{
        display: block;
    }
    nav ul .mark-show.show1{
        display: block;
    }
    nav ul ul li{
        line-height: 42px;
        border-bottom:none;
    }
    nav ul ul li a{
        font-size: 17px;
        color: #e6e6e6;
        padding-left: 80px;
    }
    img{
        width: 60px;
        cursor: pointer;
        padding-top: 10px;
        padding-right: 10px;
    }
</style>
<body>
    <nav class="sidebar">
        <div class="text"><a href="adminPage.php"><img src="https://seeklogo.com/images/M/mrsm-logo-D2D37532EE-seeklogo.com.png" class="logo"></a></div>
        <h5 class="text">MRSM ALOR GAJAH</h5>
        <ul>
            <li><a href="#" class="reg-btn">Registration</a>
            <ul class="reg-show">
                <li><a href="studentReg.php">Register Student</a></li>
                <li><a href="teacherReg.php">Register Teacher</a></li>
                <li><a href="subjectReg.php">Register Subject</a></li>
            </ul>
        </li>
            <li><a href="#" class="mark-btn">Mark and Grade</a>
            <ul class="mark-show">
                <li><a href="gradingCriteria.php">Grade Scale</a></li>
                <li><a href="studentList.php">Enter mark</a></li>
            </ul>
        </li>
        <li><a href="studentList2.php">Result</a></li>
        <li><a href="analysis.php">Analysis</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <script>
        $('.reg-btn').click(function(){
            $('nav ul .reg-show').toggleClass("show");
        });
        $('.mark-btn').click(function(){
            $('nav ul .mark-show').toggleClass("show1");
        });
    </script>
    </body>
    </html>
