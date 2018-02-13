<!-- God First -->
<!DOCTYPE html>
<!-- W3 standard tested goes here -->


<!-- HTML Begins Here -->
<html lang="en">


<!-- Head Section -->
<head>
  <title>Peace of Cake Menu</title>
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


<!--Body Begins Here -->
<body id="menuPage">


<!-- Navbar -->
<div id="navBig" class="w3-top">
  <ul class="w3-navbar w3-theme-d2 w3-left-align">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-left">
      <a class="w3-hover-grey w3-theme-d1" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    </li>
    <li class="w3-hide-small w3-mobile"><a href="/" class="w3-theme-d1 w3-hover-light-grey"><i class="fa fa-home w3-margin-right"></i>Peace of Cake</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/about" class="w3-hover-light-grey">About</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/servicesvenues" class="w3-hover-light-grey">Services and Venues</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/siteMenu" class="w3-light-grey">Menu Ideas</a></li>
    <li class="w3-hide-small w3-mobile"><a href="/gallery" class="w3-hover-light-grey">Gallery</a></li>
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
      <li><a href="/siteMenu" class="w3-light-grey">Menu Ideas</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/testimonials">Testimonials</a></li>
	    <li><a href="/pricing">Pricing</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>


<!-- Page Content Begins Here (Add Background Color and Large Text to the Whole Page) -->
<div id="background" class="w3-sand w3-large">


<!-- Menu Options Section -->
<div id="typesMenu" class="w3-container" style="margin-top:32px" id="types">
  <h3 class="w3-center">Here are some menu ideas from past venues:</h3>
  <p class="w3-center w3-large">We can add or change to any needs requested</p>
  <div class="w3-center"><a href="menu/CompleteMenuOptionsPeaceOfCake.pdf">Complete Menu Options in PDF</a></div>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <!-- Wedding Section -->
	<div class="w3-quarter">
	  <p class="w3-xxlarge w3-border-bottom w3-border-light-greyw3-padding-16">Weddings</p>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <div id="Cakes" style="display:block;" class="w3-container menu w3-padding-48 w3-card w3-white">
        <h5>Bread Basket</h5>
        <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

        <h5>Honey Almond Granola with Fruits</h5>
        <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

        <h5>Belgian Waffle</h5>
        <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

        <h5>Scrambled eggs</h5>
        <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

        <h5>Blueberry Pancakes</h5>
        <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p><br>
        <a href="menu/WeddingMenuIdeasPeaceOfCake.pdf">Weddings Menu in PDF</a>
      </div>
    </div>
	<!-- Graduation Section -->
    <div class="w3-quarter">
	  <p class="w3-xxlarge w3-border-bottom w3-border-light-greyw3-padding-16">Graduations</p>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <div id="Cakes" style="display:block;" class="w3-container menu w3-padding-48 w3-card w3-white">
        <h5>Bread Basket</h5>
        <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

        <h5>Honey Almond Granola with Fruits</h5>
        <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

        <h5>Belgian Waffle</h5>
        <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

        <h5>Scrambled eggs</h5>
        <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

        <h5>Blueberry Pancakes</h5>
        <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p><br>
        <a href="menu/GraduationMenuIdeasPeaceOfCake.pdf">Graduations Menu in PDF</a>
      </div>
    </div>
	<!-- Company Party Section -->
    <div class="w3-quarter">
	  <p class="w3-xxlarge w3-border-bottom w3-border-light-greyw3-padding-16">Company Parties</p>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <div id="Cakes" style="display:block;" class="w3-container menu w3-padding-16 w3-card w3-white">
        <a href="menu/CompanyPartyMenuIdeasPeaceOfCake.pdf">Company Parties Menu in PDF</a><br><br>
		<h5>Bread Basket</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Honey Almond Granola with Fruits</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Belgian Waffle</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Scrambled eggs</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Blueberry Pancakes</h5>
        <p class="w3-text-grey"></p>
      </div>
    </div>
	<!-- Other Section -->
    <div class="w3-quarter">
	  <p class="w3-xxlarge w3-border-bottom w3-border-light-greyw3-padding-16">Other</p>
      <img src="imgs/pie1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic of a item served">
      <div id="Cakes" style="display:block;" class="w3-container menu w3-padding-16 w3-card w3-white">
        <a href="menu/OtherMenuIdeasPeaceOfCake.pdf">Other Menu Menu in PDF</a><br><br>
		<h5>Bread Basket</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Honey Almond Granola with Fruits</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Belgian Waffle</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Scrambled eggs</h5>
        <p class="w3-text-grey"></p><br>

        <h5>Blueberry Pancakes</h5>
        <p class="w3-text-grey"></p>
      </div>
    </div>
  </div>
</div>


<!-- Modal for Full Size Images on Click -->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright" title="Close Modal Image">X</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
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
	<br><a href="#menuPage" class="w3-hover-opacity">Return to Top</a>
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
