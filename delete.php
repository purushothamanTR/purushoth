<?php
require 'db.php';
$conn  = Connect();				
$sql = "DELETE FROM validation WHERE id=''";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
     mysqli_close($conn);
?>           
                
              