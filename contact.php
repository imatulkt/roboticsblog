<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('https://images.idgesg.net/images/article/2018/10/ai_robotics_mathematics_equation_analytics_virtual-screen-100777425-large.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  

}

.topnav {
  overflow: hidden;
  background-color: #072f5f;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>




</head>
<body>

<div class="topnav">
  <a class="active" href="contact.php">Contact Us</a>
  <a href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="registration.php">Register</a>
  
  <a href="aboutus.php">About Us</a>

  
</div>
<br>
  <br>

<div class="container">
    <form action="" method="post">
<label for="firstname">Firstname<br></label><input type="text" required name="firstname" id="firstname"><br>
<label for="lastname">Lastname<br>
</label><input type="text" required name="lastname" id="lastname"><br>
<label for="mobileno">MobileNo<br></label><input type="number" required name="mobileno" id="mobileno"><br><br>
<input type="submit" value="Submit" name="submit"> 

</form>
</div>   

</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobileno=$_POST['mobileno'];
    $fileopen=fopen("user_contacts.txt","a");
    fwrite($fileopen,"\nFirst Name :".$firstname);
    fwrite($fileopen,"\nLast Name :".$lastname);
    fwrite($fileopen,"\nMobile No :".$mobileno);
    fwrite($fileopen,"\n_");
   
    fclose($fileopen);
}


?>