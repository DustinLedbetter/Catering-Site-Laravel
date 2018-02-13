<!-- God First -->
<!DOCTYPE html>
<html lang="en">
<!-- W3 standard tested goes here -->


<!-- HTML Begins Here -->
<html lang="en">


<!-- Head Section -->
<head>
  <title>Peace of Cake Catering Home</title>
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
<body id="homePage">


<!-- Navbar -->
<div id="navBig" class="w3-top">
  <ul class="w3-navbar w3-theme-d2 w3-left-align">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-left">
      <a class="w3-hover-grey w3-theme-d1" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    </li>
    <li class="w3-hide-small w3-mobile"><a href="/" class="w3-light-grey"><i class="fa fa-home w3-margin-right"></i>Peace of Cake</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/about" class="w3-hover-light-grey">About</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/servicesvenues" class="w3-hover-light-grey">Services and Venues</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/siteMenu" class="w3-hover-light-grey">Menu Ideas</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/gallery" class="w3-hover-light-grey">Gallery</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/testimonials" class="w3-hover-light-grey">Testimonials</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/pricing" class="w3-hover-light-grey">Pricing</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/contact" class="w3-hover-light-grey">Contact</a></li>
    <li class="w3-hide-small w3-mobile w3-right"><a href="/contact" class="w3-theme-d1 w3-hover-light-grey"><i class="fa fa-address-card-o"> Call or Text: 865-###-####</i></a></li>
  </ul>

  <!-- Navbar on Small Screens -->
  <div id="navSmall" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme-d2">
	    <li><a href="/" class="w3-light-grey">Home Page</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/servicesvenues">Services and Venues</a></li>
      <li><a href="/siteMenu">Menu Ideas</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/testimonials">Testimonials</a></li>
	    <li><a href="/pricing">Pricing</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>


<!-- Header with Image -->
<header id="homeHeader" class="bgimg w3-display-container">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag w3-theme-d1">Cakes and Catering</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Peace of Cake</span><!--need to make more responsive for mobile-->
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Sevierville, TN</span>
  </div>
</header>


<!-- Page Content Begins Here (Add Background Color and Large Text to the Whole Page) -->
<div id="background" class="w3-sand w3-large">


<!-- First Photo Grid -->
<div id="photoGridOneHomePage" class="w3-padding-16">
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <div class="w3-third w3-container">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
</div>


<!-- About Container -->
<div id="aboutHomePage" class="w3-container">
  <div class="w3-content" style="max-width:1500px">
    <h3 class="w3-center w3-padding-64"><span class="w3-tag w3-wide w3-theme-d2">Our Purpose</span></h3>
    <p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Liam Brown</p>
    </div>
	<div class="w3-center">
    <img src="imgs/pie1.jpg" style="width:100%;max-width:1000px" class="w3-margin-top w3-hover-opacity" onclick="onClick(this)" alt="pic of a item served">
    </div>
  </div>
</div>


<!-- Contact Container -->
<div id="contactHomePage" class="w3-container" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:1500px">
    <p><span class="w3-tag w3-theme-d1">FYI!</span> We bake cakes for weddings, birthdays, or any other special occasions. We also offer catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Contact Us</strong> by phone 865-###-#### and email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name/Subject" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email (Not required, but we will be unable to respond back without one)" name="Email"></p>
      <p><textarea class="w3-input w3-border" style="resize:none" placeholder="Message"required name="Message"></textarea></p>
	    <p><input class="w3-check" type="checkbox" checked>I want to be updated on specials!</p>
      <p><button class="w3-button w3-padding-16 w3-theme-d1" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>


<!-- Second Photo Grid -->
<div id="photoGridTwoHomePage" class="w3-row-padding">
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <div class="w3-third w3-container">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <div class="w3-container w3-white">
      <p><b>Lorem Ipsum</b></p>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
</div>


<!-- Modal for Full Size Images on Click -->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright" title="Close Modal Image">X</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-48">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
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
	<br><a href="#homePage" class="w3-hover-opacity">Return to Top</a>
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
