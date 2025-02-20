<!doctype html>
<html lang="en">
  <head>


<style>

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

  .left {
  left: 0;
  background-color: #fff36b;
background-image: url('https://t3.ftcdn.net/jpg/03/82/85/10/360_F_382851013_NGPo8PtL829t8YtWl3s0T3rxnj6OyTbC.webp');
 background-repeat: no-repeat;
background-attachment: fixed;
  background-size: 100% 100%;
}

/* Control the right side */
.right {
  right: 0;
  background-color:#c0ebe6;
background-image: url('https://linguaholic.com/linguablog/wp-content/uploads/2021/02/Alternative-Ways-To-Say-In-My-Opinion-720x405.jpg.webp');
 background-repeat: no-repeat;
background-attachment: fixed;
  background-size: 100% 100%;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
  
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $info = $_POST['name'];
        $satisfaction = $_POST['email'];
        $suggestion = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "user";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `feedback` (`Info`, `Satisfaction`, `Suggestion`) VALUES ('$info', '$satisfaction', '$suggestion')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="split left">
  <div class="centered">
    <img class= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkdSq9KvgveXc5mlUJm3VvSejaQTUKSoqf4vxJo-9uLP1ns4ntBhVTGSdRyFjXS5JOdE8&usqp=CAU">
  </div>
</div>

<div class="split right">
<div class="centered">
<h3><strong>ATTENTION PLEASE!!!<span style='font-size:50px;'>&#128540;</span></strong></h3><br>
<br>
<form action="/css/feedback.php" method="post">
    <div class="form-group">
        <b><label for="name" style="font-size:18px; color:brown;">Did you find the info valuable?</label></b>
        <input type="text" name="name" class="form-control" id="name" ><br>
    </div>

    <div class="form-group">
        <b><label for="email" style="font-size:18px; color:brown;">Are you satisfied with our website?</label></b>
        <input type="text" name="email" class="form-control" id="email" ><br> 
       

    <div class="form-group">
        <b><label for="desc" style="font-size:18px; color:brown;">Any Suggestions...</label></b>
        <input type="text" class="form-control" name="desc" id="desc"><br><br>
    </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </div></body>
</html>

