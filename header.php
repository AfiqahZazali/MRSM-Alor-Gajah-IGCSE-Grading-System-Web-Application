<html>
	<head>
		<title>MRSM ALOR GAJAH</title>
	</head>
	<body>
		<?php
		$connect = mysqli_connect("localhost", "root","","fyptest");

		if(!$connect)
		{
			die('ERROR:' .mysqli_connect_error());
		}
		?>
	</body>
</html>