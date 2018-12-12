<!DOCTYPE html>
<?php 
session_start();
$sql=mysqli_connect("localhost","root","","rawatinap"); //database connectivity

if(isset($_POST['Submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($sql,"select* from user where username='$username' AND password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
header("location:Home.php");   	
}
else
{
	echo"<script>alert('Password atau Username  anda salah!')</script>";
}
}
?>
<html>
<head>
    <title>page</title>
    <link rel="stylesheet" type="text/css" href="./css/LoginForm2.css">
</head>
<body>

    <div class="loginbox">
        <img src="./assets/images/download.png" class="user">
        <h2>Login System</h2>
        <form action="" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required="">
            <p>Password</p>
        <input type="password" name="password" placeholder="*******" required="">
        <input type="submit" name="Submit" value="Sign In">
        <a href="#">Forget Password</a>
        </form>
    </div>
</body>
</html>