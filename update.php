<?php
$servername="localhost";
$username="root";
$password="";
$database="restaurant";

$conn = mysqli_connect($servername, $username, $password,$database);

if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
else{
    //echo "connection successfull<br>";
}
error_reporting(0);
$id=$_GET['id'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['em'];
$psw=$_GET['psw'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>update</title>
    <style>
         .form{
             box-shadow:0px 0px 4px rgb(83, 81, 81);
         }
         .text{
             color:rgb(228, 88, 169);
             text-shadow: 0px 0px 2px black ;
         }
         
        </style>



</head>
<body>



   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tryp/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/signup.php">signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/showsignup.php">showsignup</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>














<!-- /tryp/showsignup.php -->
<div class="container mx-auto">
    <h1 class="text-center text">update your data</h1>
    <form action="" method="get" class="form-control form my-4">
        <div class="mb-3">
    <label for="id">Id</label>
    <input type="text" class="form-control" value="<?php echo $id ?>" name="id" id="id" placeholder="id" readonly required >
    <div>
    <div class="mb-3">
    <label for="fname">First Name</label>
<input type="text"  class="form-control"  value="<?php echo $fn?>" id="fname" name="fname" required></div>
<div class="mb-3">
    <label for="lname">Last Name</label>
<input type="text" class="form-control"  value="<?php echo $ln?>" id=" lname" name="lname" required></div>
<div class="mb-3">
    <label for="email">Email</label>
<input type="email" class="form-control"  value="<?php echo $em?>" id ="email" name="email" required></div>
<div class="mb-3">
    <label for="pass">Password</label>
<input type="password" class="form-control"  value="" name="pass" id="pass" placeholder="password" minlength="8" required></div>

       <input type="submit"  class="btn btn-primary" id="button" name="submit" style="display:flex;float:right";  value="update details">
       <!-- <button class="btn btn-primary" name="submit" type="submit" style="display:flex;float:right;">update</button> -->
    </form>
    <a href="showsignup.php " type="button" class="btn btn-primary" >show</a>
</div>
    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>


<?php
if($_GET['submit'])
{
    // if($_SERVER['REQUEST_METHOD']=='POST')
    // {
    $id=$_GET['id'];
    $fname=$_GET['fname'];
    $sname=$_GET['lname'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];
  
    $sql="UPDATE `signup` SET `firstname`='$fname',`lastname`='$sname',`email`='$email',`password`='$pass' WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('successfully updated')</script>";
    }
    else
    {
        echo "<script>alert('something went wrong')</script>".mysqli_error($conn);
    }
}
?>




</html>


