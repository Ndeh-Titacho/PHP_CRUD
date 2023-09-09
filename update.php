 <?php
 include 'connect.php';
 if(isset($_POST["submit"])){
    $id=$_GET['updateId'];
    $sql="SELECT *FROM students WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    /*$row=mysqli_fetch_assoc($result);
          $fname=$row['fname'];
          $lname=$row['lname'];
          $email=$row['email'];
          $contact=$row['contact'];*/

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
 
 $sql="UPDATE students SET id=$id,fname='$fname',lname='$lname',email='$email',contact='$contact' WHERE id=$id";
//  $conn->query($sql);
  $result=mysqli_query($conn,$sql);
    if($result){
        echo 'update successful';
        header('location:display.php');}
        else{
            echo("Connection failed: " . $conn->connect_error);
}

}
 ?>
 
 <!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" >

    <title>UPDATE</title>
  </head>
  <body>
    <div class="container">
     <h1 styles="text-align:center;">UPDATE CREDENTIALS</h1> 
    <form action="index.php" method="post" >
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter yout first name" id="exampleInputEmail1" aria-describedby="emailHelp"  >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input value="<?php echo '$lname' ?>" type="text" class="form-control" name="lname" placeholder="Enter your last name" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label class="form-label">Email</label>
    <input value="<?php echo '$email' ?>" type="email" class="form-control" name="email" placeholder="Enter your email" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label class="form-label">Contact</label>
    <input  value="<?php echo '$contact' ?>" type="number" class="form-control" name="contact" placeholder="Enter your contact" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Update</button>
</form>
  </body>
</html>