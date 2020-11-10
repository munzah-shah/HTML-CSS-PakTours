<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PakTours | Customer Testimonials</title>
        
        <!-- ---------------------------- GOOGLE FONTS ---------------------------- -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <!-- ----------------------------- STYLESHEET ----------------------------- -->
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <!-- ----------------------------- JQUERY SCRIPTS ----------------------------- -->
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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../index.php#about">About</a></li>
                    <li><a href="../../index.php#features">Features</a></li>
                    <li><a href="../../index.php#provinces">Discover Provinces</a></li>
                    <li><a href="../../index.php#bookings">Bookings</a></li>
                    <li><a href="../../index.php#testimonials">Testimonials</a></li>
                    <li><a href="../../index.php#form">Contact us</a></li>
                </ul>
            </nav>
            <div class="navigation__back"></div>
        </div>

        <!-- ------------------------- HEADINGS & LOGO -------------------------- -->
        <header class="header header--3 pasni">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Pasni</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
        <section class="places-to-go">
            <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Pasni-Balochistan(Juddi%20Beach).jpg" alt="Pasni Beaches" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Pasni Beaches</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Pasni-Balochistan(Juddi%20Beach).jpg" alt="pasni beaches" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923846.3279642841!2d62.42821965827666!3d25.244511709354878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb904231353e6b3%3A0x8a5c1394c4b1fe40!2sPasni%20City%20Beach!5e0!3m2!1sen!2s!4v1604179620400!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Pasni Beaches</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Pasni - a city famous for it's breathtaking beaches. It is one of the most beautiful locations on the Makran Coastal Highway."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Pasni, Balochistan<br>
                            <b>Driving Distance :</b> 7 hours drive (515 km) from Karachi via Makran Coastal Hwy<br>
                            <b>Reviews :</b> 5 / 5<br>
                            👉 Pasni City beach<br>
                            👉 Juddi beach<br>
                            👉 Kataowi beach<br>
                            👉 Guddi beach<br>
                            👉 Gwadar beach
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Pasni-Balochistan(Astola%20Island).jpg" alt="astola island" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">astola island</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Pasni-Balochistan(Astola%20Island).jpg" alt="astola island" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28899.119049789588!2d63.82893550228814!3d25.122506427622014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb9bdc5d7b75707%3A0x95cf59b473aca9d7!2sAstola%20Island!5e0!3m2!1sen!2s!4v1604179669049!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">astola island</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Astola Island, also known as Jazira Haft Talar Satadip or 'Island of the Seven Hills', is one of the many hidden gems of the part of the Arabian Sea that touches Balochistan."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Astola Island, Arabian Sea, offshore Pakistan<br>
                            <b>Driving Distance :</b> 3 hours from Pasni via Boat<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Things to do :</b> Fishing, Boating, Snorkeling, Riding, Sight Seeing, Climbing, Camping<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Pasni-Balochistan(Jabal-e-zaireen).jpg" alt="jabal-e-zaireen" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">jabal-e-zaireen</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Pasni-Balochistan(Jabal-e-zaireen).jpg" alt="jabal-e-zaireen" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14439.457417979896!2d63.48096742300329!3d25.207796556600528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb9060657cbb401%3A0x93c69b0526acce53!2sJabal%20Zarain!5e0!3m2!1sen!2s!4v1604179724617!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">jabal-e-zaireen</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"jabal-e-zaireen are the beautiful golden sand dune mountains that shows up as you start to take off to astola island from pasni in a boat."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Pasni Town offshore<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Fishing, Boating, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Pasni-Balochistan(Sokhta%20Koh).jpg" alt="soktah koh" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">soktah koh</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Pasni-Balochistan(Sokhta%20Koh).jpg" alt="soktah koh" class="popup__img">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.0388680448314!2d64.14099201452734!3d25.503750225454592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb832abeb267473%3A0xc5fe6e1c7547aa6e!2sSokhta%20Koh!5e0!3m2!1sen!2s!4v1604179756604!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">soktah koh</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Sokhta Koh is a Harappan site on the Makran coast, near the city of Pasni, in the Balochistan province of Pakistan. It was first surveyed by American archaeologist George F. Dales in 1960."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> 15 miles North of Pasni, Makran Coastal Hwy, Balochistan<br>
                            <b>Driving Distance :</b> 5 hours 35 min (411.7 km) from Karachi via Makran Coastal Hwy/N-10<br>
                            <b>Things to do :</b> Sight Seeing, Archelogical Studies<br>
                        </p>
                    </div>
                </div>
            </div>
            </fieldset>
            <!-- ---------------------------- HOTELS ----------------------------- --> 
            <fieldset class="hotels">
                <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
        <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/PasniHotel1.jpg" alt="Hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Jinnah Beach Club</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/PasniHotel1a.jpg" alt="Hotel 1" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/PasniHotel1b.jpg" alt="Hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Jinnah Beach Club</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A beautiful resort located at the heart of Pasni Beaches | 0334 2934634 " &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/abeVS97VtrGjab988" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 6 hour 45 mins from Karachi (511.7 km) via Makran Coastal Hwy/N-10<br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Price Starting From :</b> 5000 PKR <br>
                            <b>Check In :</b> 12 PM - 12 AM
                            <b>Services :</b><br>✔ Free Wifi<br>✔ Fitness Gym<br>✔ Fully Air Conditioned <br>✔ Coffee Maker<br>✔ Swimming Pool<br>✔ 24-hour Front Desk <br>✔ Free Private Parking
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/PasniHotel2.PNG" alt="Hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">PHE Rest house</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/PasniHotel2a.PNG" alt="hotel 2" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/PasniHotel2b.PNG" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">PHE Rest house</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Coastal Hwy - Pasni Rd, Pasni, Balochistan | no contact available" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/YgxzHQMw1LqDdEUp7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 21 min drive (9.4 km) from Pasni via Coastal Hwy - Pasni Rd<br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Starting From :</b> 45000 PKR per room<br><br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC Rooms <br>✔ Dine In Restaurant<br>✔ Swimming Pool<br>✔ 24-hour Front Desk
                            </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/PasniHotel3.jpg" alt="Hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Juddi Hotel</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/PasniHotel3a.jpg" alt="Hotel 3" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/PasniHotel3b.jpg" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Juddi Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Juddi Hotel, Main road, Pasni, Balochistan | 0340 5366011" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/QcQ8f2MkTKaSVuae7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 20 mins drive (9.1 km) from Pasni via Coastal Hwy - Pasni Rd<br>
                            <b>Reviews :</b> 3.9 / 5<br>
                            <b>Starting From :</b> 800 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Dine In Restaurant<br>✔ Non AC Rooms
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
            <!-- ---------------------------- GO BACK BTN ----------------------------- --> 
            <div class="u-margin-top-small btnstory">
                <a href="balochistan.php" class="btn-text btn-go-back u-margin-top-big u-margin-bottom-medium u-margin-left-small">&larr; Go Back</a>
            </div>
        </section>
    </body>
</html>