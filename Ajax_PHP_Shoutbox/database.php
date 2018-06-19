<?php
//connect to MySQL
$conn = mysqli_connect("localhost","root","codepoet1704","jsshoutbox");

if(mysqli_connect_errno()){
    echo 'Failed to connect: '.mysqli_connect_error();
}
