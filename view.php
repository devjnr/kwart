<?php 

include "conew.php";
if (isset($_GET['page'])){
	
	$page= $_GET['page'];
	
}
else{
	
	$page=1;
}
$start=($page-1)*3;
$row_perpage=3;

$sql = "SELECT uname,uage,ugender FROM userform LIMIT $start,$row_perpage";

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
		
		<pre><p>Go Back to :</p><a class="btn btn-info" href="cont.php">SignUp Page</a></pre>

<table class="table">

    <thead>

        <tr>

        <th>Name</th>

        <th>Age</th>

        <th>Gender</th>
		
		<th>Action</th>

     

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
					
					  
					  
		
							 <td> <a href="update.php?Uname=<?php echo $row['uname'];?>" onClick="return confirm('Do you really want to update');"><i class="fa fa-trash" aria-hidden="true">update</i></a>&nbsp;/
							 <a href="delpage.php?un=<?php echo $row['uname'];?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true">delete</i></a>
							 </td>
                    </tr>   

					
				  <?php       }

            }

        ?>                
			
			      
		    
				  
    </tbody>
	
</table>


        <?php
		
		$pr_sql = "SELECT uname,uage,ugender FROM userform";

        $pr_result = mysqli_query($con, $pr_sql);
		
		$total_record = mysqli_num_rows($pr_result);
		
		$total_page=ceil($total_record/$row_perpage);
		
		if ($page>1){
			
			echo "<a href='view.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
		}
	
		
		for($i=1; $i< $total_page; $i++){
			
			echo "<a href='view.php?page=".$i."' class='btn btn-primary'>$i</a>";
		}
		
		if ($i>$page){
			
			echo "<a href='view.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
		}
	
		
		?>
 
 
  </div>
 
</body>

</html>