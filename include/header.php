<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>J3 Travels</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- SUbmit Button -->
  <link rel="stylesheet" href="css/btn3.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<!-- body -->

<body>
  <!-- header section start -->
  <style>
    .header_main {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      /* Ensure the heading stays on top of other content */
      background-color: #40efff;
      /* Optional: Change background color if needed */
      padding: -25px 0;
      /* Optional: Adjust padding as needed */
      box-shadow: 0 2px 4px rgba(104, 248, 238, 0.1);
      /* Optional: Add shadow for better visibility */
      transition: top 0.3s;
      /* Add smooth transition effect */
      font-weight: bold;
      /* Make the font bold */
    }

    .scrolled {
      background-color: white;
      /* Background color when scrolled */
      padding: -25px 0;
      /* Padding when scrolled */
    }

    .center {
      text-align: center;
    }

    .dropdown-divider {
      border-top: 1px solid #32cdee;
      /* reducing the thickness of the divider */
      margin: 0px 0;
      /* adding margin to the top and bottom of each content */
      font-weight: bold;
    }

    .dropdown-item .center {
      font-weight: bold;
      color: blue;
      /* Default color */
      transition: color 0.3s;
      /* Add transition effect for color change */
    }

    .dropdown-item:hover .center {
      background-color: lightblue;
      /* Change to your desired background color */
    }

    .dropdown-item:hover .center {
      color: rgb(255, 33, 37);
      /* Change to your desired text color on hover */
    }

    .dropdown-item {
      font-weight: bold;
    }

    /* Tekstien keskittäminen */
    .dropdown-item {
      text-align: center;
    }

    /* Värilliset tekstit */
    .dropdown-item {
      color: blue;
      /* Voit muuttaa värin haluamaksesi */
    }

    body {
    background: skyblue;
    }

    .light {
      width: 10px;
      height: 10px;
      background: red;
      border-radius: 50%;
      bottom: 295px;
      position: absolute;
      z-index: 10;
      left: 20px;
      animation: light 800ms ease-in-out 0s infinite alternate;
    }

    .cloud {
      position: absolute;
      top: 0px;
      right: -500px;
      opacity: .8;
      animation: cloud 10s linear 0s 1 reverse;
      /* Change infinite to 1 to make it play only once */
      z-index: 99;
    }

    .cloud img {
      width: 250px;
      /* Adjust the width to your desired size */
      height: auto;
      /* Maintain aspect ratio */
    }

    @keyframes light {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes cloud {
      from {
        right: -500px;
      }

      to {
        right: 102%;
      }
    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .blinking-emoji {
      animation: blink 1s infinite;
    }

    .footer_text {
      color: rgb(174, 234, 9);
      font-weight: bold;
      /* Making the text bold */
    }

    .footer_text:hover {
      color: rgb(25, 249, 44);
      /* Color on hover */
    }
.copyright_text{
    color: black;
}
.copyright_section {
    background-color: white;
    /* Add any other styling you need for the copyright section here */
}

    .phone-link {
      color: white;
      /* Default color */
      font-weight: bold;
      text-decoration: none;
      /* Remove underline by default */
      transition: color 0.3s, border-bottom 0.3s;
      /* Smooth transition for color and underline */
      display: inline-block;
      /* Display as inline block to fit the width */
    }

    .phone-link:hover {
      color: rgb(25, 249, 44);
      border-bottom: 2px solid blue;
      /* Add red underline on hover */

    }

    .logo img {
      width: 200px;
      /* Adjust the width according to your preference */
      height: 68px;
      /* Maintain aspect ratio */
    }

    .social_icon ul li {
      display: inline-block;
      transition: transform 0.3s ease;
      /* animation speed */
    }

    .social_icon ul li:hover {
      transform: rotate(360deg);
      /* rotate 360 degrees on hover */
    }
    .ptag {
    font-weight: bold;
    }


    
  </style>
  <div class="header_section">
    <div class="header_main">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="#"><img src="images/j3logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="flight_tickets.php">
                        <div class="center">
                            DOMESTIC AND INTERNATIONAL <br>FLIGHT TICKETS
                        </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="tourist_visa.php">
                    <div class="center">
                      TOURIST VISA FOR ALL COUNTRIES
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="hotel_booking.php">
                    <div class="center">
                      DOMESTIC AND INTERNATIONAL<br> HOTEL BOOKING </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="insurance.php">
                    <div class="center">
                      TRAVEL INSURANCE &<br> MEDICAL INSURANCE </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="travel_packages.php">
                    <div class="center">
                      DOMESTIC AND INTERNATIONAL<br> TRAVEL PACKAGES </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="government_certificate.php">
                    <div class="center">
                      STATE GOVERNMENT &<br> CENTRAL GOVERNMENT<br>CERTIFICATE ATTESTATION </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="train_bus_tickets.php">
                    <div class="center">
                      TRAIN TICKETS & <br>BUS TICKETS </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="online_service.php">
                    <div class="center">
                      PASSPORT ONLINE SERVICE </div>
                  </a>




              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">NOC/POE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <a class="dropdown-item" href="#">MAIN COUNTRIES</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">MALAYSIA</a>
                  <a class="dropdown-item" href="#">SINGAPORE</a>
                  <a class="dropdown-item" href="#">THAILAND</a>
                  <a class="dropdown-item" href="#">SRI LANKA</a>
                  <a class="dropdown-item" href="#">U.A.E</a>


                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Blog</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">One</a>
                  <a class="dropdown-item" href="#">Two</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Three</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="blinking-emoji">📱</span> Call Us
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="tel:+919043965390">+91 9043965390</a>
                  <a class="dropdown-item" href="tel:+919150535375">+91 9150535375</a>
                  <a class="dropdown-item" href="tel:+919840861663">+91 9840861663</a>


                </div>
              </div>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="blinking-emoji"> ☎️</span> Land-Line
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="tel:+91-44-47966579">+91-44-47966579</a>

                </div>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>

    <br><br>
    <div class="cloud cloud1">
      <div class="light"></div>
      <img
        src="https://images.vexels.com/media/users/3/145795/isolated/preview/05cd33059a006bf49006097af4ccba98-plane-in-flight-by-vexels.png" />
    </div>