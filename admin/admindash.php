<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/714bdfdf62.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav> 
            <h2>CIHAT ALIBRAHIM</h2>
        </nav>

        <p> Hi Admin! Are you want to add a new lesson ?  </p>
        
        <div class="data">
                <form  method="POST">

                <label for="i1">Lesson Name</label>&nbsp;
                <input id="i1" type="text" name="lname" placeholder="Lesson Name"><br><br>

                <label for="i2">Text</label>&nbsp;
                <input id="i2" type="text" name="ltext" placeholder="Text"><br><br>

                <label for="i3">Video</label>&nbsp;
                <input id="i3" type="file" name="video"><br><br>

                <label for="i4">File</label>&nbsp;
                <input id="i4" type="file" name="lessonfile"><br><br>

                <button class="btn" type="reset">Clear</button>
                <button class="btn" type="upload" >Upload</button>

            </form>
        </div>       
    </div>
</body>
</html>

<?php

    echo __FILE__;

    $conn = mysqli_connect('localhost','root','','projem');

    if(isset($_POST['upload'])){
        $lname = $_POST['lname'];
        $ltext = $_POST['ltext'];
        $videofile = $_FILES['video'];
        $lessonfile = $_FILES['lessonfile'];

        $sql = "INSERT INTO adminadingdata(lessonname,sometext,lessonvideo,lessonfile) VALUES('$lname','$ltext','$videofile','$lessonfile')";
        if(mysqli_query($conn,$sql)){
            echo "yes";
        }
        
    }

?>