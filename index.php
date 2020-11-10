<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PakTours | Discover Pakistan</title>
                
        <!-- ---------------------------- GOOGLE FONTS ---------------------------- -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <!-- ------------------------ STYLESHEET FOR ICONS ------------------------ -->
        <!-- <link rel="stylesheet" href="css/icon-font.css"> -->
        <!-- ----------------------------- STYLESHEET ----------------------------- -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- ------------------------------ FAVICON ------------------------------ -->
        <link rel="icon" href="content/home/favicon-32x32.png" type="image/x-icon">
        <!-- ---------------------------- JQUERY SCRIPTS -------------------------- -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                
                var open = false;
                
                // OPEN AND CLOSE NAVIGATION
                $('#check').click(function(){
                        
                    open = !open;
                    
                    if(open) {
                        $(".navigation__back").css("transform", "scale(80)");
                        $(".navigation__list").css({"opacity": "1", "width": "100%", "transition-delay": "0.05s"});
                    }
                    else {
                        $(".navigation__back").css("transform", "scale(0)");
                        $(".navigation__list").css({"opacity": "0", "width": "0"});
                    }
                });

                // SCROLL TO THE RESPECTIVE SECTION WHEN A NAV ANCHOR IS DOUBLE CLICKED
                $('#nav li a').click(function(){
                    
                    $(".navigation__back").css("transform", "scale(0)");
                    $(".navigation__list").css({"opacity": "0", "width": "0"});
                    $('html, body').animate({
                       scrollTop: $($.attr(this, 'href')).offset().top 
                    }, 1000);

                });

                // HAMBURGER TO CROSS ANIMATION
                $('#check').click(function(){
                    $('.icon').toggleClass("close");
                });
                
                // DISCOVER BUTTON SCROLL TO PROVINCE SECTION ANIMATION
                $('#discoverMore').click(function(){
                    $('html, body').animate({
                       scrollTop: $($.attr(this, 'href')).offset().top 
                    }, 1000);
                });
                
            });
        </script>
    </head>
    
    <body>
        <!-- ------------------------- NAVIGATION -------------------------- -->
        <div class="navigation">            
            <button class="check" id="check">
                <div class="circle icon">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>                   
                </div>
            </button>
            <nav class="navigation__list">
                <ul class="nav" id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#provinces">Discover Provinces</a></li>
                    <li><a href="#bookings">Bookings</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#form">Contact us</a></li>
                </ul>
            </nav>
        <div class="navigation__back"></div>
        </div>
        <!-- ------------------------- HEADINGS & LOGO -------------------------- -->
        <header class="header">
            <div class="header__logo-box">
                <img src="content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <div class="header__main-textbox">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Discover</span>
                    <span class="heading-primary--sub"> the beautiful pakistan</span>
                </h1>
                <a href="#provinces" class="btn btn--white btn--animated" id="discoverMore">Discover More</a>
            </div>
        <!-- ----------------------------- SLIDESHOW ---------------------------- --> 
            <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
                <label for="slide-dot-4"></label>
            </div>
            <input id="slide-dot-1" type="radio" name="slides" checked>
                <div class="slide slide-1"></div>
            <input id="slide-dot-2" type="radio" name="slides">
                <div class="slide slide-2"></div>
            <input id="slide-dot-3" type="radio" name="slides">
                <div class="slide slide-3"></div>
            <input id="slide-dot-4" type="radio" name="slides">
                <div class="slide slide-4"></div>
            </div>
        </header>
        
        <main>
        <!-- ------------------------- SECTION ABOUT -------------------------- --> 
            <section class="section-about" id="about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">explore the beauty of pakistan with us!</h2>
                </div>
                
                <div class="row u-center-text">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Welcome to paktours</h3>
                        <p class="paragraph">Hello! we are PakTours. Your very own digital tour guide that helps you find Pakistan's famous visiting attractions within just one click! We know you want some time off from your busy hectic schedule and go on vacations. So let us take care of where you want to go, we are really good at it, we prmoise!</p>
                        
                        <h3 class="heading-tertiary u-margin-bottom-small">You will fall in love with the beauty of Pakistan </h3>
                        <p class="paragraph">From the driest deserts in the world up north to eternal glaciers and inverted waterfalls down south, Pakistan extends travelers an invitation that is hard to turn down.</p>
                        
                        <a href="html/about.php" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="content/home/home1.jpg" alt="photo1" class="composition__photo composition__photo--p1">
                            <img src="content/home/home2.jpg" alt="photo2" class="composition__photo composition__photo--p2">
                            <img src="content/home/home3.jpg" alt="photo3" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>
        <!-- ------------------------- SECTION FEATURES -------------------------- --> 
            <section class="section-features" id="features">
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-geolocalize-05"></i>
                            <h3 class="heading-tertiary-2 u-margin-bottom-small">Explore Pakistan</h3>
                            <p class="feature-box__text">
                                Discover the un-matched beauty of Pakistan with us. We help you explore the main attractions of Pakistan, city wise and province wise.<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-joypad"></i>
                            <h3 class="heading-tertiary-2 u-margin-bottom-small">Experience Fun</h3>
                            <p class="feature-box__text">
                                We help you find the best things to do in the famous cities and attractions of Pakistan.<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-signs"></i>
                            <h3 class="heading-tertiary-2 u-margin-bottom-small">Find Hotels & food</h3>
                            <p class="feature-box__text">
                                Want reasonable hotels and restaurants near you? Don't worry! we are here to help you out in that.<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-magnifier"></i>
                            <h3 class="heading-tertiary-2 u-margin-bottom-small">Find travel Agency</h3>
                            <p class="feature-box__text">
                                Pack Away! You are just a click away from selecting your travel partners. We help you find perfect travel agency for your vacation.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ------------------------- SECTION PROVINCES -------------------------- --> 
            <section class="section-provinces" id="provinces">

                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="content/home/provincebgvid2.mp4" type="video/mp4">
                        <source src="content/home/provincebgvid2.webm" type="video/mp4">
                        Your browser is not supported!
                    </video>
                </div>
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Discover the beautiful provinces
                    </h2>
                </div>
                <div class="province">
                   <figure class="shape-outside-1">
                        <figure class="province__shape province__shape-1">
                            <img src="content/home/sindh.jpg" alt="province" class="province__image">
                            <a href="html/sindh/sindh.php"><figcaption class="province__caption">SINDH</figcaption></a>
                        </figure>
                    </figure>
                    <p class="province__text province__text--sindh">SINDH</p>
                </div>
                <div class="province">
                   <figure class="shape-outside-2">
                        <figure class="province__shape  province__shape-2">
                            <img src="content/home/carousel1.jpg" alt="province" class="province__image">
                            <a href="html/punjab/punjab.php"><figcaption class="province__caption">PUNJAB</figcaption></a>
                        </figure>
                    </figure>
                    <p class="province__text province__text--punjab">PUNJAB</p>
                </div>
                <div class="province">
                   <figure class="shape-outside-3">
                        <figure class="province__shape  province__shape-3">
                            <img src="content/home/home2.jpg" alt="province" class="province__image">
                            <a href="html/balochistan/balochistan.php"><figcaption class="province__caption">BALOCHISTAN</figcaption></a>
                        </figure>
                    </figure>
                    <p class="province__text province__text--balochistan">BALOCHISTAN</p>
                </div>
                <div class="province">
                   <figure class="shape-outside-4">
                        <figure class="province__shape  province__shape-4">
                            <img src="content/home/kpk.jpg" alt="province" class="province__image">
                            <a href="html/kpk/kpk.php"><figcaption class="province__caption">KPK</figcaption></a>
                        </figure>
                    </figure>
                    <p class="province__text province__text--kpk">KPK</p>
                </div>
                <div class="province">
                   <figure class="shape-outside-5">
                        <figure class="province__shape  province__shape-5">
                            <img src="content/home/gb.jpg" alt="province" class="province__image">
                            <a href="html/gilgitB/gilgitbaltistan.php"><figcaption class="province__caption">GILGIT BALTISTAN</figcaption></a>
                        </figure>
                    </figure>
                    <p class="province__text province__text--kashmir">GILGIT BALTISTAN</p>
                </div>

                
            </section>
        <!-- ------------------------- SECTION TOURS BOOKINGS -------------------------- --> 
           <section class="section-tourbookings" id="bookings">
               <div class="u-center-text u-margin-bottom-big">
                   <h2 class="heading-secondary">
                       Find yourself the perfect travel agency 
                   </h2>
               </div>
               <div class="row">
                   <div class="col-1-of-3 col-1-of-3-a">
                        <div class="card">
                           <div class="card__side--front">
                                <div class="card__picture card__picture--1">
                                   &nbsp;
                                </div>
                                <h4 class="card__heading">
                                  <span class="card__heading-span card__heading-span--1">Pakistan tour & travel</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Pakistan 2020 Tours</li>
                                        <li>Group Tour Packages</li>
                                        <li>Honeymoon Packages</li>
                                        <li>Get Custom Tour Plan</li>
                                        <li>Plan Destination Wedding</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side--back card__side--back-1">
                               <div class="card__cta">
                                   <div class="card__price-box">
                                       <p class="card__price-only">STARTING FROM</p>
                                       <p class="card__price-value">15,000 PKR</p>
                                   </div>
                                   <a href="https://pakistantourntravel.com/" target="_blank" class="btn btn--white">Visit Now!</a>
                               </div>
                           </div>
                        </div>
                   </div>
                   <div class="col-1-of-3 col-1-of-3-b">
                        <div class="card">
                           <div class="card__side--front">
                                <div class="card__picture card__picture--2">
                                   &nbsp;
                                </div>
                                <h4 class="card__heading">
                                  <span class="card__heading-span card__heading-span--2">Falcon club.pk</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>24 Hours Service</li>
                                        <li>Book Your Hotel</li>
                                        <li>Rent a Car</li>
                                        <li>Honeymoon Tours</li>
                                        <li>Plan Your Tour To Dos</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side--back card__side--back-2">
                               <div class="card__cta">
                                   <div class="card__price-box">
                                       <p class="card__price-only">STARTING FROM</p>
                                       <p class="card__price-value">18,500 PKR</p>
                                   </div>
                                   <a href="http://falconclub.pk/" target="_blank" class="btn btn--white">Visit Now!</a>
                               </div>
                           </div>
                        </div>
                   </div>
                   <div class="col-1-of-3 col-1-of-3-c">
                        <div class="card">
                           <div class="card__side--front">
                                <div class="card__picture card__picture--3">
                                   &nbsp;
                                </div>
                                <h4 class="card__heading">
                                  <span class="card__heading-span card__heading-span--3">Travelo tour packages</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Confused? Let's live chat!</li>
                                        <li>Best Prices Offered</li>
                                        <li>Quality Accomodation</li>
                                        <li>Transport Facilities</li>
                                        <li>Local Travel Guides</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side--back card__side--back-3">
                               <div class="card__cta">
                                   <div class="card__price-box">
                                       <p class="card__price-only">STARTING FROM</p>
                                       <p class="card__price-value">7,999 PKR</p>
                                   </div>
                                   <a href="https://www.travelo.pk/" target="_blank" class="btn btn--white">visit now!</a>
                               </div>
                           </div>
                        </div>
                   </div>
               </div>
               
           </section>

        <!-- ------------------------- SECTION STORIES -------------------------- --> 
            <section class="section-stories" id="testimonials">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="content/home/video.mp4" type="video/mp4">
                        <source src="content/home/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div>
                <div class="u-center-text u-margin-bottom-big">
                   <h2 class="heading-secondary">
                       We make people genuinely happy
                   </h2>
               </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="http://pakrtidata.org/wp-content/uploads/2019/02/Hisham-300x300.jpg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">Hisham sajid</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="content/home/person2.jpeg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">verda dewani</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">Wow my life is completetly different now</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="u-margin-top-big btnstory">
                <a href="html/testimonials.php" class="btn-text">Read all stories &rarr;</a>
            </div>
            </section>
            <!-- ------------------------- SECTION BOOKING -------------------------- --> 
            <section class="section-booking" id="form">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="suggestions.php" method="post" class="form">
                                <div class="u-margin-top-v-small u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                       * Suggestions *
                                    </h2>
                                </div>
                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full Name" id="name" name="name" autocomplete="off" required>
                                    <label for="name" class="form__label">Full Name</label>
                                </div>
                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email Address" id="email" name="email" autocomplete="off" required>
                                    <label for="email" class="form__label">Email Address</label>
                                </div>
                                   
                                <input type="text" class="form__input" placeholder="Any Comments / Suggestions " id="comments" name="comments" autocomplete="off" required>

                                <div class="form__group">
                                    <button class="btn btn--purple btn--purple-2" name="submit">Submit &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <footer class="footer">
                <div class="footer__logo-box">
                    <img src="content/home/paktours%20logo.png" alt="full logo" class="footer__logo">
                </div>
                <div class="row">
                    <div class="col-1-of-2">
                        <div class="footer__navigation">
                            <ul class="footer__list">
                                <li class="footer__item"><a href="html/about.php" class="footer__link">About US</a></li>
                                <li class="footer__item"><a href="#features" class="footer__link">Features</a></li>
                                <li class="footer__item"><a href="#bookings" class="footer__link">Bookings</a></li>
                                <li class="footer__item"><a href="html/testimonials.php" class="footer__link">Stories</a></li>
                                <li class="footer__item"><a href="#form" class="footer__link">Suggestions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-of-2">
                        <p class="footer__copyright">
                            Built by <a href="#" class="footer__link"> &nbsp; &nbsp;Munzah Shah, Verda Dewani and Rafia niaz &nbsp;&nbsp;</a> for her Web engineering Project. Copyright &copy; by Munzah Shah. You are 100% allowed to use this web page for both personal and commercial use, but NOT to claim it as your own design. A credit to the original author, Munzah Shah, is of course highly appreciated.
                        </p>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>