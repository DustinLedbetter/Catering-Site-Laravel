<!-- God First -->
<!DOCTYPE html>
<!-- W3 standard tested goes here -->


<!-- HTML Begins Here -->
<html lang="en">


<!-- Head Section -->
<head>
  <title>Peace of Cake Gallery</title>
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
<body id="galleryPage">


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
    <li class="w3-hide-small w3-mobile"><a href="/gallery" class="w3-light-grey">Gallery</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/testimonials" class="w3-hover-light-grey">Testimonials</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/pricing" class="w3-hover-light-grey">Pricing</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/contact" class="w3-hover-light-grey">Contact</a></li>
    <li class="w3-hide-small w3-mobile w3-right"><a href="/contact" class="w3-theme-d1 w3-hover-light-grey"><i class="fa fa-address-card-o"> Call or Text: 865-###-####</i></a></li>
  </ul>

  <!-- Navbar on Small Screens -->
  <div id="navSmall" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme-d2">
      <li><a href="/">Home Page</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/servicesvenues">Services and Venues</a></li>
      <li><a href="/siteMenu">Menu Ideas</a></li>
      <li><a href="/gallery" class="w3-light-grey">Gallery</a></li>
      <li><a href="/testimonials">Testimonials</a></li>
	    <li><a href="/pricing">Pricing</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>


<!-- Page Content Begins Here (Add Background Color and Large Text to the Whole Page) -->
<div id="background" class="w3-sand w3-large">


<!-- Best Project Items Section -->
<div  id="bestItems" class="w3-container w3-padding-64">
  <h3 class="w3-center">Gallery of Our Past Creations</h3>
  <p class="w3-center w3-large">A Taste of What is to Come</p>
  <p class="w3-center w3-large">If you like any of these or want something new just contact us and we'll work something out</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <p class="w3-large">best item 1</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-third">
      <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <p class="w3-large">best item 2</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-third">
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <p class="w3-large">best item 3</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>


<!-- Option 1 -->
<!-- Past Project Grid Section -->
<div id="projects" class="w3-container w3-center w3-padding-32">
  <h3 class="w3-border-bottom w3-border-light-greyw3-padding-16">Past Projects</h3>
</div>

<!-- First Photo Grid -->
<div id="photoGridOneGalleryPage" class="w3-row-padding">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-blackw3-padding">Summer House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-blackw3-padding">Renovated</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
</div>

<!-- Second Photo Grid -->
<div id="photoGridTwoGalleryPage" class="w3-row-padding">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-blackw3-padding">Summer House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-blackw3-padding">Renovated</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
  <div class="w3-col l3 m6w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    </div>
  </div>
</div>

<br><br><br>

<!-- Option 2 -->
<!-- First Photo Grid -->
<div id="photoGridOneGalleryPage" class="w3-row-padding w3-padding-16 w3-center" id="food">
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>The Perfect Sandwich, A Real NYC Classic</h3>
    <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>Let Me Tell You About This Steak</h3>
    <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>Cherries, interrupted</h3>
    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    <p>What else?</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
</div>

<!-- Second Photo Grid -->
<div id="photoGridTwoGalleryPage" class="w3-row-padding w3-padding-16 w3-center">
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>All I Need Is a Popsicle</h3>
    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>Salmon For Your Skin</h3>
    <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>The Perfect Sandwich, A Real Classic</h3>
    <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="imgs/cake1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
    <h3>Le French</h3>
    <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
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
	<br><a href="#galleryPage" class="w3-hover-opacity">Return to Top</a>
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
