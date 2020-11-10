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
        <header class="header header--3 chitral">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Chitral</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Tirich%20Mir).jpg" alt="Tirich Mir" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Tirich Mir</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Tirich%20Mir).jpg" alt="Tirich Mir" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12869.443538943926!2d71.83207852741002!3d36.255016484426164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38c498c774004283%3A0x2caaf4626eb98257!2sTirich%20Mir!5e0!3m2!1sen!2s!4v1604241657761!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Tirich Mir</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Tirich Mir is the highest mountain of the Hindu Kush range, and the highest mountain in the world outside of the Himalayas-Karakoram range, located in Chitral District of Pakistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chitral District, Khyber Pakhtunkhwa, Pakistan<br>
                            <b>Mountain Range :</b> Hindu Kush<br>
                            <b>Elevation :</b> 25,289 ft high<br>
                            <b>Review :</b> 4.7 / 5<br>
                            <b>Things to do :</b> Trekking<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Kalash%20Valley).jpg" alt="Kalash Valley" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Kalash Valleys</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Kalash%20Valley).jpg" alt="Kalash Valley" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.376636988793!2d71.7527973147802!3d35.71695463562029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db4ffbf2bd2b03%3A0xdcccfccb18b3909!2sKalash%20Valley%20Road%2C%20Chitr%C4%81l%2C%20Chitral%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604241695827!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Kalash Valleys</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Kalash Valleys are valleys in Chitral District in northern Pakistan which are surrounded by the Hindu Kush mountain range. The inhabitants of valley are Kalash people, who have a unique culture, and follow a form of ancient Hinduism."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chital, Khyber Pakhtoonkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 1h 41min (24.7km) from Chitral Kalash via Bamboret Valley Rd<br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Timings :</b> 24 hours Open<br>
                            <b>Things to do :</b> Camping, Bonfire, kalash Festivals, BBQ, Cultural Dresses<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Bumburet%20Valley).jpg" alt="Bumburet" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Bumburet</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Bumburet%20Valley).jpg" alt="Bumburet" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12960.533328692934!2d71.6826299271487!3d35.69833640891312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db458cab60f271%3A0x5c138d74d258021b!2sBumburet!5e0!3m2!1sen!2s!4v1604241732354!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Bumburet</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"love adventures? Then visit Bumburet valley once in your lifetime! It is the largest valley among the Kalash Valleys."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kalash, Chitral, Khyber Pakhtunkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 1 h 33 min (22.9 km) from Chitral via Kalash Valley Road and Bamboret Valley Road<br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Elevation :</b> 1,100 m <br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, kalash Festivals, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Gol%20National%20Park).jpg" alt="chitral gol national park" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">chitral gol national park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Gol%20National%20Park).jpg" alt="chitral gol national park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.130874513229!2d71.68943181478542!3d35.894810225837155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38c4b320ea4a59bd%3A0x87087be0e33d7c4f!2sChitral%20Gol%20National%20Park!5e0!3m2!1sen!2s!4v1604241764898!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">gol national park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Chitral Gol National Park is one of the National Parks of Pakistan. Gol national park is a heartwarming place in chitral, showing off the beauty of nothern Pakistan. Simply a paradise on earth!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chitral, Khyber Pakhtunkhwa <br>
                            <b>Driving Distance :</b> 2 hours drive from Chitral Town<br>
                            <b>Contact :</b> +923157709954 <br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Things to do :</b> Sightseeing, Photography, Camping, BBQ, Picnics<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Rumbur%20Valley).jpg" alt="Rumber Valley" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Rumbur Valley</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Rumbur%20Valley).jpg" alt="Rumber Valley" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.055366834413!2d71.69041517464125!3d35.700255108486694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db458b6a88e8b9%3A0x559fe00ffdb3f075!2sRumbur!5e0!3m2!1sen!2s!4v1604241832377!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Rumbur Valley</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Rumbur is one of the three famous Kalash valleys situated in Chitral District, Khyber Pakhtunkhwa, Pakistan. It is second most famous after Bumburet Valley."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kalash, Chitral, Khyber Pakhtunkhwa <br>
                            <b>Driving Distance :</b> 1 h 32 min (22.7 km) via Kalash Valley Road and Bamboret Valley Road<br><br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, kalash Festivals, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Chitral%20Museum).jpg" alt="Chitral Museum" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Chitral Museum</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Chitral%20Museum).jpg" alt="Chitral Museum" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.0506920915677!2d71.783724214784!3d35.84776052842921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db528ad2551653%3A0x33e482c021ffdd58!2sChitral%20Museum!5e0!3m2!1sen!2s!4v1604241865793!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Chitral Museum</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A museum located in Chitral District, Khyber Pakhtunkhwa, Pakistan, established on 8 July 2010. A great initiative to keep alive the traditions of this area and preserve ancient age history under one roof."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chitrāl, Chitral, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 25 min (11.4 km) from Chitral via Chitral - Dir Rd/N-45<br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Contact :</b> +92943414811 <br>
                            <b>Timings :</b> 8:30 AM to 5 PM (Fri - Closed)<br>
                            <b>Things to do :</b> Sightseeing, Photography, Study<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Chitral%20Fort).jpg" alt="Chitral Fort" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">Chitral Fort</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Chitral%20Fort).jpg" alt="Chitral Fort" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.7478670246637!2d71.7895144147842!3d35.85518552802037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db538714ccd34b%3A0xc5656c142089fbf3!2sChitral%20Fort!5e0!3m2!1sen!2s!4v1604241895441!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Chitral Fort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Chitral Fort is a fortification in Chitral town, Khyber Pakhtunkhwa, Pakistan. The fort is situated on the banks of the Chitral River."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Fort Rd, Chitrāl, Chitral, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 28 min (12.4 km) from Chitral via Chitral - Dir Rd/N-45<br>
                            <b>Reviews :</b> 4.1 / 5<br>
                            <b>Things to do :</b> Sightseeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 8 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Shahi%20Masjid).jpg" alt="Shahi Masjid" class="place__img">
                <a href="#popup8"><figcaption class="place__caption">Shahi Masjid</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 8 POPUP ----------------------------- --> 
            <div class="popup" id="popup8">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Shahi%20Masjid).jpg" alt="Shahi Masjid" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.736870496096!2d71.78747861478418!3d35.85545512800552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52f267e1aaa3%3A0x7288ae67ea36722!2sShahi%20Masjid%20Chitral!5e0!3m2!1sen!2s!4v1604241995699!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Shahi Masjid</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Shahi Mosque is the main mosque in the town of Chitral, KPK, located on the bank of the Chitral river adjacent to the Chitral Fort. It was the principal mosque of Chitral at the time of the existence of the State of Chitral."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Jamia Masjid Rd, Chitrāl, Chitral, Khyber Pakhtunkhwa <br>
                            <b>Driving Distance :</b> 28 min (12.4 km) from Chitral via Chitral - Dir Rd/N-45<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Contact :</b> (0943) 412606 <br>
                            <b>Timings :</b> Open 24 hours<br>
                            <b>Things to do :</b> Sightseeing, Religious Destination<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 9 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Khot%20Valley).jpg" alt="Khot Valley" class="place__img">
                <a href="#popup9"><figcaption class="place__caption">Khot Valley</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 9 POPUP ----------------------------- --> 
            <div class="popup" id="popup9">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Khot%20Valley).jpg" alt="Khot Valley" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12930.390645497808!2d71.79128502723515!3d35.883375417702595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d197fe6827%3A0x48dca8516385df0a!2sKhot%20Valley!5e0!3m2!1sen!2s!4v1604242027188!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Khot Valley</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Khot Valley is an inhabited valley in the  Hindukush range in Chitral. Its main town is Khot and the population speak Khowar language. It is the third most famous valley from Kalash valleys."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Khot, Chitral, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 39 min (16.0 km) from Chitral via Chitral - Dir Rd/N-45<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 3.0 / 5<br>
                            <b>Elevation :</b> 1,100 m<br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, kalash Festivals, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 10 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/KPK/Chitral-KPK%20(Shandur%20Pass).jpg" alt="Shandur Pass" class="place__img">
                <a href="#popup10"><figcaption class="place__caption">Shandur Pass</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 10 POPUP ----------------------------- --> 
            <div class="popup" id="popup10">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Chitral-KPK%20(Shandur%20Pass).jpg" alt="Shandur Pass" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12899.121451623349!2d72.50930082732482!3d36.07446092496909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38c33207cefb8881%3A0xe07b0c337ce161a7!2sShandur%20Pass!5e0!3m2!1sen!2s!4v1604242068340!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Shandur Pass</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Shandur Pass is a pass located in between the Ghizer District of Gilgit-Baltistan and Chitral District of Khyber Pakhtunkhwa, Pakistan. It is often called 'Roof of the World'."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chitral, Khyber Pakhtunkhwa, Pakistan <br>
                            <b>Driving Distance :</b> 4 h 52 min (157.5 km) via Chitral - Mastuj Rd and Mastuj Rd<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Elevation :</b> 3,700 m<br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, Polo Game<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/ChitralHotel1.webp" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Kalash Continental Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/ChitralHotel1a.webp" alt="Hotel 1" class="popup__img">
                        <img src="../../content/KPK/Hotels/ChitralHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small"> Kalash Continental Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kalash, Chitrāl, Chitral, Khyber Pakhtunkhwa | 0344 9777176" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/uYt6HepuQaaA5nWb6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 16 mins from Bumburet and 19 mins from Rumbur <br>
                            <b>Reviews :</b> 5.0 / 5<br>
                            <b>Starting From :</b> 5,220 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/ChitralHotel2.webp" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Gahirat Castle</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/ChitralHotel2a.webp" alt="Hotel 2" class="popup__img">
                        <img src="../../content/KPK/Hotels/ChitralHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2 u-margin-top-v-small">Gahirat Castle</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Gabhirat, Chitrāl, Chitral, Khyber Pakhtunkhwa | 0345 9777414" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/Edu5JbZfA26rig5b7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 1 hr 35 mins from Bumburet and 1 hr 34 mins from Rumbur <br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Starting From :</b> 12,759 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/ChitralHotel3.webp" alt="Hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Hindukush Heights</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/ChitralHotel3a.webp" alt="Hotel 3" class="popup__img">
                        <img src="../../content/KPK/Hotels/ChitralHotel3b.webp" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2 u-margin-top-medium-2">Hindukush Heights</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"3-star hotel | Chitral, Khyber Pakhtunkhwa | (0943) 413151" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/N1tmeTKUGjhthSCz6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 14 mins from khot valley and 19 mins from Chitral Fort <br>
                            <b>Reviews :</b> 4.4 / 5<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/KPK/Hotels/ChitralHotel4.webp" alt="Hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Pamir Riverside Inn Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/KPK/Hotels/ChitralHotel4a.webp" alt="Hotel 4" class="popup__img">
                        <img src="../../content/KPK/Hotels/ChitralHotel4b.webp" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-medium-2">Pamir Riverside Inn Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Adjacent to Chitral Fort، Chitrāl, Chitral, Khyber Pakhtunkhwa 17200 | 0345 4384541" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/okxtkHCYQB9gxP1u6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 1 min walking distance from Chitral Fort and 3 mins walk from Shahi Masjid <br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms<br>✔ Kitchen in Room<br>✔ Full service laundry
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