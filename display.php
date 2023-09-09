<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Display</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" >
</head>
<body>
    <div class="container">
      <h1>CRUD APPLICATION FOR STUDENTS</h1>
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>
        <table  class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if (!$result) {
    die("Database query failed.");
}
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $fname=$row['fname'];
          $lname=$row['lname'];
          $email=$row['email'];
          $contact=$row['contact'];
          echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$contact.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php? updateId='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteId='.$id.'" class="text-light">Delete</a></button>
     
    </td>
    
    </tr>';
        }
    }
    ?>
     
    
    
  </tbody>
</table>
    </div>
</body>
</html>