 <?php
 require 'db.php';
 $conn  = Connect();
 if(isset($_GET['id']))
 { 
 //echo "<script type='text/javascript'>alert('Are u sure to delete');</script>";
 $id= $_GET['id'];
 $query="delete from validation where id='".$id."'";
 if(mysqli_query($conn,$query))
 {
 header("Location: select.php");	 
 //echo "The record was deleted successfully.";
 exit();
 }
 }
 ?>
<html>
<head>
 <style>
.head
  {
   text-align: center;
   font-family: "Brush Script MT", cursive;
   text-shadow:1px 1px 1px black;
   color: red;
  }
  </style>           
 <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 <div class="row">
  <div class="col-md-10">
  
  <table class="table table-striped  table-bordered">
   <h2 class="head">Registration details</h2>
   <thead>
    <tr>
     <th>Id</th>
    <th>Username</th>
    <th>Firstname</th>
    <th>Lastname</th>
   <th>Password</th>
   <th>Email</th>
   <th>Gender</th>
    <th>Phone number</th>
    <th>Language</th>
   <th>State</th>
   <th>District</th>
   <th>City</th>
   <th>View</th>
   <th>Edit</th>
   <th>Delete</th>
   
   </tr>
   </thead>
 
   
 <?php		
				$sql = "SELECT * FROM validation";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
                {				
				foreach( $result as $data )
					{
					echo "<tr>
					 <td>".$data['id']."</td>
					 <td>".$data['username']."</td>
					 <td>".$data['firstname']."</td>
					 <td>".$data['lastname']."</td>
					 <td>".$data['password']."</td>
					 <td>".$data['email']."</td>
					 <td>".$data['gender']."</td>
					 <td>".$data['phonenumber']."</td>
					 <td>".$data['language']."</td>
					 <td>".$data['state']."</td>
					 <td>".$data['district']."</td><
					 <td>".$data['city']."</td>
					 <td><a href='view.php?id=".urlencode(base64_encode($data['id']))."'>View</a></td>	
					 <td><a href='index1.php?id=".$data['id']."'>Edit</a></td>						
					 <td><a href='select.php?id=".$data['id']."'>Delete</a></td>
					</tr>";
				   }
				}
	?>
   </tbody>
  </table>
  <a href="index1.php" class="btn btn-success btn-sm">Home</a>
  </div>
 </div>
</body>
</html>


