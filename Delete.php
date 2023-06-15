<?php

include 'Connection.php';


if(isset($_POST['Send'])){
    $unique= $_POST['Send'];
    // echo $unique;
    // exit;
    
    


    $sql = "SELECT * FROM  `employeemaster`  WHERE `Id`= $unique";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
   

    if($row)
    {
       $sql2 = "INSERT INTO `ondeleteemployeemaster`(`Id`, `EmpCode`, `FirstName`, `LastName`, `Department`, `Designation`, `Phone`, `Status`) VALUES 
       ('".$row['Id']."','".$row['EmpCode']."','".$row['FirstName']."','".$row['LastName']."','".$row['Department']."','".$row['Designation']."','".$row['Phone']."','".$row['Status']."')";
      

       $response = mysqli_query($conn,$sql2);
       if($response)
       {
      
        
             $sql3 ="DELETE FROM `employeemaster`  WHERE `Id` = $unique";
             $r = mysqli_query($conn,$sql3);

             if($r)
             {
                echo true;
              }
       }
       else
       {
       
        echo "done";

       }
    }
    else 
    {
        echo  'There is an error';
    }
    
}

?>

