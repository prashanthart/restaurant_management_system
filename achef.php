
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .a{
            position: absolute;
            right:10px;
            bottom:20px;
        }
        form{
            position: relative;
        }
        .ff{
            border:1px solid rgb(99, 97, 97);
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            /* background-image: linear-gradient(to bottom, rgb(238, 97, 121), blue); */
            /* color:white; */
            box-shadow: 0px 0px 12px black;
            padding:30px;
            

        }

        input,.a{
            box-shadow: inset 0px 0px 3px black;
        }
        body{
            background-color: rgb(179, 174, 174);
            /* background-image: linear-gradient(45deg,rgb(255, 119, 194),rgb(91, 9, 107)); */
        }
    </style>




</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
                <a class="nav-link" href="/tryp/ahome.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tryp/chefs.php">chefs details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/tryp/achef.php">add chef</a>
              </li>
          <li class="nav-item">
            <a class="nav-link " href="/tryp/aupdate.php">update chef</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tryp/customer.php">customer details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tryp/logout.php">logout</a>
          </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



 
<?php
        //    posting method
           if($_SERVER['REQUEST_METHOD']=='POST')
           {
            //    $name=$_POST['name'];
            //    $email=$_POST['email'];
            //    $desc=$_POST['desc'];
               $Fname=$_POST['fna'];
               $Lname=$_POST['lna'];
               $Contact=$_POST['con'];
               $Address=$_POST['adds'];
               $Salary=$_POST['sala'];
               $gender=$_POST['gender'];
               $Bdate=$_POST['dob'];
               $Join_Date=$_POST['jd'];
               $Specialization=$_POST['spet'];


           
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
            $sql="INSERT INTO `chef` ( `Fname`, `Lname`, `Contact`, `Address`,`Salary`,`gender`,`Bdate`,`Join_Date`,`Specialization`) VALUES ( '$Fname', '$Lname', '$Contact', '$Address', '$Salary', '$gender', '$Bdate', '$Join_Date','$Specialization' )";
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

<div class="container ">
      <h1 class="text-center mt-5 ">add chef</h1>
    <form class="form-control ff mx-auto mb-5" action="/tryp/achef.php" method="post" style="max-width:600px;margin:auto">
        <div class="mb-3  form-group">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="fn">First Name</label>
                    <input class="form-control" type="text" id="fn" name="fna">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="ln">Last Name</label>
                    <input class="form-control" type="text" id="ln" name="lna">
                </div>

            </div>

        </div>
      
        
        <div class="mb-3  form-group">
            <label for="con">Contact</label>
            <input class="form-control" type="text" id="con" name="conn">
        </div>
        <div class="mb-3  form-group">
            <label for="add">Address</label>
            <input class="form-control" type="text" id="add" name="adds">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="sal">Salary</label>
                    <input class="form-control" type="text" id="sal" name="sala">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3 form-group">
                    <label for="gen">Gender</label>
                    <input class="form-control" type="text" id="gen" name="gender">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="dbo">Date of Birth</label>
                    <input class="form-control" type="date" id="dob" name="dob">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="mb-3 from-group">
                    <label for="jd">Joining Date</label>
                    <input class="form-control" type="date" id="jd" name="jd">
                </div>
                
            </div>
        </div>
       
      
       
        <div class="mb-3 from-group">
            <label for="spe">Specialization</label>
            <input class="form-control" type="text" id="spe" name="spet">
        </div>
        <div class="form-group mb-3">
        <input type="submit"  class="btn btn-primary" id="button" name="submit"   value="add chef">
        </div>
         <a href="/tryp/chefs.php" class="btn btn-primary a" >show chef</a> 
    </form>
      
</div>











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>