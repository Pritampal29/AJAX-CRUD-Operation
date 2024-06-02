<?php
include('dbcon.php');


// Data Insert Into Database

if(isset($_POST['name']) && isset($_POST['email'])) {

    $name = $_POST['name'];
    $email= $_POST['email'];

    $query = "INSERT INTO `get_users_data`(`name`,`email`) VALUES ('$name','$email')";
    $q_fire = mysqli_query($conn,$query);

}


?>