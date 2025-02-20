<html>
<head>
	<title>Heart Disease Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>*{font-size: 40px;}
.bg-image{
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
  *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            margin: 10px;
            padding: 10px;
            box-sizing: border-box;
        }
        .boxb{
            border: 1px solid red;
        }
        .boxr{
            border: 1px solid green;
        }
        .fa{
            color: goldenrod;
        }
        .fa-heart{
            color:red;
        }
        .btn-success{
            border-radius: 10px;
        }
        footer{
            margin-top: 20px;
    		    padding-top: 60px;
    		    padding-bottom: 20px;
    		    background-color: red;
        }

/* Split the screen in half */
.split {
  margin-top: 63px;
  height: 80%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #fff36b;
}

/* Control the right side */
.right {
  right: 0;
  background-color:#c0ebe6;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 400px;
  border-radius: 5%;
}
.card-text{
	font-size: 20px;
}

#entry{
	font-size: 20px;
	height: 40px;
	width: 360px;
	border-radius: 5px;
	background-color: red;	
}
#entry:hover{
	background-color: #fcfcfc;
}
	#submit{
	border-radius: 8px;
	background-color: #94d6e3;
	width:230px;
}
#submit{
	font-size: 25px;
	border-radius: 8px;
	background-color: #94d6e3;
	width:230px;
}
#submit:hover{
	background-color: #2d8ea1;
}
#submitl{
	border-radius: 5px;
	background-color: #f8dbff;
	font-size: 20px;
}
.nav{
	width:100%;
	height: 30px;
	color: #f8dbff;
}
#jumb{
	height: 350px;
}
#num{
	font-size: 20px;
}
.card{
	margin-left: 20px;
}
.img{
	width: 380px;
	height:380px;
}
.body{
	background-color: red;
}

.head{
	margin-left: 25px;
}
.dev{
	width: 100%;
}
.para{
	font-size: 20px;
	width: 70%;
}
footer{
        margin-top: 25px;
    	padding-top: 80px;
    	padding-bottom: 25px;
    	background-color: pink;
	font_size: 30px;		
}
.float-right{
	font-size:25px;
	height: 35px;
	text-decoration: underline;
	
}
.float-left{
	font-size:25px;
	height: 35px;

}
	</style>
</head>
<body>

<h2 class = "head">Welcome To Our Website </h2>
<center>
	<img class = "dev" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ0eGvrEZvS6YBkd9JtDnlYpMeGE1tuh3uBw&usqp=CAU">
	<br><br>
	<p class = "para" >Myocarditis is a disease where the heart muscle, known as the myocardium, becomes inflamed. This muscle contracts and relaxes to pump blood in and out of the heart and to the rest of the body.
When the myocardium becomes inflamed, its ability to pump blood becomes less effective. This causes problems like an abnormal heartbeat, chest pain, and trouble breathing.
In extreme cases, it can cause blood clots leading to a heart attack or stroke, damage to the heart, or death. </p>
<br>
</center>

<div class="container">
  <div class = "row">
    <div class="card mt-4 mr-3" style="width: 35rem;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMl6tS9NDdQZ42EI7RRzfgKPhdKhKtDGFXe7TDsocomW9lizpVVx-f7BcxY3CX6_F8m0s&usqp=CAU" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Know more about Heart Diseases</h5>
          <p class="card-text">Studies have proven that there's a higher risk of death in elderly people caused by heart diseases..</p>
          <a href="https://www.who.int/health-topics/cardiovascular-diseases#tab=tab_1" class="btn btn-success" >Continue Reading</a>
        </div>
      </div>
      <div class="card mt-4 mr-3" style="width: 35rem;">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeJjqAUWXLzIq2nwB1NlgWMDBhjknHD480uQ&usqp=CAU
" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Test if you have Heart Disease or not</h5>
            <p class="card-text">99% Accurate!!</p>
            <a href="/css/signup.php" class="btn btn-success" >Check Now</a>
          </div>
        </div>
        <div class="card mt-4 mr-3" style="width: 35rem;">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh9QYAlFb_TjdFwGvtGYpRZykJPCKg6t7qCQ&usqp=CAU" class="card-img-top" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Know how to prevent these diseases</h5>
              <p class="card-text">Scientists discovered that this habit can help avoid heart diseases..</p>
              <a href="https://medlineplus.gov/howtopreventheartdisease.html" class="btn btn-success" >Continue Reading</a>
            </div>
	</div>

<br><br>
<footer class="text-muted">
	  <div class="container">
	    <p class="float-right">
	      <a href="#" class = "float-right">Back to top</a>
	    </p>
	    <p class="float-left">You've Reached the end of the webpage</p>
	  </div>
	</footer>
</body>
</html>