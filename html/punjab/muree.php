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
        <header class="header header--3 murree">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Murree</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
           
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Mall%20Road).jpg" alt="Mall Road Murree" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Mall Road Murree</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Mall%20Road).jpg" alt="Mall Road Murree" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.395871391656!2d73.38992731472892!3d33.90520963291244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd75ddf2f8543%3A0xdb3589c69b7e3378!2sMall%20Road%2C%20Murree%2C%20Rawalpindi%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240717237!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Mall Road Murree</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Mall Road is a marketplace and a popular tourist attraction in Murree. It is a stretch of road having various shops comprising unique souvenirs, hand-crafted cultural artefacts, plenty of dry fruits & popular restaurants that serve mouth-watering dishes."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Murree, Rawalpindi, Punjab<br>
                            <b>Review :</b> 4.9 / 5<br>
                            <b>Things to do :</b> Shopping, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Pindi%20Point).jpg" alt="Pindi Point" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Pindi Point</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Pindi%20Point).jpg" alt="Pindi Point" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6623.723665897534!2d73.37399217402654!3d33.89321207839427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd9fcf3eeadb1%3A0x5bac4fc03797738f!2sPindi%20Point%2C%20Murree%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240756098!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Pindi Point</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Pindi Point is a vantage point in Murree. It is named Pindi Point because from the top you can view the twin cities of Islamabad and Rawalpindi. There's also chair lift rides can enjoy another journey here, which will take you 1.5 km down from Pindi Point to Bansara Gali."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Murree, Rawalpindi, Pakistan<br>
                            <b>Driving Distance :</b> 15 mins from Mall Road<br><br>
                            <b>Reviews :</b> 3.7 / 5<br>
                            <b>Things to do :</b> Sightseeing, Horse Riding, Chairlift<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Kashmir%20Point).jpg" alt="Kashmir Point" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Kashmir Point</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Kashmir%20Point).jpg" alt="Kashmir Point" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6622.277504264763!2d73.39863902402848!3d33.911828326429585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd765816ab5c7%3A0x1b972fdc86591ad!2sKashmir%20Point%2C%20Murree%2C%20Rawalpindi%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240801993!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Kashmir Point</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kashmir Point is one of the famous tourists attraction in Murree. You can visit the Government House – which is located right in the middle of Kashmir Point, which is one of the popular tourist attractions of Kashmir Point Murree."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Murree, Rawalpindi, Pakistan<br>
                            <b>Driving Distance :</b> 15 mins from Mall Road<br><br>
                            <b>Reviews :</b> 3.7 / 5<br>
                            <b>Things to do :</b> Sightseeing, Horse Riding, Murree Safari Train<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Patriata%20Chair%20Lift).jpg" alt="Patriata Chair Lift" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Patriata Chair Lift</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Patriata%20Chair%20Lift).jpg" alt="Patriata Chair Lift" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.6016494479554!2d73.45583251472803!3d33.8741556345424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd87a884cd295%3A0x333cb75bb60c9ae7!2sPatriyata%20Chair%20Lift!5e0!3m2!1sen!2s!4v1604240838616!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Patriata Chair Lift</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Patriata is a hill station near Murree, Pakistan. It is the highest point in the area and the hills stand 7,500 feet above sea level."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gulehrra Gali Bazar, Patriata, Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 36 mins (15.3 km) from Mall Road via Upper Jhika Gali Road<br>
                            <b>Contact :</b> +923155338737 <br>
                            <b>Timings :</b> 9 AM to 4 PM <br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Sightseeing, Horse Riding, Chair Lift, Cable Car, Live Games and Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Sozo%20Park).jpg" alt="Sozo Adventure Park" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Sozo Adventure Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Sozo%20Park).jpg" alt="Sozo Adventure Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.9950457817695!2d73.42964431472856!3d33.88978143372231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd83a3078e4a5%3A0x647f047bf6f9cfa5!2sSozo%20Adventure%20Park!5e0!3m2!1sen!2s!4v1604240868848!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Sozo Adventure Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Sozo Adventure Park Bay, located in Murree is an amusement park and a sprawling water park with a women's-only section offering numerous thrill rides, slides & pools."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Lower Topa, Murree, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 24 min (11.8 km) via Upper Jhika Gali Road and Islamabad - Murree Expy/N-75<br>
                            <b>Contact :</b> +923225521293 <br>
                            <b>Timings :</b> 10:30 AM to 8:30 PM <br>
                            <b>Reviews :</b> 3.9 / 5<br>
                            <b>Things to do :</b> Sightseeing, Rides, WaterPark Chair Lift, Funland, Food Stalls<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Murree%20Hills).jpg" alt="Murree Hills, Jhika Gali" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Murree Hills</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Murree%20Hills).jpg" alt="Murree Hills, Jhika Gali" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13243.800421392043!2d73.40791192633958!3d33.91668369702038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd777caccb093%3A0xbe22bc2d3a80c48!2sMurree%20Hills!5e0!3m2!1sen!2s!4v1604240915354!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Murree Hills </h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Murree Hills, Jhika Gali is a mountanious area covered in pine trees that gives soothing natural views. The area looks breathtaking in winter when the pine forest is covered in crystal white snow."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Jhika Gali, Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 11 min (3.8 km) via Upper Jhika Gali Road<br>
                            <b>Reviews :</b> 4.7 / 10<br>
                            <b>Things to do :</b> Sightseeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Sangrela%20Park).jpg" alt="Sangrela Park" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">Sangrela Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Sangrela%20Park).jpg" alt="Sangrela Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.271942809088!2d73.37158451472756!3d33.856881835448284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd981944cedc3%3A0x3b60427a9e46f4d5!2sSangrela%20Park!5e0!3m2!1sen!2s!4v1604240950869!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Sangrela Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Another local park that offers natural scenery of pristine hills, pine trees and the gushing water streams coming right through Murree Hills is Sangrela Park."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Islamabad - Murree Expressway, Bastal Mor Murree, Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 1 h 5 min (45.3 km) via Islamabad - Murree Expy/N-75<br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Things to do :</b> Sightseeing, Camping, BBQ, Bonfire, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 8 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Bhurban).jpg" alt="Bhurban" class="place__img">
                <a href="#popup8"><figcaption class="place__caption">Bhurban</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 8 POPUP ----------------------------- --> 
            <div class="popup" id="popup8">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Bhurban).jpg" alt="Bhurban" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13238.072007314744!2d73.44525572635592!3d33.95352308915632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd62c5578ef8f%3A0x507f47807f0b7f9c!2sBhurban%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604240987488!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Bhurban</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Bhurban is a small town and a hill station in Punjab province, Pakistan. The resort town is named after a nearby forest. It is located approximately 11 kilometres from Murree."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 24 min (10.6 km) via Upper Jhika Gali Road and Khaqan Abassi Rd<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Sightseeing, Camping, BBQ, Bonfire, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 9 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Upper%20and%20Lower%20Topa).jpg" alt="Upper Topa and Lower Topa" class="place__img">
                <a href="#popup9"><figcaption class="place__caption">Upper Topa and Lower Topa</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 9 POPUP ----------------------------- --> 
            <div class="popup" id="popup9">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Upper%20and%20Lower%20Topa).jpg" alt="Upper Topa and Lower Topa" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13246.46082891101!2d73.422869176332!3d33.899562650672884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd825c375ef0d%3A0xcd0023ebc6688269!2sLower%20Topa%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241024518!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Upper and Lower Topa</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Upper Topa and Lower Topa is a town in Murree, Rawalpindi, Paakistan. The town is famous for i'ts boys cadet college which is one of the best cadet colleges of Pakistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Murree, Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 13 min (5.5 km) via Upper Jhika Gali Road and Muzaffarabad Rd<br>
                            <b>Things to do :</b> Sightseeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 10 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Nathiagali).jpg" alt="Nathiagali" class="place__img">
                <a href="#popup10"><figcaption class="place__caption">Nathia Gali</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 10 POPUP ----------------------------- --> 
            <div class="popup" id="popup10">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Nathiagali).jpg" alt="Nathiagali" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26439.03611086797!2d73.36448886607447!3d34.07260275675145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd4b203243f2b%3A0xe2a84441ca2e0678!2sNathia%20Gali%2C%20Abbottabad%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241053392!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Nathia Gali</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"People who visit the Murree hill station never miss a chance to visit the places near Murree, like Nathiagali. It is located around 35 km from Murree and Abbottabad and at an altitude of 8, 400 feet."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Abbottabad, Border of Punjab and KPK, Pakistan <br>
                            <b>Driving Distance :</b> 1 h 15 min (35.1 km) via Abbottabad Rd and Nathia Gali Rd<br>
                            <b>Things to do :</b> Sightseeing, Photography, Trekking, BBQ, Bonfire, Camping<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 11 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Ayubia).jpg" alt="Ayubia" class="place__img">
                <a href="#popup11"><figcaption class="place__caption">Ayubia</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 11 POPUP ----------------------------- --> 
            <div class="popup" id="popup11">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Ayubia).jpg" alt="Ayubia" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6613.247092031527!2d73.40275342404136!3d34.02787281416065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd45724feaa2f%3A0x3073246b85a796c!2sAyubia%2C%20Rawalpindi%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241087289!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Ayubia</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Ayubia National Park, also known as Ayubia, is a protected area of 3,312 hectares located in Abbottabad District, Khyber Pakhtunkhwa province, Pakistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Abbottabad, Border of Punjab and KPK, Pakistan <br>
                            <b>Driving Distance :</b> 51 min (22.6 km) via Abbottabad Rd<br>
                            <b>Things to do :</b> Sightseeing, Photography, Trekking, BBQ, Bonfire, Camping<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 12 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Ghora%20Gali).jpg" alt="Ghora Gali" class="place__img">
                <a href="#popup12"><figcaption class="place__caption">Ghora Gali</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 12 POPUP ----------------------------- --> 
            <div class="popup" id="popup12">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Ghora%20Gali).jpg" alt="Ghora Gali" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26495.78732874723!2d73.34118581575008!3d33.89033848624973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfda08af4c4643%3A0x8989071791395e39!2sGhora%20Gali%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241131918!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Ghora Gali</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Ghora Gali is one of the tourist mountain resort towns of the Galyat area of northern Pakistan. It has an elevation of 1691m and is located in the northeastern tip of the Punjab province of Pakistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Murree, Rawalpindi, Punjab, Pakistan <br>
                            <b>Driving Distance :</b> 26 min (10.3 km) via Kashmir Rd<br>
                            <b>Things to do: </b> Sight seeing, Photography, Riding<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 13 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Punjab/Murree(Dir%20Munjai).jpg" alt="Dir Munjai" class="place__img">
                <a href="#popup13"><figcaption class="place__caption">Dir Munjai</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 13 POPUP ----------------------------- --> 
            <div class="popup" id="popup13">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Murree(Dir%20Munjai).jpg" alt="Dir Munjai" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13093.790402659513!2d71.8919777767674!3d34.87010499129891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dbf4de96535807%3A0xf713e8ce7694fd02!2sMunjai%2C%20Lower%20Dir%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241158632!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Dir Munjai</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Munjai is a union council of Lower Dir District in Khyber Pakhtunkhwa, Pakistan. It is a very beautiful place to visit if you are a lover of natural beauty. This place is the best place to visit if you want to give a pleasure to your mind and refresh yourself"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Lower Dir, Border of Punjab and Khyber Pakhtunkhwa<br>
                            <b>Driving Distance :</b> 5 h 3 min (309.5 km) via AH1/M-1 and Swat Express Way<br>
                            <b>Things to do: </b> Sight seeing, Photography, Camping, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/MurreeHotel1.webp" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Shangrila Resort Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/MurreeHotel1a.webp" alt="hotel 1" class="popup__img">
                        <img src="../../content/Punjab/Hotels/MurreeHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Shangrila Resort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"3-star hotel | Lawrence College Road, Adjacent to Punjab House، Murree Bypass، Murree, Rawalpindi, Khyber Pakhtunkhwa 47150 | 0300 5002719" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/XayecB5YCfdCtMUu5" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 30 mins from Kashmir Point and 49 mins from Patriata Chair Lift<br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Starting From :</b> 12,760 PKR per room<br>
                            <b>Services :</b><br>✔ 3 star hotel<br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Bar
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/MurreeHotel2.webp" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">PC Bhurban</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/MurreeHotel2a.webp" alt="hotel 2" class="popup__img">
                        <img src="../../content/Punjab/Hotels/MurreeHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">PC Bhurban</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"5-star hotel | Pearl Continental Bhurban, Murree, Rawalpindi, Khyber Pakhtunkhwa | +92 (51) 3355700-29, 3355501-04" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/9mSgKJN1GsB9B74p9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 20 mins drive from kashmir point and 40 mins from Patriata Chair Lift <br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Services :</b><br>✔ 5 star hotel<br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC<br>✔ Bar<br>✔ Luxurious<br>✔ Swimming Pool<br>✔ Fitness Area<br>✔ 24-hrs Front Desk
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/MurreeHotel3.webp" alt="hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Pashas Morningside Lodge</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/MurreeHotel3a.webp" alt="hotel 3" class="popup__img">
                        <img src="../../content/Punjab/Hotels/MurreeHotel3b.webp" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Morningside Lodge</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kashmir Point, Gov House Rd, Near Murree, Rawalpindi, Punjab | 0300 0212844" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/DzzynyNG8TM6ZmHeA" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 19 mins drive from kashmir point and 34 mins from Patriata Chair Lift <br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Timings :</b> CheckIn -1 PM, CheckOut - 12 PM <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms<br>✔ Airport Shuttle<br>✔ 24-hrs Front Desk

                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Punjab/Hotels/MurreeHotel4.webp" alt="hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Arcadian Blue Pines Luxury Resort</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Punjab/Hotels/MurreeHotel4a.webp" alt="hotel 4" class="popup__img">
                        <img src="../../content/Punjab/Hotels/MurreeHotel4b.webp" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Pines Luxury Resort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Lawrence College Road, near Lawrence College، Murree, Rawalpindi, Khyber Pakhtunkhwa | (051) 8436971" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/8dsDwiksDnXpNPhXA" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b>24 mins drive from kashmir point and 43 mins from Patriata Chair Lift <br>
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Starting From :</b> 18,014 PKR per day <br>
                            <b>Timings :</b> CheckIn -12 PM, CheckOut - 12 PM <br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms<br>✔ Restaurant<br>✔ 24-hrs Front Desk
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