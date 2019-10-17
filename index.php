<!DOCTYPE html>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

button {
float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  }

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
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

/* Number text (1/3 etc) at top of the slide */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators at bottom of slide, shows which slide is active */
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

/* Fading animation hen changing slides*/
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

</style>
</head>

<body>
<!--IF NOT LOGGED IN-->
<?php
    session_start();
if (!$_SESSION['logged']){
    echo "
    <ul>
     <li><a href='index.html'>Home</a></li>

      <li><a href='login.html'>Log In</a></li>
      <li><a href='create.html'> Create Account</a></li>

        <form action='/action_page.php'>
          <li><input type='text' placeholder='Search..' name='search'></li>

          <button type='submit'>Submit</button>

        </form>

    </ul>
    ";
}else{
    echo "
    <ul>
     <li><a href='index.html'>Home</a></li>

      <li><a href='changepassword.html'>Change Password</a></li>
      <li><a href='logout.php'>Logout</a></li>

        <form action='/action_page.php'>
          <li><input type='text' placeholder='Search..' name='search'></li>

          <button type='submit'>Submit</button>

        </form>

    </ul>
    ";
}


?>
<img src="popcorn.jpg" style="width:300px; height:300px;" class = "center" align ="auto">

Latest Movies!

 <!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Joker.jpg" style="width:100%">
  <div class="text">The Joker</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="IT.jpg" style="width:100%">
  <div class="text">IT Chapter Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ScaryStories.jpg" style="width:100%">
  <div class="text">Scary Stories to tell in the Dark</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}

</script>

</body>

</html>
