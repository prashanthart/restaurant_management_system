<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            /* background-image: url("https://www.itl.cat/pngfile/big/99-996466_background-images-for-restaurants.jpg") ;
            background-repeat: no-repeat;
            background-size: cover; */
            background-color: rgb(179, 174, 174);
        }
    </style>
  </head>
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
        
        <li class="nav-item">
          <a class="nav-link" href="/tryp/login.php">User login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/tryp/signup.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/alogin.php">Admin login</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- php stating -->
   
<?php
        //    posting method
           if($_SERVER['REQUEST_METHOD']=='POST')
           {
               $fname=$_POST['fname'];
               $lname=$_POST['lname'];
               $email=$_POST['email'];
               $pass=$_POST['password'];
               
           
        // submit to database

        $servername  ="localhost";
        $username   ="root";
        $password   ="";
        $database   ="restaurant";
        //connection
        $conn=mysqli_connect($servername,$username,$password ,$database);

        if(!$conn)
        {
            die("sorry we failed to connect : ".mysqli_connect_errno());
        }
        else{
            // echo 'connected to database';

            // submitting to database
            $sql="INSERT INTO `signup` ( `firstname`, `lastname`,`email`, `password`,`date_time`) VALUES ( '$fname', '$lname','$email', '$pass', current_timestamp());";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
                <strong>successfully!</strong>inserted into database
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            else{
                echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>something went wrong</strong>'.mysqli_error($conn).'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
        }


    ?>

 
<!--html form starts -->
<div class="container">
<h2 class="text-center mt-1">Sign up</h2>
<form class="form-control mt-5" style="box-shadow:0px 0px 2px 1px black;" action="/tryp/signup.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="name" name ="fname"  aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="name" name ="lname"  aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Join now</button>
</form>


<!-- <a class="btn btn-primary mt-3" href="/tryp/showsignup.php">show data</a> -->
</div>

















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>