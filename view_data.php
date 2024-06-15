<?php
include('dbcon.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $s_query = "SELECT * FROM `get_users_data` WHERE `id`='$id'";
    $q_fire = mysqli_query($conn,$s_query);

    $no_of_row = mysqli_num_rows($q_fire);

    $data = '<span id="close_btn">X</span>
                <h1>View Data</h1>
                <hr>';


    if($no_of_row > 0) {
        while($row = mysqli_fetch_assoc($q_fire)) {

            $data .= '<h4>Name : '.$row['name'].'</h4>
                    <h5>Email : '.$row['email'].'</h5>';
                    
        }
        
    }
    
}

echo $data;

?>