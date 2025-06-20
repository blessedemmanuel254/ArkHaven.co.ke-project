<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Styles/general.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="Images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="Images/favicon.svg" />
  <link rel="shortcut icon" href="Images/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-touch-icon.png" />
  <link rel="manifest" href="Images/site.webmanifest" />
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,70090000000;1,800;1,900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script&display=swap" rel="stylesheet">

  <title>Landing page | Ark Harven</title>
</head>
<body>
  <div class="container">
    <header>
      <section>
        <div class="sContainer">
          <a href="https://www.facebook.com/arkharven254" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a><a href="https://www.instagram.com/arkhavenproperties5" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.tiktok.com/@arkharvenproperties1" target="_blank">
            <i class="fa-brands fa-tiktok"></i>
          </a>
          <a href="https://x.com/arkharven254" target="_blank">
            <i class="fa-brands fa-square-x-twitter"></i>
          </a>
        </div>
        <div class="sContainer hRhs">
          <a class="ercr" href="https://mail.google.com/mail/?view=cm&to=arkhaven23@gmail.com" target="_blank">
            <i class="fa-solid fa-envelope"></i>&nbsp;arkhaven23@gmail.com
          </a>
          <a class="ercr" href="#">Help</a>
          <a href="tel:+254708670396" class="aLst"> 
            <i class="fa-solid fa-phone-flip"></i>
            <p>Call&nbsp;us</p>
          </a>
        </div>
      </section>
      <section>
        <div class="sContainer">
          <img src="Images/Ark Harven Logo.avif" alt="Ark Harven Logo" width="80">
        </div>
        <ul>
          <li><a href="" class="active">HOME</a></li>
          <li><a href="">ABOUT&nbsp;US</a></li>
          <li><a href="">LANDS</a></li>
          <li><a href="">HOUSES</a></li>
          <li><a href="">VILLAS</a></li>
          <li><a href="">APARTMENTS</a></li>
          <li><a href="">MOTORS</a></li>
        </ul>
        <a href="tel:+254708670396" class="aLst"> 
          <i class="fa-solid fa-phone-flip"></i>
          <p>Call&nbsp;us</p>
        </a>
        <i class="fa-solid fa-bars" onclick="toggleSideBar()"></i>
      </section>
    </header>
    <div class="overlay" id="overlay" onclick="toggleSideBar()"></div>
    <div class="sideBar" id="sidebar">
      <div class="sContainer">
        <img src="Images/Ark Harven Logo.avif" alt="Ark Harven Logo" width="100">
        <i class="fa-solid fa-xmark" onclick="toggleSideBar()"></i>
      </div>
      <ul>
        <a href="" class="active">Home</a>
        <a href="">About&nbsp;us</a>
        <a href="">Lands</a>
        <a href="">Houses</a>
        <a href="">Villas</a>
        <a href="">Apartments</a>
        <a href="">Motors</a>
      </ul>
      <a class="ercr" href="https://mail.google.com/mail/?view=cm&to=arkhaven23@gmail.com" target="_blank">
        <i class="fa-solid fa-envelope"></i>&nbsp;arkhaven23@gmail.com
      </a>
      <a class="ercr" href="#">Help</a>
    </div>

    <div id="whatsapp-button" onclick="toggleWhatsAppChat()">
      <img src="Images/Ark Harven WhatsApp Icon.avif" width="58" alt="Chat with us on WhatsApp">
    </div>

    <div id="whatsapp-chat-box">
      <div class="chat-header">
        <div class="top">
          <img src="Images/Ark Harven Logo.avif" alt="Ark Harven Logo" width="35">
          <p><strong>Ark Harven</strong><br>
          <small>online</small></p>
        </div>
        <i class="fa-solid fa-xmark" onclick="toggleWhatsAppChat()"></i>
      </div>
      <div class="chat-body">
        <div class="chat-container">
          <div class="chat-bubble">
            <div class="sender">Ark Harven</div>
            <div class="message">
              Welcome! 😊<br>
              How can we be of service?
            </div>
            <div class="time">
              11:31 PM
            </div>
          </div>
        </div>
        <div class="containerWhp">
          <textarea id="userMessage" placeholder="Type a message.."></textarea>
          <img src="Images/Send-35.png" alt="Send Icon" width="45" onclick="sendWhatsAppMessage()">
        </div>
      </div>
    </div>

    <main>
      <div class="hero-section">
        <div class="slider-container">
          <div class="slider-track">
            <img src="Images/17428171202712_homepagecover.jpg" alt="Slide 1">
            <img src="Images/17428171202712_homepagecover.jpg" alt="Slide 1 clone">
            <img src="Images/17428171202712_homepagecover.jpg" alt="Slide 1 clone">
            <img src="Images/17428171202712_homepagecover.jpg" alt="Slide 1 clone">
          </div>
        </div>

        <div class="bottom-fade"></div>
        <div class="content">
          <h1><span>Your search for<br></span>Beach Villas <br><span> ends&nbsp;here.</span></h1>
        </div>
      </div>
      <div class="sarchR">
        <form>
          <h2>What are you Looking for?</h2>
          <select name="" id="prdctSch" required>
            <option value="">-- Select your prefered search --</option>
            <option value="">Land</option>
            <option value="">Rentals</option>
            <option value="">House</option>
            <option value="">Plot</option>
            <option value="">Motor vehicle</option>
            <option value="">Apartment</option>
            <option value="">Beach house</option>
          </select>
          <button type="submit">Search</button>
        </form>

        <div class="vertical-or">
          <span>OR <i class="fa-regular fa-circle-right"></i></span>
        </div>

        <div class="horizontal-or">
          <div class="line"></div>
          <div class="contentH">
            <span>OR</span>
            <i class="fa-regular fa-circle-down"></i>
          </div>
          <div class="line"></div>
        </div>
        <form>
          <h2>Do you want to specify your search?</h2>
          <div class="fContainer">
            <div class="inpBox">
              <label for="">Your search</label>
              <select name="" id="prdctSch" required>
                <option value="">-- Select your prefered search --</option>
                <option value="">Land</option>
                <option value="">Rentals</option>
                <option value="">House</option>
                <option value="">Plot</option>
                <option value="">Motor vehicle</option>
                <option value="">Apartment</option>
                <option value="">Beach house</option>
              </select>
            </div>
          </div>
          <div class="fContainer">
            <div class="inpBox">
              <label for="">Bedroom(s)</label>
              <select name="" id="prdctSch" required>
                <option value="">e.g 2 bedroom</option>
                <option value="">Single room</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
                <option value="">More</option>
              </select>
            </div>
            <div class="inpBox">
              <label for="">Bathroom(s)</label>
              <select name="" id="prdctSch" required>
                <option value="">-- Select --</option>
                <option value="">None</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">More</option>
              </select>
            </div>
          </div>
          <div class="fContainer">
            <div class="inpBox">
              <label for="">Location (County)</label>
              <select name="" id="prdctSch" required>
                <option value="">e.g Kilifi</option><!-- 
                <option value="">Nairobi</option>
                <option value="">Mombasa</option> -->
                <option value="">Kilifi</option>
                <!-- <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option> -->
              </select>
            </div>
          </div>
          <div class="fContainer">
            <div class="slider-container">
              <div class="slider-label">Price (<span id="minVal">100,000</span> - <span id="maxVal">100,000,000</span>) KES</div>
              <input type="range" id="minRange" min="100000" max="100000000" step="10000" value="100000">
              <input type="range" id="maxRange" min="100000" max="100000000" step="10000" value="100000000">
            </div>
          </div>
          <button type="submit"><i class="fa-solid fa-magnifying-glass-location"></i>&nbsp;Find&nbsp;house</button>
        </form>
      </div>
      <div class="servcsHder">
        <h1>Our Property Solutions</h1>
        <p>At Ark Harven, we provide trusted real estate services tailored to meet diverse need - from land acquisition to luxurious living and reliable.</p>
      </div>
      <div class="servcs">
        <div class="servcsHder">
          <h1>Our Property Solutions</h1>
          <p>At Ark Harven, we provide trusted real estate services tailored to meet diverse needs — from land acquisition to luxurious living and reliable mobility.</p>
        </div>
        <div class="servcsContainer">
          <a href="#" class="scContainer">
            <img src="Images/Land Illustration.avif" alt="Land Illustration" width="250">
            <h2>Land</h2>
            <p>Secure prime plots in fast-growing areas, ideal for residential, commercial, or investment development.</p>
          </a>
          <a href="#" class="scContainer">
            <img src="Images/House Illustration.avif" alt="House Illustration" width="250">
            <h2>House</h2>
            <p>Explore affordable and stylish homes designed for comfort and family living in well-planned communities.</p>
          </a>
          <a href="#" class="scContainer">
            <img src="Images/Villas Illustration.avif" alt="Villas Illustration" width="250">
            <h2>Villas</h2>
            <p>Indulge in high-end living with exclusive villas featuring private spaces, modern architecture, and luxury amenities.</p>
          </a>
          <a href="#" class="scContainer">
            <img src="Images/Apartments Illustration.avif" alt="Apartments Illustration" width="250">
            <h2>Apartments</h2>
            <p>Find budget-friendly or executive apartment units in prime locations with great accessibility and lifestyle features.</p>
          </a>
          <a href="#" class="scContainer">
            <img src="Images/Motors Illustration.avif" alt="Motors Illustration" width="250">
            <h2>Motors</h2>
            <p>Reliable vehicle options tailored to your mobility needs — from personal cars to commercial-use vans.</p>
          </a>
        </div>
      </div>
    </main>
    <footer>
      <p>&copy; 2025, ArkHarven.com, All Rights reserved.</p>
    </footer>
  </div>
  <script src="Scripts/general.js"></script>
</body>
</html>