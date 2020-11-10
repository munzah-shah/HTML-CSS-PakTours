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
        <header class="header header--3 gwadar">
            <div class="header__logo-box">
                <img src="../../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--5">Gwadar</h2>
        </header>        
        <!-- ----------------------------------------------- BODY -------------------------------------------------- -->
         <section class="places-to-go">
           <fieldset class="attractions">
               <legend>&nbsp;&nbsp;ATTRACTIONS :&nbsp;</legend>
           
        <!-- ---------------------------- PLACE 1 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Gwadar%20seaport).jpg" alt="gwadar sea port" class="place__img">
                <a href="#popup1"><figcaption class="place__caption">gwadar sea port</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 1 POPUP ----------------------------- --> 
            <div class="popup" id="popup1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Gwadar%20seaport).jpg" alt="gwadar seaport" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.744750960891!2d62.33745931451937!3d25.110500341375644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebee233f5eceaf3%3A0xc8622abf840e0dac!2sGwadar%20Sea%20Port!5e0!3m2!1sen!2s!4v1604178326435!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">gwadar seaport</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Gwadar Port is the deepest sea port in the world, situated on the Arabian Sea at Gwadar in Balochistan."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gwadar Port Authority CPEC, Gwadar, Balochistan<br><br>
                            <b>Distance :</b> 700 km away from Karachi<br>
                            <b>Things to do :</b> Boating, Fishing<br>
                        </p>
                    </div>
                </div>
            </div>
        <!-- ---------------------------- PLACE 2 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Jiwani%20Beach).jpg" alt="Jiwani beach" class="place__img">
                <a href="#popup2"><figcaption class="place__caption">Jiwani Beach</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 2 POPUP ----------------------------- --> 
            <div class="popup" id="popup2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Jiwani%20Beach).jpg" alt="jiwani beach Photo" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6373820588633!2d61.7399658145181!3d25.04637724395031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebfb5218d718ea1%3A0x4c12788921d9453f!2sJiwani%20Beach!5e0!3m2!1sen!2s!4v1604178718947!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Jiwani Beach</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Jiwani is a town that is located near the Pakistani border with Iran. Jiwani is a place to be seen especially by those who are interested in observing history more closely. The Jiwani beach is a local vacation hot-spot."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gwadar, Pakistan<br>
                            <b>Driving Distance :</b> 37 mi to the east from Gwadar City<br>
                            <b>Reviews :</b> 4.5 / 5<br>
                            <b>Things to do :</b> Fishing, Sightseeing, Riding<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 3 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(pishukan%20beach).jpg" alt="pishukan beach" class="place__img">
                <a href="#popup3"><figcaption class="place__caption">pishukan beach</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 3 POPUP ----------------------------- --> 
            <div class="popup" id="popup3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(pishukan%20beach).jpg" alt="pishukan beach" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.7669228891773!2d62.099166814521496!3d25.21108153732483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebf06948d9d03cd%3A0x60ec25bbdd1593ce!2sPishukan%20Rd%2C%20Gwadar%2C%20Balochistan%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604178851994!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">pishukan beach</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Pishukan is a village that is located along the Gulf of Oman in the Gwadar District of the Balochistan, Pakistan. The beach is located near the Arabian Sea."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> New Town, Gwadar, Pakistan<br>
                            <b>Things to do :</b> Fishing, Boating, Sight Seeing<br>
                            <b>Driving Distance :</b> 8 hours 51 min from Karachi (661.5 km) via Makran Coastal Highway<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 4 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Ormara%20Beach).jpg" alt="ormara beach" class="place__img">
                <a href="#popup4"><figcaption class="place__caption">ormara beaches</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 4 POPUP ----------------------------- --> 
            <div class="popup" id="popup4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Ormara%20Beach).jpg" alt="ormara beach" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115551.58854991761!2d64.5576381582031!3d25.169911999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb7415dfcbcd3c1%3A0xaa3262c9d1eba687!2sOrmara%20Turtle%20Beaches!5e0!3m2!1sen!2s!4v1604178920476!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">ormara beaches</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Ormara is a town in Gwadar District of Balochistan. The city is full of attractions, one of which are the Ormara beaches. Ormara Coastline of Pakistan is truly one of this country’s hidden gems."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Makran Coastal Region <br>
                            <b>Things to do :</b> Trekking, Camping, Bonfire, Fishing, Boating.<br>
                            <b>Driving Distance :</b> 5 hours 41 min from Karachi (372.1 km) via Makran Coastal Highway<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 5 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Paddi%20Zir).jpg" alt="Paddi zirr" class="place__img">
                <a href="#popup5"><figcaption class="place__caption">Paddi zirr</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 5 POPUP ----------------------------- --> 
            <div class="popup" id="popup5">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Paddi%20Zir).jpg" alt="Paddi zirr" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231137.66876760122!2d61.95348007628938!3d25.15170866217657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebf009cfcdf7dfb%3A0xd2fe657b1a7c0d13!2sPaddi%20Zirr!5e0!3m2!1sen!2s!4v1604178967718!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">paddi zirr</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Gwadar West Bay is a Gulf of Balochistan, also known as Padi Zar or Padi Zarr. It is hosted by fishermen and small boats.."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Paddi Bay, Pishukan City, Gwadar <br>
                            <b>Things to do :</b> Bonfire, Fishing, Boating, Beach Cars<br>
                            <b>Driving Distance :</b> 8 hours 51 min from Karachi (661.5 km) via Makran Coastal Highway<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 6 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Hammerhead).jpg" alt="hammerhead" class="place__img">
                <a href="#popup6"><figcaption class="place__caption">hammerhead</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 6 POPUP ----------------------------- --> 
            <div class="popup" id="popup6">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Hammerhead).jpg" alt="hammerhead" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d231056.11520974754!2d62.18389193006139!3d25.194729570452225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shammerhead%20gwadar!5e0!3m2!1sen!2s!4v1604179010179!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">hammerhead</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The region is named after some species of shark having hammer like heads that lives in the Arabian sea. Hammerhead sharks were among the most vulnerable species in the region, according to the researchers."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> South Western Arabian Sea Coast, Gwadar District, Pakistan.<br><br>
                            <b>Driving Distance :</b> 7 hours 59 min from Karachi (630.6 km) via Makran Coastal Highway<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 7 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Zalzala%20Island).jpg" alt="zalzala island" class="place__img">
                <a href="#popup7"><figcaption class="place__caption">zalzala island</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 7 POPUP ----------------------------- --> 
            <div class="popup" id="popup7">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Zalzala%20Island).jpg" alt="zalzala island" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.687043870744!2d62.264018164520735!3d25.18004298857652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebf1cd39c7c1a2b%3A0x26f78d45bff60d34!2sZalzala%20Island!5e0!3m2!1sen!2s!4v1604179110604!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">zalzala island</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Zalzala Koh or Zalzala Jazeera was a small island off the coast of the port city of Gwadar, Balochistan, Pakistan which appeared on 24 September 2013 following an earthquake."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> Gwadar Port City, Pakistan<br>
                            <b>Things to do: </b> Sight seeing <br><br>
                            <b>Driving Distance :</b> 32 mins from Gwadar (18.9 km) via Marine Dr and ‫Marine Drive<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 8 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Makran%20Coastal%20Highway).jpg" alt="makran coastal highway" class="place__img">
                <a href="#popup8"><figcaption class="place__caption">makran coastal highway</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 8 POPUP ----------------------------- --> 
            <div class="popup" id="popup8">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Makran%20Coastal%20Highway).jpg" alt="makran coastal highway" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.850016249651!2d66.60625861453083!3d25.676266118399155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb458ad03a05d2f%3A0x324a7528a5b1f737!2sMakran%20Coastal%20Highway%20Toll%20Plaza%2C%20Makran%20Coastal%20Hwy%2C%20Las%20Bela%2C%20Balochistan%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604179164760!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">makran coastal hwy</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Running along the Arabian Sea coastline, Makran Coastal Highway is one of the most scenic coastal drives in the world. The road is 583km long and links the N25 road and the Iran border."
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 5 hours 25 mins from Gwadar (411.7 km) via Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Trekking<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 9 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(KundMalir%20Beach).jpg" alt="Kund Malir Beach" class="place__img">
                <a href="#popup9"><figcaption class="place__caption">Kund Malir Beach</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 9 POPUP ----------------------------- --> 
            <div class="popup" id="popup9">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(KundMalir%20Beach).jpg" alt="Kund Malir Beach" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.3921937796767!2d65.45989981452504!3d25.391679330014863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6eaa69c0fe025%3A0x2dc77f62dcb0d910!2sKund%20Malir%20Beach%20Resort!5e0!3m2!1sen!2s!4v1604179252486!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Kund Malir Beach</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Kund Malir is a beach in Balochistan located in Hingol National Park, about 150 kms from Zero-Point on Makran Coastal hwy. The drive between Kund Malir and Ormara is considered to be scenic."
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 3 hours 16 mins from Gwadar (239.6 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Fishing, Boating, Sight seeing, Bonfire, Beach Cars<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 10 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Buzzi%20Pass).jpg" alt="Buzzi Pass" class="place__img">
                <a href="#popup10"><figcaption class="place__caption">Buzzi Pass</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 10 POPUP ----------------------------- --> 
            <div class="popup" id="popup10">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Buzzi%20Pass).jpg" alt="Buzzi Pass" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14409.86169891387!2d65.26124522308378!3d25.45612981497031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6e5eeee4e9c99%3A0x3df981593981e8bd!2sBuzi%20Pass!5e0!3m2!1sen!2s!4v1604179287804!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Buzzi Pass</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Buzzi Pass is the highest point on Makran Coastal Highway. Cruising through mountains on both sides of the road, it is a surreal experience!"
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Buzzi Pass at Kund Malir, Makran Coastal Highway<br>
                            <b>Things to do: </b> Sight seeing, Camping<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 11 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Hinglaj%20Mata%20Mandir).jpg" alt="Hinglaj Mata Mandir" class="place__img">
                <a href="#popup11"><figcaption class="place__caption">Hinglaj Mata Mandir</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 11 POPUP ----------------------------- --> 
            <div class="popup" id="popup11">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Hinglaj%20Mata%20Mandir).jpg" alt="Hinglaj Mata Mandir" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.714838200787!2d65.51576871452748!3d25.514555225013968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6930e974326d9%3A0x135f6a1660abb3f5!2sShaktipeeth%20Shri%20Hinglaj%20Mata%20Temple%2C%20Baluchistan%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604179338212!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small">Hinglaj Mata Mandir</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hinglaj Mata Mandir is a famous ‘shakti peetha’ of Goddess Sati. The cave temple is situated on the Hingol River Banks in Hinglaj where hindus comes for pilgrimage every year."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Hingol National Park, Road، Asha Pura, Las Bela, Balochistan<br>
                            <b>Driving Distance :</b> 3 hour 29 mins (250 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Meditation<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 12 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Hingol%20National%20Park).jpg" alt="Hingol National Park" class="place__img">
                <a href="#popup12"><figcaption class="place__caption">Hingol National Park</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 12 POPUP ----------------------------- --> 
            <div class="popup" id="popup12">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Hingol%20National%20Park).jpg" alt="Hingol National Park" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.7106659127376!2d65.51786661452755!3d25.51469432500829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6f8234999a189%3A0xa3e223a3f7b71ae6!2sHingol%20National%20Park!5e0!3m2!1sen!2s!4v1604179374548!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-medium-2">Hingol National Park</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Hingol national park is a magical wonderful place that more people should be aware of. It contains many attractions i.e. Hingol river, Mata Mandir, Princess of Hope, Sphinx, Mud Volcanoes."
                        </h3>
                        <p class="popup__text">
                            <b>Location :</b> Hingol National Park, Las Bela, Balochistan<br>
                            <b>Driving Distance :</b> 3 hour 26 mins (243.3 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 13 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Princess%20of%20Hope).jpg" alt="Princess of Hope" class="place__img">
                <a href="#popup13"><figcaption class="place__caption">Princess of Hope</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 13 POPUP ----------------------------- --> 
            <div class="popup" id="popup13">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Princess%20of%20Hope).jpg" alt="Princess of Hope" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.194291490568!2d65.29806661452592!3d25.431767128385648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6e8bae35a46e1%3A0x5e9f202564747d9!2sPrincess%20of%20Hope!5e0!3m2!1sen!2s!4v1604179407117!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Princess of Hope</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Heavy rainfall and winds blowing from the ocean have shaped the mountainous rock into beautiful lady-like figure, called Princess of Hope, named by Angelina Jolie, depicting a princess standing tall, looking for something, probably "hope"."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> N-10, Hingol National Park, Las Bela, Balochistan<br>
                            <b>Driving Distance :</b> 3 hour 34 mins (264.0 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 14 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(The%20Sphinx).jpg" alt="The Sphinx" class="place__img">
                <a href="#popup14"><figcaption class="place__caption">The Sphinx</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 14 POPUP ----------------------------- --> 
            <div class="popup" id="popup14">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(The%20Sphinx).jpg" alt="The Sphinx" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14505024.358062318!2d39.3018133335901!3d27.429828669315445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb6e8bbf9e24ec5%3A0x7cfc3b1d7f768bea!2sGreat%20Sphinx!5e0!3m2!1sen!2s!4v1604179464258!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">The Sphinx</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"The Balochistan Sphinx is a natural rock formation in Lasbela in Balochistan, Pakistan that resembles a sphinx of Egypt."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> N-10, Hingol National Park, Las Bela, Balochistan<br>
                            <b>Driving Distance :</b> 3 hour 34 mins (264.0 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Photography<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- PLACE 15 ----------------------------- --> 
            <figure class="place">
                <img src="../../content/Balochistan/Gwadar-Balochistan(Chandragup%20Mud%20Volcano).jpg" alt="Baba Chandragup Volcanoes" class="place__img">
                <a href="#popup15"><figcaption class="place__caption">Baba Chandragup Volcanoes</figcaption></a>
            </figure>
            <!-- ---------------------------- PLACE 15 POPUP ----------------------------- --> 
            <div class="popup" id="popup15">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Gwadar-Balochistan(Chandragup%20Mud%20Volcano).jpg" alt="Baba Chandragup Volcanoes" class="popup__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14410.659757429632!2d65.85041192308158!3d25.449463116092414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb41ffc4aee6725%3A0x71b0104d0f28f3c0!2sChandragup!5e0!3m2!1sen!2s!4v1604179503963!5m2!1sen!2s" width="400" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-small"> Chandragup Volcano</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Chandragup is an active mud volcano located in Hingol National Park. The volcano is considered holy by Hindus and is an important stop for pilgrims on their way to the shrine of Shri Hinglaj Mata temple."
                        </h3>
                        <p class="popup__text">
                            <b>Address :</b> N-10, Hingol National Park, Las Bela, Balochistan<br>
                            <b>Driving Distance :</b> 3 hour 34 mins (264.0 km) via Regional Cooperation for Development Hwy/N-25 and Makran Coastal Hwy/N-10<br>
                            <b>Things to do: </b> Sight seeing, Photography, Worship<br>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="hotels">
             <legend>&nbsp;&nbsp;HOTELS : &nbsp;</legend>
            <!-- ---------------------------- HOTEL 1 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/GwadarHotel1.webp" alt="hotel 1" class="hotel__img">
                <a href="#hotel1"><figcaption class="hotel__caption">Zaver Pearl Continental Hotel</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 1 POPUP ----------------------------- --> 
            <div class="popup" id="hotel1">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel1a.webp" alt="hotel 2" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel1b.webp" alt="hotel 1" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Zaver PC Hotel</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"5-star hotel | Zaver Pearl Continental Hotel, Koh-e-Batil, Gwadar, Balochistan | 91200(086) 4212223" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/jn5cgscFFqqAEKoj6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 4 km from Gwadar Sea Port and 18 km from Gwadar International Airport<br>
                            <b>Reviews :</b> 4.3 / 5<br>
                            <b>Starting From :</b> 21,775 PKR per room<br>
                            <b>Services :</b><br>✔ 5 star hotel<br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC <br>✔ Luxurious
                        </p>
                    </div>
                </div>
            </div>  
            <!-- ---------------------------- HOTEL 2 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/GwadarHotel2.webp" alt="hotel 2" class="hotel__img">
                <a href="#hotel2"><figcaption class="hotel__caption">Sadaf Resort</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 2 POPUP ----------------------------- --> 
            <div class="popup" id="hotel2">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel2a.webp" alt="hotel 2" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel2b.webp" alt="hotel 2" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">sadaf resort</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Club Street, Marine Dr, Nagman Ward Gwadar Old City, Gwadar, Balochistan | (086) 4211457" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/LuESAnBTarDoVygg9" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 5 min drive from West Bay Beach and 19 min from Gwadar International Airport<br>
                            <b>Reviews :</b> 4.1 / 5<br>
                            <b>Starting From :</b> 9,076 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ Fully AC <br>✔ 24 hrs Front Desk Services
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 3 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/GwadarHotel3.webp" alt="hotel 3" class="hotel__img">
                <a href="#hotel3"><figcaption class="hotel__caption">Sadaf Resort (Old)</figcaption></a>
            </figure> 
            <!-- ---------------------------- HOTEL 3 POPUP ----------------------------- --> 
            <div class="popup" id="hotel3">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel3a.webp" alt="hotel 3" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel3b.webp" alt="hotel 3" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">sadaf resort (Old)</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Nagman Ward Gwadar Old City, Gwadar, Balochistan | (086) 4211457" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/fB4uBk2FMTfYkQze7" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 5 min drive from West Bay Beach and 19 min from Gwadar International Airport<br>
                            <b>Reviews :</b> 4.0 / 5<br>
                            <b>Starting From :</b> 7,500 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms <br>✔ 24 hrs Front Desk Services
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---------------------------- HOTEL 4 ----------------------------- --> 
            <figure class="hotel">
                <img src="../../content/Balochistan/Hotels/GwadarHotel4.webp" alt="hotel 4" class="hotel__img">
                <a href="#hotel4"><figcaption class="hotel__caption">Sahil Guest House</figcaption></a>
            </figure>
            <!-- ---------------------------- HOTEL 4 POPUP ----------------------------- --> 
            <div class="popup" id="hotel4">
                <div class="popup__content">
                    <div class="popup__left">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel4a.webp" alt="hotel 4" class="popup__img">
                        <img src="../../content/Balochistan/Hotels/GwadarHotel4b.webp" alt="hotel 4" class="popup__img popup__img--2">
                    </div>
                    <div class="popup__right">
                        <a href="#section-tourbookings" class="popup__close">&times;</a>
                        <h2 class="heading-secondary u-margin-bottom-small u-margin-top-v-small">Sahil Guest House</h2>
                        <h3 class="heading-tertiary u-margin-bottom-small">"Syed Hashmi Rd, Gwadar Old City, Gwadar, Balochistan | (086) 4210815" &emsp;&rarr;&emsp; <a style="color:white; background-color: #7f28b7; text-decoration:none;" href="https://goo.gl/maps/Hh3UErjBiTbQgE4m6" target="_blank">&nbsp;See Map&nbsp;</a>
                        </h3>
                        <p class="popup__text">
                            <b>Driving Distance :</b> 8 min drive from West Bay Beach and 20 min from Gwadar International Airport<br>
                            <b>Reviews :</b> 3.9 / 5<br>
                            <b>Starting From :</b> 5,400 PKR per room<br>
                            <b>Services :</b><br>✔ Free Parking<br>✔ Free Breakfast<br>✔ Free Wifi<br>✔ AC Rooms <br>✔ 24 hrs Front Desk Services
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