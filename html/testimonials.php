<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PakTours | Customer Testimonials</title>
        
        <!-- ---------------------------- GOOGLE FONTS ---------------------------- -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <!-- ----------------------------- STYLESHEET ----------------------------- -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php#about">About</a></li>
                    <li><a href="../index.php#features" id="f">Features</a></li>
                    <li><a href="../index.php#provinces">Discover Provinces</a></li>
                    <li><a href="../index.php#bookings">Bookings</a></li>
                    <li><a href="../index.php#testimonials">Testimonials</a></li>
                    <li><a href="../index.php#form">Contact us</a></li>
                </ul>
            </nav>
            <div class="navigation__back"></div>
        </div>

        <!-- ------------------------- HEADINGS & LOGO -------------------------- -->
        <header class="header header--2">
            <div class="header__logo-box">
                <img src="../content/home/paktours%20logo.png" alt="PakTours Logo" class="header__logo">
            </div>
            <h2 class="heading--3">cutomer testimonials</h2>
            <div class="animated-line animated-line-story"></div>
        </header>        

        <section class="section-stories" id="testimonials">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="../content/home/video.mp4" type="video/mp4">
                        <source src="../content/home/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div>

           
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="http://pakrtidata.org/wp-content/uploads/2019/02/Hisham-300x300.jpg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">Hisham sajid</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="../content/home/person2.jpeg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">verda dewani</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">Wow my travel life is completetly different now</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="../content/home/person4.jpeg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">munzah shah</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I must say Paktours is one the the best tour guides on the internet!</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="../content/home/person3.jpeg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">javeria khalid memon</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family. All thanks to PakTours</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="../content/home/person5.jpeg" alt="person on a tour" class="story__image">
                        <figcaption class="story__caption">aimen faiz</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">best digital tour guide in town I must say!</h3>
                        <p>
                            Lorem ipsm skjdfj jim Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum inhujn kinjhsg thsam ve l ki  pimni Earum vel neque assumenda culpa vitae, delectus alias consequuntur natus maxime! Voluptates dolorum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="u-margin-top-small btnstory">
                <a href="../index.php#testimonials" class="btn-text btn-go-back u-margin-top-medium">&larr; Go Back</a>
            </div>
            </section>
    

    </body>
</html>