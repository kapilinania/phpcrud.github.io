<?php
include 'connection.php';


if(isset($_GET['id'])){
    $id_data = $_GET['id'];
    echo $id_data."welcome";
     $sql =  "DELETE FROM trainee WHERE sno= $id_data";
     mysqli_query($conn, $sql);
     header('Location: view.php');
}


?>