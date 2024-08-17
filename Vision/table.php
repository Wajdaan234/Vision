<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
  body {
  background-color: black;
}

.container {
  margin-top: 20px;
}

.container h2{
    font-family: 'Nunito';
    font-weight: bolder;
    background-color: #0076de;
    border-radius: 1rem;
    color: white;
    padding: 1rem 2rem;
}
.container {
  background-color: #fffff;
  /* border: 5px solid red; */
  padding: 20px;
  border-radius: 5px;
}
.table th, .table td {
  text-align: center;
  color: white;
}
.table td{
  border-right: 1px solid #0076de;
  border-bottom: 1px solid #0076de;
  box-shadow: 0px 0px 2px 1px #0076de;
}

.table thead {
  background-color: #007bff;
  color: white;

.btn {
  margin: 2px;
}

</style>
<div class="container">
  <h2>ADMIN PANEL:-</h2>
  <br>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'signup_connection.php';

    $query = "SELECT `id`, `username`, `email`, `password` FROM `signup`"; // Update column names as needed

    $data = mysqli_query($conn, $query);

    if (!$data) {
        // Output SQL error if query fails
        echo "Error: " . mysqli_error($conn);
    } else {
        // Use mysqli_num_rows() safely
        $num_rows = mysqli_num_rows($data);

        // Fetch and display results
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['password']}</td>
           <td>
              <a class='btn btn-primary' href='update.php?id={$row['id']}'>Update</a>
              <a class='btn btn-warning' href='create.php'>Create</a>
              <a class='btn btn-danger' href='delete.php?id={$row['id']}'>Delete</a> <!-- Link to delete entry -->
            </td>
            </tr>";
        }
    }

    mysqli_close($conn);
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
