<?php
include('dbcon.php');


// Show Data In Frontend

function ShowData(){
    global $conn;
    $query = "SELECT * FROM `get_users_data` ORDER BY `id` DESC limit 8";
    $q_fire = mysqli_query($conn,$query);

    $result = mysqli_num_rows($q_fire);

    $output="";

    if($result > 0) {
        while($row = mysqli_fetch_assoc($q_fire)) {
            $output .= "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td><button id='delete-btn' data-id=".$row['id']." class='btn btn-danger px-3 py-0'>Delete</button></td>
                        </tr>";
        }
    }else{
        $output .= "<tr><td>No Data Found</td></tr>";
    }

    return $output;
}

echo ShowData();


?>