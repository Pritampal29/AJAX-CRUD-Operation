<?php
include('dbcon.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $d_query = "DELETE FROM `get_users_data` WHERE `id`='$id'";
    $q_fire = mysqli_query($conn,$d_query);
    
}


?>