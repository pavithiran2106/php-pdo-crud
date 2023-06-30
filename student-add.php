<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>insert data into database using PHP PDO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3> insert data into database using PHP PDO 
                            <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="students.php"  method="POST">

                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control"></input>
                            </div>

                            <div class="mb-3">
                                <label>E mail</label>
                                <input type="text" name="email" class="form-control"></input>
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control"></input>
                            </div>

                            <div class="mb-3">
                                <label>course</label>
                                <input type="text" name="course" class="form-control"></input>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>