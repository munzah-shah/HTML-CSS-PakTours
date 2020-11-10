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
        <header class="header header--3 chillas">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Chilas</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/indus%20river(Chilas).jpg" alt="Indus River" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Indus River</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/indus%20river(Chilas).jpg" alt="Indus River" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26014.59198708839!2d74.09203151850765!3d35.40961286418409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e7048fb58a14c3%3A0x17b9c235d54b5fb6!2sButo%20Gah!5e0!3m2!1sen!2s!4v1604248428337!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Indus River</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Indus River, which is the longest river of Pakistan, flows along Chilas on the Karakoram Highway. The destination is worth watching in afternoon and at sunset."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Indus River Near Chilas , Gilgit Baltistan, Pakistan<br>
                            <b>Driving Distance :</b> 4 h 2 min (199.0 km) from Chilas via via Karakoram Hwy/N-35<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Timings :</b> 24 hours Open<br>
                            <b>Things to do :</b> Sight Seeing, Photography, Camping<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/karakoram%20highway(Chilas).jpg" alt="Karakoram Highway" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Karakoram Highway</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/karakoram%20highway(Chilas).jpg" alt="Karakoram Highway" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.9305878684168!2d74.08901491477197!3d35.43174945122217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ef2fd597facdd3%3A0x4133e92c68bd9f6a!2sKarakoram%20Hwy%2C%20Chil%C4%81s!5e0!3m2!1sen!2s!4v1604248117612!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Karakoram Highway</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Karakoram Highway (one of the most beautiful highways in the world) is a 1,300 km national highway which extends from Hasan Abdal in the Punjab province of Pakistan to the Khunjerab Pass in Gilgit-Baltistan, where it crosses into China and becomes China National Highway 314."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Astore, Gilgit Baltistan, Pakistan<br>
                            <b>Reviews :</b> ⭐⭐⭐⭐⭐<br>
                            <b>Major Cities :</b> Karimabad, Chilās, Gilgit, Sost, Gulmit, Hassan Abdal, Mansehra, Abbottabad and more<br>
                            <b>Things to do :</b>Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/fairy-meadows(chilas).jpg" alt="Fairy Meadows" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Fairy Meadows</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/fairy-meadows(chilas).jpg" alt="Fairy Meadows" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52045.48606950235!2d74.54107689473503!3d35.384352725473825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e6ecc4acc8c687%3A0x6e151bcebb07d81d!2sFairy%20Meadows!5e0!3m2!1sen!2s!4v1604248149852!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Fairy Meadows</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Grassland plateaus used primarily campsite for mountain trekking. It is considered as the most beautiful attraction of Pakistan, hence named as 'Heaven On Earth' by tourists. The road from Raikot to Tatu and then the trek to Fairy Meadows is to die for!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Neelum District, Azad Kashmir, Khyber Pakhtunkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 2 h 18 min (72.3 km) from Chilas via Karakoram Hwy/N-35<br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Elevation :</b> 3,300 m <br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, Sight Seeing, Photography, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Rock%20carvings(Chilas).jpg" alt="Thalpan Rock Carvings" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Thalpan Rock Carvings</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Rock%20carvings(Chilas).jpg" alt="Thalpan Rock Carvings" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13004.908730903142!2d74.13501527702161!3d35.42440186961223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sThalpan%20Road%2C%20Chil%C4%81s!5e0!3m2!1sen!2s!4v1604248202622!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small"> Rock Carvings</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Thalpan rock carvings is at the mid-point (10 hours) between Islamabad and Gilgit-Skardu. This is when using the Babusar top (at 12000 ft) route.while you are staying at Chilas, it good opportunity to explore Thalpan rock carvings."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chillas Valley, Gilgit Baltistan, Pakistan<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Things to do :</b> Rock Climbing, Photography, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Nanga_Parbat(Cilas).jpg" alt="Nanga Parbat" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Nanga Parbat</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Nanga_Parbat(Cilas).jpg" alt="Nanga Parbat" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13035.011634009805!2d74.58038982693546!3d35.23752051080918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e6c007399ee885%3A0x10e2393cfebe6c2!2sNanga%20Parbat!5e0!3m2!1sen!2s!4v1604248232779!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Nanga Parbat</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Nanga Parbat, locally known as Diamer, is the ninth highest mountain in the world, featuring snowy peaks & a history of treacherous climbs. Located in the Diamer District of Gilgit-Baltistan region, Pakistan. A must visit place if you are fond of trekking!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chilas, Diamer, Gilgit-Baltistan  <br>
                            <b>Driving Distance :</b> 49.3 kms from Chilas <br>
                            <b>Elevation :</b> 8,126 m <br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Things to do :</b> Sight Seeing,  Camping, Photography, Bonfire, Trekking, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/BeyalCamp(Chilas).jpg" alt="Beyal Camp, NangaParbat" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Beyal Camp, NangaParbat</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/BeyalCamp(Chilas).jpg" alt="Beyal Camp, NangaParbat" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.223875713674!2d74.57530261476964!3d35.35008995566964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e6eb58e41a93c7%3A0xfe76ef18d46198ee!2sBeyal%20Camp!5e0!3m2!1sen!2s!4v1604248272599!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small">Beyal Camp, NangaParbat</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Trekking to Fairy Meadows and then Camping at the base of Nanga Parbat, Beyal camps is a must adventure once in a lifetime!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Nanga Parbat, Chilas, Gilgit-Baltistan <br>
                            <b>Distance :</b> 12.6 kms Trekking from Nanga Parbat to Beyal Camp<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Things to do :</b> Sight Seeing,  Camping, Photography, Bonfire, Trekking, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/RaikotBridge(Chilas).jpg" alt="Raikot Bridge" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">Raikot Bridge</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/RaikotBridge(Chilas).jpg" alt="Raikot Bridge" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.4621312760946!2d74.58948241477376!3d35.492849547888675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e6f32d3e5005ff%3A0x803c999a4369a4be!2sRaikot%20Bridge!5e0!3m2!1sen!2s!4v1604248299988!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Raikot Bridge</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Raikot Bridge is the gateway to Nanga Parbat Base Camp, on the Indus River in Gilgit Baltistan, Pakistan. It's just a bridge but the main attraction is the route to Fairy Meadows Nanga Parbat that starts from the bridge!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Karakoram Hwy, Gilgit-Baltistan <br>
                            <b>Driving Distance :</b> 28.4 km Nanga Parbat<br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Things to do :</b> Sight Seeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel1.jpg" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Grace Continental Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel1a.jpg" alt="Hotel 1" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel1b.jpg" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Grace Continental Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Bisham road, Thack Colony, Chilās, Gilgit-Baltistan | 0346 5482419" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/LZjps9RHJMK34ivQ9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 13 hours drive from Chitral Airport <br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Starting From :</b> 5,480 PKR <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ AC and Non AC Rooms<br>✔ Laundry Services<br>✔ Restaurant
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel2.jpg" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Shangrila Chilas Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel2a.jpg" alt="hotel 2" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/ChillasHotel2b.jpg" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2 u-margin-top-medium-2">Shangrila Chilas Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Karakoram Hwy, Chilās, Gilgit-Baltistan 14100 | 0300 5382560" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/e1RuwFi9c9pQy4kg8" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 13 hours drive from Chitral Airport <br>
                            <b>Reviews :</b> 4.0 / 5<br>
                            <b>Starting From :</b> 6589 PKR per day<br><br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ AC and Non AC Rooms<br>✔ Laundry Services<br>✔ Restaurant<br>✔ Airport Shuttle
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
            <!-- ---------------------------- GO BACK BTN ----------------------------- --> 
            <div class="u-margin-top-small btnstory">
                <a href="gilgitbaltistan.php" class="btn-text btn-go-back u-margin-top-big u-margin-bottom-medium u-margin-left-small">&larr; Go Back</a>
            </div>
        </section>
    </body>
</html>