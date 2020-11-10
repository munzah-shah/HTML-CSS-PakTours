<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PakTours | About</title>
        
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
            <h2 class="heading--2">about us</h2>
            <div class="animated-line animated-line-about"></div>
        </header>        
        <div class="about-us">
            <p class="para1">
               <b><i>Hello! we are PakTours. Your very own digital tour guide that helps you find Pakistan's famous visiting attractions within just one click! We know you want some time off from your busy hectic schedule and go on vacations. So let us take care of where you want to go, we are really good at it, we promise!</i></b>
            </p>
            <br>
            <p class="para2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique assumenda minima, repellat praesentium obcaecati, adipisci rerum pariatur modi, aliquid amet laudantium molestias et voluptatum facere eligendi culpa. Optio, ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique assumenda minima, repellat praesentium obcaecati, adipisci rerum pariatur modi, aliquid amet laudantium molestias et voluptatum facere eligend.
            </p>
               
                <a href="../index.php#about" class="btn-text btn-go-back u-margin-top-medium">&larr; Go Back</a>
        </div>

    </body>
</html>