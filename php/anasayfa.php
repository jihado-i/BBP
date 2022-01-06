<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/714bdfdf62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/anasayfa.css">
    <title>Document</title>
</head>
<body>

    <div class="upmenu">
        <button id="myaccount">My account <i id="rightlogo" class="fas fa-user-circle"></i></button>
        <span id="upspan">Hi dear</span>
    </div>

    <div class="left_menu">
        <div class="logo">
            <i class="fas fa-user-graduate"></i><hr id="logohr">
        </div>

            <div class="leftsidebar">
                    <form method="POST">
                        <button name="dashboard" class="b" id="b1">Dashboard</button>
                        <button name="users"     class="b" id="b2" >Users</button>
                        <button name="logout"    class="b" id="b3">Logout</button>
                    </form>
            </div>

    </div>
    <script src="js/anasayfa.js"></script>
        <style>
            .b{
                width: 180px;
                border: none;
                background-color: none;
                margin: 10px 10px 0 10px;
                height: 60px;
                border-radius: 40px;
                transition: 1s;
            }
            .b:hover{
                background-color: #11FF11;
            }
        </style>
</body>
</html>

<?php 

if(isset($_POST['dashboard'])){
  
    header('location:login.php',true);

}

?>