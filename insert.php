<?php  
  include 'connection.php';
  if (isset($_POST['submit'])) {
    $firstName = $_POST['email'];
    $emailId = $_POST['password'];
    $insert = "INSERT INTO `trainee`(`sno`, `email_id`, `password`) VALUES ('','$firstName','$emailId')";
    mysqli_query($conn, $insert);
    header('Location: view.php');
  }
?>