<!DOCTYPE html>
<html>
  <head>
    <title>C2 Massage Services | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">

  </head>

  <body> 

    <div class="topnav">
      <a  class="active" href="index.php">C2 Massage Services</a>
      <div class="topnav-right">
        <a class="active" href="#home">Home</a>
        <a href="services.php">Services</a>
        <a href="login.php">Schedule Appointment</a>
        <a href="about.php">About</a>
      </div>
    </div>

     <div class="container">
      <h1> Massage Services</h1>
      <p> Affordable Massage Services</p>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="swedish.jpg" style="width:100%">
        <div class="text">Swedish Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="sports.jpg" style="width:100%">
        <div class="text">Sports Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="shiatsu.jpg" style="width:100%">
        <div class="text">Shiatsu Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="deeptissue.jpg" style="width:100%">
        <div class="text">Deep Tissue Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="triggerpoint.jpg" style="width:100%">
        <div class="text">Trigger Point Therapy</div>
      </div>

      <div class="mySlides fade">
        <img src="reflex.jpg" style="width:100%">
        <div class="text">Reflexology</div>
      </div>

      <div class="mySlides fade">
        <img src="prenatalm.jpg" style="width:100%">
        <div class="text">Prenatal Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="cranialm.jpg" style="width:100%">
        <div class="text">Cranial Sacral Therapy</div>
      </div>

      <div class="mySlides fade">
        <img src="geriatricm.jpg" style="width:100%">
        <div class="text">Geriatric Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="thai.jpg" style="width:100%">
        <div class="text">Thai Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="hilot.jpg" style="width:100%">
        <div class="text">Pinoy Hilot</div>
      </div>

      <div class="mySlides fade">
        <img src="hotstone.jpg" style="width:100%">
        <div class="text">Hot Stone Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="lymphatic.jpg" style="width:100%">
        <div class="text">Lymphatic Drainage Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="hawaiian.jpg" style="width:100%">
        <div class="text">Hawaiian Lomi-Lomi Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="ventosa.jpg" style="width:100%">
        <div class="text">Ventosa Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="shiatsu.jpg" style="width:100%">
        <div class="text">Shiatsu Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="aroma.jpg" style="width:100%">
        <div class="text">Aromatherapy Massage</div>
      </div>

      <div class="mySlides fade">
        <img src="bodyscrub.jpg" style="width:100%">
        <div class="text">Ventosa Massage</div>
      </div>
    </div>
<br>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 4 seconds
}
</script>

     <footer>
      <div class="topnav" style="margin-left:580px;">
      <a class="active">Copyright &copy; 2018</a>
      <div class="topnav" style="float:right;">
      <a class="active" href="http://instagram.com"><img src="insta.png" style="height:20px; width:20px"></a>
      <a class="active" href="http://facebook.com"><img src="fb.png" style="height:20px; width:20px"></a>
      <a class="active" href="http://twitter.com"><img src="twitter.jpg" style="height:20px; width:20px"></a>
    </div>
    </footer>
  </body>
</html>
