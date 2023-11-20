<?php
session_start();
include('sidebar.php');
require 'header.php';
?>
<!doctype html>
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

    <div class="container min-vh-100 col-sm-6">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Mark Edit 
                            <a href="studentList.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM student WHERE id='$student_id' ";
                            $query_run = mysqli_query($connect, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>

                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['Id']; ?>">

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <p class="form-control">
                                        <?=$student['studName'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>IC Number</label>
                                        <input type="text" name="uname" value="<?=$student['studUserName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Form</label>
                                        <p class="form-control">
                                        <?=$student['studForm'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Class</label>
                                        <p class="form-control">
                                        <?=$student['studClass'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Mathematics</label>
                                        <input type="text" name="math" value="<?=$student['mathResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Additional Mathematics</label>
                                        <input type="text" name="addmath" value="<?=$student['addMathResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Biology</label>
                                        <input type="text" name="bio" value="<?=$student['bioResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Chemistry</label>
                                        <input type="text" name="chem" value="<?=$student['chemResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Physics</label>
                                        <input type="text" name="physics" value="<?=$student['physicResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>English (ESOL)</label>
                                        <input type="text" name="esol" value="<?=$student['esolResult'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_mark" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                            
                    </div>
                </div>
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