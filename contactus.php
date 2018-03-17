<?php

 $db = mysqli_connect('localhost','username','password','database_name')
 or die('Error connecting to MySQL server.');
 
?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    align: center;
}

li {
    float: left;
}

li a {
    display: block;
    color: #262626;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    color: #63cfc4;
    text-decoration: underline;
}

.active {
    background-color: #0abab5;
    text-color: #ffffff;
}	

.container {
    position: relative;
    text-align: center;
    color: #262626;
}

.top-left {
    position: absolute;
    top: 150px;
    left: 140px;
    font-size: 75px;
}

.Email {
width: 350px !important;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height: 25px;
   width: 100%;
   background-color: #81D8D0;
   color: #666666;
   text-align: right;
   line-height: 2px;

}

</style>

</head>
<body>


<div class="container">
  <img src="/Users/tiffany/Google Drive/yr2sem2assignment/websitedesign/tiffany-wallpaper.jpg" alt="wallpaper"  style="width:100%; ">
<div class="top-left">TIFFANY & CO.</div>
</div>


<ul>
  <li><a href="file:///Users/tiffany/Google%20Drive/yr2sem2assignment/websitedesign/home.html">Home</a></li>
  <li><a href="file:///Users/tiffany/Google%20Drive/yr2sem2assignment/websitedesign/products.html">Products</a></li>
  <li><a href="file:///Users/tiffany/Google%20Drive/yr2sem2assignment/websitedesign/aboutus.html">About Us</a></li>
  <li><a href="file:///Users/tiffany/Google%20Drive/yr2sem2assignment/websitedesign/contactus.html">Contact Us</a></li>
</ul>


<p style="color: #666666; font-size: 18px">
You can leave you message by filling in the following form. <br>
You can also reach us through <u>wwytiffany1998@gmail.com</u> or visit any of our branches.
</p>

<form action="MAILTO: wwytiffany1998@gmail.com" method="post" enctype="text/plain">
  <fieldset>
    <legend><font size="4", style="color: #3cc3b6;">Personal information</font></legend>
    <font style="color: #666666;">First name:</font><br>
    <input type="text" id="firstname" name="firstname">
    <br>
    <font style="color: #666666;">Last name:</font><br>
    <input type="text" id="lastname" name="lastname">
    <br>
    <font style="color: #666666;">Email address:</font><br>
    <input type="email" id="email" name="Email" maxLength="64">
    <br>
  </fieldset>
  
  <br>
  <fieldset>
    <legend><font size="4", style="color: #3cc3b6;">Comments</font></legend>
    <font style="color: #666666;">Message to us:</font><br>
    <textarea name="message" id="message" rows="8" cols="40"></textarea>
    <br>
  </fieldset>
  <br><br>
  <input type="submit" value="Send">
  <br><br><br>
  
</form>










<div class="footer">
  <p> Last modified: 06 Mar 2018 </p>
</div>




</body>
</html>
