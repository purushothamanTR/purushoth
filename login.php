<?php
require 'db.php';
$conn  = Connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM valilogin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index1.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
  
         <link rel="stylesheet" href="css/bootstrap.min.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
         <style>
            .outer
            {
                border:3px solid black;
                border-radius: 8px;
                  background: linear-gradient(#a0e1ff,#032433);
            }
            .title
            {
              text-shadow: 0 0 1px black;
                  text-align: center;
            }
            .input-group-addon:first-child
            {
                color: #337ab7;
            }
            
            label
            {
                color: #000000;
                font-weight: bold;
            }
            
            .place
            {
                font-style: italic;
            }
            .btn-block
            {
                font-weight: bold;
                  text-shadow: 2px 2px 20px black;
            }
           .full
           {
            margin-top: 10%;
            
           }
         </style>
    </head>
   
   <body>
	
    <div class="row">
        <div class="container">
            <div class="col-md-12 full">
<div class="col-md-4"></div>
   <form action = "" method = "post">
<div class="col-md-4 outer">
           	<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login</h1>
	               		<hr />
	               	</div>
	            </div> 
                
                	<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-12">
								<div class="input-group ">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control place" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-12">
								<div class="input-group ">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control place" name="password" id="password"  placeholder="Enter your Password" />
								</div>
							</div>
						</div>
             
     	           <div class="form-group ">
							<input type="submit" value = " Submit " class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
                
                </div>
                
                     </form>
                <div class="col-md-4">
                      <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>-->
                </div>
            </div>
            
            
            
        </div>
        
        
        
    </div>
    
 
   </body>
</html>