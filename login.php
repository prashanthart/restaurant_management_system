
<?php

$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $servername="localhost";
$username="root";
$password="";
$database="restaurant";
// $database="prashanth";

$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
else{
    //echo "connection successfull<br>";
}
$username=$_POST["email"];
$password=$_POST['pass'];
$name=$_POST['lname'];
// if(isset($_POST['login']))
// {
//     $sql="select * from manager where email='$username' and password='$password'";
//     $result=mysqli_query($conn,$sql);
//     $num=mysqli_num_rows($result);
//     if($num==1){
//       $login=true;
//       sesstion_start();
//       $_SESSION['loggedin']=true;
//       $_SESSION['username']=$username;
//       $_SESSION['lname']=$name;
//       header("location:home.php");
//     }
//     else{
//       $showerror="invalid";
//     }
// }
$sql="select * from signup where email='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    $_SESSION['lname']=$name;
    header("location:home.php");
   
}
else{
    $showerror="invalid";
}
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>home page</title>
  </head>
      <style>
         .link:hover{
             /* background-color:  rgb(22, 24, 22);
             color:black; */
             border:1px solid black;
             box-shadow: 0px -3px 3px  gray;

         }
         body{
             /* background-image: url("https://www.itl.cat/pngfile/big/99-996466_background-images-for-restaurants.jpg") ;
             background-repeat: no-repeat;
             background-size: cover; */
             background-color: rgb(179, 174, 174);
         }
         .login{
             box-shadow: 0px 0px 5px black;
             border-radius:8px;
         }
         .fc{
             box-shadow: none!important;
         }
         .fc:focus,.fc:active
         {
             border-width: 2px;
             border-color: rgb(83, 236, 77)!important;
         }
         .loginbtn{
            background-color: rgb(48, 165, 37);color:white;font-weight: bold;text-shadow: 0px -1px 1px black;
         }
         .loginbtn:hover{
             color:white;
             border:1px solid black;
             box-shadow: 0px -3px 3px  gray;

         }
          </style>
        


  <body>
   
    



    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Profile</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tryp/home.php">Home</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="/tryp/login.php">login</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" href="/tryp/signup.php">User login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/signup.php">Signup</a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="/tryp/showsignup.php">Showsignup</a>
        </li>  -->
        <li class="nav-item">
          <a class="nav-link" href="/tryp/alogin.php">Admin login</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="/tryp/showsignup.php">showsignup</a>
        </li> -->
        
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<?php
if($login){
    echo '<div class="container"><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>loggedin!</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div><div>';
}
if($showerror){
    echo '<div class="container"><div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:350px;margin:auto;">
    <strong>failed to login! </strong> check email or password 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div><div>';
}
?>

     <div class="container">
     <h1 class="text-center mt-1">login</h1>
      <form action="/tryp/login.php" method="post" class="form-control mt-2 login" style="width:300px;margin:auto;">
      <div class="mb-3">
         <label class="form-label mx-1">Name</label>
          <input class="form-control fc" type="text" name="lname" placeholder="User name" autocomplete="off">
          </div>
          <div class="mb-3">
          <label class="form-label mx-1">Email</label>
          <input type="email" name="email" class="form-control fc" placeholder="Email" class="from-control" autocomplete="off">
        </div>
        <div class="mb-3">
          <label class="form-label mx-1">Password</label>
          <input type="password" class="form-control fc" name="pass"  placeholder="Password">
        </div>
          <button class="btn d-block loginbtn" type="submit" name="login">Login</button>
      </form>
      <div style="text-align: center;">
        <hr class="mt-3" style="width:30%;margin:auto;">
        <a href="/tryp/signup.php" class="btn btn-sm link mt-2" style="background-color: rgb(48, 165, 37);color:white;font-weight: bold;text-shadow: 0px -1px 1px black;">Create New Account</a>
      </div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
  /  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

