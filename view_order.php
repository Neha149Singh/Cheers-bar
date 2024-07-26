<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
$user_id = $_COOKIE['user_id'];
} else {
$user_id = '';
}

if(isset($_GET['get_id'])){
    $get_id = $_GET['get_id'];
}else{
    $get_id = '';
    header('location: order.php');
}

if(isset($_POST['cancel'])){

    $update_order = $conn->prepare("UPDATE `orders` SET status = ? WHERE id = ?");
    $update_order->execute(['canceled', $get_id]);

    header('location: order.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cheers Bar - order detail page </title>
<link rel="stylesheet" href="css/user_style.css">
<!----font awesome cdn link---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<div class="banner">
<div class="detail">
<h1>order detail</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Recusandae debitis voluptates iusto saepe sit amet commodi at,<br> praesentium eligendi aliquid odio dignissimos aspernatur natus in iste minima, voluptas beatae deserunt?</p>
<span><a href="home.php">home</a><i class="fa-solid fa-arrow-right"></i>order detail</span>
</div>
</div>
<div class="order-detail">
    <div class="heading">
        <h1>my order detail</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam tenetur</p>
        <img src="image/separator-img.png">
    </div>
    <div class="box-container">
        <?php 
            $grand_total = 0;
            $select_order = $conn->prepare("SELECT * FROM `orders` WHERE id = ? LIMIT 1");
            $select_order->execute([$get_id]);

            if ($select_order->rowCount() > 0) {
                while ($fetch_order = $select_order->fetch(PDO::FETCH_ASSOC)) {
                    $select_product = $conn->prepare("SELECT * FROM `products` WHERE id =? LIMIT 1");
                    $select_product->execute([$fetch_order['product_id']]);
                    if ($select_product->rowCount() > 0) {
                        while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {
                            $sub_total = $fetch_order['price'] * $fetch_order['qty'];
                            $grand_total += $sub_total;
                        
        ?>
        <div class="box">
            <div class="col">
                <p class="title"><i class="fa-regular fa-calendar-days"></i><?= $fetch_order['dates']; ?></p>
                <img src="uploaded_files/<?= $fetch_product['image']; ?>" class="image">
                <p class="price">$<?= $fetch_product['price']; ?>/-</p>
                <h3 class="name"><?= $fetch_product['name']; ?></h3>
                <p class="grand-total">total amount payble : <span>$<?= $grand_total; ?>/-</span></p>
            </div>
            <div class="col">
                <p class="title">billing address</p>
                <p class="user"><i class="fa-solid fa-users-viewfinder"></i><?= $fetch_order['name']; ?></p>
                <p class="user"><i class="fa-solid fa-mobile"></i><?= $fetch_order['number']; ?></p>
                <p class="user"><i class="fa-solid fa-envelope"></i><?= $fetch_order['email']; ?></p>
                <p class="user"><i class="fa-solid fa-map-location-dot"></i><?= $fetch_order['address']; ?></p>
                <p class="status"
                    style="color: <?php if ($fetch_order['status'] == 'delivered') {
                        echo "green";
                    } elseif ($fetch_order['status'] == 'canceled') {
                        echo "red";
                    } else {
                        echo "orange";
                    } ?>">
                    <?= $fetch_order['status']; ?>
                </p>
                <?php if($fetch_order['status']=='canceled'){ ?>
                  <a href="checkout.php?get_id=<?= $fetch_product['id']; ?>" class="btn" style="line-height: 3;">order again</a>
                <?php }else{ ?>
                    <form action="" method="post">
                        <button type="submit" name="cancel" class="btn" onclick="return confirm('do you want to cancel this product?');">cancel</button>
                    </form>
                <?php } ?>      
            </div>
        </div>
        <?php 
                        }
                    }
                }
            }else {
                echo '<p class="empty">no order take placed yet</p>';
            }
        ?>
    </div>
</div>




<!-- footer -->
<?php include 'components/footer.php';?>
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