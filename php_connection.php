<?php
$conn = new mysqli("localhost","stew20",'fr1end',"stew20");
        if (mysqli_connect_error() ){
                echo "connection failed: " . mysqli_connect_error();
                die();
        }
?>
