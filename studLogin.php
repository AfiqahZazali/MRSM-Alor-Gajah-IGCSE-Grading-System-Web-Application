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

			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$username = mysqli_real_escape_string($connect, $_POST['studUserName']);
				$password = mysqli_real_escape_string($connect, $_POST['studPassword']);
			
				$query = "SELECT * FROM student WHERE studUserName = '$username' AND studPassword = '$password'";
				$query_run = mysqli_query($connect, $query);
			
				if (mysqli_num_rows($query_run) > 0) {
		
					$student = mysqli_fetch_array($query_run);
			
					$student_username = $student['studUserName'];
					$result_query = "SELECT * FROM exam WHERE studUserName = '$student_username'";
					$result_run = mysqli_query($connect, $result_query);

					if (mysqli_num_rows($result_run) > 0) {
					
						$result = mysqli_fetch_array($result_run);
						?>

					<div class="container">
                    <h1 style="text-align: center;">MAKTAB RENDAH SAINS MARA ALOR GAJAH<img src="https://seeklogo.com/images/M/mrsm-logo-D2D37532EE-seeklogo.com.png" 
                    style="width:120px; padding-top:10px; padding-left:20px;"></h1><br>
                    <p>Student Name: <?= $student['studName'] ?></p>
                    <p>IC Number: <?= $student['studUserName'] ?></p>
                    <p>Form: <?= $student['studForm'] . $student['studClass'] ?></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Code</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mathematics</td>
                                <td>0580</td>
                                <td><?= $result['mathResult'] ?></td>
                                <td><?= $result['G01'] ?></td>
                            </tr>
                            <tr>
                                <td>Additional Mathematics</td>
                                <td>0606</td>
                                <td><?= $result['addMathResult'] ?></td>
                                <td><?= $result['G02'] ?></td>
                            </tr>
							<tr>
                                <td>Biology</td>
                                <td>0610</td>
                                <td><?= $result['bioResult'] ?></td>
                                <td><?= $result['G03'] ?></td>
                            </tr>
							<tr>
                                <td>Chemistry</td>
                                <td>0620</td>
                                <td><?= $result['chemResult'] ?></td>
                                <td><?= $result['G04'] ?></td>
                            </tr>
							<tr>
                                <td>Physics</td>
                                <td>0625</td>
                                <td><?= $result['physicResult'] ?></td>
                                <td><?= $result['G05'] ?></td>
                            </tr>
							<tr>
                                <td>English (ESOL)</td>
                                <td>0510</td>
                                <td><?= $result['esolResult'] ?></td>
                                <td><?= $result['G06'] ?></td>
                            </tr>
                        </tbody>
                    </table>
					<p>Ungraded (UG) if below 20% except for Additional Mathematics 0606 (Ungraded if below 40%)</p>
                </div>
            </body>
            </html>
            <?php
        } else {
            echo "<h4>No result data found for the student.</h4>";
        }
    } else {
        echo "<h4>Invalid username or password.</h4>";
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