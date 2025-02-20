
<?php
$showAlert = false;
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
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `userdata` (`Name`, `email`, `password`, `date`) VALUES ('$username', '$email', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>
<!doctype html>
<html lang="en">
  <head>
  <style>
      .bg-img {
  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTacke0X_yYcKMyQ6ZluZD7vL2eJLxcupv8ianwuS8jzVHLfY6j6Afecj_ZOIrmPXMZHGw&usqp=CAU);
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

    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
  <div class="bg-img">

 <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login here <a href="/css/login.php">Login</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
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
        <br>
     <h1 class="text-center">Signup to our website</h1>
     <form action="/css/signup.php" method="post">
        <div class="form-group col-md-5">
            <b><label for="username">Username</label></b>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">            
        </div>
<div class="form-group col-md-5">
            
        <b><label for="email">Email</label></b>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text" style="color:black; font-size:15px;">We'll never share your email with anyone else.</small></p>

            
        </div>
        <div class="form-group col-md-5">
            <b><label for="password">Password</label></b>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
        </div>
        <div class="form-group col-md-5">
            <b><label for="cpassword">Confirm Password</label></b>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text" style="color:black; font-size:15px;">Make sure to type the same password</small>
        </div>
         
        <div style="padding-left:160px;"><button type="submit" class="btn btn-primary">SignUp</button></div>
        
     </form>
    </div>
    <div style="padding-left:160px; font-size:20px;">Already registered <a href="/css/login.php">Login</a> here</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>  
</body>
</html>
