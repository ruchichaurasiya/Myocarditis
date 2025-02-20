<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.navbar {
  width:100%;
justify-content: flex-end;
  background-color: black ;
justify-content: space-evenly;
align:right;
}
.navbar a {
  padding: 18px;
  color: white;
  text-decoration: none;
  font-size: 22px;

}
.bg-img {
  background-image: url(https://www.medylife.com/blog/wp-content/uploads/2018/08/Heart-Diseases.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
#mydiv{
justify-content: space-evenly;
display: flex;
position:relative;
}
.navbar a:hover {
 background-color: #ffcc00;
}
p.facts{
font-size:50px;
font-style:italic;
font-family:"Lucida Handwriting",Cursive;
padding-left:200px;
margin-top:100px;
color: #ffcc00;
}
p.welcome{
font-size:50px;
font-style:italic;
font-family:"Lucida Handwriting",Cursive;
padding-left:100px;
padding-top:50px;
color:black;
letter-spacing:15px;
}
.logo{
padding-left:15px;
float:left;
border-radius:50%;
}
h1{
padding-left:30px;
color:#ffcc00;
padding-top:100px;
padding-bottom:100px;
}
.a{
font-size:23px;
color:black;
text-align:left;
padding-left:30px;
padding-right:30px;
}
.quote{

font-size:60px;
font-style:italic;
font-family:"Times New Roman",serif;
padding-left:100px;
padding-right:100px;
padding-top:150px;
color:MidnightBlue;
padding-top:100px;
}
.column{
float:left;
width:50%;
padding:50px;
height:400px;
}
.row:after {2
content:"";
display:table;
clear:both;
}


.links {
  background-color: lightgrey;
  width: 50%;
height:400px;
padding:50px;
}
.right {
  background-color: lightgrey;
  width: 50%;
height:400px;
padding:100px;
float:right;
}

h2{
color:#ffcc00;
}
footer {
  text-align: center;
  background-color:black;
  color: white;
}

#demo{
float:right;
color:white;
}
.quotea{
font-size:30px;
font-family:"Times New Roman",serif;
font-style:italic;
padding-left:100px;
padding-right:100px;
padding-top:150px;
color:MidnightBlue;
padding-top:100px;
}
.video{
padding-top:5px;
padding-right:20px;
padding-bottom:55px;
}

.reference ul
{
display:grid;
grid-template-columns:repeat(2,1fr);
}
.reference ul li
{
list-style:none;
color:white;
font-weight:500;
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

@media only screen and (max-width:1140px){
#mydiv{
flex-direction:column;
}
.navbar{
flex-direction:column;
}
}


</style>
<body>
<div class="bg-img">
<div class="navbar" id="mydiv">
  <a href="/css/about.php">About</a> 
<a href="/css/signup.php">Register</a> 
<a href="/css/login.php">Login</a>
 

  <a href="/css/feedback.php">Feedback</a>
<button type="button" class="click" onclick="document.getElementById('demo').innerHTML = Date()">Click to display Date and time.</button>
<p id="demo"></p>
</div>
<img class="logo" src="https://millionhearts.hhs.gov/images/MH_Logo_Red_Bkd_Fb.jpg" alt="logo" width="200" height="200">

<center><p class="facts">HUSTLE TILL<br> YOUR LAST BREATHE</br></p></center>
<h1>Powering The<br> Recreational Game</br></h1>
<p class="a">Every day is another chance to get stronger, to eat better, to live healthier, and to be the best version of you..</p>
<center><p class="quote">"Everyone has the fire, but the champions know when to ignite the spark"</p></center>
</div>

<footer>
<div class="about reference">
<ul>
<li>
<b><h2>Contacts</h2></b>
<p>bl.en.u4cse22278@bl.students.amrita.edu</p>
<p><a href="mailto:bl.en.u4cse22278@bl.students.amrita.edu">Send mail..</a></p>
<p>bl.en.u4cse22252@bl.students.amrita.edu</p>
<p><a href="mailto:bl.en.u4cse22252@bl.students.amrita.edu">Send mail..</a></p>
<p>bl.en.u4cse22286@bl.students.amrita.edu</p>
<p><a href="mailto:bl.en.u4cse22286@bl.students.amrita.edu">Send mail..</a></p>
<p>Click below number to call a customer support</p>
<p><a href="tel:8084568141">8084568141</a></p>
</li>
<li>
<h2>Location</h2>
<p>Narayani stadium</p>
<p>Near to Terai hospital</p>
<p><a href="https://goo.gl/maps/Qv5BAMRDP5aMB1wz7">Click to Open map</a></p>
</li>
</ul>
</div>
<p style="font-size:16px; color:gray;"> Copyright &copy; 2028 www.pioneer flyers.com-All rights reserved</p></center>
</footer>
</body>
</html>

