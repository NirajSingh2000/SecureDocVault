<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Quantico' rel='stylesheet'>
    <title>CloudVault | Cloud Storage</title>
</head>

<body>
    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- End Loader -->

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <p href="#home" style="color: tomato;">Cloud<span style="color: greenyellow;">Vault</span></p>
        </div>
        <div class="menu-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="underline">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#plans">Plans</a></li>
            <li><a href="https://niraj2000.netlify.app/" target="_blank">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="filesystem/index.php" class="user">Login Now</a>
    </nav>
    <!-- End Navbar -->

    <!-- Main Banner -->
    <section class="main-banner" id="home">
        <div class="container">
            <div class="banner-content">
                <div class="text-content">
                    <h1>CloudVault Storage</h1>
                    <p>Start your cloud journey with us.</p>
                    <!-- <button class="cta-button">Get Started</button> -->
                    <div class="svg-wrapper">
                        <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                          <rect id="shape" height="40" width="150" />
                          <div id="text">
                            <a href="https://niraj2000.netlify.app"><span class="spot"></span>Get Started</a>
                          </div>
                        </svg>
                      </div>
                </div>
                <div class="image-content">
                    <img src="image/cloudfloat.gif" alt="FileSync Cloud Storage Image" class="floating">
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner -->

    <!--Services-->
    <div class="services" id="services">
        <div class="services__container">
            <div>
                <p class="topline animate-services">Features</p>
                <h1 class="services__heading animate-services">What we offer</h1>
                <div class="services__features">
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>End-to-End Encryption
                    </p>   
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>User-Centric Interface
                    </p> 
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>Secure Purchase Process
                    </p> 
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>Robust Control Panel
                    </p> 
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>Seamless File Management
                    </p>
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>Multi-Platform Compatibility
                    </p> 
                    <p class="services__feature animate-servicespoints">
                        <i class="fas fa-check-circle"></i>24/7 Customer Support
                    </p> 
                </div>
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/a5/d3/bc/a5d3bc943a07252a60f5f4303d3ff65e.gif" alt="gym" class="services__img animate-img" />
            </div>
        </div>
    </div>

    <div class="memberships" id="plans">
        <h1 class="animate-membership">View Our Plans</h1>
        <p class="membership__desc animate-membership">Get started today and receive 25% off your first month</p>
        <div class="membership__wrapper">
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-cloud card-icon1"></i>
                    <h3>Trial</h3>
                </div>
                <div class="membership__perks">
                    <p>Free for 15 Days</p>
                    
                    <p>Email Support</p>
                    
                </div>
                <a href="BasicPlan/index.php" class="button">BUY NOW</a>
            </div>
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-star card-icon2"></i>
                    <h3>Gold</h3>
                </div>
                <div class="membership__perks">
                    <p>Rs. 299</p>
                    <p>3 month</p>
                    
                    <p>Email & Phone Support</p>
                </div>
                <a href="GoldPlan/index.php" class="button">BUY NOW</a>
            </div>
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-diamond card-icon3"></i>
                    <h3>Diamond</h3>
                </div>
                <div class="membership__perks">
                    <p>Rs. 599</p>
                    <p>1 Year</p>
                    
                    <p>Email & Phone Support</p>
                </div>
                <a href="DiamondPlan/index.php" class="button">BUY NOW</a>
            </div>
        </div>
    </div>
    <!-- End Pricing Section -->

         <!------------------- contact section --------------------------------------->
         
         <section id="contact" class="contant">
            <p class="contacttitle">Contact Us</p>
            <div class="section-services scroll-bottom">
                <div class="services-box">
                    <a href="mailto:snirajsingh678@gmail.com"><i class='bx service-icon'><img src="image/email.gif" width="72px"></i></a>
                    <h3><a href="mailto:snirajsingh678@gmail.com" style="color: #fff;">EMAIL</a></h3>
                </div>
        
                <div class="services-box">
                    <a href="https://wa.link/edqvwb"><i class='bx service-icon'><img src="image/whatsapp.gif" width="72px"></i></a>
                    <h3><a href="https://wa.link/edqvwb" style="color: #fff;">WHAT'S APP</a></h3>
                </div>
        
                <div class="services-box">
                    <a href="tel://7070340101"><i class='bx service-icon'><img src="image/24call.gif" width="72px"></i></a>
                    <h3><a href="tel://7070340101" style="color: #fff;">CALL NOW</a></h3>
                </div>
            </div>
        </section>
        
    <!-- End Contact Section -->

    <!-- Footer -->
    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <!-- <i class="fab fa-slack"></i> -->
              <span class="logo_name">NirajSingh</span>
            </div>
            <div class="media-icons">
              <a href="https://www.facebook.com/profile.php?id=100007958238731&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
              <a href="https://github.com/NirajSingh2000"><i class="fab fa-github"></i></a>
              <a href="https://instagram.com/devil_nirajsingh/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sniraj678/"><i class="fab fa-linkedin-in"></i></a>
              <!-- <a href="#"><i class="fab fa-github"></i></a> -->
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Company</li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Get started</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Services</li>
              <li><a href="#">App design</a></li>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Logo design</a></li>
              <li><a href="#">Banner design</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Account</li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">My account</a></li>
              <li><a href="#">Prefrences</a></li>
              <li><a href="#">Purchase</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Courses</li>
              <li><a href="#">HTML & CSS</a></li>
              <li><a href="#">JavaScript</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Photoshop</a></li>
            </ul>
            <ul class="box input-box">
              <li class="link_name">Subscribe</li>
              <li><input type="text" id="mailEmail" placeholder="Enter your email"></li>
              <li><input type="button" onclick="Send()" value="Subscribe"></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">&copy; 2024 Copyright SecureDocVault | All rights reserved</span>
            <span class="policy_terms">
                <span>Made with ❤️ by</span>
                <a href="https://niraj2000.netlify.app/" target="_blank"><b>Niraj Singh</b></a>
              </span>
            </span>
          </div>
        </div>
      </footer>
    <!-- End Footer -->





    <!-- Script for hiding the loader -->
    <script>

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        window.addEventListener("load", function () {
            const loaderWrapper = document.querySelector(".loader-wrapper");
            loaderWrapper.style.display = "none";
        }, 2000);


        const navbar = document.querySelector(".navbar");
        let scrolled = false;

        window.addEventListener("scroll", function () {
            // Check if the user has scrolled down a certain amount (e.g., 100 pixels)
            if (window.scrollY > 100 && !scrolled) {
                navbar.classList.add("scrolled");
                scrolled = true;
            } else if (window.scrollY <= 100 && scrolled) {
                navbar.classList.remove("scrolled");
                scrolled = false;
            }
        });

        function isElementInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function isElementInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to handle the scroll event
        function handleScroll() {
            const aboutImage = document.querySelector(".about-image");
            if (isElementInViewport(aboutImage)) {
                aboutImage.classList.add("show");
            } else {
                aboutImage.classList.remove("show"); // Reset the animation when scrolled past
            }
        }

        // Add a scroll event listener to trigger the animation
        window.addEventListener("scroll", handleScroll);



        const cards = document.querySelectorAll(".pricing-card");
        const arrows = document.querySelectorAll(".arrow-left, .arrow-right");

        let currentIndex = 0;

        // Initially hide all cards except the first one
        cards.forEach((card, index) => {
            if (index !== currentIndex) {
                card.style.display = "none";
            }
        });

        arrows.forEach((arrow) => {
            arrow.addEventListener("click", () => {
                cards[currentIndex].style.display = "none";
                if (arrow.classList.contains("arrow-left")) {
                    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
                } else {
                    currentIndex = (currentIndex + 1) % cards.length;
                }
                cards[currentIndex].style.display = "block";
            });
        });

        cards.forEach((card) => {
            card.addEventListener("mouseenter", () => {
                card.querySelector(".details").style.display = "block";
            });

            card.addEventListener("mouseleave", () => {
                card.querySelector(".details").style.display = "none";
            });
        });

        const menuToggle = document.querySelector(".menu-toggle");
        const nav = document.querySelector(".navbar ul");

        menuToggle.addEventListener("click", () => {
            nav.classList.toggle("show");
            menuToggle.classList.toggle("menu-open");
        });
    </script>

    <!--SMTP EMAIL JS-->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //Email SMTP
  const form = document.querySelector('form');
  const mailEmail = document.getElementById("mailEmail");

  function Send(){
      const bodyMessage = `Email: ${mailEmail.value}`;

      Email.send({
      SecureToken : "efc572cb-e04a-4bd5-8072-1f9577805b32",

      To : 'snirajsingh678@gmail.com',
      From : "snirajsingh567@gmail.com",
      Subject : "Cloud Subscription",
      Body : bodyMessage
      }).then(
       message => {
          if (message == "OK"){
              Swal.fire({
                  title: "Success!",
                  text: "Message Sent Successfully!",
                  icon: "success"
                });
          }
          else{
              swal("Somthing Wrong", "Your Data is not Received", "error")
          }
       }
      );
  }
  
  form.addEventListener("submit", (e) => {
      e.preventDefault();
      sendEmail();
  });
    </script>
</body>

</html>
