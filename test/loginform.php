<?php 
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="shortcut icon" type="image/png" href="images/nepal.png">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap');

*{
padding: 0;
margin: 0;
font-family: sans-serif;

}

body{
	background-color: black;
	background-size: cover;

} 
.login-form{
	width: 300px;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%); 
	position: absolute;
	color: #fff;
}
.login-form h1{
	font-size: 30px;
	text-align: center;
	text-transform: uppercase;
font-family: 'Noto Serif', serif;
	margin: 15px 0;
}
.login-form p{
font-size: 	16px;
font-family: 'Roboto Slab', serif;
margin:10px 0;
}
.login-form input{
	font-size: 18px;
	width:100%;
	height: 15px;
	padding: 15px 10px;
	border: 0;
	outline: none;
	border-radius: 5px;
}
.login-form button{
	font-size: 15px;
	font-weight: bold;
	margin:20px 0;
	padding: 10px 15px;
	width: 50%;
	border-radius: 3px;
	border: 0;
	position: relative;
	left: 90px;

}
}
}
}
</style>
</head>
<body>
<div class="login-form">
<h1> login form</h1>

<form method="POST">
<p>User Name </p>
<input type="email" name="email" placeholder="example@gmail.com" required>	
<p>Password</p>
<input type="password" name="pw" placeholder="password" required>
 <button type="submit" name="login">login</button>
</form>
</div>
<?php 
 if (isset($_POST['login'])) {
  $query="SELECT * FROM USERS WHERE email = '$_POST[email]' AND pw = '$_POST[pw]'";
  $data=mysqli_query($conn,$query);
  if (mysqli_num_rows($data)==1) {
  	session_start();
  	$_SESSION['admin']="Welcome to Admin Panel";
  	header("Location: main.php");
  }
  else{
  	echo "<script>alert('Incorrect Email or Password')</script>";
  }
 }

 ?>
</body>
</html>

