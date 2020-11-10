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
        <header class="header header--3 astore">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <div>
                <h2 class="heading--5">Astore</h2>
            </div>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Astore(Rama%20Meadows).jpg" alt="Rama Meadows" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">Rama Meadows</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Astore(Rama%20Meadows).jpg" alt="Rama Meadows" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.3001290270686!2d74.79304731476952!3d35.34819725577263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e699cf7f74d27d%3A0xfecff2ac85b06711!2sRama%20Meadows!5e0!3m2!1sen!2s!4v1604248595019!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Rama Meadows</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Rama Lake is located on top of the mesmerizing Astore Valley. From Astore to Rama, the path is dotted with a number of beautiful lakes. Being 3300 m above the sea level, it is a perfect place for your summer getaway for reconnecting with nature."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Chital, Khyber Pakhtoonkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 42 min (10.0 km) from Astore via Astore - Rama Rd<br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Timings :</b> 24 hours Open<br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, BBQ, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Astore(Astore%20River).jpg" alt="Astore River" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Astore River</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Astore(Astore%20River).jpg" alt="Astore River" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103893.5363856786!2d74.64024062532293!3d35.5370773952316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e68efcdc09eed9%3A0x536aeed46a2d093c!2sAstor%20River!5e0!3m2!1sen!2s!4v1604248626229!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Astore River</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Astor River, A historical paradise in Pakistan's Gilgit-Baltistan administrative region, is a tributary of the Indus River and one of the rivers draining the Deosai Plateau, running through Astore Valley."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Astore, Gilgit Baltistan, Pakistan<br>
                            <b>Driving Distance :</b> 56 min (30.2 km) via Astore Valley Rd <br>
                            <b>Reviews :</b> ⭐⭐⭐⭐⭐<br><br>
                            <b>Timings :</b> 24 hours Open<br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, BBQ, Sight Seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Minimarg,(Astore).jpg" alt="Minimarg" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Minimarg</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Minimarg,(Astore).jpg" alt="Minimarg" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6553.02155918172!2d75.07294837412705!3d34.79308928237876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e3e4a446256d59%3A0x8f31636d86a6035!2sMinimarg!5e0!3m2!1sen!2s!4v1604248666280!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Minimarg</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Minimarg is a village in the Neelum District of the Pakistani region of Azad Kashmir. It is situated on the right bank of the Neelum River to the north of Taobat, approximately 190 km from the city of Gilgit."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Neelum District, Azad Kashmir, Khyber Pakhtunkhwa, Pakistan<br>
                            <b>Driving Distance :</b> 2 h 31 min (88.2 km) from Astore via Astore Valley Rd<br>
                            <b>Reviews :</b> 4.6 / 5<br>
                            <b>Elevation :</b> 2,845 m <br>
                            <b>Things to do :</b> Camping, Bonfire, Trekking, Sight Seeing, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Rupal%20(Astore).jpg" alt="Rupal" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Rupal</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Rupal%20(Astore).jpg" alt="Rupal" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26073.913131461042!2d74.68737681816685!3d35.225416546796396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e6bc239f2519c7%3A0xf6c7bccb0cbd165e!2sRupal!5e0!3m2!1sen!2s!4v1604248697416!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Rupal</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Rupal is a village in the Rupal Valley of the Astore District in Gilgit–Baltistan, Pakistan. It lies to the south of Tarashing village on the west end of Tarashing Glacier."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Rupal Valley, Astore District, Gilgit Baltistan, Pakistan<br>
                            <b>Driving Distance :</b> 1 h 44 min (36.6 km) from Astore via Astor Valley Rd<br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 4.9 / 5<br>
                            <b>Things to do :</b> Camping, Photography, Bonfire, Trekking, Sight Seeing, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Trashing%20Astore%20Nanga%20Parbat%20Viewpoint(Astore).jpg" alt="Tarshing Astore Nanga Parbat Viewpoint" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Tarshing Astore Nanga Parbat Viewpoint</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Trashing%20Astore%20Nanga%20Parbat%20Viewpoint(Astore).jpg" alt="Tarshing Astore Nanga Parbat Viewpoint" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.946530598153!2d74.86022051476982!3d35.356973255295145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e69910716838e7%3A0xca891bc2b556ef05!2starishing%20vally!5e0!3m2!1sen!2s!4v1604248742171!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Tarishing Nanga Parbat Viewpoint</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Tarishing is a village with around 200 inhabitants and a sub-division of Astore District. It is the gateway to Nanga Parbat. The face of Nangaparbat which is approached from Tarishing side is known as Rupal face"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Kalash, Chitral, Khyber Pakhtunkhwa <br>
                            <b>Driving Distance :</b> 4 hours from Astore <br>
                            <b>Elevation :</b> 2900 m <br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Camping, Photography, Bonfire, Trekking, Sight Seeing, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/allah%20wali%20jheel%20(Astore).jpg" alt="Allah Wali Lake" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Allah Wali Lake</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/allah%20wali%20jheel%20(Astore).jpg" alt="Allah Wali Lake" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.8456766159784!2d75.01177941477059!3d35.38428335380845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e421075bf64bcf%3A0x176c22b4a5300784!2sAllah%20Wali%20Lake!5e0!3m2!1sen!2s!4v1604248772436!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Allah Wali Lake</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Allah wali Lake is one of the ancient tourism spots in Astore valley located at the end of the Perishing valley in Gotamsar town."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Allah Wali Lake, Parishing Gah Gutumsar, Gilgit-Baltistan <br>
                            <b>Driving Distance :</b> 48 min (20.8 km) from Astore via Astore Valley Rd<br>
                            <b>Reviews :</b> 4.1 / 5<br>
                            <b>Contact :</b> +923335613808 <br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Things to do :</b> Sight Seeing, Photography, Bonfire, Camping, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Deosai%20Bara_pani(Astore).jpeg" alt="Deosai National Park" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">Deosai National Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Deosai%20Bara_pani(Astore).jpeg" alt="Deosai National Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.4451854615027!2d75.4696349147587!3d34.97051207622854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e38bb6f78c2f95%3A0x91d536c155585ae!2sDeosai%20National%20Park!5e0!3m2!1sen!2s!4v1604248809453!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Deosai National Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Deosai National Park is a high-altitude alpine plain and national park in the Northern Pakistan region of Gilgit Baltistan. Deosai Plains are considered as the second highest plateaus in the world."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Deosai Park Rd, Astore, Gilgit-Baltistan <br>
                            <b>Driving Distance :</b> 48 mins via Astore Valley Rd<br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Elevation :</b> 4,114 m <br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Things to do :</b> Fishing, Trekking, Bonfire, Camping, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 8 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Qamari%20Astore(Astore).jpg" alt="Qamri Minimarg" class="place__img">
                <a href="#popup8"><figcaption class="place__caption">Qamri Minimarg</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 8 POPUP ----------------------------- --> 
            <div class="popup" id="popup8">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Qamari%20Astore(Astore).jpg" alt="Qamri Minimarg" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6553.02155918172!2d75.07294837412705!3d34.79308928237876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e3e5a22050f81f%3A0xef842bccfaeb863e!2sNASIR%20ABAD%20VALLEY!5e0!3m2!1sen!2s!4v1604248844767!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small">Qamri Minimarg</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A breath taking small town in Minimarg village of astore district of Gilgit baltistan, Pakistan. In actual, it is A place of worship of local inhabitants of that area, but a must visit place for tourists."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Qamri, Minimarg Road, Astore Minimarg, Azad Jammu and Kashmir <br>
                            <b>Driving Distance :</b> 2 h 31 min (88.2 km) from Astore via Astore Valley Rd<br>
                            <b>Reviews :</b> 5.0 / 5<br>
                            <b>Contact :</b> +923336748714 <br>
                            <b>Timings :</b> Open 24 hours<br>
                            <b>Things to do :</b> Sightseeing, Place of Worship<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 9 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/GilgitBaltistan/Rainbow%20lake%20(Astore).jpg" alt="Rainbow Lake" class="place__img">
                <a href="#popup9"><figcaption class="place__caption">Rainbow Lake</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 9 POPUP ----------------------------- --> 
            <div class="popup" id="popup9">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Rainbow%20lake%20(Astore).jpg" alt="Rainbow Lake" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.1467485239477!2d75.17925026475258!3d34.75189598798333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e3ef39d04017ff%3A0x30d216809a50565f!2sRainbow%20Lake!5e0!3m2!1sen!2s!4v1604248907039!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Rainbow Lake</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Domail Rainbow lake is located in Minimarg Astore valley Gilgit-Baltistan Pakistan. This lake is one of the beautiful lakes of the world with wild open area covered with lush green meadows. The lake is covered with flowers which gives such a pleasant feeling."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Minimarg, Astore, Gilgit Baltistan <br>
                            <b>Timings :</b> Open 24 hours <br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Things to do :</b> Sight Seeing, Photography, Camping, Bonfire, Trekking, BBQ<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel1.jpg" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">PTDC Motel Rama</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel1a.jpg" alt="Hotel 1" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel1b.jpg" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">PTDC Motel Rama</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Rama Astore, Gilgit-Baltistan | (058174) 80386" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/mAendMGswBN8XKH48" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 17 mins drive from Rama Lake and 10 mins walk from Rama Meadows <br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ AC and Non AC Rooms<br>✔ Bar<br>✔ Laundry Services
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel2.jpg" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Wazir Guest House</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel2a.jpg" alt="Hotel 2" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel2b.jpg" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2 u-margin-top-v-small">Wazir Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Main Rama Road, near Rama Meadows and Rama lake, Astore, Gilgit-Baltistan 14300 | 0323 5374830" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/7FrJ1q4hVZ1AwS7e6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 40 mins drive from Rama Lake and 26 mins drive from Rama Meadows <br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Starting From :</b> 6589 PKR per day<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ AC and Non Ac Rooms
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel3.jpg" alt="Hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Kamran Hotel & Restaurant</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel3a.jpg" alt="Hotel 3" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel3b.jpg" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-medium-2">Kamran Hotel & Restaurant</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Rama, Astore Valley Rd, Astore, Gilgit-Baltistan 14300 | 0333 5777234" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/ZsRmmtVz3Mun7BSH6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 54 mins drive from Rama Lake and 39 mins drive from Rama Meadows <br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Contact :</b> 0333 5777234<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms<br>✔ Pets Allowed<br>✔ Full service laundry<br> ✔ Restaurant
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel4.jpg" alt="Hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Wazeer's Mehel Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel4a.jpg" alt="Hotel 4" class="popup__img">
                        <img src="../../content/GilgitBaltistan/Hotels/AstoreHotel4b.jpg" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-medium-2">Wazeer's Mehel Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Astore Ghorikot, Gorikot, Gilgit-Baltistan 16100 | 0355 5222776" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/WH5a41V7vXGRoVZE8" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Distance :</b> 1 hr 22 mins drive from Rama Lake and 21 mins drive from Astore River <br>
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC and Non Ac Rooms<br> ✔ Restaurant<br>✔ 24 hrs Front desk
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