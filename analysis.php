<?php
include('sidebar.php');
require 'header.php';
$sql ="SELECT * FROM student";
$run = mysqli_query($connect, $sql);
?>

<!doctype html>
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

</head>
<body>
    <section style="padding-top:10px;">
        <div class="container min-vh-100 col-sm-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <h1>Select Student to See Analysis</h1>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="analysis.php">
                                <div class="mb-3">
                                    <select name="form" class="form-select">
                                        <option student="">--Select Form--</option>
                                        <option student="3">3</option>
                                        <option student="4">4</option>
                                    </select>
                                </div><br>
                                <div class="mb-3">
                                    <select name="class" class="form-select">
                                        <option student="">--Select Class--</option>
                                        <option student="actuary">Actuary</option>
                                        <option student="biotechnology">Biotechnology</option>
                                        <option student="dentistry">Dentistry</option>
                                        <option student="engineeing">Engineering</option>
                                        <option student="medicine">Medicine</option>
                                        <option student="robotics">Robotics</option>
                                    </select>
                                </div><br>
                                <div class="mb-3">
                                    <input type="submit" name="search" class="btn btn-primary" student="Filter">
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
if (isset($_POST['search'])) {
    $f = $_POST['form'];
    $cl = $_POST['class'];

    $query = mysqli_query($connect, "SELECT s.studName, s.studUserName, s.studForm, s.studClass,
        CONCAT(
            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'A*' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'A*' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'A*' THEN 1 ELSE 0 END),
                'A*'
            ) ELSE '' END,

        CASE WHEN (
                SUM(CASE WHEN e.G01 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'A' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'A' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'A' THEN 1 ELSE 0 END),
                'A'
            ) ELSE '' END,

            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'B' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'B' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'B' THEN 1 ELSE 0 END),
                'B'
            ) ELSE '' END,

            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'C' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'C' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'C' THEN 1 ELSE 0 END),
                'C'
            ) ELSE '' END,

            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'D' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'D' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'D' THEN 1 ELSE 0 END),
                'D'
            ) ELSE '' END,

            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'E' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'E' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'E' THEN 1 ELSE 0 END),
                'E'
            ) ELSE '' END,

            CASE WHEN (
                SUM(CASE WHEN e.G01 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'F' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'F' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'F' THEN 1 ELSE 0 END),
                'F'
            ) ELSE '' END,

             CASE WHEN (
                SUM(CASE WHEN e.G01 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'G' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'G' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'G' THEN 1 ELSE 0 END),
                'G'
            ) ELSE '' END,
          CASE WHEN (
                SUM(CASE WHEN e.G01 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'U' THEN 1 ELSE 0 END)
            ) > 0 THEN CONCAT(
                SUM(CASE WHEN e.G01 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G02 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G03 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G04 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G05 = 'U' THEN 1 ELSE 0 END) +
                SUM(CASE WHEN e.G06 = 'U' THEN 1 ELSE 0 END),
                'U'
            ) ELSE '' END
        ) AS combined_grades
        FROM student s
        LEFT JOIN exam e ON s.studUserName = e.studUserName
        WHERE s.studForm = '$f' AND s.studClass = '$cl'
        GROUP BY s.studName, s.studUserName, s.studForm, s.studClass");
    if (mysqli_num_rows($query) > 0) { ?>
        <div class="col-lg-12">
            <table class="table table-stripped">
                <thead>
                    <th>Student Name</th>
                    <th>IC Number</th>
                    <th>Form</th>
                    <th>Class</th>
                    <th>Analysis</th>
                </thead>
                <tbody>
                    <?php foreach ($query as $student) { ?>
                        <tr>
                            <td><?= $student['studName'] ?></td>
                            <td><?= $student['studUserName'] ?></td>
                            <td><?= $student['studForm'] ?></td>
                            <td><?= $student['studClass'] ?></td>
                            <td><?= $student['combined_grades'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php
    } else {
        echo "No data found";
    }
} else {
?>
<?php } ?>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>