<?php
include_once('index.php');
// making query to fetch data from sql
$sql = "SELECT * FROM student";
$myData = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Fetch Data From server</title>
</head>

<body>
  <h1 class="text-center text-uppercase">university Database</h1>
  <div class="container">

    <table class="table">
      <tr>
        <th>
          id
        </th>
        <th>
          Name
        </th>
        <th>
          Major
        </th>
        <th>
          Delete
        </th>
        <th>
          Update
        </th>
      </tr>
      <?php
      while ($rows = mysqli_fetch_assoc($myData)) {
      ?>
        <tr>
          <td><?php echo $rows['id']; ?></td>
          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['major']; ?></td>
          <td><a href="delete.php? id=<?php echo $rows['id']; ?>"><button class="btn btn-danger">delete</button></a></td>
          <td><a href="update.php? id=<?php echo $rows['id'];?>"><button class="btn btn-success">update</button></a></td>

        </tr>
      <?php

      }

      ?>
    </table>
    <h3>Total Number of Recoreds: <b> <?php $myrows=mysqli_num_rows($myData); echo $myrows; ?></b></h3>
    <form action="insert.php">
       <button class="btn btn-primary">Insert New Record</button>
    </form>
    <br/>
    <form action="truncate.php">
       <button class="btn btn-danger text-upper">Clear all</button>
    </form>
  </div>
  <!-- Boot Strap links -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>