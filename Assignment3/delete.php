<?php
    inlcude("config.php");
?>

<?php
$id=$_GET['id'];
    $sql="DELETE from `users` where id=$id";
   if(mysqli_connect($conn,$sql))
   {
        header("location:details.php");
   }
   else{
       echo "deletion failed";
   }
?>