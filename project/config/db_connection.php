<?php
$conn = mysqli_connect('localhost', 'saalu', '12345', 'dpizza');

if(!$conn){
    echo 'Connection error' . mysqli_connect_error();
}

?>