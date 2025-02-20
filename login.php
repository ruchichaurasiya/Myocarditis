<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="user";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
die("Sorry we failed to connect :". mysqli_connect_error());
}

    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * FROM userdata where Name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);




    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");



    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
  <style>
      .bg-img {
  background-image: url(https://repository-images.githubusercontent.com/457076638/b9aea380-9717-46c2-a85f-c522b5d3fe5a);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 605px;
  
      }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <div class="bg-img">
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="/css/login.php" method="post">
        <div class="form-group col-md-5">
            <b><label for="username">Username</label></b>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group col-md-5">
            <b><label for="password">Password</label></b>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        <div style="padding-left:160px;"><button type="submit" class="btn btn-primary">Login</button></div>

     </form>
    </div>

        <div style="padding-left:160px; font-size:20px;">Create your account here <a href="/css/signup.php">Register</a></div>
        
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div></body>
</html>
