<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('rob.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  

}

.topnav {
  overflow: hidden;
  background-color:#072f5f;
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


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="aboutus.php">About Us</a>
  <a href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="registration.php">Register</a>
  <a href="contact.php">Contact Us</a>
  
</div>

<div class="about-section">
  <h1>About Us </h1>
  <p>A blog for those who love Robots and Robotic technology</p>
  <p>This website has been developed under TCET's Empolyability Skills Development (ESD) Initative, Sem-V, 2020-21 </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Atul K Tiwari</h2>
        <p class="title">Developer</p>
        <p>He is currently pursuing his B.Engg in E&TC. His area of interest include Data Analytics, Java EE and web development. </p>
        <p>1032180481@tcetmumbai.in</p>
        <p><button class="button"><a href="mailto:1032180481@tcetmumbai.in">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Ayush Solanki</h2>
        <p class="title">Developer</p>
        <p>He is student of E&TC department in TCET. Area of interest includes front end development in HTML5, CSS and JS.</p>
        <p>1032180490@tcetmumbai.in</p>
        <p><button class="button"><a href="mailto:1032180490@tcetmumbai.in">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Jatin Tak</h2>
        <p class="title">Designer</p>
        <p>He loves football and code. His area of interest includes Web development. </p>
        <p>1032180484@tcetmumbai.in</p>
        <p><button class="button"><a href="mailto:1032180481@tcetmumbai.in">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Neel Solanki</h2>
        <p class="title">Writer</p>
        <p>He loves to write content for variety of blogs</p>
        <p>1032180478@tcetmumbai.in</p>
        <p><button class="button"><a href="mailto:1032180481@tcetmumbai.in">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Ashutosh Tiwari</h2>
        <p class="title">Editor</p>
        <p>Apart from giving directions about layout of blog, he also edits the content.</p>
        <p>1032180472@tcetmumbai.in</p>
        <p><button class="button"><a href="mailto:1032180481@tcetmumbai.in">Contact</a></button></p>
    </div>
  </div>
</div>



</body>
</html>