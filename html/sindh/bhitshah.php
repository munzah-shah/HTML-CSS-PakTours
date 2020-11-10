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
        <header class="header header--3 bhit">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Bhitshah</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
        <section class="places-to-go">
            <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Bhitshah%20-sindh(Darbar%20Shah%20Abdul%20LatifiBhitai)%20-%20Copy.jpg" alt="Tomb Bhit Shah" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Darbar Shah Abdul latif bhittai</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Bhitshah%20-sindh(Darbar%20Shah%20Abdul%20LatifiBhitai)%20-%20Copy.jpg" alt="Tomb Bhit Shah" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.9160622477025!2d68.48891371453347!3d25.80634311305068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394b949b0e66052d%3A0xd0ec8d7c8a6d6c8f!2sDarbar%20Hazrat%20Shah%20Abdul%20Latif%20Bhittai!5e0!3m2!1sen!2s!4v1604232598012!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Darbar Shah Abdul latif bhittai</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Shrine of Shah Abdul Latif Bhittai is an 18th-century Sufi shrine located in the town of Bhit Shah, Sindh. It is one of the most important in Sindh, and its annual urs festival attracts up to 500,000 visitors"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Bhit Shah, Sindh<br>
                            <b>Driving Distance :</b> 1 hour 31 mins drive (69.3 km) from Mirpurkhas via TandoAdam - Mirpurkhas hwy<br>
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
                <img src="../../content/Sindh/Hotels/BhitshahHotel1.jpg" alt="Hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Shah Karim Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/BhitshahHotel1.jpg" alt="hotel 1" class="popup__img">
                        <img src="../../content/Sindh/Hotels/BhitshahHotel1b.PNG" alt="hotel1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Shah Karim Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"An accomodation place located in Bhit Shah, Matiari, Sindh | +923009224185" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/Ry7LbvbuonmSLdLv8" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 10 mins drive from Darbar Shah Abdul Latif Bhittai <br>
                            <b>Reviews :</b> 3.0 / 5<br>
                            <b>Price Starting From :</b> 500 PKR per room <br>
                            <b>Check In :</b> 9 AM - 12 AM
                            <b>Services :</b><br>✔ Non AC Rooms <br>✔ Restaurant Services<br>✔ 24-hour Front Desk <br>✔ Free Parking
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Sindh/Hotels/BhitshahHotel2.PNG" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Culture Department Guest House</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/BhitshahHotel2a.PNG" alt="hotel 2" class="popup__img">
                        <img src="../../content/Sindh/Hotels/BhitshahHotel2b.PNG" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Culture Department Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A pretty neat guest house in Bhit Shah, Matiari, Sindh | (021) 99212126" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/vgUBXTwhTaPMQcRk9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 4 mins drive (800 m) from Darbar Shah Abdul Latif Bhittai via GT Rd - Bhit<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Starting From :</b> 20,000 PKR per day<br><br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC Rooms<br>✔ Swings and Garden
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Sindh/Hotels/BhitShahHotel3.PNG" alt="hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Bhej bhittai rest house</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/BhitShahHotel3.PNG" alt="hotel3" class="popup__img">
                        <img src="../../content/Sindh/Hotels/BhitShahHotel3b.PNG" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Bhej bhittai rest house</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Tando Adam - GT Rd, Bhit Shah, Matiari, Sindh | 0300 0099145" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/yiAoWCoFhnmNHZCNA" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 3 mins drive (450 km) from Darbar Shah Abdul Latif Bhittai via Tando Adam - GT Rd <br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Starting From :</b> 15,000 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC Rooms<br>✔ Swings and Garden
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
            <!-- ---------------------------- GO BACK BTN ----------------------------- --> 
            <div class="u-margin-top-small btnstory">
                <a href="sindh.php" class="btn-text btn-go-back u-margin-top-big u-margin-bottom-medium u-margin-left-small">&larr; Go Back</a>
            </div>
        </section>
    </body>
</html>