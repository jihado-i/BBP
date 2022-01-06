<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">


    <input type="text" name="i1"><br><br>
    <input type="text" name="i2"><br><br>
    
    <input type="file" name="f1" style="background-color: white; width:400px; height:80px;"><br><br>
    <input type="file" name="f2" style="background-color: white; width:400px; height:80px;"><br><br>

    <button name="send" style="background-color: forestgreen; width:400px; height:80px;">Send</button>


    </form>
    
</body>
</html>

<?php

$con = mysqli_connect('localhost','root','','projem');

if(isset($_POST['send'])){
    $i1 = $_POST['i1'];
    $i2 = $_POST['i2'];
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];

    $qu = "INSERT INTO adminadingdata(lessonname,sometext,lessonvideo,lessonfile) VALUES('$i1','$i2','$f1','$f2')";

    if(mysqli_query($con,$qu)){
        
        move_uploaded_file($f1,'C:\xampp\htdocs\server\\ ');
    }

}


?>