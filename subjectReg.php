<?php
session_start();
include('sidebar.php');
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
                              <h4>Subject Add 
                                   <a href="subReg.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="code2.php" method="POST">

                                   <div class="mb-3">
                                        <label>Subject Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="subject name">
                                   </div>
                                   <div class="mb-3">
                                        <label>Subject Code</label>
                                        <input type="text" name="code" class="form-control" placeholder="code">
                                   </div>
                                   <div class="mb-3">
                                        <button type="submit" name="save_subject" class="btn btn-primary">Save Subject</button>
                                   </div>


                              </form>
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