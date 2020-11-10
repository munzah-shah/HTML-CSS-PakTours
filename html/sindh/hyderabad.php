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
        <header class="header header--3 hyderabad">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Hyderabad</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
           
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Askari%20Public%20Park).jpg" alt="askari park" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">askari park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Askari%20Public%20Park).jpg" alt="askari park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.9224055737977!2d68.3535251145253!3d25.407407829375977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70b78fae3059%3A0x6172d30f8a04d470!2sAskari%20Public%20Park!5e0!3m2!1sen!2s!4v1604233113355!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">askari park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Askari park is best park in hyderabad for walk and relaxing environment. "
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Qasimabad, Hyderabad, Sindh<br>
                            <b>Contact :</b> 0313 8552587<br>
                            <b>Timings :</b> 6 AM to 9 PM<br>
                            <b>Reviews :</b> 3.9 / 5<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Badshai%20Bungalow).jpg" alt="Badshahi Bungalow" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Badshahi Bungalow</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Badshai%20Bungalow).jpg" alt="Badshahi Bungalow" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.162641925163!2d68.35366801452447!3d25.365865031062608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c7067147405d5%3A0x917536034c497939!2slatifabad%2C%20Latifabad%20Unit%209%20Latifabad%2C%20Hyderabad%2C%20Sindh%2071000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604233340319!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Badshahi Bungalow</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Badshahi Bungalow is the place where you can find the Mughal's ways of living and can get to see the Mughal's belongings placed in the bungalow. It is the main point of attraction for the tourist who wants to see the famous places in Hyderabad."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Latifabad Unit No # 4, Hyderabad, Pakistan<br>
                            <b>Reviews :</b> 3.7 / 5<br>
                            <b>Things to do :</b> Sightseeing<br>
                            <b>Opening Days :</b> whole week<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Boulevard%20Mall).jpg" alt="Boulevard Mall" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">Boulevard Mall</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Boulevard%20Mall).jpg" alt="Boulevard Mall" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.204309653989!2d68.37855481452449!3d25.364468231119307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c704d3f7d2e23%3A0x3b24a6c23a1f1718!2sBoulevard%20Mall%20Hyderabad!5e0!3m2!1sen!2s!4v1604233385036!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Boulevard Mall</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"'Boulevard Mall is an ideal shopping destination in Hyderabad. The only and the largest mall, based in Hyderabad, offers everything you need. A must visit for shoppers as well as investors alike!"
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Boulevard Mall، A/14 Auto Bahn Rd, hyd.<br>
                            <b>Contact :</b> 0346 8281842<br>
                            <b>Opening Hours :</b> 12 PM to 12 AM, (Fri : 3 PM to 12 AM)<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Shopping, Food Court, Super Space(Indoor Playground)<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Hasrat%20Mohani%20District%20Central%20Library).jpg" alt="Hasrat Mohani District Central Library" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">Hasrat Mohani District Central Library</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Hasrat%20Mohani%20District%20Central%20Library).jpg" alt="Hasrat Mohani District Central Library" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.571396476171!2d68.3692815145249!3d25.385677230258572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70fac2f6418d%3A0xea841ae085db3956!2sHasrat%20Mohani%20District%20Central%20Library!5e0!3m2!1sen!2s!4v1604239012818!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Hasrat Mohani CL</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hasrat Mohani District Central Library Hyderabad is the biggest and oldest Public Library Hall located in Hyderabad."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Pakka Qilla Rd, Shahi Bazar, Hyderabad, Sindh<br>
                            <b>Contact :</b> (022) 2782386<br>
                            <b>Opening Hours :</b> 10 AM to 5 PM - Mon to Fri only<br>
                            <b>Reviews :</b> 4.1 / 5<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Market%20Tower%20(Ghanta%20Ghar).jpg" alt="Market Town Ghanta Ghar" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Market Town Ghanta Ghar</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Market%20Tower%20(Ghanta%20Ghar).jpg" alt="Market Town Ghanta Ghar" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.1834936154264!2d68.36723301452515!3d25.398667729731052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70c2b17e1ad7%3A0xad2b63d35bfbaa38!2sNaval%20Rai%20Market!5e0!3m2!1sen!2s!4v1604239184639!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Ghanta Ghar</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"It is one of the oldest clock towers  of Pakistan(was built by British in 1914), located in the heart of the shahi bazar hyderabad."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Navalrai Market, Shahi Bazaar, Hyderabad, Pakistan. <br>
                            <b>Opening Hours :</b> 8 AM to 8 PM Mian Ghulam Nabi Kalhoro Tomb<br>
                            <b>Reviews :</b> 4.0 / 5<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Mian%20Ghulam%20Nabi%20Kalhoro%20Tomb).jpg" alt="Mian Ghulam Nabi Kalhoro Tomb" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">Mian Ghulam Nabi Kalhoro Tomb</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Mian%20Ghulam%20Nabi%20Kalhoro%20Tomb).jpg" alt="Mian Ghulam Nabi Kalhoro Tomb" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8170396858595!2d68.36187661452543!3d25.410934229232584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70cf2a19d4b7%3A0x5782b3ca17a81b96!2sMian%20Ghulam%20Nabi%20Kalhoro.!5e0!3m2!1sen!2s!4v1604239225642!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Kalhoro Tomb</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"visit this place to enjoy peace and calmness! It is a wonderful place with historical monument, surrounded by a small residential area."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Journalists Colony, Hyderabad, Sindh, Pakistan<br><br>
                            <b>Opening Hours :</b> 9 AM to 5 PM<br>
                            <b>Reviews :</b> 4.2 / 5<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Miran%20Ja%20Quba%20(Tombs%20of%20Mirs)).jpg" alt="Miran Ja Quba Miran Ja Quba" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">Miran Ja Quba</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Miran%20Ja%20Quba%20(Tombs%20of%20Mirs)).jpg" alt="Miran Ja Quba" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.9946947984035!2d68.3637317145253!3d25.40498817947417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70c44552f8d1%3A0xc1f2c960d6c1f669!2sTalpur&#39;s%20Tombs%20(%20Miran%20ja%20Quba%20)%2C%20Pathan%20Colony%2C%20Hyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604239272529!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Miran Ja Quba</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The tomb is related to the Tombs of Talpur Mirs complex, built in the eighteenth century in the city of Hyderabad. The tombs are of the ruling Talpur Mirs of Sindh."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Pathan Colony, Hyderabad, Sindh<br>
                            <b>Reviews :</b> 4.0 / 5<br>
                            <b>Things to do: </b> Sight seeing <br><br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 8 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Mukhi%20House).jpg" alt="Mukhi House" class="place__img">
                <a href="#popup8"><figcaption class="place__caption">Mukhi House</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 8 POPUP ----------------------------- --> 
            <div class="popup" id="popup8">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Mukhi%20House).jpg" alt="Mukhi House" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.559255019335!2d68.36910911452493!3d25.386083930242005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c71f8da7a0165%3A0xd7c0266a4d269f85!2sMukhi%20House%20Museum!5e0!3m2!1sen!2s!4v1604239305886!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Mukhi House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Mukhi House, located in the heart of Hyderabad city is an amazing and adventurous place. Full of history and mystry. "
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Shahi Bazar, Hyderabad, Sindh 67578, Pakistan<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Timings :</b> 9 AM to 5 PM (wed : closed)<br>
                            <b>Things to do: </b> Archeological studies, Sight seeing <br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 9 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Pakka%20Qila.jpg" alt="Pacco Qillo" class="place__img">
                <a href="#popup9"><figcaption class="place__caption">Pacco Qillo</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 9 POPUP ----------------------------- --> 
            <div class="popup" id="popup9">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Pakka%20Qila.jpg" alt="Pacco Qillo" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14418.054674250143!2d68.37059522306147!3d25.38761087649119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70fd2e184265%3A0x41c17a961e1973a6!2sPakka%20Qila%2C%20Hyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604239347792!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Pacco Qillo</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Pacco Qillo, formally known as Pakka Qilla, is an ancient fort in Hyderabad, Sindh, Pakistan, Built by Mian Ghulam Shah Kalhoro in 1769.  It was a great monument years ago but now there is nothing much to see."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Pakka Qilla, Hyderabad, Sindh.<br>
                            <b>Reviews :</b> 3.8 / 5<br>
                            <b>Things to do: </b>Sight seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 10 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(QadamGahMola%20Ali).jpg" alt="Qadam Gah Mola Ali" class="place__img">
                <a href="#popup10"><figcaption class="place__caption">Qadam Gah Mola Ali</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 10 POPUP ----------------------------- --> 
            <div class="popup" id="popup10">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(QadamGahMola%20Ali).jpg" alt="Qadam Gah Mola Ali" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.607404813636!2d68.3688429145248!3d25.384471030307473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70fa8d9fcbad%3A0x1f63a51ff50519f2!2z2YLYr9mFINqv2KfaviDZhdmI2YTYpyDYudmE2Yog2LnZhNmK2Ycg2KfZhNiz2YTYp9mFIChRYWRhbSBHYWggTW9sYSBBbGkgKEEuUw!5e0!3m2!1sen!2s!4v1604239497887!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Qadam Gah Mola Ali</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A very spiritual and nice place for tourism and visiting purposes. It is basically a religious destination for muslims where Believers or devoters, arrange niaz in the name of Allah."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Resham Gali, Shahi Bazar, Hyderabad, Sindh, Pakistan<br>
                            <b>Reviews :</b> 4.7 / 5<br>
                            <b>Things to do: </b>Religious destination, Sight seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 11 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Rani%20Bagh).jpg" alt="Raani Baagh" class="place__img">
                <a href="#popup11"><figcaption class="place__caption">Raani Baagh</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 11 POPUP ----------------------------- --> 
            <div class="popup" id="popup11">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Rani%20Bagh).jpg" alt="Raani Baagh" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.654515946254!2d68.33824161452486!3d25.38289283037155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c709b68410189%3A0xac06ab740c05cc40!2sRani%20Bagh%20Zoo!5e0!3m2!1sen!2s!4v1604239528782!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Raani Baagh</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">Rani Baagh is a garden in hyderabad spread over 58 acres, including raani baagh zoo and raani baagh funland."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Rani Bagh Qasimabad, Hyderabad, Sindh, Pakistan<br>
                            <b>Contact :</b> +92323 3945296<br>
                            <b>Reviews :</b> 3.5 / 5<br>
                            <b>Timings :</b> 8 AM to 1 AM <br>
                            <b>Things to do: </b> Sight seeing, Funland Swings, Zoo<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 12 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(Sindh%20Museum).jpg" alt="Sindh Museum" class="place__img">
                <a href="#popup12"><figcaption class="place__caption">Sindh Museum</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 12 POPUP ----------------------------- --> 
            <div class="popup" id="popup12">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(Sindh%20Museum).jpg" alt="Sindh Museum" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.5965356106585!2d68.3357626145249!3d25.384835130292753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c709c5a85d2b1%3A0xa04eccaceca029bc!2sSindh%20Museum!5e0!3m2!1sen!2s!4v1604239559734!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Sindh Museum</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Sindh provincial Museum was Established in 1971. It comprises the history and heritage of sindh and the indus valley Civilization, items from varios rulling periods of Sindh including Samma, soomra, kalhora and Talpur.A must visit place!
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> National Hwy 5, Rani Bagh Qasimabad, Hyderabad, Sindh, Pakistan<br>
                            <b>Contact :</b> +923323148652<br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Timings :</b> 10 AM to 5 PM (wed : closed) <br>
                            <b>Things to do: </b> Sight seeing<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 13 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Sindh/Hyderabad%20Sindh(St.%20Philips%20Church).jpg" alt="St Philip's Church" class="place__img">
                <a href="#popup13"><figcaption class="place__caption">St Philip's Church</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 13 POPUP ----------------------------- --> 
            <div class="popup" id="popup13">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hyderabad%20Sindh(St.%20Philips%20Church).jpg" alt="St Philip's Church" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.235927541921!2d68.36510271452515!3d25.396912129802292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70e82e5e2241%3A0x4db39371f80451bc!2sSt%20Philip&#39;s%20Church!5e0!3m2!1sen!2s!4v1604239612164!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">St Philip's Church</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"A safe and secure holy place of christians, also an attractive place for tourists."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Hyderabad, Sindh, Pakistan<br>
                            <b>Reviews :</b> 3.9 / 5<br>
                            <b>Timings :</b> 8 AM to 6 PM (sun : closed) <br>
                            <b>Things to do: </b> Sight seeing<br>
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
                <img src="../../content/Sindh/Hotels/HyderabadHotel1" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Indus Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel1a.webp" alt="hotel 1" class="popup__img">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Indus Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"4-star hotel | Indus Hotel Thandi Sarak, opposite Niaz Stadium، GOR Colony, Hyderabad | (022) 2782514" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/huk7ewC1g4rAjaCy9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Distance :</b> 16-minute walk from the Sindh Museum and a 10-minute walk from cricket matches at Niaz Stadium<br>
                            <b>Starting From :</b> 13,560 PKR per room<br>
                            <b>Timings :</b> 12 PM to 12 AM<br>
                            <b>Services :</b><br>✔ 4 star hotel<br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC <br>✔ Luxurious<br>✔ 24 hours front desk
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Sindh/Hotels/HyderabadHotel2.jpg" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Autobahn Guest house</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel2a.webp" alt="hotel 2" class="popup__img">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Autobhn Guest house</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"house # 14/B1 R-C-H-S main, Hyderabad, 71000 | 0331 2155823" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/iM5WSdKod6WQRPuc9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 9 min drive from Sindh Museum and Rani Baagh Zoo<br>
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Starting From :</b> 2,486 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Wifi<br>✔ AC ROoms <br>✔ 24 hrs Front Desk Services
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Sindh/Hotels/HyderabadHotel3" alt="hotel 3"  class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Al-Raheem Guest House</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel3a.webp" alt="hotel 3" class="popup__img">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel3b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">ARaheem Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"H NO B-2-24 RAILWAY CO-OPERATIVE HOUSING SOCIATY BEHIND (FPS) MAIN، # 03 Auto Bahn Rd, Latifabad, Hyderabad, Sindh 71800 | 0333 2792406" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/mYyLLf8whCEmh8GA7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 9 min drive from Sindh Museum and Rani Baagh Zoo <br>
                            <b>Reviews :</b> 4.2 / 5<br>
                            <b>Starting From :</b> 6,550 PKR per room<br>
                            <b>Timings :</b> 12 PM to 12 AM<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms <br>✔ 24 hrs Front Desk Services
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Sindh/Hotels/HyderabadHotel4.webp" alt="hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Hotel Paradise Lounge</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel4a.webp" alt="hotel 4" class="popup__img">
                        <img src="../../content/Sindh/Hotels/HyderabadHotel4b.webp" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Paradise Lounge</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Beside and Behind Mcdonald Autobhan Plot No B2/7 REHS Latifabad No 3، Latifabad, 71800 | (022) 3411401" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/17pYv44GzzL6A9A37" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 11 min drive from Sindh Museum and Rani Baagh Zoo <br>
                            <b>Reviews :</b> 4.8 / 5<br>
                            <b>Starting From :</b> 6,500 PKR per room<br>
                            <b>Timings :</b> 12 PM to 12 AM<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms <br>✔ 24 hrs Front Desk Services<br>✔ Airport Shuttle
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