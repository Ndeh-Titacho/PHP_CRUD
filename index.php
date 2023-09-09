  <?php
 include 'connect.php';
 if(isset($_POST["submit"])){
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
 
 $sql="INSERT INTO  students (fname, lname, email, contact) VALUES ('$fname','$lname','$email','$contact')";
//  $conn->query($sql);
  $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');}
        else{
            echo("Connection failed: " . $conn->connect_error);
}
//  if($result){
//   echo "Data Inserted Succesfully";
//  }
//  else
// +
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

    <title>CRUD APPLICATION</title>
  </head>
  <body>
    <h1>CREDENTIALS</h1>
    <div class="container">
    <form action="index.php" method="post" >
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter yout first name" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter your last name" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label class="form-label">Contact</label>
    <input type="number" class="form-control" name="contact" placeholder="Enter your contact" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
</form>
  </body>
</html>