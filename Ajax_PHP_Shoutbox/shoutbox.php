<?php include 'database.php';?>

<?php 
// echo "Entered this file";
if (isset($_POST["name"]) && isset($_POST["shout"])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $shout = mysqli_real_escape_string($conn, $_POST['shout']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);


    // echo "got to this point";

//Set Timeout
date_default_timezone_set('Nigeria/Osun');
$date = date('h:i:s a', time());

$query = "INSERT INTO shouts(name,shout,date) 
VALUES ('$name', '$shout', '$date')";

if(!mysqli_query($conn, $query)){
        echo 'Error: ' .mysqli_error($conn);
} else {
        echo '<li>'.$name.': '.$shout.' ['.$date.'] </li>';
}

}