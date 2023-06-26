<?php
  include 'connection.php';
  $result = mysqli_query($conn, "SELECT * FROM `trainee`");

 
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
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                
                <table>
                    <thead>
                        <tr>
                            <th>Email Id</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th><?php echo $row['email_id'];?></th>
                            <th><?php echo $row['password'];?></th>   
                            <th>
                                <a href="update.php?id=<?php echo $row['sno']?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row['sno']?>"><button type="button" class="btn btn-danger">Delete</button></a>

                            </th>
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>