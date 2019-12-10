<?php include("path.php") ?>
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
    <?php include(ROOT_PATH . "/app/includes/nav.php"); ?>

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

    <!-- FOOTER-->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>