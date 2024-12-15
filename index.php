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

        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
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
                        
                    
 <!-- Profile Icon with Dropdown -->

<!-- <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://th.bing.com/th/id/OIP.IeljPMveO9YtvN6O6cQ7VwHaHa?w=561&h=561&rs=1&pid=ImgDetMain" alt="Profile Icon" class="profile-icon" style="width: 40px; height: 40px; border-radius: 50%;">
    </a>
    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
         if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true): ?>
            <li><a class="dropdown-item" href="profile.php">Profile: <strong> echo htmlspecialchars($_SESSION['username']); ?></strong></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        else:
            <li><a class="dropdown-item" href="login.php">Login</a></li>
         endif; 
    </ul>
</li> -->


                    </ul>
            </div>
        </nav>
        
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Unlock Your Next Adventure</h1>
                    <p>Unlock Your Next Adventure with TripTreasure. Discover hidden gems and create unforgettable memories.</p>
                </div>
                <div class = "header-form">
                    <h2>TripTreasure's Travel locations:</h2>
                    <form action = "destination.php" class = "flex" method="get" onsubmit="handleSearch(event)">
                        
                        <select class="form-control custom-dropdown">
                            <option value="" disabled selected>View TripTreasure's Destination</option>
                            <option value="Vanuatu">Himachal Pradesh</option>
                            <option value="South Korea">Manali-Kathkuni Home</option>
                            <option value="Indonesia">Naldera-Rajasthan</option>
                            <option value="Peru">Curtorim</option>
                            <option value="Europe">Leh-Ladakh</option>
                            <option value="Europe">Kashmir</option>
                            <option value="Switzerland">Andaman</option>
                            <option value="India">Kerala</option>
                            <option value="Italy">Singapore</option>
                            <option value="India">Dubai</option>
                            <option value="India">Maldives</option>
                            <option value="India">Thailand</option>
                        </select>                        
                        
                        <!-- <input type="date" class = "form-control" placeholder="Date"> -->
                        <!-- <input type="number" class = "form-control" placeholder="Price (INR)"> -->
                        <a href = "packages.php" input type="submit" class = "btn" value = "Search">Explore Our Packages</a>

                    </form>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-reo-de-janeiro-brazil.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Reo De Janeiro, Brazil
                            </span>
                            <div>
                                <p class = "text">Rio de Janeiro, Brazil, is famous for its stunning beaches and the iconic Christ the Redeemer statue. The city is vibrant and full of life, especially during Carnival.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-north-bondi-australia.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                North Bondi, Australia
                            </span>
                            <div>
                                <p class = "text">North Bondi, Australia, is a laid-back coastal suburb known for its beautiful beach and <br> relaxed atmosphere. It's a popular spot for surfers and locals looking to enjoy the ocean.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-berlin-germany.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Berlin, Germany
                            </span>
                            <div>
                                <p class = "text">Berlin, Germany, is a vibrant city rich in history and culture, famous for its dynamic art <br> scene and iconic landmarks like the Berlin Wall.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-khwaeng-wat-arun-thailand.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Khwaeng wat arun, thailand
                            </span>
                            <div>
                                <p class = "text">Khwaeng Wat Arun, Thailand, is home to the stunning Temple of Dawn, a riverside landmark renowned for its striking spires and intricate porcelain decoration.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-rome-italy.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Rome, Italy
                            </span>
                            <div>
                                <p class = "text">Rome, Italy, is a city steeped in history, where ancient ruins like the Colosseum and the <br> Roman Forum stand alongside Renaissance art and vibrant modern culture.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-fuvahmulah-maldives.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                fuvahmulah, maldives
                            </span>
                            <div>
                                <p class = "text">Fuvahmulah, Maldives, is a unique atoll known for its stunning beaches, rich marine life, and distinct one-island structure that sets it apart from the rest of the archipelago.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotel</h3>
                        <p class = "text">A luxurious hotel offers unparalleled comfort and opulence, combining exquisite design with world-class amenities for an indulgent experience. Personalized service and stunning surroundings elevate the stay to a truly memorable retreat.</p>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Trave Guide</h3>
                        <p class = "text">A travel guide provides essential tips, recommendations, and insights for exploring a destination, helping travelers make informed decisions and experience the best a location has to offer. From must-see attractions to local customs, it serves as a valuable companion for any journey.</p>
                        <a href = "login.php" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-money-bill"></i>
                        </span>
                        <h3>Suitable Price</h3>
                        <p class = "text">A suitable price offers good value for money, balancing quality and affordability to meet the needs and expectations of the buyer.Finding a suitable price ensures that you get the best possible deal without compromising on the essential features or services.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">A trip to Brazil offers an unforgettable blend of vibrant culture, stunning landscapes, and rich history. From the lively rhythms of Rio de Janeiro's Carnival to the awe-inspiring Amazon Rainforest, Brazil is a feast for the senses.</p>
                        <div class = "test-item-info">
                            <img src = "images/review3.png" alt = "testimonial">
                            <div>
                                <h3>Tamanna Parmar</h3>
                                <p class = "text">Trip to Brazil</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">A trip to the Maldives promises idyllic overwater bungalows, crystal-clear turquoise waters, and pristine white-sand beaches, perfect for a luxurious escape and vibrant marine life encounters.</p>
                        <div class = "test-item-info">
                            <img src = "images/review2.png" alt = "testimonial">
                            <div>
                                <h3>Manasvi Mehta</h3>
                                <p class = "text">Trip to Maldives</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">A trip to Thailand offers a vibrant mix of stunning beaches, rich cultural experiences, bustling markets, and exquisite cuisine, making it a captivating destination for adventure and relaxation.</p>
                        <div class = "test-item-info">
                            <img src = "images/test-3.jpg" alt = "testimonial">
                            <div>
                                <h3>Hasti Gadhiya</h3>
                                <p class = "text">Trip to Thailand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "videos/video-section.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

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
                        <h3> triptreasure123@gmail.com </h3>
                        <!-- <a href = "LogIn.html" input type = "submit"  class = "btn" value = "Subscribe"></a> -->
                        <!-- <a href = "LogIn.html" class = "btn">LogIn</a> -->
                        
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>