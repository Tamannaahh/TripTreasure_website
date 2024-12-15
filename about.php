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
                    <h1>About TripTreasure</h1>
                    <p>Unlock Your Adventure, Discover Hidden Gems, and Treasure Every Moment. Your Journey Begins with TripTreasure.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- about section -->
        <section id = "about" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">things to know about us</span>
                    <h2 class = "lg-title">About TripTreasure</h2>
                </div>

                <div class = "about-row">
                    <div class = "about-left my-2">
                        <img src = "images/about-img.jpg" alt = "about img">
                    </div>
                    <div class = "about-right">
                        <h2>TripTreasure: Years of Experience</h2>
                        <p class = "text">At TripTreasure, we are passionate about helping travelers discover the world in unique and meaningful ways. Whether you're planning a serene getaway to a secluded beach or an exhilarating adventure in a bustling city, our mission is to provide personalized travel experiences tailored to your needs. We specialize in uncovering hidden gems that make your journey unforgettable, ensuring every moment is a treasure to be cherished. From handpicked destinations to insider tips, we go the extra mile to ensure your travels are as seamless and enjoyable as possible.</p>
                        <p class = "text">Founded by travel enthusiasts, TripTreasure understands the importance of a well-crafted itinerary. That's why we are dedicated to helping you unlock new adventures, create lasting memories, and experience the joy of exploring new places. With our team of experts, you can rest assured that your trip will be filled with extraordinary moments that reflect your individual tastes and preferences. Let TripTreasure be your guide as you embark on your next great adventure.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- facts section -->
        <section id = "facts" class = "py-4 flex">
            <div class = "container">
                <div class = 'title-wrap'>
                    <span class = "sm-title">know some facts about our agency</span>
                    <h2 class = "lg-title">fun facts</h2>
                </div>

                <div class = "facts-row">
                    <div class = "facts-item">
                        <span class = "fas fa-camera-retro facts-icon"></span>
                        <div class = "facts-info">
                            <strong>1220</strong>
                            <p class = "text">photos taken</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-umbrella-beach  facts-icon"></span>
                        <div class = "facts-info">
                            <strong>450</strong>
                            <p class = "text">beaches visited</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-mountain facts-icon"></span>
                        <div class = "facts-info">
                            <strong>84</strong>
                            <p class = "text">mountains climbed</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-ship facts-icon"></span>
                        <div class = "facts-info">
                            <strong>120</strong>
                            <p class = "text">cruises organized</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of facts section -->
        

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
                        <!-- <input type = "submit" class = "btn" value = "Subscribe"> -->
                        <h3> triptreasure123@gmail.com </h3>
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