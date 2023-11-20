<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSM ALOR GAJAH</title>
</head>
<style>
   body {
	width: 97%;
    height: 97vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("https://scontent.fkul3-4.fna.fbcdn.net/v/t31.18172-8/21366684_368408966924899_6694156461306948412_o.jpg?stp=c0.52.1080.563a_dst-jpg_p720x720&_nc_cat=110&ccb=1-7&_nc_sid=300f58&_nc_ohc=qyyl9w9iujAAX-RLozV&_nc_ht=scontent.fkul3-4.fna&oh=00_AfBjermP9yVDuqewUo6m582BzNgk-9zbfZ8FvxohjHBsXw&oe=655F1DDA");
    background-size:cover;
    background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

</style>
<body>
    <form action="teachLogin.php" method="post">
    <h2>TEACHER LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    <label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
    </form>
</body>
</html>