<?php
    $conn = mysqli_connect('localhost','root','','projem');
    if(mysqli_errno($conn)){
        echo "There is error";
    }
?>