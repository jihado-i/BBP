<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Icons-->
    <script src="https://kit.fontawesome.com/714bdfdf62.js" crossorigin="anonymous"></script>
    <!-- Css file -->
    <link rel="stylesheet" href="css/signup-login.css">
    <title>Document</title>
</head>
<body id="signupbody">

    <div class="signup_box">

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

            <div class="signuplogo">
                <img src="images/user_icon.png" id="usericon" ><br>
            </div><hr id="underlogoline">

            <div class="inputs">

                <br><label for="inp1">Username :</label>
                <input minlength="6"  maxlength="20" class="inp" id="inp1" type="text" name="username"><br><br>

                <label for="inp2">Email :</label>
                <input  minlength="15"  class="inp" id="inp2" type="text" name="email"><br><br>

                <label for="inp3">Password :</label>
                <input  minlength="6" maxlength="20" class="inp" id="inp3" type="text" name="pass"><br><br>

                <!-- buttons Submit and Clear -->
                <button type="reset" name="clear" class="signupbtn">Clear</button>
                <button type="submit" name="send" class="signupbtn">Send</button><br>

                <p>If you registered you can login from </p>
                <button id="login_btn" name="loginbtn" <?php if(isset($_POST['loginbtn'])){
                    header('location:login.php');
                }
                    
                    ?>>Login</button>

            </div>
        </form>
    </div>

</body>
</html>

<?php

        require "conn.php";
   

        if(isset($_POST['send'])){
            $username = strip_tags($_POST['username']);
            $email = strip_tags($_POST['email']);
            $pass= strip_tags($_POST['pass']);

            $query = "INSERT INTO signuptable (username,email,pass) VALUES('$username','$email','$pass')";
            

            if(mysqli_query($conn,$query)){
                echo "<marquee  style= '  width:370px; color:rgb(43, 230, 29); margin:50px 0 0 480px; background-color:black;    border-radius: 10px;                ' >  Veriler Başarılı bir şekilde Gönderilmiştir!</marquee>";
            }
            else{
                #verileriniz Gönderilmemiştir mesajı styleli
                echo "<div style='color:red; background-color:silver; width:260px; margin:20px 0 0 510px;'>"."Verileriniz Gönderilmemiştir!"."</div>";
            }

        }
?>