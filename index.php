<?php
  if(isset($_POST['submit'])){
    $locationid = $_POST['hotel_id'];
    $datein = $_POST['date'];
    $dateout = $_POST['dateout'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $conn = new mysqli("localhost", "root", "", "bookings");
    $query = "INSERT INTO `booking` (hotel_id, check_in, check_out, adults, children) VALUES ('$locationid', '$datein', '$dateout', '$adult', '$child')";
    if($conn->query($query)){
      echo "Je hebt succesvol geboekt!";
    }
  }
?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Hotel Booking Site</title>
  <script src="https://kit.fontawesome.com/750fd0a35d.js" crossorigin="anonymous"></script>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.typekit.net/ilh3vkc.css">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <div class="container">
    <header>
      <div class="NavBar">
        <div class="above">
          <i class="yellow fas phone fa-phone-alt"></i>
          <p class="text-regular phonenumber">+123 4567 8900</p>
          <i class="yellow mail fas fa-envelope"></i>
          <p class="text-regular email">free@psdfreebies.com</p>
          <i class="yellow fab fa-facebook-f"></i>
          <i class="yellow low-margin-1 fab fa-google-plus-g"></i>
          <i class="yellow low-margin fab fa-vk"></i>
          <i class="yellow low-margin fa fa-youtube" aria-hidden="true"></i>
          <i class="yellow login-icon fas fa-user"></i>
          <p class="text-regular email">Login</p>
          <i class="yellow key-icon fas fa-key"></i>
          <p class="text-regular email">Sign Up</p>
        </div>
        <div class="below">
          <div class="logo-div">
            <img src="img/explore.png" class="logo" alt="logo">
            <p class="text-regular tagline">CREATIVE TAGLINE HERE</p>
          </div>
          <i onclick="toggleNav()" class="nav-icon fas fa-bars yellow"></i>
          <nav>
            <ul>
              <li class="first"><a href="#">HOME</a></li>
              <li><a href="#">DESTINATION</a></li>
              <li><a href="#">DISCOUNT</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTACT</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div id="OpenNav">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">DESTINATION</a></li>
          <li><a href="#">DISCOUNT</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <h1><span class="greater">Start Your Greatest</span><br>ADVENTURES WITH US!</h1>
      <p class="titel">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <div class="midden"><button>CLICK HERE</button></div>
    </header>
    <div class="yellowBlock">
      <h2 class="titel">FIND HOTELS</h2>
      <form method="POST">
        <div class="left">
          <input name="hotel_id" type="text" id="hidden_field" value="">
          <div class="input2"><label class="first" for="location">Where?</label><br><input name="query" class="first query" type="text"
              name="location" placeholder="Location"></div>
          <div class="input"><label for="date"></label>Check In</label><br><input type="date" name="date"></div>
          <div class="input"><label for="dateout"></label>Check Out</label><br><input type="date" name="dateout"></div>
          <div class="input-2"><label for="adult"></label>Adult</label><br><input type="number" placeholder="01"
              name="adult"></div>
          <div class="input-2"><label for="child"></label>Child</label><br><input type="number" placeholder="00"
              name="child"></div>
        </div>
        <div class="right">
          <div class="input-3"><input type="submit" name="submit" value="Click here!"></div>
        </div>
      </form>
    </div>
    <div class="sizer">
      <img src="img/loco.png" id="locomotiefimg" alt="locomotief">
      <div id="locobg">
        <h3>Trusted Since 2001<br>We are explore</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.</p>
        <div class="checks">
          <i class="check fas fa-check-circle"></i>
          <i class="check fas fa-check-circle"></i>
          <i class="check fas fa-check-circle"></i>
        </div>
        <div class="checktestdiv">
          <p class="checktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
          <p class="checktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
          <p class="checktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
      </div>
    </div>
    <div class="whiteblock-1">
      <h3>Our Best Services<br>We are Travel Agent</h3>
      <div class="left">
        <div class="kopje"><i class="fas fa-plane plane"></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="kopje"><i class="fas fa-university"></i></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="kopje"><i class="fas fa-utensils"></i></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
      </div>
      <div class="right">
        <div class="kopje"><i class="fas fa-train"></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="kopje"><i class="fas fa-bicycle"></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="kopje"><i class="far fa-eye"></i>
          <p class="titel">Lorem Ipsum Dolor Sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
      </div>
    </div>
    <div class="citybackground">
      <h3>Trusted Since 2001<br>We are Travel Agent</h3>
      <div class="blok first">
        <i class="fas fa-car-alt icon"></i>
        <p>Low budget trip</p>
        <div class="yellowline">
          <p>&#36;500</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Lorem ipsum dolor</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Psum dolor</p>
        </div>
      </div>
      <div class="blok">
        <i class="fas fa-train icon"></i>
        <p>Mid budget trip</p>
        <div class="yellowline">
          <p>&#36;800</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Lorem ipsum dolor</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Psum dolor</p>
        </div>
      </div>
      <div class="blok">
        <i class="fas fa-plane icon"></i>
        <p>High budget trip</p>
        <div class="yellowline">
          <p>&#36;1000</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Lorem ipsum dolor</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Sit amet consect</p>
        </div>
        <div class="tkopje"><i class="check fas fa-check-circle"></i>
          <p class="checktekst">Psum dolor</p>
        </div>
      </div>
    </div>
    <div class="whiteblock-2">
      <div class="left">
        <img src="img/surf.png" alt="surf">
      </div>
      <div class="right">
        <div class="titeltekst">
          <h3>Trusted Since 2001 <br>We are Travel Agent</h3>
        </div>
        <div class="iconsdiv">
          <div class="firsticon">
            <i class="fas fa-plane icon"></i>
            <p>Flight</p>
          </div>
          <div class="secondicon">
            <i class="fas fa-car-alt icon"></i>
            <p>Cab</p>
          </div>
          <div class="lasticon">
            <i class="icon fas fa-university"></i>
            <p>Hotel</p>
          </div>
        </div>
        <p class="lorum">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur.</p>
        <button>CLICK HERE</button>
      </div>
    </div>
    <div class="blokjesbg1" style="display: flex; flex-direction: column;">
      <h3>Pack and Go<br>Awesome Tours</h3>
      <div class="blokjesdiv">
        <div class="blokje">
          <img src="img/lucht1.png" alt="New York">
          <p>7 Day + 6 Night</p>
          <h4>New York + Paris</h4>
          <p class="lorum2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <h4>$600</h4>
          <button class="boekbutton">BOOK NOW</button>
        </div>
        <div class="midden">
          <img src="img/lucht2.png" alt="New York">
          <p>7 Day + 6 Night</p>
          <h4>New York + Paris</h4>
          <p class="lorum2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.</p>
          <h4>$1000</h4>
          <button class="boekbutton">BOOK NOW</button>
        </div>
        <div class="blokje2">
          <img src="img/lucht3.png" alt="New York">
          <p>7 Day + 6 Night</p>
          <h4>New York + Paris</h4>
          <p class="lorum2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <h4>$800</h4>
          <button class="boekbutton">BOOK NOW</button>
        </div>
      </div>
    </div>
    <div class="blokjesbg2">
      <h3>Trusted Since 2001<br>GO EXPLORE</h3>
      <div class="blokjesdiv2">
        <div class="blokje">
          <div class="afbeelding achtergrond1">
            <button class="knop">CLICK HERE</button>
          </div>
          <h4>Lorem Ipsum Dolor</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
            elit.</p>
        </div>
        <div class="blokje">
          <div class="afbeelding achtergrond2">
            <button class="knop">CLICK HERE</button>
          </div>
          <h4>Lorem Ipsum Dolor</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
            elit.</p>
        </div>
        <div class="blokje">
          <div class="afbeelding achtergrond3">
            <button class="knop">CLICK HERE</button>
          </div>
          <h4>Lorem Ipsum Dolor</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
            elit.</p>
        </div>
    </div>
    </div>
    <div class="newyorkparis">
      <div class="afbeelding">
        <div class="infodiv">
          <h3>NEW YORK + PARIS</h3>
          <p>7 DAY + 6 NIGHT</p>
          <div class="icons">
            <i class="firsticon2 fas fa-plane plane"></i>
            <i class="fas fa-university"></i>
            <i class="fas fa-car-alt icon"></i>
          </div>
          <div class="icontekst">
            <p class="firsttekst">Flight</p>
            <p class="icon">Hotel</p>
            <p class="icon">Transport</p>
          </div>
          <div class="lorumtekst">
            <p class="lorumipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <h2>$1000</h2>
          <button>BOOK NOW</button>
        </div>
      </div>
    </div>
    <div class="rome">
      <h2>Customers Reviews<br>We are Travel Agent</h2>
      <p>”Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.”</p>
      <div class="stars">
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <div class="foto">
        <img src="img/john.png" alt="john">
        <p class="name">John Smith<br><span>Solo Traveler</span></p>
    </div>
    </div>
    <div class="bergen">
      <h3>Start Your Journey<br>Contact Us</h3>
      <i class="fas fa-map-marker-alt"></i>
    </div>
    <div class="iconsbottom">
      <div class="icondiv">
        <i class="far icon fa-envelope"></i>
        <h2>Email</h2><br>
        <p>free@psdfreebies.com</p><br>
        <p>free@psdfreebies.com</p><br>
      </div>
      <div class="icondiv">
        <i class="icon fas fa-mobile-alt"></i>
        <h2>Call us!</h2><br>
        <p>+123 4567890</p><br>
        <p>+123 4567890</p><br>
      </div>
      <div class="icondiv">
        <i class="icon fas fa-map-marked"></i>
        <h2>Address</h2><br>
        <p>123, Main Road, New City</p><br>
        <p>My Country 123456</p><br>
      </div>
    </div>
    <div class="roundicons">
      <ul>
        <li><i class="fab fa-facebook-f"></i></li>
        <li><i class="fab fa-google-plus-g"></i></li>
        <li><i class="fab fa-vk"></i></li>
        <li><i class="fab fa-youtube"></i></li>
        <li><i class="fab fa-linkedin-in"></i></li>
        <li><i class="fab fa-digg"></i></li>
        <li><i class="fab fa-deviantart"></i></li>
      </ul>
    </div>
    <footer>
      <p>Copyright 2019, All Rights Reserved</p>
    </footer>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/typeahead.js/0.9.3/typeahead.min.js"></script>
  <script>
      $(document).ready(function(){
          $('input.query').typeahead({
              name: 'query',
              remote: 'query.php?query=%QUERY',
              valueKey: 'value'
          }).on('typeahead:selected', function(event, selection){
              $("#hidden_field").val(selection.hotel_id);
          });
      });
    </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>

</html>