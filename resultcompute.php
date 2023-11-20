<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="print.css" media="print">

</head>
<body>
    <div class="container">
        <div class="result-slip">
        <?php
            require 'header.php';

                if (isset($_GET['id'])) {
                $student_id = mysqli_real_escape_string($connect, $_GET['id']);
                $query = "SELECT s.studName, s.studUserName, s.studAddress, s.studForm, s.studClass, e.mathResult,
                e.addMathResult, e.bioResult, e.chemResult, e.physicResult, e.esolResult,e.G01, e.G02, e.G03, e.G04, e.G05, e.G06
                            FROM student s
                            LEFT JOIN exam e ON s.studUserName = e.studUserName
                            WHERE s.id = '$student_id'";

                $query_run = mysqli_query($connect, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                                    $student = mysqli_fetch_array($query_run);
                                    ?>
                                        <h1 style="text-align: center;">MAKTAB RENDAH SAINS MARA ALOR GAJAH<img src="https://seeklogo.com/images/M/mrsm-logo-D2D37532EE-seeklogo.com.png" 
                                        style="width:120px; padding-top:10px; padding-left:20px;"></h1><br>
                                        <div class="mb-3">
                                        <label>Student Name:</label>
                                        <?=$student['studName'];?>
                                    </div>
                                    <div class="mb-3">
                                        <label>IC Number:</label>
                                        <?=$student['studUserName'];?>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address:</label>
                                        <?=$student['studAddress'];?>
                                    </div>
                                    <div class="mb-3">
                                        <label>Class:</label>
                                        <?=$student['studForm'].$student['studClass'];?>
                                    </div>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Subject</th>
                                                <th>Code</th>
                                                <th>Marks</th>
                                                <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Mathematics</td><td class="text-center">0580</td></td><td class="text-center"><?=$student['mathResult'];?></td><td class="text-center"><?=$student['G01'];?></td></tr>
                                            <tr><td>Additional Mathematics</td><td class="text-center">0606</td><td class="text-center"><?=$student['addMathResult'];?></td><td class="text-center"><?=$student['G02'];?></td></tr>
                                            <tr><td>Biology</td><td class="text-center">0610</td><td class="text-center"><?=$student['bioResult'];?></td><td class="text-center"><?=$student['G03'];?></td></tr>
                                            <tr><td>Chemistry</td><td class="text-center">0620</td><td class="text-center"><?=$student['chemResult'];?></td><td class="text-center"><?=$student['G04'];?></td></tr>
                                            <tr><td>Physics</td><td class="text-center">0625</td><td class="text-center"><?=$student['physicResult'];?></td><td class="text-center"><?=$student['G05'];?></td></tr>
                                            <tr><td>English</td><td class="text-center">0510</td><td class="text-center"><?=$student['esolResult'];?></td><td class="text-center"><?=$student['G06'];?></td></tr>
                                            </tbody>
                                    </table>

                                    <p>Ungraded (UG) if below 20% except for Additional Mathematics 0606 (Ungraded if below 40%)</p>

                                    <?php
                                } else {
                                    echo "<h4>No Such ID Found</h4>";
                                }
                            }
                    ?>
                    <div class="text-center">
                        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                    </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>