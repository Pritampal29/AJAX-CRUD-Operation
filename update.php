<?php
include('dbcon.php');

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $u_query = "UPDATE `get_users_data` SET `name`='$name',`email`='$email' WHERE `id`='$id'";
    $q_fire = mysqli_query($conn,$u_query);

    
}
?>