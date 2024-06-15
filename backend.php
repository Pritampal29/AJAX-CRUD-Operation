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
                            <td>
                                <button type='button' id='view-btn' data-vid=".$row['id']." class='btn btn-warning px-3 py-0'>View</button>
                                <button type='button' id='edit-btn' data-eid=".$row['id']." class='btn btn-success px-3 py-0'>Edit</button>
                                <button type='button' id='delete-btn' data-did=".$row['id']." class='btn btn-danger px-3 py-0'>Delete</button>
                            </td>
                        </tr>";
                        
        }
    }else{
        $output .= "<tr><td>No Data Found</td></tr>";
    }

    return $output;
}

echo ShowData();


?>