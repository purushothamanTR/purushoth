<!DOCTYPE html>
 <?php
 require 'db.php';
$conn  = Connect();
 if(isset($_GET['id']))
{  
  $id=$_GET['id'];
  $sql = "SELECT * FROM addprocess where id='$id'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
                {				
				foreach( $result as $data )
					{
						$un=$data['ShopName'];
                        $fn=$data['RetailerCode'];
                        $ln=$data['RetailerRating'];
						$pass=$data['ShopAddress'];
                        $st=$data['State'];
                        $dt=$data['District'];
					    $ct=$data['Pincode'];                        
                        $checkbox=explode(",",$lang);
					 
 }
 }
}
$conn->close();      
?>

<html>
<head>
 <style>
            #error
            {
                color:red;
				 text-shadow:1px 1px 1px black;
				 font-weight:bold;
            }
           .head{
              color:green;
              text-shadow:1px 1px 1px black;
			  
            }
			
			.main {
			  border: 2px solid black;
			 border-radius:5px;
			      }
 </style>
 <link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
  function isNumberKey(evt)
      {     
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
      }
function alphabets() {
 $('.alpha').keyup(function() {
    var $th = $(this);
   $th.val( $th.val().replace(/[^a-zA-Z\ ]/g, function(str) 
     { return ''; } ) );
    }); 
    }
    
</script>
</head>
<body>
 <div class="row ">
 <div class="container ">
  <div class="row">
   <div class="col-md-12 ">
   <div class="col-md-2"></div>
 
   <h4 id="error"></h4>
   <div class="col-md-7 main">
         <h2 class="head">Php Form validation using jquery</h2>
         
         
         
        
    <form name="vali" method="post" action="insert.php" onsubmit="return validation();"> 
    UserName:<input type="text"  name="username" id="username" class="form-control" value="<?php if(isset($un)) echo $un; ?>" placeholder="Enter a username">
    Firstname:<input type="text" name="firstname" id="firstname" class="form-control alpha" value="<?php if(isset($fn)) echo $fn; ?>"  placeholder="Enter a firstname" onkeypress="return alphabets()">
    Lastname:<input type="text" name="lastname" id="lastname" class="form-control alpha" value="<?php if(isset($ln)) echo $ln; ?>" placeholder="Enter a lastname" onkeypress="return alphabets()">
    Password:<input type="password" name="password" id="password" class="form-control" value="<?php if(isset($pass)) echo $pass; ?>" placeholder="Enter a password" >
    Email:<input type="email" name="email" id="email" class="form-control" value="<?php if(isset($mail)) echo $mail; ?>" placeholder="Enter a email id" >
    
    <label><input type="radio" name="gender" <?php if(isset($gen)){ if($gen=='Male')echo "checked";} else {echo "";}  ?> class="gen" value="Male">Male</label>
    <label><input type="radio" name="gender" <?php if(isset($gen)){ if($gen=='Female')echo "checked";} else {echo "";}  ?> class="gen" value="Female">Female</label>
    <input type="phonenumber" name="phonenumber" id="phonenumber" onkeypress="return isNumberKey(event)" class="form-control" value="<?php if(isset($mobile)) echo $mobile; ?>" placeholder="Enter a phone number" maxlength=10>
   
   
    <label><input type="checkbox" name="language[]"  class="lang" id="english" value="English"  <?php if(isset($checkbox)) { if(in_array("Tamil",$checkbox)) {?> checked="checked" <?php }}?>>English</label></br>
    <label><input type="checkbox" name="language[]" class="lang" id="tamil" value="Tamil" <?php if(isset($checkbox)) { if(in_array("Tamil",$checkbox)) {?> checked="checked" <?php }}?> >Tamil</label></br>
    <label><input type="checkbox" name="language[]" class="lang"  id="malayalam" value="Malayalam" <?php if(isset($checkbox)) { if(in_array("Malayalam",$checkbox)) {?> checked="checked" <?php }}?> >Malayalam</label></br>
    <label><input type="checkbox" name="language[]" class="lang"  id="french" value="French" <?php if(isset($checkbox)) { if(in_array("French",$checkbox)) {?> checked="checked" <?php }}?> >French</label></br>
    
    <select id="state" name="state">
     <option value="-1">State</option>	
	 <option value="tamilnadu" <?php if(isset($st)){ if($st=='tamilnadu')echo "selected";} else {echo "";}  ?>>Tamil Nadu</option> 
    <option value="kerala" <?php if(isset($st)){ if($st=='kerala')echo "selected";} else {echo "";}  ?>>Kerala</option>
	<option value="andhrapradesh" <?php if(isset($st)){ if($st=='andhrapradesh')echo "selected";} else {echo "";}  ?>>Andhra pradesh</option>	
    </select>
    
    <select id="district" name="district" >
     <option value="-1">District</option>
   	
	<option value="Chennai" <?php if(isset($dt)){ if($dt=='Chennai')echo "selected";} else {echo "";}  ?>>Chennai</option>
    <option value="Aluva" <?php if(isset($dt)){ if($dt=='Aluva')echo "selected";} else {echo "";}  ?>>Aluva</option>
	<option value="hyderbad" <?php if(isset($dt)){ if($dt=='hyderbad')echo "selected";} else {echo "";}  ?>>hyderbad</option>
    </select>
    
     <select id="city" name="city" >
     <option value="-1">City</option>
     <option value="Chennai central" <?php if(isset($ct)){ if($ct=='Chennai central')echo "selected";} else {echo "";}  ?>>Chennai central</option>
    <option value="Aluva central" <?php if(isset($ct)){ if($ct=='Aluva central')echo "selected";} else {echo "";}  ?>>Aluva central</option>
	<option value="Hyderbad central" <?php if(isset($ct)){ if($ct=='Hyderbad central')echo "selected";} else {echo "";}  ?>>Hyderbad central</option>
    </select>
     
 </br> </br>
<div class="form-group">
<input type="submit" value=" <?php  if(isset($_GET['id'])) echo 'update'; else echo 'save';?>" class="btn btn-primary" name="submit" onsubmit="validation();">
<a href="select.php" class="btn btn-primary">View</a>
</div>
   </form>
   </div>

   <div class="col-md-3"></div>
   </div>
  </div>
 </div>
 </div>
 
 </body>

<script>
function validation()
{
var username=$("#username").val();
var firstname=$("#firstname").val();
var lastname=$("#lastname").val();
var email=$("#email").val();
var password=$("#password").val();
var phonenumber=$("#phonenumber").val();


if($("#username").val()=="")
{
$("#username").focus();
$("#error").html("Enter a username");
return false;
}

else if($("#firstname").val()=="")
{
$("#firstname").focus();
$("#error").html("Enter a firstname");
return false;
}

else if($("#lastname").val()=="")
{
      $("#lastname").focus();
      $("#error").html(" Enter a lastname");
      return false;
}

else if($("#password").val()=="")
{
$("#password").focus();
$("#error").html("Enter the password");
return false;
}

else if($("#email").val()=="")
{
$("#email").focus();
$("#error").html("Enter the email");
return false;
}

else if ($('.gen:checked').length=="0") {								
      $('#error').html('Please select the gender.');
 	return false;
} 

else if($("#phonenumber").val()=="")
{
$("#phonenumber").focus();

$("#error").html("Enter the mobile number");
return false;
}
else if($("#phonenumber").val()!="" && $("#phonenumber").val().length<10)
{
    $("#error").html("Enter the valid mobile number");
    $("#phonenumber").focus();
    return false;  
}

else if ($('.lang:checked').length=="0") {								
      $('#error').html('Please select the language.');
 	return false;
}
else if ($("#state").val()==-1) {
      $('#error').html('Please select the state.');
      return false;
}
     else if ($("#district").val()==-1) {
      $('#error').html('Please select the District.');
      return false;
     }
     
     else if ($("#city").val()==-1) {
      $('#error').html('Please select the city.');
      return false;
     }

else     
return true;
}
</script>
</html>