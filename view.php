<?php 

include "conew.php";

$sql = "SELECT uname,uage,ugender FROM userform";

$result = mysqli_query($con, $sql);


   ?>








<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

   <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>Name</th>

        <th>Age</th>

        <th>Gender</th>

     

    </tr>

    </thead>

    <tbody> 
             <?php
			

                if(mysqli_num_rows($result)){

                while ($row=mysqli_fetch_assoc($result)) {

                 ?>
                    <tr>

                    <td><?php echo $row['uname'];  ?></td>

                    <td><?php echo $row['uage']; ?></td>

                    <td><?php echo $row['ugender']; ?></td>

                    </tr>        
				  <?php       }

            }

        ?>                
			
			      
		    
				  
    </tbody>

</table>

    </div>

</body>

</html>