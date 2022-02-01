<?php
$servername="localhost";
$user="root";
$password="";
$database="restaurant";

$conn=mysqli_connect($servername,$user,$password,$database);
if(!$conn)
{
    die("sorry failed to connect : ".mysqli_connect_error());
}
//getting data from chefs.
error_reporting(0);
$Id=$_GET['id'];
$Fname=$_GET['fn'];
$Lname=$_GET['ln'];
$Contact=$_GET['con'];
$Salary=$_GET['Salary'];
$Address=$_GET['add'];
$Gender=$_GET['gen'];
$Bdate=$_GET['Bdate'];
$Join_Date=$_GET['jdate'];
$Specialization=$_GET['spe'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <!-- nav bar -->

    

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
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
                <a class="nav-link" href="/tryp/achef.php">add chef</a>
              </li>
          <li class="nav-item">
            <a class="nav-link active" href="/tryp/aupdate.php">update chef</a>
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
  
  <!--update chef data  -->
  
  <div class="container ">
      <h1 class="text-center mt-1 ">update chef</h1>
    <form class="form-control ff mx-auto mb-5" action="" method="get" style="max-width:600px;margin:auto">
        <div class="mb-3  form-group">
            <label for="id">Cook_Id</label>
            <input class="form-control" type="number" id="id" value="<?php echo $Id?>" name="cid" readonly>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="fn">First Name</label>
                    <input class="form-control" type="text" id="fn" value="<?php echo $Fname?>" name="fna">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="ln">Last Name</label>
                    <input class="form-control" type="text" id="ln" value="<?php echo $Lname?>" name="lna">
                </div>

            </div>

        </div>
      
        
        <div class="mb-3  form-group">
            <label for="con">Contact</label>
            <input class="form-control" type="text" id="con" value="<?php echo $Contact?>" name="conn">
        </div>
        <div class="mb-3  form-group">
            <label for="add">Address</label>
            <input class="form-control" type="text" id="add" value="<?php echo $Address?>" name="adds">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="sal">Salary</label>
                    <input class="form-control" type="text" id="sal" value="<?php echo $Salary?>" name="sala">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3 form-group">
                    <label for="gen">Gender</label>
                    <input class="form-control" type="text" id="gen" value="<?php echo $Gender?>" name="gender">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3  form-group">
                    <label for="dbo">Date of Birth</label>
                    <input class="form-control" type="date" id="dob" value="<?php echo $Bdate?>" name="dob">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="mb-3 from-group">
                    <label for="jd">Joining Date</label>
                    <input class="form-control" type="date" id="jd" value="<?php echo $Join_Date?>" name="jd">
                </div>
                
            </div>
        </div>
       
      
       
        <div class="mb-3 from-group">
            <label for="spe">Specialization</label>
            <input class="form-control" type="text" id="spe" value="<?php echo $Specialization?>" name="spet">
        </div>
        <div class="form-group mb-3">
        <input type="submit"  class="btn btn-primary" id="button" name="submit"   value="update details">
        </div>
         <a href="/tryp/chefs.php" class="btn btn-primary a" >show chef</a> 
    </form>
      
</div>






    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>


<?php
// error_reporting(0);
if($_GET['submit'])
{
    // if($_SERVER['REQUEST_METHOD']=='POST')
    // {
    $id=$_GET['cid'];
    $fname=$_GET['fna'];
    $lname=$_GET['lna'];
    $con=$_GET['conn'];
    $add=$_GET['adds'];
    $sal=$_GET['sala'];
    $gen=$_GET['gender'];
    $dob=$_GET['dob'];
    $jd=$_GET['jd'];
    $spe=$_GET['spet'];
  
    $sql="UPDATE `chef` SET `Fname`='$fname',`Lname`='$lname',`Contact`='$con',`Address`='$add',`Salary`= '$sal',`gender`='$gen',`Bdate`='$dob',`Join_Date`='$jd',`Specialization`='$spe' WHERE `chef`.`Cook_Id`='$id'";
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