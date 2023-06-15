<?php
   
    require 'Connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<body>
  
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>EmpCode</th>
                                    <th>ID</th>
                                    <th>FIRSTNAME</th>
                                    <th>LASTNAME</th>
                                    <th>DEPARTMENT</th>
                                    <th>DESIGNATION</th>

                                    <th>PHONE</th>
                                    <th>STATUS</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM `employeemaster` ";

                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['EmpCode']; ?></td>
                                                <td><?= $student['Id']; ?></td>
                                                <td><?= $student['FirstName']; ?></td>
                                                <td><?= $student['LastName']; ?></td>
                                                <td><?= $student['Department']; ?></td>

                                                <td><?= $student['Designation']; ?></td>
                                                <td><?= $student['Phone']; ?></td>
                                                <td><?= $student['Status']; ?></td>



                                                <td>
                                                <!-- <button class="btn btn-primary" onclick="UserDetails(<?= $student['Id']; ?>)">Update</button> -->

                                                    <a href="edit.php?id=<?= $student['Id']; ?>" class="btn btn-success btn-sm">Delet</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script> 
    function UserDetails(id){
        alert(id);
         // console.log(id);
         $.ajax({
            url: "Delete.php",
            type: "post",
            data: { Send: deleteid},
            success: function(data,status){
                // console.log(response);
                alert(data);
                displayData();
            }
            

        });
    }

</script>
</body>
</html>