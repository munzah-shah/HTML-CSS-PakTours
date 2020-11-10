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
        <header class="header header--3 faisalabad">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Faisalabad</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Clock%20Tower).jpg" alt="CLOCK TOWER" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">CLOCK TOWER</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Clock%20Tower).jpg" alt="CLOCK TOWER" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6809.648447467396!2d73.07473217376369!3d31.41896868139165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a25edb92e5%3A0x9cff91e0f76b0438!2sClock%20Tower%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240068825!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">CLOCK TOWER</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Faisalabad Clock Tower is a clock tower in Faisalabad, Punjab, Pakistan, and is one of the oldest monuments still standing in its original state from the period of the British Raj."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Ghanta Ghar, CHOWK, Clock Tower, Faisalabad, Punjab 38000<br>
                            <b>Timings :</b> 10 AM to 7 PM (closed on sat, sun)<br>
                            <b>Reviews :</b> 4.6 / 5<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Qaiseri%20Gate).jpg" alt="Gumti Fountain" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Gumti Fountain</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Qaiseri%20Gate).jpg" alt="Gumti Fountain" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.8220755492816!2d73.08217121466296!3d31.419027859283894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a1ae9632b9%3A0x72a265774ca539e2!2sGumti%20Fountain%2C%20Gumti%20Chowk%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240137559!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Gumti Fountain</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Gumti Water Fountain is a monument in Faisalabad, Pakistan preserved from the British Raj era. It was built during the early nineteenth century and was a general meeting place of the city folk for local town meetings."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gumti Chowk, Faisalabad, Punjab, Pakistan<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Sightseeing<br>
                            <b>Opening Hours :</b> Open 24 hours<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Gumti%20Fountain).jpg" alt="Qaiseri Gate" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Qaiseri Gate</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Gumti%20Fountain).jpg" alt="Qaiseri Gate" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.8256221016104!2d73.08175641466292!3d31.418930159288742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a1af682a3b%3A0x40efb64e8b222928!2zUWFpc2VyaSBHYXRlINmC24zYtdix24wg2K_YsdmI2KfYstuB!5e0!3m2!1sen!2s!4v1604240199308!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Qaiseri Gate</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Qaisery Gate was the gate into the eight markets with the Faisalabad Clock Tower at the centre. It was built in 1897 under the commission of the British Raj in modern Faisalabad, Punjab."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Circular Rd, Rail Bazar, Qadimi Shehr، Faisalabad, Punjab<br>
                            <b>Opening Hours :</b> Open 24 hours<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Shopping, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Charles%20Monument).jpg" alt="Sir Charles James Lyall Monument" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Sir Charles James Lyall Monument</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Charles%20Monument).jpg" alt="Sir Charles James Lyall Monument" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.587941269001!2d73.08528181466312!3d31.425477158967006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922429e2c4f8f53%3A0x1aab5f4909959c49!2sSir%20Charles%20James%20Lyall%20Monument%2C%20Civil%20Lines%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240232038!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Sir Charles James Lyall Monument</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A historical monument built in the memorial of Sir James Lyall, who founded the city of Lyallpur which then renamed to Faisalabad and its the biggest industrial city of Pakistan"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Civil Lines, Faisalabad, Punjab, Pakistan<br>
                            <b>Opening Hours :</b> Open 24 hours<br>
                            <b>Reviews :</b> 3 / 5<br>
                            <b>Things to do :</b> Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Lyallpur%20Museum).jpg" alt="Lyallpur Museum " class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Lyallpur Museum </figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Lyallpur%20Museum).jpg" alt="Lyallpur Museum " class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.7204083465626!2d73.08146071466301!3d31.42182845914625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922429f61820af5%3A0x4345a4f2b6c192f1!2sLyallpur%20Museum!5e0!3m2!1sen!2s!4v1604240282698!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Lyallpur Museum </h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Lyallpur Museum is a heritage museum in Faisalabad, Pakistan. It has 10 galleries which show the ancient and modern history and culture of Lyallpur/Faisalabad."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> MA Jinnah Rd, Faisalabad, Punjab 38000<br>
                            <b>Opening Hours :</b> 9 AM to 4 PM (Sat - 9 AM to 12:30 PM)<br>
                            <b>Contact :</b> (041) 9200033<br>
                            <b>Number of visitors :</b> 60,000<br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Things to do :</b> Sight Seeing, Reading, School Tours<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(Aqua%20Land).jpg" alt="Aqua Land" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Aqua Land</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(Aqua%20Land).jpg" alt="Aqua Land" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.05928063613!2d73.12966571466346!3d31.44003490825133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922685775ae69e7%3A0xdb11b0eb9089bae8!2sAqua%20Land%2C%20Amin%20Town%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240318310!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Aqua Land</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"a waterpark located in amin town, faisalabad. A relaxing and chilling place for bachelors and male. Not appropriate for family trips and tours."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Amin Town, Faisalabad, Punjab, Pakistan<br>
                            <b>Opening Hours :</b> 9 AM to 11 PM<br>
                            <b>Reviews :</b> ⭐⭐⭐ / 5<br>
                            <b>Things to do :</b> Sight Seeing, Swimming<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Faisalabad(D%20Ground%20Park).jpg" alt="D Ground Park" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">D Ground Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Faisalabad(D%20Ground%20Park).jpg" alt="D Ground Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.2747853178116!2d73.10825761466269!3d31.406554459896686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922680b50240f95%3A0x12b3312383530567!2sD%20Ground%20Park!5e0!3m2!1sen!2s!4v1604240359098!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">D Ground Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A neat and clean, hygiene and well maintained family park in the heart of city! Lush green trees and fluffy grass. Want to take a break from busy business schedule and relax? Visit D Ground Park!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Shahr-e-Faisal, D Ground Block D People's Colony No 1, Faisalabad, Punjab, Pakistan<br>
                            <b>Opening Hours :</b> 5 AM to 10 PM<br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Things to do :</b> Sight Seeing, Jogging, Relaxing, Joy Land Rides<br>
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
                <img src="../../content/Punjab/Hotels/FaisalabadHotel1.webp" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Hotel One</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel1a.webp" alt="hotel 1" class="popup__img">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Hotel One</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"3 star hotel | Block C People's Colony No 1, Faisalabad, Punjab | 0341 2201111" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/r2JPfkoByezBYWTU7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Reviews :</b> 4.1 / 5<br>
                            <b>Distance :</b> 13 mins drive from Clock Tower and 8 mins from D Ground Park<br>
                            <b>Starting From :</b> 10,439 PKR per room<br>
                            <b>Check In Time :</b> 12 PM <br>
                            <b>Services :</b><br>✔ 3 star hotel<br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Spa<br>✔ Fitness Center<br>✔ Laundry<br>✔ Luxurious<br>✔ 24 hours front desk
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/FaisalabadHotel2.webp" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Grand Regent Hotel and Suites</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel2a.webp" alt="hotel 2" class="popup__img">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Grand Regent Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hakeem Sultan Ahmad Dawoodi Rd, D Ground Block B People's Colony No 1, Faisalabad | 0320 8666033" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/jXbRmyUqmpChc3yp9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Distance :</b> 11 mins drive from Clock Tower and 18 mins from D Ground Park<br>
                            <b>Starting From :</b> 14,267 PKR per room<br>
                            <b>Check In Time :</b> 12 PM <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast buffet<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Fitness Center<br>✔ Laundry Services<br>✔ Restaurant<br>✔ 24 hours front desk
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/FaisalabadHotel3.webp" alt="hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Faisalabad Serena Hotel</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel3a.webp" alt="hotel 3" class="popup__img" alt="hotel 1">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel3b.webp" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Serena Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"4-star hotel | Club Rd, Civil Lines, Faisalabad, Punjab | (041) 111 133 133" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/NBs5JpK6mJCQ2Upr5" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Distance :</b> 18 mins drive from Clock Tower and 12 mins from Lyallpur Museum<br>
                            <b>Starting From :</b> 16,377 PKR per room<br>
                            <b>Check In Time :</b> 2 AM <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Fitness Center<br>✔ Spa<br>✔ Outdoor Pool<br>✔ Laundry Services<br>✔ Restaurant<br>✔ 24 hours front desk
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/FaisalabadHotel4.webp" alt="hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">HOTEL GRAND</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel4a.webp" alt="hotel 4" class="popup__img">
                        <img src="../../content/Punjab/Hotels/FaisalabadHotel4b.webp" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">HOTEL GRAND</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Block Z, Madiha Town, Faisalabad, Punjab | 0309 5550309" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/e1JTDe7bWUX97qYn7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Reviews :</b> 4.0 / 5<br>
                            <b>Distance :</b> 13 mins drive from Clock Tower and 6 mins from D Ground Park<br>
                            <b>Starting From :</b> 3,183 PKR per room<br>
                            <b>Check In Time :</b> 12 AM <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Airport shuttle<br>✔ 24 hours front desk
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
            <!-- ---------------------------- GO BACK BTN ----------------------------- --> 
            <div class="u-margin-top-small btnstory">
                <a href="punjab.php" class="btn-text btn-go-back u-margin-top-big u-margin-bottom-medium u-margin-left-small">&larr; Go Back</a>
            </div>
        </section>
    </body>
</html>