<?php
    $conn = mysqli_connect('localhost','root','','note');
    if(!$conn)
    {
      die ("connection failed" . mysqli_connect_error());
    }
  else{
    echo ("connection established");
  }

$title = $_POST['title'];
$description = $_POST['description'];
$sql = " INSERT INTO `inote` (`title`, `description`,`timestamp`) VALUES ('$title', '$description','current_timestamp()')";
$result = mysqli_query($conn,$sql);
if($result){
echo "<script>alert('data inserted')</script>";
header('location:inote.php');
}
else{
   echo ("not inserted" . mysqli_error($conn));
}
  ?>


<!-- INSERT INTO `inote` (`sn`, `title`, `description`, `timestamp`) VALUES (NULL, 'Movie', 'Limitless is best movie', '2022-06-21 10:45:10.000000'); -->