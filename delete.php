<?php
    $conn = mysqli_connect('localhost','root','','note');
    if(!$conn)
    {
      die ("connection failed" . mysqli_connect_error());
    }
  else{
    echo ("connection established");
  }

  
  
$sn =$_GET['sn'];

$sql = "DELETE FROM `inote` WHERE `inote`.`sn` = $sn "; 
$results = mysqli_query($conn,$sql);
if($results){
echo "<script>alert('data deleted')</script>";
header('location:inote.php');
}
else{
   echo ("not deleted" . mysqli_error($conn));
}

?>

