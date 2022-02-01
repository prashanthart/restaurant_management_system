<?php
$servername="localhost";
$username="root";
$password="";
$database="restaurant";

$conn=mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
?>
<?php
session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)){
    header("location:alogin.php");
    exit;
}
$name=$_SESSION['lname'];
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
        .bg{
          background-color: #333;
        }
           .carousel-item{
             height:30rem;
             background-color: black;
             color: white;
             position: relative;
             background-position: center;
             background-size: cover;
           }
    
          
         
      h1{
        font-size: 70px;
        text-shadow: 0px 0px 5px black;
      }
     
       .c{
         position: absolute;
    right:-300px;
    top:150px;
    bottom:0;
    padding-bottom: 50px;
       }
  .check{
             width:40px;
             height:40px;
           }
           #carouselExampleIndicators{
             position: relative;
             overflow: hidden;
           }
           .light1{
             position: absolute;
             display:block;
           }
           .light2{
            position: absolute;
             display:block;
           }
           .light3{
             position: absolute;
             display:block;
           }
           .light4{
             position: absolute;
             display: block;
           }
    
          .light1{
           top:2px;
           left:-1110px;
           width:100%;
           height:15px;
            transition:5s;
           transition: transform 2s ; 
           background: linear-gradient(90deg,transparent,red);
    
           }
            .light1{
             /* top:0; */
             
             /* cursor: pointer; */
             
              /* transform: translateX(100%);  */
             animation: light1 3s  ease-in forwards infinite 1s;
             /* animation-iteration-count: infinite; */
           }
           @keyframes light1 {
             100%{
              left:100%;
              transition: 2.3s;
               transform: translateX(100%);
             }
             
           }
         .light3{
             bottom:5px;
             right:-1110px;
             width:100%;
             height:15px;
             transition: 2s;
             transition: transform 2s ;
           background: linear-gradient(270deg,transparent,red);
           }
            .light3{
              
                /* transition: 1s; */
                /* transition-delay: 0.5s; */
               animation: light3 2.5s ease-in forwards infinite 1s;
           }   
           @keyframes light3{
             100%{
              transition: 1.8s;
              right:100%;
              transform: translateX(100%); 
    
             }
    
           }
           
           .light2{
            top:-1200px;
             right:5px;
             width:10px;
             height:100%;
             transition: 5s;
             transition: transform 50s ;
           background: linear-gradient(180deg,transparent,red);
           }
            .light2{
               
                /* transition: 1s; */
                /* transition-delay: 0.5s; */
               
               animation: light2 1s ease-in forwards infinite;
           }   
          @keyframes light2 {
            100%{
              transition: 1s;
               transform: translateY(100%);  
               top:100%;
            }
            
            
          }
           .light4{
            bottom:-1200px;
             left:10px;
             width:40px;
             height:100%;
             transition: 5s;
             transition: transform 5s ;
            
           background: linear-gradient(360deg,transparent,red);
           }
            .light4{
               
                /* transition: 1s; */
                /* transition-delay: 0.5s; */
               
               animation: light4 1s ease-in forwards infinite ;
           }   
          @keyframes light4 {
            100%{
              transition-delay: 0.75s;
              transition: 5s;
               transform: translateY(100%);  
               bottom:100%;
              
            }
            
            
          }
           /* }
           .light2{
            top:0px;
           left:0;
           width:100%;
           height:20px;
           background: linear-gradient(90deg,transparent,red);
           } */
          
          
    
    
        </style>




</head>
<body>
    <!-- navbar -->
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $loggedin=true;
    }
    else
    {
        $loggedin=false;
    }
  echo  '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container-fluid">';
    // <a class="navbar-brand" href="#"><?php echo "$name" 
      echo'
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">';
          echo  '<a class="nav-link active" aria-current="page" href="/tryp/home.php">Home</a>
          </li>';
  
          if(!$loggedin)
          {
          echo '<li class="nav-item">
            <a class="nav-link" href="/tryp/alogin.php" >login</a>
          </li>';
          }
  if($loggedin){
      echo' <li class="nav-item">
      <a class="nav-link " href="/tryp/chefs.php">chefs details</a>
      </li> <li class="nav-item">
      <a class="nav-link " href="/tryp/achef.php">add chef</a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="/tryp/aupdate.php">update chef</a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="/tryp/customer.php">customer details</a>
      </li>
     
          <li class="nav-item">
            <a class="nav-link " href="/tryp/logout.php">logout</a>
          </li>
          ';
  }
  echo '
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>';
  ?>
  <div class="bg">
  <div class="container ">
  
  <div id="carouselExampleIndicators" class="carousel slide p-3 mt-5" data-bs-ride="carousel">
  
  
      <span class="light1"></span>
       <span class="light2"></span>
       <span class="light3"></span>
       <span class="light4"></span>
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
       <div class="carousel-inner">
     <div class="carousel-item active" style="background-image: url(https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGZvb2R8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
       <div class="container c">
       <h1 claa="title">Finest Restaurant</h1>
         
         <!-- <p>here some paragraph..</p> -->
       </div>
     </div>
  
       <div class="carousel-item " style="background-image: url(https://images.unsplash.com/photo-1457460866886-40ef8d4b42a0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fGJ1cmdlcnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
        <div class="container c">
          <!-- <h1>example heading...</h1> -->
          <!-- <p>here some paragraph..</p> -->
        </div>
   
     </div>
  
     <div class="carousel-item " style="background-image: url(https://images.unsplash.com/photo-1496662559123-ac291228fb6c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDl8fHJpY2V8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60);">
      <div class="container c">
        <!-- <h1>example heading...</h1> -->
        <!-- <p>here some paragraph..</p> -->
      </div>
  
   </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
  </div>
  </div>
  </div>  














<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>