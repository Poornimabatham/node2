<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App </title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Button trigger modal -->









<div class="container mt-3">
    <h1 class="text-center">Employe Master</h1>
    
<div id="displaydataTable" class="container-fluid mt-4 ">
    
</div>
</div>




































<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
    
$(document).ready(function(){
    displayData()
});
    // Display  the  insert  data
     function displayData(){
        var displaydata = "true";
        $.ajax({
            url:"Display.php",
            type:"POST",
            data:{
                displaySend:displaydata,
            },
            success:function(data){
                // console.log(data)
$('#displaydataTable').html(data);
            }
            
        });
     }


     
     function  UserDetails(id){
        alert(id);
        $.ajax({
            url: "Delete.php",
            type: "post",
            data: { Send:id},
            success: function(data,status)
            {
                
                console.log(data);
                if(data==true){
                    
                    
                    alert("data delete successfully");
                    location.reload();

                    
                }
            }
            

        });
     }

    // iNSERT AJAX CODE














    

</script>
</body>
</html>