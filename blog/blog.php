<?php
include "db_conn.php"; // Include your database connection

// Fetch all blog entries from the database
$sql = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($conn, $sql);

?>

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
    <link rel="stylesheet" href="../font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/utility.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="container flex">
            <a href="index.php" class="site-brand">
                Trip<span>Treasure</span>
            </a>

            <button type="button" id="navbar-show-btn" class="flex">
                <i class="fas fa-bars"></i>
            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="../about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="../crud/index.php" class="nav-link">AdminPanel</a></li>
                    <li class="nav-item"><a href="../login.php" class="btn btn-primary">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- header -->
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Share Your Blog with TripTreasure!</h1>
                <p>Unlock Your Adventure, Discover Hidden Gems, and Treasure Every Moment. Your Journey Begins with TripTreasure.</p>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- blog section -->
    <section id="blog" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="sm-title">read these blog for information</h2>
                <h3 class="lg-title">recent blog</h3>
                <!-- Add New Blog Button -->
                <a href="add-blog.php" class="btn btn-primary" style="float:right; margin-top: 10px;">Add New Blog</a>
            </div>


            <div class = "blog-row">
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-1.jpg" alt = "blog">
                            <span class = "blog-date">Aug 28, 2024</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Maldives | Tamanna Parmar</span>
                            <a href = "#">An amazing experience with stunning views, luxurious villas, and top-notch service—highly recommend!</a>
                            <p class = "text">Sun Siyam Iru Veli is a luxurious Maldivian resort offering stunning overwater and beachfront villas, each with a private pool. Known for its diverse dining options, including fresh seafood and international cuisines, the resort also provides exceptional water activities like snorkeling and diving.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-2.jpg" alt = "blog">
                            <span class = "blog-date">July 18, 2024</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Delhi | Manasvi Mehta</span>
                            <a href = "#">Maison Premiere offers an elegant blend of fresh oysters, classic cocktails, and a charming ambiance.</a>
                            <p class = "text">Maison Premiere in Delhi is a chic and stylish café known for its elegant Parisian-inspired ambiance and thoughtfully crafted menu. Located in a trendy neighborhood, it offers a cozy atmosphere with a blend of modern and classic decor, making it an ideal spot for both casual outings and special occasions.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-3.jpg" alt = "blog">
                            <span class = "blog-date">June 10, 2024</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Manali | Hasti Gadhiya</span>
                            <a href = "#">Manali's breathtaking views and vibrant culture made for an unforgettable escape!</a>
                            <p class = "text">Manali is a picturesque hill station nestled in the Himalayas, renowned for its stunning landscapes, lush valleys, and serene atmosphere. It's a popular destination for adventure enthusiasts and nature lovers alike, offering a range of activities from skiing and paragliding to trekking and exploring the vibrant local culture.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-4.jpg" alt = "blog">
                            <span class = "blog-date">Feb 4, 2024</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Rome- Italy | Yash Parmar</span>
                            <a href = "#">Rome's enchanting blend of history, art, and cuisine made our trip truly unforgettable!</a>
                            <p class = "text">Rome captivates with its timeless charm, blending ancient history with modern vibrancy. From the awe-inspiring Colosseum and Vatican City to its lively piazzas and delicious cuisine, the city's rich tapestry of art, culture, and history offers a mesmerizing experience for every visitor.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-5.jpg" alt = "blog">
                            <span class = "blog-date">Dec 11, 2023</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Dubai | Anmol Parmar</span>
                            <a href = "#">Dubai's blend of luxury, innovation, and tradition made for an extraordinary adventure!</a>
                            <p class = "text">Dubai dazzles with its futuristic skyline, luxury shopping, and vibrant nightlife. From the iconic Burj Khalifa to the stunning Palm Jumeirah and bustling souks, the city's blend of modernity and tradition offers an exhilarating and opulent travel experience.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-6.jpg" alt = "blog">
                            <span class = "blog-date">Nov 12, 2023</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Bali | Arti Tailor</span>
                            <a href = "#">Bali's stunning landscapes and rich culture create a truly magical escape.</a>
                            <p class = "text">Bali enchants with its lush landscapes, serene beaches, and rich cultural heritage. The island's vibrant temples, lush rice terraces, and lively markets, paired with its welcoming spirit and stunning sunsets, offer a perfect blend of relaxation and adventure for every traveler.</p>
                        </div>
                    </div>

                    <!-- <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-7.jpg" alt = "blog">
                            <span class = "blog-date">july 31, 2023</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Goa-India | Khushi Patel</span>
                            <a href = "#"> Goa's vibrant beaches, lively nightlife, and laid-back vibe made for an unforgettable getaway!</a>
                            <p class = "text">Goa is a tropical paradise in India, famous for its golden beaches, vibrant nightlife, and rich Portuguese heritage. The laid-back atmosphere, combined with a mix of cultures, delicious seafood, and stunning sunsets, makes it a perfect destination for both relaxation and adventure.</p>
                        </div>
                    </div> -->

                    <!-- <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "../images/blog-8.jpg" alt = "blog">
                            <span class = "blog-date">Sep 2, 2023</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>Seoul | Nico Robbin</span>
                            <a href = "#">Seoul's vibrant energy and rich culture made our visit truly unforgettable!</a>
                            <p class = "text">Seoul is a captivating city where ancient traditions meet modern innovation. The bustling streets are filled with a blend of historic palaces, cutting-edge skyscrapers, and vibrant markets. The city's rich culinary scene, friendly locals, and seamless blend of past and present create a unique and unforgettable experience for every visitor.</p>
                        </div>
                    </div> -->
                    
                </div>
           



        <div class="blog-row">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="blog-item my-2 shadow">
                    <div class="blog-item-top">
                        <img src="../images/<?php echo $row['image']; ?>" alt="blog">
                            <span class="blog-date"><?php echo date("M d, Y", strtotime($row['date'])); ?></span>
                    </div>
                <div class="blog-item-bottom">
                    <span><?php echo $row['title']; ?> | <?php echo $row['author']; ?></span>
                    <a href="#"><?php echo $row['title']; ?></a>
                        <p class="text"><?php echo $row['content']; ?></p>
                
                        
                    </form>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    </section>
    <!-- end of blog section -->

    <!-- footer -->
    <footer class="py-4">
        <div class="container footer-row">
            <div class="footer-item">
                <a href="index.php" class="site-brand">
                    Trip<span>Treasure</span>
                </a>
                <p class="text">Discover a World Beyond Imagination with TripTreasure. Immerse Yourself in Unforgettable Adventures, Explore Hidden Gems, and Make Every Moment Count. Your Journey Begins Here, Where Dreams Meet Reality and Every Experience is Crafted Just for You.</p>
            </div>

            <div class="footer-item">
                <h2>Follow us on: </h2>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h2>Popular Places:</h2>
                <ul>
                    <li><a href="#">Seoul, South Korea</a></li>
                    <li><a href="#">Bali, Indonesia</a></li>
                    <li><a href="#">Machu Picchu, Peru</a></li>
                    <li><a href="#">Santorini, Europe</a></li>
                    <li><a href="#">Mediterranean, Europe</a></li>
                    <li><a href="#">Engelberg, Switzerland</a></li>
                    <li><a href="#">Goa, India</a></li>
                    <li><a href="#">Venice, Italy</a></li>
                </ul>
            </div>

            <div class="subscribe-form footer-item">
                <h2>Subscribe for Newsletter!</h2>
                <form class="flex">
                    <h3>triptreasure123@gmail.com</h3>
                </form>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!-- js -->
    <script src="../js/script.js"></script>
</body>
</html>
