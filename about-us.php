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
    <title>Cheers Bar - about page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
</head>

<body>
    <!-- navbar -->
    <?php include 'components/user_header.php'; ?>
    <!-- navbar -->

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Recusandae debitis voluptates iusto saepe
                sit amet commodi at,<br> praesentium eligendi aliquid odio dignissimos aspernatur natus in iste minima,
                voluptas beatae deserunt?</p>
            <span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>about us</span>
        </div>
    </div>
    <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>Alex Doe</span>
                    <h1>Masterchef</h1>
                    <img src="image/separator-img.png">
                </div>
                <p>A Chef is responsible for the entire operation of the kitchen. This effectively means running a
                    business within the business. The Chef is responsible for creating menus, the recruitment,
                    training and development of kitchen staff, managing the financial performance of the kitchen and
                    overseeing food quality, consistency and hygiene practices. The Chef also works closely with
                    the Front of House team to assist in improving knowledge about the menu, helping to understand and
                    cater to customer dietary restrictions, and creating open lines of communication to ensure a
                    seamless mode of operation between kitchen and front of house.
                </p>
                <div class="flex-btn">
                    <a href="menu.php" class="btn">explore our menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="box">
                <img src="image/ceaf.png" class="img">
            </div>
        </div>
    </div>
    <!-- chef section start -->
    <div class="story">
        <div class="heading">
            <h1>our story</h1>
            <img src="image/separator-img.png">
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Dolorem quidem nemo quo mollitia! Vero
            reiciendis quasi, mollitia optio porro sint suscipit, <br> culpa aliquid a facilis magni excepturi. Modi,
            accusamus ducimus.</p>
        <a href="menu.php" class="btn">our services</a>
    </div>
    <div class="container">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.png">
            </div>
            <div class="box">
                <div class="heading">
                    <h1>Taking Drinks To New Heights</h1>
                    <img src="image/separator-img.png">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas assumenda sapiente, esse debitis
                    consectetur commodi molestias consequuntur nulla repudiandae molestiae perferendis dolorem sed vero
                    porro explicabo temporibus quis maiores? Repellendus.</p>
                <a href="" class="btn">learn more</a>
            </div>
        </div>
    </div>
    <!-- story section end -->


    <!-- team section start -->

    <div class="team">
        <div class="heading">
            <span>our team</span>
            <h1>Quality & passive with our services</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team2.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Martine</h2>
                    <p>prepare packs</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team1.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>kairie</h2>
                    <p>Prepare Dishes</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team4.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Piyush Singh</h2>
                    <p>Serving</p>
                </div>
            </div>
        </div>
    </div>

    <!-- team section end -->

    <!-- standers section start -->

    <div class="standers">
        <div class="detail">
            <div class="heading">
                <h1>our standers</h1>
                <img src="image/separator-img.png">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, autem.</p>
            <i class="fa-solid fa-heart"></i>
        </div>
    </div>

    <!-- standers section end -->

    <!-- testimonial section strat -->

    <div class="testimonial">
        <div class="heading">
            <h1>testimonial</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="testimonial-container">
            <div class="slide-row" id="slide-row">
                <div class="slide-col active">
                    <div class="user-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repudiandae minus eius
                            sint tempore! Exercitationem!</p>
                        <h2>Ruchi Singh</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (1).jpg">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repudiandae minus eius
                            sint tempore! Exercitationem!</p>
                        <h2>Ajay Singh</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (2).jpg">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repudiandae minus eius
                            sint tempore! Exercitationem!</p>
                        <h2>Seema Singh</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (3).jpg">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repudiandae minus eius
                            sint tempore! Exercitationem!</p>
                        <h2>Neha Singh</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (4).jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="indicator" style="display: flex; justify-content: center; margin-top: 4rem;">
            <span class="btn1"
                style=" display: inline-block; height: 15px; width: 15px; margin: 4px; border-radius: 15px; background: #fff; cursor: pointer; transition: all 0.5s ease-in-out;"
                onclick="currentSlide(1)"></span>
            <span class="btn1"
                style=" display: inline-block; height: 15px; width: 15px; margin: 4px; border-radius: 15px; background: #fff; cursor: pointer; transition: all 0.5s ease-in-out;"
                onclick="currentSlide(2)"></span>
            <span class="btn1"
                style=" display: inline-block; height: 15px; width: 15px; margin: 4px; border-radius: 15px; background: #fff; cursor: pointer; transition: all 0.5s ease-in-out;"
                onclick="currentSlide(3)"></span>
            <span class="btn1"
                style=" display: inline-block; height: 15px; width: 15px; margin: 4px; border-radius: 15px; background: #fff; cursor: pointer; transition: all 0.5s ease-in-out;"
                onclick="currentSlide(4)"></span>
        </div>
    </div>

    <!-- testmonial section end -->


    <!-- footer -->

    <?php
    include 'components/footer.php';
    ?>

    <!-- footer -->

    <!--jquery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".indicator").click(function () {
                $(".indicator:hover").css('color', 'yellow');
            });
        });
    </script>

    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="js/user_script.js"></script>


    <?php include 'components/alert.php'; ?>
</body>

</html>