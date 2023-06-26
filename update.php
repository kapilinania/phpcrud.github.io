<?php
include 'connection.php';
if (isset($_POST['update'])) {
    

        $firstName1 = $_POST['updateemail'];
        $emailId1 = $_POST['updatepassword'];  
         $id_data = $_GET['id'];
        echo $id_data."welcome";
        $Update = "UPDATE `trainee` SET `sno`='$id_data',`email_id`=' $firstName1',`password`='$emailId1' WHERE `sno`=$id_data";
        mysqli_query($conn, $Update);
        header('Location: view.php');
    
  }




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
        <form method="post" action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="updateemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="updatepassword" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>