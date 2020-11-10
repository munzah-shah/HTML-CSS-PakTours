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
        <header class="header header--3 kohat">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Kohat</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(Kohat%20Fort).jpg" alt="Kohat Fort" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Kohat Fort</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(Kohat%20Fort).jpg" alt="Kohat Fort" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.517598612417!2d71.4356914147203!3d33.59187229929803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8ef0cb79a13d7%3A0x7ca08ce85ef1ac3b!2sKohat%20Fort%2C%20Jangal%20Khel%2C%20Kohat%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604246297827!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Kohat Fort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kohat Fort - a tall and strong fort, costructed by British government for military uses. Now served as an attraction for tourists."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Jangal Khel, Kohat, Khyber Pakhtunkhwa<br>
                            <b>Driving Distance :</b> 1 h 47 min (71.4 km) from Peshawar via Dora Rd/Indus Hwy/Kohat Rd/N-55<br>
                            <b>Review :</b> 3.9 / 5<br>
                            <b>Things to do :</b> Sight Seeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(Kohat%20Tunnel).jpg" alt="Kohat Tunnel" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Kohat Tunnel</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(Kohat%20Tunnel).jpg" alt="Kohat Tunnel" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.693749596631!2d71.53485771472157!3d33.63918184683244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8e7d78edee5ef%3A0xefb268b8190f87d9!2sKohat%20Tunnel%2C%20Darra%20Adam%20Khel%2C%20Federally%20Administered%20Tribal%20Area%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604246361020!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Kohat Tunnel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Kohat Tunnel is a 1.9 km long highway tunnel under the Khigana Mountains between Kohat District of KPK and Frontier Region Kohat in the FATA region. The tunnel carries northbound and southbound traffic along N-55 National Highway under the Kohat Pass."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Darra Adam Khel, Federally Administered Tribal Area, Pakistan<br>
                            <b>Driving Distance :</b> 1 h 21 min (52.4 km) from Peshawar via Dora Rd/Indus Hwy/Kohat Rd/N-55<br>
                            <b>Timings :</b> 24 hours Open<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(Shakardara).jpg" alt="Shakaradara" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Shakaradara</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(Shakardara).jpg" alt="Shakaradara" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26701.803128983687!2d71.48470816457454!3d33.221294775399286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8991c7f55c97b%3A0x340a53e0c64d7ef7!2sShakardara%2C%20Karak%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604246450854!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Shakaradara</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Shakaradara is a village in Kohat district, Khyber Pakhtunkhwa, Pakistan. It is renowned for its oil and gas reservoirs. Also famous for its natural beauty. "
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Karak, Khyber Pakhtunkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 1 h 34 min (67.3 km) from Kohat via Indus Hwy/N-55 and Shakardara Rd<br>
                            <b>Things to do :</b> Sight Seeing, Photography, Study Tours<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(khushalgarh).jpg" alt="Khushalgarh" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Khushalgarh</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(khushalgarh).jpg" alt="Khushalgarh" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26623.45434580253!2d71.86372851502124!3d33.47712651532972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8b5a436a79859%3A0x825d7d4186e1786c!2sKhushal%20Garh%2C%20Kohat%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604246480028!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Khushalgarh</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Its an administrative unit known as “Union Council” of Kohat District in the Khyber Pakhtunkhwa province of Pakistan. District Kohat has 2 Tehsils i.e. Kohat and Lachi. Each Tehsil comprises certain numbers of Union council. There are 27 union councils in district Kohat."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kohat, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 1 h 8 min (46.4 km) from Kohat via<br> Kohat - Fateh Jang Rd/Rawalpindi - Jand - Kohat Rd<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(Tanda%20Dam).jpg" alt="Tanda Dam" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Tanda Dam</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(Tanda%20Dam).jpg" alt="Tanda Dam" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.3501694697734!2d71.39583501471974!3d33.57025635042351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8efce80a0283b%3A0x20cd81a82c8c4959!2sTanda%20Dam%2C%20Kohat%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604246505752!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Tanda Dam</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Tanda Dam or Tanda Lake is a small dam and also a lake view park located in Kohat District of Khyber Pakhtunkhwa the province of Pakistan. The dam supplies water for irrigation to Jurma, Shahpur and many villages by means of canals from Tanda Lake."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kohat, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 18 min (7.4 km) from Kohat via Tanda Dam Rd<br><br>
                            <b>Reviews :</b> 3.2 / 5<br>
                            <b>Things to do :</b> Sigh Seeing, Family Picnic, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Kohat-KPK%20(Tanda%20Park).jpg" alt="Tanda Wildlife Park" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Tanda Wildlife Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Kohat-KPK%20(Tanda%20Park).jpg" alt="Tanda Wildlife Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106378.74411407705!2d71.3279829061843!3d33.57063073356501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d8f142c9f381db%3A0xc5e5f1a94f5158f!2sTanda%20Forest!5e0!3m2!1sen!2s!4v1604246557111!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Tanda Wildlife Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Tanda Wildlife Park, also known as Tanda Forest, is the only park in Kohat where there is a huge quality of wildlife animals. A must visit place if you are a wild life photographer and want to discover wild life side of Paksitan. "
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Tanda Dam, Kohat, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 29 min (12.4 km)  from Chitral via Tanda Dam Rd<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Things to do :</b> Sightseeing, Wildlife Photography, Zoo<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/KohatHotel1.webp" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Millennium Guest House</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/KohatHotel1a.jpg" alt="Hotel 1" class="popup__img">
                        <img src="../../content/KPK/Hotels/KohatHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-medium-2">Millennium Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"2-star hotel | Near D Khyber Pakhtunkhwa, Pakistan, C. Office Rawalpindi Rd, Kohat, Khyber Pakhtunkhwa | (0922) 512051" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/SChhJ4GdARdEdhex9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 21 mins drive from Tanda Dam and 26 mins from Tanda Lake <br>
                            <b>Reviews :</b> 3.7 / 5<br>
                            <b>Starting From :</b> 700 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms<br>✔ Restaurant
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/KohatHotel2.webp" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Kohat Guest House</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/KohatHotel2a.webp" alt="Hotel 2" class="popup__img">
                        <img src="../../content/KPK/Hotels/KohatHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2 u-margin-top-v-small">Kohat Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kacher chowk kohat cantt old larri addsa, Kohat | (0922) 512555" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/H2D6JUYGV5Xd1ZVcA" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 22 mins drive from Tanda Dam and 27 mins from Tanda Lake <br>
                            <b>Reviews :</b> 3.4 / 5<br>
                            <b>Timings :</b> CheckIn - 12 AM, CheckOut - 11 AM<br>
                            <b>Starting From :</b> 600 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms<br>✔ Restaurant
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
            <!-- ---------------------------- GO BACK BTN ----------------------------- --> 
            <div class="u-margin-top-small btnstory">
                <a href="kpk.php" class="btn-text btn-go-back u-margin-top-big u-margin-bottom-medium u-margin-left-small">&larr; Go Back</a>
            </div>
        </section>
    </body>
</html>