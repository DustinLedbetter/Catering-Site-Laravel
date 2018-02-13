<!-- God First -->
<!DOCTYPE html>
<!-- W3 standard tested goes here -->


<!-- HTML Begins Here -->
<html  lang="en">


<!-- Head Section -->
<head>
  <title>Contact Peace of Cake</title>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="description" content="sentence about site for those googling to see">
  <meta name="keywords" content="working on these">
  <meta name="author" content="Dustin Ledbetter">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- External Styling -->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <!-- Personal CSS Files -->
  <link rel="stylesheet" href="css/ThemesFile.css">
  <link rel="stylesheet" href="css/Style.css">
  <!-- Site Scripts -->
  <script src="js/js-scripts.js" type="text/javascript"></script>
</head>


<!-- Body Begins Here -->
<body id="contactPage">


<!-- Navbar -->
<div id="navBig" class="w3-top">
  <ul class="w3-navbar w3-theme-d2 w3-left-align">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-left">
      <a class="w3-hover-grey w3-theme-d1" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    </li>
    <li class="w3-hide-small w3-mobile"><a href="/" class="w3-theme-d1 w3-hover-light-grey"><i class="fa fa-home w3-margin-right"></i>Peace of Cake</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/about" class="w3-hover-light-grey">About</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/servicesvenues" class="w3-hover-light-grey">Services and Venues</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/siteMenu" class="w3-hover-light-grey">Menu Ideas</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/gallery" class="w3-hover-light-grey">Gallery</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/testimonials" class="w3-hover-light-grey">Testimonials</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/pricing" class="w3-hover-light-grey">Pricing</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/contact" class="w3-light-grey">Contact</a></li>
    <li class="w3-hide-small w3-mobile w3-right"><a href="/contact" class="w3-theme-d1 w3-hover-light-grey"><i class="fa fa-address-card-o"> Call or Text: 865-###-####</i></a></li>
  </ul>

  <!-- Navbar on Small Screens -->
  <div id="navSmall" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme-d2">
      <li><a href="/">Home Page</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/servicesvenues">Services and Venues</a></li>
      <li><a href="/siteMenu">Menu Ideas</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/testimonials">Testimonials</a></li>
	    <li><a href="/pricing">Pricing</a></li>
      <li><a href="/contact" class="w3-light-grey">Contact</a></li>
    </ul>
  </div>
</div>


<!-- Page Content Begins Here (Add Background Color and Large Text to the Whole Page) -->
<div id="background" class="w3-sand w3-large">


<!-- Slideshow Section -->
<div id="slideshow" class="w3-content w3-padding-48 w3-display-container">
  <img class="mySlides" src="imgs/owner_pic.png" style="width:100%">
  <img class="mySlides" src="imgs/tray1.jpg" style="width:100%">
  <img class="mySlides" src="imgs/cake1.jpg" style="width:100%">
  <img class="mySlides" src="imgs/pie1.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<!-- Needed Slideshow Script -->
<script>
var slideIndex = 1;
showDivs(slideIndex);
</script>

<!-- Contact Section -->
<div id="contactForm" class="w3-container w3-padding- w3-sand">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-green w3-bottombar">Contact Us</span></div>
      <h3> Peace of Cake</h3>
      <p> Message with any questions or to request an order.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Seymour, TN</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  865-###-####</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  email@email.com</p>
    </div>
	@if (Session::has('flash_message'))
         <!-- bootstrap alert (need to correct without bootstrap)-->
         <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
	<form class="w3-container w3-card-4 w3-light-grey" method="post" action="{{ route('contact.store') }}">
		 <!-- Used to Prevent Cross Site Request Forgery -->
         {{ csrf_field() }}
		 <!-- Name Input Field -->
		 <div class="w3-group">
			<label class="w3-label-c1">Name/Subject</label>
			<input class="w3-input" type="text" name="name" required>
			@if ($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
		 </div>
		  <!-- Email Input Field -->
		 <div class="w3-group">
			<label class="w3-label-c1">Email</label>
			<input class="w3-input" type="text" name="email" required>
			@if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
		 </div>
		 <!-- Message Input Field -->
		 <div class="w3-group">
			<label class="w3-label-c1">Message</label>
			<textarea class="w3-input w3-border" style="resize:none" name="message" required></textarea>
			@if ($errors->has('message'))
                <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
		 </div>
		 <input class="w3-check" type="checkbox" name="check" checked>
		 <label class="w3-validate">I want to be updated on specials!</label>
		 <button type="submit" class="w3-btn w3-right w3-theme">Send</button>
		 <div class="w3-group">
			<label class="w3-label"></label>
         </div>
    </form>
  </div>
</div>


<!-- Adds Needed Space to Bottom of Page -->
<div class="w3-padding-48">
</div>


<!-- End Page Content -->
</div>


<!-- End Body -->
</body>


<!-- Footer -->
<div id="footer" class="w3-cell-row w3-theme-d2">
  <div class="w3-container w3-cell w3-left w3-theme-d2">
    <p class="w3-cell-top">
	<i class="fa fa-facebook-official w3-hover-opacity w3-xlarge"></i>
    <i class="fa fa-instagram w3-hover-opacity w3-xlarge"></i>
    <i class="fa fa-snapchat w3-hover-opacity w3-xlarge"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity w3-xlarge"></i>
    <i class="fa fa-twitter w3-hover-opacity w3-xlarge"></i>
    <i class="fa fa-linkedin w3-hover-opacity w3-xlarge"></i>
	<br><a href="#contactPage" class="w3-hover-opacity">Return to Top</a>
	</p>
  </div>
  <div class="w3-container w3-cell w3-right w3-theme-d2">
  	<br><p class="w3-cell">Peace of Cake &copy; 2018 All Rights Reserved&nbsp;&nbsp;
	<br><a href="" class="w3-hover-opacity">Terms of Use</a>&nbsp;&nbsp;&nbsp;<a href="" class="w3-hover-opacity">Privacy Policy</a>
	</p>
  </div>
</div>


<!-- End HTML -->
</html>
