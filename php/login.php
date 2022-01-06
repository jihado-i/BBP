<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="login.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container"><br>
        <h2>Login</h2>
        <form  method="POST">
            <div >
                <input name="user" type="text" placeholder="Username" class="inputs"><br><br>
                <input name="pass" type="text" placeholder="Password" class="inputs"><br><br>
                <button  name="login" id="bb" onclick="location.href='home.php';">Login Now! </button>
            </div>
       </form>
        
    <button class="register" onclick="location.href='signup.php'" >Register</button>
    </div>
</body>
</html>
<?php
require "conn.php";

    session_start();
if(isset($_POST['login'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$qu = "SELECT * FROM signuptable WHERE username = '$user' && pass = '$pass'";
	
	if(mysqli_num_rows(mysqli_query($conn, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['username'] = $user;
        header("Location:anasayfa.php"); 
    } else {
        # eror messege
		echo  '<marquee id="loginerormesege">There is an eror, please check your username or your password</marquee>'
        .'<style> 
        #loginerormesege{
            width:295px; color:red; height:60px; border-radius:5px;
            font-size:20px; font-weight:bold; position:relative;
            left:520px;
        
        }</style>';
    }}
?>