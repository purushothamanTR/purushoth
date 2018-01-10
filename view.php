 
 <html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			.main
			{
				border:2px solid black;
			}
		</style>
	</head>

 
 <?php
 require 'db.php';
$conn  = Connect();
 if(isset($_GET['id']))
 {

 $decode= $_GET['id'];
 $id= base64_decode(urldecode($decode));
 
				$sql = "SELECT * FROM validation where id='$id'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
                {				
				foreach( $result as $data )
					{
						$un=$data['username'];
                        $fn=$data['firstname'];
                        $ln=$data['lastname'];
						$pass=$data['password'];
						$mail=$data['email'];
						$gen=$data['gender'];
						$mobile=$data['phonenumber'];
						$lang=$data['language'];
                        $st=$data['state'];
                        $dt=$data['district'];
					    $ct=$data['city'];
		
 }
 }
 }
 ?>
     
     
     
     
      <div class="row">
		
		<div class="col-md-3"></div>
    <div class="col-md-6 main">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Registration details</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">UserName:</label>
           
             <label class="col-sm-2 control-label" for="textinput"><?php echo $un;?></label>
              
           
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">FirstName:</label>
           
                 <label class="col-sm-2 control-label" for="textinput"><?php echo $fn;?></label>
           
          </div>

          <!-- Text input-->
           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">LastName:</label>
           
            <label class="col-sm-2 control-label" for="textinput"><?php echo $ln;?></label>
            
          </div>

        
		    <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Password:</label>
           
            <label class="col-sm-2 control-label" for="textinput"><?php echo $pass;?></label>
         
          </div>

		 <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email:</label>
         
            <label class="col-sm-2 control-label" for="textinput"><?php echo $mail;?></label>
           
          </div>
		 
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Gender:</label>
            <label class="col-sm-2 control-label" for="textinput"><?php echo $gen;?></label>
            
          </div>
		   <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mobile:</label>
           
            <label class="col-sm-2 control-label" for="textinput"><?php echo $mobile;?></label>
           
          </div>
		    <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Language:</label>
            <label class="col-sm-2 control-label" for="textinput"><?php echo $lang;?></label>
          </div>
			
			<div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State:</label>
            <label class="col-sm-2 control-label" for="textinput"><?php echo $st;?></label>
          </div>
			<div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">District:</label>
            <label class="col-sm-2 control-label" for="textinput"><?php echo $dt;?></label>
          </div>
			<div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City:</label>
            <label class="col-sm-2 control-label" for="textinput"><?php echo $ct;?></label>
          </div>
			</div>
			<div class="col-md-3"></div>
          
			 
			 

       <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <a href="index1.php" class="btn btn-danger btn-sm">Cancel</a>
                <a href="select.php" class="btn btn-primary btn-sm">Select</a>
            </div>
         <div class="col-md-3"></div>
			 </div>
		


      </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->



 </html>
