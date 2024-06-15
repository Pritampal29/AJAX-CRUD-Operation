<?php

include('dbcon.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM `get_users_data` WHERE `id`='$id'";
    $q_fire = mysqli_query($conn,$query);

    $result = mysqli_num_rows($q_fire);

    $output = "";

    if($result > 0) {
        while( $row = mysqli_fetch_assoc($q_fire) ) {

            $output .= '<form id="formDataUpdate">
                            <h2 class="text-center text-secondary">Update Data</h2>
                            <div class="input_fld mb-3">
                            <input type="hidden" name="e_id" id="e_id" class="form-control" value="'.$row['id'].'">
                                <label for="">Name: </label>
                                <input type="text" name="name" id="u_name" class="form-control" value="'.$row['name'].'">
                            </div>
                            <div class="input_fld mb-3">
                                <label for="">Email: </label>
                                <input type="email" name="u_email" id="e_email" class="form-control" value="'.$row['email'].'">

                                <input type="button" value="Update" id="update_btn" class="btn btn-success mt-3">
                            </div>
                        </form>';
                        
        }
    }
}

echo $output;

?>