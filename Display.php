















































<?php

include 'Connection.php';


if(isset($_POST['displaySend'])){
    $table='<table class="table table-bordered table-striped">
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
                            </thead>';

                            $query = "SELECT * FROM `employeemaster`";

                            $result = mysqli_query($conn, $query);

 while($row=mysqli_fetch_assoc($result)){
   

    $EmpCode = $row['EmpCode'];
    $Id= $row['Id']; 
    $Fname= $row['FirstName']; 
    $lname= $row['LastName']; 
    $Department= $row['Department']; 

    $Designation= $row['Designation']; 
    $Phone= $row['Phone']; 
    $status= $row['Status']; 

    $table.='<tr>
                            
    <td>'.$EmpCode.'</td>
    <td>'.$Id.'</td>


      <td>'.$Fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$Department.'</td>

      <td>'.$Designation.'</td>

      <td>'.$Phone.'</td>

      <td>'.$status.'</td>
      <td>
      <button class="btn btn-dark" onclick="UserDetails('.$Id.')">Delete</button>

      </td>
    </tr>';
}
$table.='</table>';
echo $table;

}
?>
























