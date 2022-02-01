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
    // }
error_reporting(0);
$mid=$_GET['id'];
$item_name=$_GET['name'];
$type=$_GET['type'];
$cat=$_GET['cat'];
$mon=$_GET['mon'];
// $sqll="INSERT INTO `itemlist` ( `menu_id`,`item_name`,`type`,`cat`,`money`) VALUES ('$mid','$item_name','$type','$cat','$mon' )";
// $resultt=mysqli_query($conn,$sqll);

// $name=$_POST['name'];
// $num=$_POST['num'];
// $cvv=$_POST['cvv'];
// $expdate=$_POST['expdate'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
    <style>
         body{
             /* background-image: url("https://www.itl.cat/pngfile/big/99-996466_background-images-for-restaurants.jpg") ;
             background-repeat: no-repeat;
             background-size: cover; */
             background-color: rgb(179, 174, 174);
         }
        .form-control{
            max-width: 800px;
            margin: auto;
            box-shadow: 0px 0px 3px black ;
            margin-bottom:10px;
        }
        label{
            font-weight: bold;
            font-size: 14px;
        }
        .img1{
            width : 60px;
            display: block;
            margin:auto;
            padding:4px;
        }
        .img2{
            width : 80px;
            display: block;
            margin:auto;
            padding:4px;

        }
        .visa{
            width:180px;
            height: auto;
            display: block;
            padding:5px;
            margin: auto;
            border:2px solid rgb(180, 176, 176);
            border-radius: 3px;
        }
        .btnn{
            width: 300px;
        }
        .buttons{
            position: relative;
        }
        .btnm{
            position: absolute;
            bottom:0px;
            right:0px;
        }
        .btnm:hover{
            background-color: rgb(27, 20, 20);
        }

    </style>
</head>
<body>
   
    <!-- navbar -->
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  mb-5">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/food_items.php">food items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/tryp/payment.php">Payment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tryp/logout.php">logout</a>
        </li>
    </div>
        
        
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php

error_reporting(0);
// $mid=$_GET['id'];
// $item_name=$_GET['name'];
// $type=$_GET['type'];
// $cat=$_GET['cat'];
// $mon=$_GET['mon'];



if($_SERVER['REQUEST_METHOD']=='POST')
           {
               $pname=$_POST['pname'];
               $num1=$_POST['num'];
               $cvv=$_POST['cvv'];
               $expdate=$_POST['expdate'];
               session_start();
               $email=$_SESSION['username'];
            //    echo $email;
               $sql="SELECT * FROM `signup` where email='$email'";
               $result=mysqli_query($conn,$sql);
               $num=mysqli_num_rows($result);
               for($i=0;$i<$num;$i++)
               {
                   $row=mysqli_fetch_assoc($result);
                   $id=$row['id'];
                   $name=$row['firstname'];
               }
            //    if(isset($_POST['submit']))
            //    {

            //    }
            $mid=$_POST['mid'];
$item_name=$_POST['name'];
$type=$_POST['type'];
$cat=$_POST['cat'];
$mon=$_POST['mon'];
            

            //    echo $id;
            //    echo $name;
            //    echo $mid;
            //    echo $item_name;
            //    echo $type;
            //    echo $cat;
            //    echo $mon;
            //    echo $pname;
            //    echo $num;
            //    echo $cvv;
            //    echo $expdate;
               $sql="INSERT INTO `paymentdetails` ( `id`,`username`,`email`,`name_on_card`, `cardnum`,`cvv`, `expdate`) VALUES (
                                                    '$id', '$name','$email', '$pname','$num1','$cvv','$expdate' )";
               $result=mysqli_query($conn,$sql);
              // $sqll="INSERT INTO `itemlist` ( `menu_id`,`item_name`,`type`,`cat`,`money`) VALUES ('$mid','$item_name','$type','$cat','$mon' )";
               // $resultt=mysqli_query($conn,$sqll);
               $sql1="INSERT INTO `itemlist` (`id`,`username`,`email`,`menu_id`,`item_name`,`type`,`cat`,`money`) VALUES (
                                              '$id','$name','$email','$mid','$item_name','$type','$cat','$mon')";
               $result1=mysqli_query($conn,$sql1);



                                                            
                                                // $mid=$_GET['menu_id'];
                                                // $item_name=$_GET['name'];
                                                // $type=$_GET['type'];
                                                // $cat=$_GET['cat'];
                                                // $mon=$_GET['mon'];
                                                // $name=$_POST['name'];
                                                // $num=$_POST['num'];
                                                // $cvv=$_POST['cvv'];
                                                // $expdate=$_POST['expdate'];

               if($result && $result1)
               {
                   echo '<div class="container"><div class="alert alert-success  alert-dismissible fade show" role="alert" style="max-width:500px;margin:auto">
                   <strong>Payment successful</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div></div>';
 
               }
               else{
                   echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
                   <strong>something went wrong</strong>'.mysqli_error($conn).'
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
               }
           
           }


?>
















<!-- payment section -->


    <div class="container mt-3 pt-2">
    <form action="/tryp/payment.php" method="post" class="form-control" >

    <div class="row">
        <div class="col-sm-6">
        <h4 class="text-danger mb-3">Payment Method</h4>
        <div class="row">
            <div class="col-sm-6 mb-3">
        <div class="visa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/1200px-Visa_Inc._logo.svg.png" class="img1" alt=""></div>
        </div>
        <div class="col-sm-6">
            <div class="visa">
                <img src="https://www.freepnglogos.com/uploads/paypal-logo-png-3.png" class="img2"  alt=""></div>
                
        </div>
        </div>
        <?php
         echo '<h5>Total bill : <span class="text-success">  &#8377; '.$mon.'/-</span></h5>'
         ?>
        <div class="form-group mb-4">
            <label for="">Name on card</label>
            <input type="text" class="form-control" name="pname" placeholder="enter name" required >
        </div>
        <div class="row">
            <div class="col-sm-6">
            <div class="form-group mb-4">
                <label for="">Card number</label>
                <input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx" name="num"  required>
            </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group mb-4">
                    <label for="">CVV</label>
                    <input type="text" class="form-control" placeholder="---" name="cvv" required>
                </div>
                </div>
        </div>
        <div class="form-group mb-4">
            <label for="">Expiration Date</label>
            <input type="text" class="form-control" placeholder="MM/YY" name="expdate" required>
        </div>
    </div>
        
        <div class="col-sm-6" style="background-color:rgb(231, 226, 226);padding:5px">
        <h3>List</h3>
            <div class="form-group mb-4">
                
                <input type="text" class="form-control" value="<?php echo $mid ?>" placeholder="" name="mid" readonly>
            </div>
            <div class="form-group mb-4">
                
                <input type="text" class="form-control" value="<?php echo $item_name ?>" placeholder="" name="name" readonly>
            </div>
            <div class="form-group mb-4">
                
                <input type="text" class="form-control" value="<?php echo $type ?>" placeholder="" name="type" readonly>
            </div>
            <div class="form-group mb-4">
                
                <input type="text" class="form-control" value="<?php echo $cat ?>" placeholder="" name="cat" readonly>
            </div>
            <div class="form-group mb-4">
                
                <input type="text" class="form-control" value="<?php echo $mon ?>" placeholder="" name="mon" readonly>
            </div>

        </div>
       
        
    </div>
    <div class="buttons">
        <button class="btn btnn btn-large btn-primary m-auto d-block" type=submit >Make Payment</button>
        <a class="btn btnm btn-large m-auto d-block btn-danger" href="home.php" >cancel</a>
        </div>
    </div>
    </form>
 
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
</body>
<?php





?>










</html>
