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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teacher View Details
                            <a href="teachReg.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $teacher_id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM teacher WHERE id='$teacher_id' ";
                            $query_run = mysqli_query($connect, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $teacher = mysqli_fetch_array($query_run);
                                ?>

                                        <div class="mb-3">
                                        <label>Teacher Name</label>
                                        <p class="form-control">
                                        <?=$teacher['teacherName'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Name</label>
                                        <p class="form-control">
                                        <?=$teacher['teacherUserName'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone No</label>
                                        <p class="form-control">
                                        <?=$teacher['teacherPhoneNo'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                        <?=$teacher['teacherEmail'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Type</label>
                                        <p class="form-control">
                                        <?=$teacher['user_type'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <p class="form-control">
                                        <?=$teacher['teacherPassword'];?>
                                        </p>
                                    </div>

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