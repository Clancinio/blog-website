<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adventure Blog</title>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Calistoga|Lato&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/3877972586.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAV BAR -->
    <?php include("app/includes/nav.php"); ?>

    <div class="hero">
        <div class="hero-blurb">
            <h1 class="logo-text">Share Your Adventure</h1>
            <p>Share your experiences with others. Adventure isn’t hanging off a rope on the side of a mountain or living among lions. Adventure is an attitude to experience everyday things.</p>
        </div>

    </div>
    <!-- END Hero-->

    <!-- Page Wrapper-->
    <div class="wrapper">
        <!-- Carousel -->
        <div class="carousel">
            <h1 class="carousel-title">Trending Articles</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/hiking.jpg" alt="" class="post-image">
                    <div class="post-info">
                        <h4><a href="single.html">The beautiful sunset trail</a></h4>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/hiking1.jpg" alt="" class="post-image">
                    <div class="post-info">
                        <h4><a href="single.html">The beautiful sunset trail</a></h4>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/hiking3.jpg" alt="" class="post-image">
                    <div class="post-info">
                        <h4><a href="single.html">The beautiful sunset trail</a></h4>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/hiking1.jpg" alt="" class="post-image">
                    <div class="post-info">
                        <h4><a href="single.html">The beautiful sunset trail</a></h4>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/hiking3.jpg" alt="" class="post-image">
                    <div class="post-info">
                        <h4><a href="single.html">The beautiful sunset trail</a></h4>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>

                    </div>
                </div>

            </div>

        </div>
        <!-- // End Carousel-->

        <!-- Content -->
        <div class="content">

            <!-- Recent Posts-->
            <div class="recent-posts">
                <h1 class="recent-posts-title">Recent Posts</h1>
                <!-- Posts-->
                <div class="post">
                    <img src="images/hiking3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h1><a href="#">This is the post title</a></h1>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>
                        <p>This are some random post words. I am making also my blog but with SpringBoot, nice work man. It was helpful, need just some responsive design. In my case I just put button float to right.</p>
                        <div class="post-btn-container">
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <img src="images/hiking3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h1><a href="#">This is the post title</a></h1>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>
                        <p>This are some random post words. I am making also my blog but with SpringBoot, nice work man. It was helpful, need just some responsive design. In my case I just put button float to right.</p>
                        <div class="post-btn-container">
                            <a href="#" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/hiking3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h1><a href="#">This is the post title</a></h1>
                        <i class="far fa-user"></i><span>Dean Clancy</span> &nbsp;
                        <i class="far fa-calendar"></i><span>Dec 01, 2019</span>
                        <p>This are some random post words. I am making also my blog but with SpringBoot, nice work man. It was helpful, need just some responsive design. In my case I just put button float to right.</p>
                        <div class="post-btn-container">
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Side Bar-->
            <div class="side-bar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="inde.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Seacrch...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Back Country</a></li>
                        <li><a href="#">Short Hikes</a></li>
                        <li><a href="#">Day Hikes</a></li>
                        <li><a href="#">Mountain Biking</a></li>
                        <li><a href="#">Multi Day Hikes</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side bar//-->
        </div>

    </div>
    <!-- // End Page Wrapper-->

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Adventure</span> Blog</h1>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's
                    De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; 123-456-7891</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; info@adventure.ca</span>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>

                <ul>
                    <a href="">
                        <li>Events</li>
                    </a>
                    <a href="">
                        <li>Team</li>
                    </a>
                    <a href="">
                        <li>About</li>
                    </a>
                    <a href="">
                        <li>Get involved</li>
                    </a>
                    <a href="">
                        <li>Contests</li>
                    </a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contacts Us</h2>
                <form action="index.html" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email adress...">
                    <textarea name="message" id="" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big">Send <i class="fas fa-envelope"></i></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Dean Clancy 2019</p>
        </div>
    </footer>
    <!-- // End Footer -->

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>