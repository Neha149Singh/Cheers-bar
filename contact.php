<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

//sending message

if (isset($_POST['send_message'])) {
    if($user_id !=  '') {

        $id = unique_id();
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $subject = $_POST['subject'];
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);

        $message = $_POST['message'];
        $message = filter_var($email, FILTER_SANITIZE_STRING);

        $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message =?");
        $verify_message->execute([$user_id, $name, $email, $subject, $message]);
        
        if ($verify_message->rowCount() > 0) {
            $warning_msg[] = 'message already exist';
        } else {
            $insert_message = $conn->prepare("INSERT INTO `message` (id, user_id, name, email, subject, message) VALUES (?,?,?,?,?,?)");
            $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);
            $success_msg[] = 'comment inserted successfully!';
        }
    } else {
        $warning_msg[] = 'please login first';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheers Bar - contact us page </title>
    <link rel="stylesheet" href="css/user_style.css">
    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>

<body>
    <!-- navbar -->
    <?php include 'components/user_header.php'; ?>
    <!-- navbar -->

    <div class="banner">
        <div class="detail">
            <h1>contact us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Recusandae debitis voluptates iusto saepe sit amet commodi at,<br> praesentium eligendi aliquid odio dignissimos aspernatur natus in iste minima, voluptas beatae deserunt?</p>
            <span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>contact us</span>
        </div>
    </div>

    <div class="services">
        <div class="heading">
            <h1>our services</h1>
            <p>Just A few Click To Make Th e Reservation Online For Saving Your Time And Money</p>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/0.png">
                <div>
                    <h1>free shipping fast</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/1.png">
                <div>
                    <h1>money back & guarantee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/2.png">
                <div>
                    <h1>online support 24*7</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="form-container">
        <div class="heading">
            <h1>drop us a line</h1>
            <p>Just A Few Click To Make Reservation Online For Saving Your Time And Money</p>
            <img src="image/separator-img.png">
        </div>
        <form action="" method="post" class="register">
            <div class="input-field">
                <label>name <sup>*</sup></label>
                <input type="text" name="name" required placeholder="Enter your name" class="box"> 
            </div>
            <div class="input-field">
                <label>email <sup>*</sup></label>
                <input type="email" name="email" required placeholder="Enter your email" class="box"> 
            </div>
            <div class="input-field">
                <label>subject <sup>*</sup></label>
                <input type="text" name="subject" required placeholder="reason...." class="box"> 
            </div>
            <div class="input-field">
                <label>comment <sup>*</sup></label>
                <textarea name="message" cols="30" rows="10" required placeholder="Drop message here.." class="box"> </textarea> 
            </div>
            <button type="submit" name="send_message" class="btn">send message</button>
        </form>
        <!-- <div class="visme_d" data-title="Multi-Page Contact Form" data-url="4d6epq3y-multi-page-contact-form" data-domain="forms" data-full-page="false" data-min-height="500px" data-form-id="79774"></div><script src="https://static-bundles.visme.co/forms/vismeforms-embed.js"></script>    </div> -->

    <div class="address">
        <div class="heading">
            <h1>our contact details</h1>
            <p>Just A Few Click To Make Reservation Online For Saving Your Time And Money</p>
            <img src="image/separator-img.png" >
        </div>
        <div class="box-container">
            <div class="box">
            <i class="fa-solid fa-map"></i>
            <div>
                <h4>address</h4>
                <p>Varanasi ,<br> Uttar Pradesh</p>
            </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-square-phone"></i>
            <div>
                <h4>phone number</h4>
                <p>9876543210</p>
                <p>9876543210</p>
            </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-envelope"></i>
            <div>
                <h4>email</h4>
                <p>drinks&barshop149@gmail.com</p>
                <p>drinks&barshop149@gmail.com</p>
            </div>
            </div>
        </div>
    </div>
    </div>


    <!-- footer -->

    <?php
    include 'components/footer.php';
    ?>

    <!-- footer -->
<!--jquery link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--sweetalert cdn link--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link--->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>

    <!--jquery link--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>