<?php 
session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP PDO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

            <?php
            if(isset($_SESSION['message']))
            ?>
                <div class="card">
                    <div class="card-header">
                        <h3> PHP PDO CRUD APP 
                            <a href="student-add.php" class="btn btn-primary float-end">Add student</a>
                        </h3>
                        
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>