<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
      .bg-img {
  background-image: url(https://images.ctfassets.net/pxcfulgsd9e2/articleImage119088/135943ae137e5483e7cfee1ecddc01b6/Heart-disease-and-depression-HN1635-iStock-501646960-Sized.jpg?f=top&fit=fill&fl=progressive&fm=jpg&h=786&q=85&w=1396);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height:630px;
      }

      .button {
  background-color:lightgrey ;
  border-color: black ;
  color: black;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 8px 8px;
  cursor: pointer;
}

input[type=button] {
  width: 120px;
  height: 60px;
  margin-left: 35px;
  background-color: black;
  color: white;
  border: none;
outline:none;
}

#demo{
float:right;
color:white;
}

.colors{
  color:red;
  text-align:left;
  padding-left:280px;
}
      </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <center><strong><title>Welcome - <?php $_SESSION['username']?></title> 
  </head>
  <body>

  <div class="bg-img">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/css/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/css/logout.php">Logout</a>
      </li>

      <button type="button" class="click" onclick="document.getElementById('demo').innerHTML = Date()">Click to display Date and time.</button>
<p id="demo"></p>
    </ul>
  </div>
    </nav>

   <h1 style="font-size:80px;"><center><b>Welcome - <?php echo $_SESSION['username']?></center></b></h1><br><br>
<center><strong><h1 style="font-size:50px;">Predict your myocarditis and be safe</h1></strong></center><br>
<center><h2 style="font-size:40px;"> Click below to predict your chance of myocarditis </h2></center>
<li class="nav-item">
        <br>
        <br>
        <br>
       <button class="button" id="redirect-button">Predict</button>
       <strong><h7 style="font-size:20px;"><div class="colors">Note: </div>Please Fill all the details based on your blood test report for better result.</h7></strong>

<script>
    document.getElementById("redirect-button").addEventListener("click", function () {
        window.location.href = "http://127.0.0.1:5000";
    });
    </script>

      </li>


  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
