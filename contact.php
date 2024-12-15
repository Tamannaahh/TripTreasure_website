<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TripTreasure</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.php" class = "site-brand">
                    Trip<span>Treasure</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.php" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "blog/blog.php" class = "nav-link">Blog</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about.php" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.php" class = "nav-link">Contact</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "crud/index.php" class = "nav-link">AdminPanel</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "login.php" button class="btn btn-primary">LOGIN</button></a>    
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Connect with TripTreasure - Your Journey Awaits!</h1>
                    <p>Unlock Your Adventure, Discover Hidden Gems, and Treasure Every Moment. Your Journey Begins with TripTreasure.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- contact section -->
        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Get in touch with us</span>
                    <h2 class = "lg-title">contact us</h2>
                </div>

                <div class = "contact-row">
                    <div class = "contact-left">
                    <form action="mailto:tamannahh10@outlook.com" method="post" enctype="text/plain">

                            <input type = "text" class = "form-control" placeholder="Your name">
                            <input type = "email" class = "form-control" placeholder="Your email">
                            <textarea rows = "4" class = "form-control" placeholder="Your message" style = "resize: none;"></textarea>
                            <input type = "submit" class = "btn" value = "Send message">
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Phone</span>
                                <p class = "text">+91 98765-43210</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Address</span>
                                <p class = "text">Surat-Gujarat</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Message</span>
                                <p class = "text">triptreasure123@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
        
        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Trip<span>Treasure</span>
                    </a>
                    <p class = "text">Discover a World Beyond Imagination with TripTreasure. Immerse Yourself in Unforgettable Adventures, Explore Hidden Gems, and Make Every Moment Count. Your Journey Begins Here, Where Dreams Meet Reality and Every Experience is Crafted Just for You.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Seoul, South Korea</a></li>
                        <li><a href = "#">Bali, Indonesia</a></li>
                        <li><a href = "#">Machu Picchu, Peru</a></li>
                        <li><a href = "#">Santorini, Europe</a></li>
                        <li><a href = "#">Mediterranean, Europe</a></li>
                        <li><a href = "#">Engelberg, Switzerland</a></li>
                        <li><a href = "#">Goa, India</a></li>
                        <li><a href = "#">Venice, Italy</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <!-- <input type = "email" placeholder="Enter Email" class = "form-control"> -->
                        <h3> triptreasure123@gmail.com </h3>
                        <!-- <input type = "submit" class = "btn" value = "Subscribe"> -->
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>