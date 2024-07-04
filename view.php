<?php
include ("dbconnect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <title>Database</title>
</head>

<body>
  <h1>Messages</h1>




  <div class="container">
    <button class="btn btn-primary"><a href='user.php' class="text-light">Add Message</a></button>


    <!-- Table Elements -->
    <table class="table" id="myTable">
      <thead>
        <tr>

          <th scope="col">Profile</th>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Message</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

<!-- Fetching Data & Displaying It On Table -->
        <?php
        $sql = "SELECT * FROM `message-table`";
        $result = mysqli_query($conn, $sql);
        $id = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $id + 1;
          ?>

          <tr>
            <td><img class="img-profile" src="images/<?php echo $row['profile']; ?>"></td>
            <td><?php echo $id ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["subject"] ?></td>
            <td><?php echo $row["message"] ?></td>
            <td>
              <button class="btn btn-primary"><a href="update.php?id=<?php echo $row["sno"] ?>"
                  class="text-light">Update</a></button>
              <button class="btn btn-primary"><a href="delete.php?id=<?php echo $row["sno"] ?>"
                  class="text-light">Delete</a></button>
            </td>
          </tr>
          <?php

        }
        ?>

      </tbody>
    </table>

  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

  <script>
    let table = new DataTable('#myTable');
  </script>
</body>

</html>