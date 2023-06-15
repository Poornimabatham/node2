<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>search_data</title>
</head>
<body>


<div class="container">
    <form  class='form-inline'action="" method="POST">
      <input class='form-control mt-5' type="text"placeholder='Search item'name='search'>
      <input class='btn btn-warning ml-2 mt-5' type="submit"name='submit'>
    </form>
   
    <br><br>
</div>
</body>
</html>

<?php
include("connection.php");
            if(isset($_POST['submit'])){

                $search = $_POST['search'];
                $sql="SELECT * FROM `employeemaster` WHERE    LastName LIKE'%$search%'  ";

                // echo $sql;
                // exit;
                $result=mysqli_query($conn,$sql);
            //  echo $result;
            //  exit;
                if($result){
                   if(mysqli_num_rows($result)>0){
                    ?>
  <div class="container-fluid">
  <table class="table"  >
    <thead>
    
      <th width="10%">Name</th>
      
</thead>
  <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>


      <td><?php echo $row["LastName"];?></td>

      <td>
        <?php
        if($row['Status']==1){
            echo '<p><a href="active.php?id='.$row['id'].'&Status=0">Active</a></p>';
        }
        else{
            echo '<p><a href="active.php?id='.$row['id'].'&Status=1">InActive</a></p>';

        }
        ?>

  </td>
    



    <!-- // $row["ID"]. " - Name: " . $row["Name"]. " Email " . $row["Email"]. "Date" . date('d-M-y',strtotime($row["Date-time"])). "<br>"; -->
  </tr>
  </div>
  <?php
                    
                   }
                   }

                   }}
            
            
            ?>


<!-- SELECT Email FROM form WHERE  Email = $row['Email]'; -->
