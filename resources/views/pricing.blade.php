<!-- God First -->
<!DOCTYPE html>
<!-- W3 standard tested goes here -->


<!-- HTML Begins Here -->
<html lang="en">


<!-- Head Section -->
<head>
  <title>Peace of Cake Pricing</title>
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
<body id="pricingPage">


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
    <li class="w3-hide-small w3-mobile"><a href="/pricing" class="w3-light-grey">Pricing</a></li>
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
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/testimonials">Testimonials</a></li>
	    <li><a href="/pricing" class="w3-light-grey">Pricing</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>


<!-- Page Content Begins Here (Add Background Color and Large Text to the Whole Page) -->
<div id="background" class="w3-sand w3-large w3-padding-48">


<!-- Price Estimates Container -->
<div id="PriceGuide" class="w3-container">
  <div class="w3-content" style="max-width:1500px">
    <!-- Top Header -->
    <h5 class="w3-center"><span class="w3-tag w3-green w3-wide" style="min-width:1500px">Estimated Pricing <br>(depends on scope of project and supplies needed)</span></h5>
	<!-- Pricing Choices -->
    <div class="w3-row w3-center w3-card w3-light-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Cakes');" id="myLink">
        <div class="w3-col s3 tablink w3-green">Cakes</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pies');">
        <div class="w3-col s3 tablink">Pies</div>
      </a>
	  <a href="javascript:void(0)" onclick="openMenu(event, 'Cupcakes');">
        <div class="w3-col s3 tablink">Cupcakes</div>
      </a>
	  <a href="javascript:void(0)" onclick="openMenu(event, 'Cupcakes');">
        <div class="w3-col s3 tablink">Other</div>
      </a>
    </div>
	<!-- Option 1 Price Estimates-->
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
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>
	<!-- Option 2 Price Estimates-->
    <div id="Pies" style="display:none;" class="w3-container menu w3-padding-48 w3-card w3-white">
      <h5>Coffee2</h5>
      <p class="w3-text-grey">Regular coffee 2.502</p><br>

      <h5>Chocolato</h5>
      <p class="w3-text-grey">2Chocolate espresso with milk 4.50</p><br>

      <h5>Corretto</h5>
      <p class="w3-text-grey">2Whiskey and coffee 5.00</p><br>

      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>

	  <h5>Corretto</h5>
      <p class="w3-text-grey">2Whiskey and coffee 5.00</p><br>

      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>

      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>
	<!-- Option 3 Price Estimates-->
	 <div id="Cupcakes" style="display:none;" class="w3-container menu w3-padding-48 w3-card w3-white">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>

      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>

      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>

      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>

      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>
	<!-- Option 4 Price Estimates-->
	 <div id="Cupcakes" style="display:none;" class="w3-container menu w3-padding-48 w3-card w3-white">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>

      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>

      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>

      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>

      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>
  </div>
</div>


<!-- Contact/Area Container -->
<div id="contactPricingPage" class="w3-container w3-padding-32">
  <div class="w3-content" style="max-width:1500px">
    <p>If you ave any more questions or would like to order you can <strong>Contact Us</strong> by phone 865-###-#### and email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name/Subject" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email (Not required, but we will be unable to respond back without one)" name="Email"></p>
      <p><textarea class="w3-input w3-border" style="resize:none" placeholder="Message"required name="Message"></textarea></p>
	  <p class="w3-center"><input class="w3-check" type="checkbox" checked>I want to be updated on specials!</p>
      <p class="w3-center"><button class="w3-button w3-padding-16 w3-theme-d1" type="submit">SEND MESSAGE</button></p>
    </form>
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
	<br><a href="#pricingPage" class="w3-hover-opacity">Return to Top</a>
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
