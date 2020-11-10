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
        <header class="header header--3 hub">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Hub</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
        
        <section class="places-to-go">
            <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Hub-Balochistan(Burhani%20Waterpark).jpg" alt="burhani waterpark" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Burhani Recreational<br>Waterpark</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hub-Balochistan(Burhani%20Waterpark).jpg" alt="Burhanipark Photo" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.2473440048934!2d66.88791921451838!3d25.059604443419627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb36b2c4bd02d93%3A0x5c3cadac0012314f!2sBURHANI%20RECREATIONAL%20PARK!5e0!3m2!1sen!2s!4v1604175184186!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Burhani Waterpark</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Burhani Recreational Park is an exclusive, world-class water park built to international standards for the fun-loving people of Karachi."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Hub Chowki Rd, Karachi, Balochistan<br>
                            <b>Phone :</b> 0336 2611153<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Tickets :</b> Adults: Rs. 1,050, Children: Rs. 700<br>
                            <b>Timings :</b> 10 AM - 5 PM (Sunday-only for families)
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Hub-Balochistan(Sunhera%20Beach).jpg" alt="sunehri beach" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Sunheri Beach</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hub-Balochistan(Sunhera%20Beach).jpg" alt="sunhera beach Photo" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.5295314759524!2d66.68998226451474!3d24.87991310060603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb30b4bca7da82f%3A0x4570aa3aa6f411ce!2sSunhera%20Beach!5e0!3m2!1sen!2s!4v1604177043950!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>           
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Sunhera Beach</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Sunehra Beach Karachi (Golden Beach) is a wonderful beach for Families, located near Gaddani, Mubarak village (Goth) Road, Sindh, Pakistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gaddani, Mubarak Goth Road, 43.2km from Karachi Pakistan<br>
                            <b>Driving Distance :</b> 1 hour 27 min<br>
                            <b>Reviews :</b> ⭐⭐⭐⭐ / 5<br>
                            <b>Things to do :</b> Fishing, Boating, Sightseeing, Riding, Beach cars<br>
                            <b>Timings :</b> 5 AM - 7 PM (Monday - Sunday)
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Hub-Balochistan(Kaio).jpg" alt="kaio" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">kaio</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hub-Balochistan(Kaio).jpg" alt="Kaio" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14460.412475769806!2d66.6793008229464!3d25.030574336098677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb37717c40d932f%3A0x1a71c6f3df4d2314!2sKaio!5e0!3m2!1sen!2s!4v1604177382769!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Kaio</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kaio Island for many is nothing less than a hidden paradise located in the Arabian Sea. Kaio Island is best known and popular for Snorkeling and Scuba."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kaka Pir Village, sands Pit, 57.3km from Karachi, Sindh, Pakistan<br>
                            <b>Contact :</b> 0343 3432281
                            <b>Driving Distance :</b> 1 hour 30 min from Karachi<br>
                            <b>Reviews :</b> ⭐⭐⭐⭐ / 5<br>
                            <b>Things to do :</b> Fishing, Boating, Scuba Diving, Riding<br>
                            <b>Timings :</b> 5 AM - 7 PM (Monday - Sunday)
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Hub-Balochistan(Nathiagali%20Beach).jpg" alt="nathiagali beach" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">nathiagali beach</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hub-Balochistan(Nathiagali%20Beach).jpg" alt="nathiagali beach" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.759545531754!2d66.72293721451399!3d24.837895402279596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb30c64b5f41c61%3A0x6e1f71b2622355a9!2sNathiagali%20Beach!5e0!3m2!1sen!2s!4v1604177473405!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">nathiagali beach</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"It is a very drop-dead exclusive beach, untouched, and very clean. Nathiagali Beach is a naval base. One can only go if you’ve senior ranked connection in the armed forces, and accompanied by your host."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> NorthEast of Goth Jumma, Mauripur Rd, Sindh, Pakistan<br>
                            <b>Driving Distance :</b> 1 hour 37 min from Suparco Rd<br><br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Things to do :</b> Fishing, Boating, Riding, Beach Cars<br>
                            <b>Timings :</b> 5 AM - 7 PM
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
                <img src="../../content/Balochistan/HubHotel1.PNG" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Sarawan Inn Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/HubHotel1a.PNG" class="popup__img">
                        <img src="../../content/Balochistan/HubHotel1b.PNG" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Sarawan Inn Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hub, Las Bela, Balochistan | 0332 2196112" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/vTqVdUL6FMLuMXt86" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 49 mins (28 km) from Karachi via&nbsp; M-10 and Regional Cooperation for Development Hwy/N-25<br>
                            <b>Reviews :</b> 3.7 / 5<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Food Services<br>✔ Free Wifi<br>✔ Non AC & AC Rooms
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/HubHotel2.PNG" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Ghazi Farmhouse</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/HubHotel2a.PNG" class="popup__img">
                        <img src="../../content/Balochistan/HubHotel2b.PNG" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Ghazi Farmhouse</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Sakran Road Hub Chowki (870.68 km) Hub, Lasbela, pakistan | 0342 2151029" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/hfLF9aMV9wMgLbiB8" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 1 hr 12 min drive (31.9 km) from Karachi via Hub Chowki Rd/Hub River Rd/N-25 and Dureji Rd<br>
                            <b>Reviews :</b> 4.1 / 5<br>
                            <b>Starting From :</b> 25,000 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ Non AC Rooms <br>✔ BBQ Area<br>✔ Swimming Pool<br>✔ Mini Zoo
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/HubHotel3.jpg" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Al Feroze family Resort</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/HubHotel3a.jpg" class="popup__img">
                        <img src="../../content/Balochistan/HubHotel3b.jpg" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Al Feroze Resort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hub, Las Bela, Balochistan | 0321 2683922" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/8REefUedfV2CKXSJ7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 1 hr 1 min drive (40.3 km) via M-10<br>
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Starting From :</b> 20,000 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ Non AC Rooms <br>✔ BBQ Area<br>✔ Swimming Pool
                            </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/HubHotel4.jpg" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Marina Beach Hut</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/HubHotel4a.jpg" class="popup__img">
                        <img src="../../content/Balochistan/HubHotel4b.jpg" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Marina Beach Hut</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hub Chowki, Sindh, Pakistan | no contact available"&emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/pxfkpFT4LboAnkHt7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 1 hr 36 min drive (57.2 km) from Karachi via Hub Chawki - Arabian Sea Rd<br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Starting From :</b> 10,000 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Huts <br>✔ Swings
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