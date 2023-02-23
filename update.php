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
  $title =$_GET['title'];
  $description =$_GET['desc'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/0ee3a01dbb.js"></script>

</head>
<body>
<div class="container my-4">
    <h2>Add a Note to iNotes</h2>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="title">Note Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo "$title" ?>" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="desc">Note Description</label>
        <textarea class="form-control" id="description" name="description" value="<?php echo "$description" ?>" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">update</button>
    </form>
  </div>
</body>
</html>