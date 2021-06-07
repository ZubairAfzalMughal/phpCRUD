<?php
include_once('index.php');

if (isset($_POST['name']) && isset($_POST['major'])) {
  $name = $_POST['name'];
  $major = $_POST['major'];

  $q = "INSERT into student (name,major) value ('$name','$major')";
  $rs = mysqli_query($link, $q);

  if ($rs) {
    header("Refresh:0; url=show.php");
  } else {
    echo "Failed";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Insert Data</title>
</head>

<body>
  <h1 class="text-center text-uppercase">Insert Data into Database</h1>
  <form class="form-group container" method="post" action="">
    <label>Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required />
    <br />
    <label>Major:</label>
    <input type="text" class="form-control" name="major" placeholder="Enter Your major" required />
    <br />
    <button class="btn btn-primary">Post</button>
    <!-- Boot Strap links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>