<?php
require 'db.php';
$conn  = Connect();
//$submit=$_REQUEST["submit"];
//if($submit=="save")
//{
$uname= $conn->real_escape_string($_POST['username']);
$fname=$conn->real_escape_string($_POST['firstname']);
$lname=$conn->real_escape_string($_POST['lastname']);
$pass=$conn->real_escape_string($_POST['password']);
$email=$conn->real_escape_string($_POST['email']);
$gender=$conn->real_escape_string($_POST['gender']);
$number=$conn->real_escape_string($_POST['phonenumber']);
$state=$conn->real_escape_string($_POST['state']);
$district=$conn->real_escape_string($_POST['district']);
$city=$conn->real_escape_string($_POST['city']);

$chk1=$_POST['language'];
$chk='';
foreach($chk1 as $chk2)
{
$chk.=$chk2.',';
}
$query= "INSERT into validation (username,firstname,lastname,password,email,phonenumber,gender,language,state,district,city) VALUES('".$uname."','".$fname."','".$lname."','".$pass."','".$email."','".$number."','".$gender."','$chk','".$state."','".$district."','".$city."')";
$success = $conn->query($query);
   if($success)
     {
		header("Location:select.php");
     }
   else
    {
    echo "Not inserted";
    }
  
/**   }
	
if($submit=="update")
{
  if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$phonenumber=$_POST['phonenumber'];
	$language=$_POST['language'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$city=$_POST['city'];	
	$updated="UPDATE validation SET username='".$username."', firstname='".$firstname."',lastname='".$lastname."',password='".$password."',email='".$email."',gender='".$gender."',phonenumber='".$phonenumber."',state='".$state."',district='".$district."',city='".$city."', WHERE id='".$id."'";
	 if(mysqli_query($conn,$updated))
	{
	$msg="Successfully Updated!!";
	header('Location:select.php');
	}
  }
 }	**/
	

	
$conn->close();      
?>