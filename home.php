<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];

} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheers Bar - home page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <!-- Slider section start -->
<div class="home">
    <div class="slider-container">
        <div class="silder">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>we pride ourselfs on <br> exceptional flavours</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image\slider.jpg">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>cold treats are my kind <br> of comfort drink</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image\slider0.jpg">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="fa-solid fa-arrow-right"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="fa-solid fa-arrow-left"></i></li>
        </ul>
    </div>

    <!-- slider section end -->
    <!-- Service section start -->
    <div class="service">
        <div class="box-container">
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class="img1">
                        <img src="image/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (2).png" class="img1">
                        <img src="image/services (3).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (5).png" class="img1">
                        <img src="image/services (6).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>support</h4>
                    <span>24*7</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (7).png" class="img1">
                        <img src="image/services (8).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/service.png" class="img1">
                        <img src="image/service (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>returns</h4>
                    <span>24*7 free return</span>
                </div>
            </div>
            <!-- service item box -->
            <!-- service item box -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class="img1">
                        <img src="image/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!-- service item box -->
        </div>

    </div>
    <!-- Service section end -->
    <div class="categories">
        <div class="heading">
            <h1>categories features</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/categories.jpg" height="500px">
                <a href="menu.php" class="btn">limestone coast</a>
            </div>
            <div class="box">
                <img src="image/categories0.jpg" height="500px">
                <a href="menu.php" class="btn">marlborough</a>
            </div>
            <div class="box">
                <img src="image/categories2.jpg" height="500px">
                <a href="menu.php" class="btn">chardonnay</a>
            </div>
            <div class="box">
                <img src="image/categories1.jpg" height="500px">
                <a href="menu.php" class="btn">sauvignon blanc</a>
            </div>
        </div>
    </div>

    <!-- menu section start -->

    <img src="image\menu-banner1.jpg" class="menu-banner" height="300rem">

    <!-- menu section end -->

    <!-- taste section start -->

    <div class="taste">
        <div class="heading">
            <span>Taste</span>
            <h1>buy any drink @ get 15% off</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/taste.jpg">
                <div class="detail">
                    <h2>natural sweetness</h2>
                    <h1>orange</h1>
                </div>
            </div>
            <div class="box">
                <img src="image/taste0.jpg">
                <div class="detail">
                    <h2>natural sweetness</h2>
                    <h1>soda</h1>
                </div>
            </div>
            <div class="box">
                <img src="image/taste1.jpg">
                <div class="detail">
                    <h2>natural sweetness</h2>
                    <h1>strwaberry</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- contanier section start -->

    <div class="drink-container">
        <div class="overlay">

        </div>
        <div class="detail">
            <h1>Drink is classy the <br> therapy for stress</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                <br> Exercitationem fugit error
                officia, possimus veritatis. <br> autem nam dolorum iusto officiis qui mollitia,
                aspernatur laudantium facilis adipisci quo asperiores saepe libero commodi!
            </p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
    <!-- container section end -->
     

    <!-- tester2 section start -->
    <div class="taste2">
        <div class="t-banner">
            <div class="overlay"></div>
            <div class="detail">
                <h1>find your taste of drinks</h1>
                <p>Treat them to a delicious treat and send them some Luck 'o the Irish tool</p>
                <a href="menu.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type0.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>packs</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type1.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>shots</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type2.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>packs</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type3.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>shots</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type4.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>packs</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type5.jpg">
                <div class="box-details fadeIn-bottom">
                    <h1>shots</h1>
                    <p>find your taste of drinks</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- tester2 section end -->
    <!-- flavour section start -->

    <div class="flavour">
        <div class="box-container">
            <img src="image/left-banner2.webp">
            <div class="detail">
                <h1>Hot Deal ! Sale Up To <span>20% off</span></h1>
                <p>expired</p>
                <a href="menu.php" class="btn">shop now</a>
            </div>
        </div>
    </div>

    <!-- flavour section end -->

    <!-- usage section start -->

    <div class="usage">
        <div class="heading">
            <h1>how it works</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <img src="image/icon.avif">
                    <div class="detail">
                        <h3>double-shot</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon0.avif">
                    <div class="detail">
                        <h3>half-pack</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon.avif">
                    <div class="detail">
                        <h3>double-shot</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
            </div>
            <img src="image/sub.banner.jpg.png" class="divider" width="100px">

            <div class="box-container">
                <div class="box">
                    <img src="image/icon0.avif">
                    <div class="detail">
                        <h3>half-pack</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon.avif">
                    <div class="detail">
                        <h3>double-shot</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon0.avif">
                    <div class="detail">
                        <h3>half-pack</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi suscipit, impedit voluptates nesciunt asperiores, eum sit,
                            vitae molestiae recusandae eius laborum illum commodi. Eos amet
                            blanditiis fugiat quos obcaecati id?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- pride section start -->

    <div class="pride">
        <div class="detail">
            <h1>We Pride Ourselves On <br> Exceptional Flavours.</h1>
            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Doloremque, reiciendis, <br> corporis
                minima voluptatibus.</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
</div>

    <!-- pride section end -->

    <!-- footer -->

    <?php
    include 'components/footer.php';
    ?>

    <!-- footer -->

    <!-- usage section end -->

















    <!--jquery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>

</html>