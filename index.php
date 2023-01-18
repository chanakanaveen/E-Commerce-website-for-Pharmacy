<?php
    require("./connection/connect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ayuruveda</title>
    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
</head>

<style>
header {
    width: 100%;
    height: 40px;
    background-color: #07660a;
}

header .col-11 {
    text-align: end;
}

header .account-bar {
    display: flex;
    flex-direction: end;
}

header .account-bar a {
    color: white;
    margin: 4px;
    display: flex;
}

header .account-bar a i {
    margin-top: 4px;
}

header .account-bar .account {
    margin-top: 7px;
}

header .account-bar .account:hover {
    text-decoration: none;
    cursor: pointer;
}



/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
}

.carousel-control.left span {
    padding: 15px;
}

.carousel-control.right span {
    padding: 15px;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-prev,
.carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
    left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
    right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
    background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b9;
    padding: 10px;
}

.header-text h3 span {
    background-color: #000;
    padding: 15px;
}


</style>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <?php
                    if(isset($_SESSION['email'])){
                        echo '<div class="col-lg-3">
                        <div class="social d-flex pt-2 pb-2">
                  <i class="fa-brands fa-facebook pr-4" style="font-size:22px; color: white;"></i>
                  <i class="fa-brands fa-instagram pr-4" style="font-size:22px; color: white;"></i>
                  <i class="fa-brands fa-twitter pr-4" style="font-size:22px; color: white;"></i>
                  <i class="fa-brands fa-youtube pr-4" style="font-size:22px; color: white;"></i>
                </div></div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-3">
                            <div class="account-bar">
                                <a class="account text-light" href="account.php">
                                    <i class="fa-solid fa-circle-user"></i>
                                        &nbsp;&nbsp;My Account&nbsp;&nbsp;
                                    <span class="disabled" style="font-size: 30px; margin-top: -10px;">|</span>
                                </a>
                                <form method="post">
                                    <a class="btn btn-outline-light btn-sm" href="logout.php"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Logout</a>
                                </form>
                            </div>
                        </div>';
                    }else{
                    echo '<div class="col-lg-3">
                    <div class="social d-flex pt-2 pb-2">
              <i class="fa-brands fa-facebook pr-4" style="font-size:22px; color: white;"></i>
              <i class="fa-brands fa-instagram pr-4" style="font-size:22px; color: white;"></i>
              <i class="fa-brands fa-twitter pr-4" style="font-size:22px; color: white;"></i>
              <i class="fa-brands fa-youtube pr-4" style="font-size:22px; color: white;"></i>
            </div></div>
                    <div class="col-lg-8"></div>
                    <div class="col-lg-1">
                        <div class="account-bar">
                            <a class="btn btn-outline-light btn-sm" href="login.php">
                                <i class="fa-solid fa-user"></i>
                                &nbsp;&nbsp;Login
                            </a>
                        </div>
                    </div>';
                    }
                ?>
            </div>
        </div>
    </header>

    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>

    <section>
        <!-- Slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/slide (1).jpg" alt="First slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h4 class="text-dark font-weight-bold">Welcome to</h4>
                            <h1 class="text-dark font-weight-bold">Ayurvedic Pharmacy</h1>
                            <br>
                            <p class="text-dark font-weight-bold">Ayurveda Products. The Oldest Medical System
                                Which Comprises Thousands Of Medical Concepts & Hypothesis.</p>
                            <br>
                            <div class="layer-3">
                                <a href="product.php" target="_blank" class="btn btn-success rounded-5"><span>Shop Now <i
                                            class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/slide (2).jpg" alt="Second slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-10 text-right ml-5">
                            <h4 class="text-dark font-weight-bold">Make Your Own</h4>
                            <h1 class="text-dark font-weight-bold">HEALTH</h1>
                            <br>
                            <p class="text-dark font-weight-bold">The Best Investment You Have Ever Make Is Your Own Health.</p>
                            <br>
                            <div class="layer-3">
                                <a href="product.php" target="_blank" class="btn btn-success rounded-5"><span>Shop Now <i
                                            class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/slide (3).jpg" alt="Third slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-10 text-right ml-5">
                            <h4 class="text-dark font-weight-bold">It Is An</h4>
                            <h1 class="text-dark font-weight-bold">INVESTMENT</h1>
                            <br>
                            <p class="text-dark font-weight-bold">Your Health Is An Investment Not An EXPENSE.</p>
                            <br>
                            <div class="layer-3">
                                <a href="product.php" target="_blank" class="btn btn-success rounded-5"><span>Shop Now <i
                                            class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row" style="background-color: #07660a; height: 90px;">
                <div class="col-lg-3">
                    <div class="d-flex p-3 text-white">
                        <i class="fa-solid fa-truck-fast p-3 lg-2" style="font-size:26px;"></i>
                        <div class="details">
                            <p class="m-0 p-0 text-capitalize font-weight-bold" style="font-size:18px;">Free Shipping
                            </p>
                            <p class="p-0">Free Shipping All Order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex p-3 text-white">
                        <i class="fa-regular fa-circle-check p-3 lg-2" style="font-size:26px;"></i>
                        <div class="details">
                            <p class="m-0 p-0 text-capitalize font-weight-bold" style="font-size:18px;">PAYMENT METHOD
                            </p>
                            <p class="p-0">Secure Payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex p-3 text-white">
                        <i class="fa-solid fa-arrow-rotate-left p-3 lg-2" style="font-size:26px;"></i>
                        <div class="details">
                            <p class="m-0 p-0 text-capitalize font-weight-bold" style="font-size:18px;">30 DAY RETURNS
                            </p>
                            <p class="p-0">30-Day Return Policy</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex p-3 text-white">
                        <i class="fa-solid fa-user-gear p-3 lg-2" style="font-size:26px;"></i>
                        <div class="details">
                            <p class="m-0 p-0 text-capitalize font-weight-bold" style="font-size:18px;">HELP CENTER</p>
                            <p class="p-0">24/7 Support System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php require('includes/footer.php') ?>
    <script type="text/javascript">
    $(document).ready(function() {

        $(".itemQty").on('change', function() {
            var $el = $(this).closest('tr');

            var pid = $el.find(".pid").val();
            var pprice = $el.find(".pprice").val();
            var qty = $el.find(".itemQty").val();
            location.reload(true);

            $.ajax({
                url: 'action.php',
                method: 'post',
                cache: false,
                data: {
                    qty: qty,
                    pid: pid,
                    pprice: pprice
                },
                success: function(response) {
                    console.log(response);
                }
            })
        });

        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {
                    $("#cart-item").html(response);
                }
            });
        }
    });
    </script>
</body>

</html>