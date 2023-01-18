<?php
    require("./connection/connect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ayuruveda | About Us</title>

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
        <div class="container mt-5 mb-5">
            <h2>About Us</h2>
            <p>We are AyurPharmacy Ayurveda is the science of healing and the basic principle of this is to maintain the
                well-being of people world over.<br/><br/>



                We, Isiwara Ayurveda, situated at Colombo-Badulla Main Road, Thumbagoda, Balangoda, are a fast growing
                Ayurvedic pharmacy dealing in a wide range of Ayurvedic products. We deal in quality Ayurvedic products
                that contain natural & pure ingredients.<br/><br/>



                Our products are available in various forms like capsules, tablets, churna, chatan, syrup, ointments,
                oral drops, oral powders and many more. All our products can be safely used by everyone as our products
                do not contain any harmful ingredients or artificial preservatives.<br/><br/>

                Therefore, they have no side-effects. Our rich portfolio of Ayurvedic medicines and health products
                bring natural wellness to people, every day. We offer a composite package of not only cure, but
                prevention as well without any side effects, just the right effects only. Our products have enriched the
                lives of people in this area.<br/><br/>



                They have been carefully formulated to cure chronic as well as generated diseases across all the
                sections of the society and thereby providing nourishment naturally.</p>
        </div>
    </section>
    <!-- Footer -->
    <?php require('includes/footer.php') ?>
    <script type="text/javascript">
    $(document).ready(function() {

        $(".itemQty").on('change', function(){
            var $el = $(this).closest('tr');

            var pid = $el.find(".pid").val();
            var pprice = $el.find(".pprice").val();
            var qty = $el.find(".itemQty").val();
            location.reload(true);

            $.ajax({
                url: 'action.php',
                method: 'post',
                cache: false,
                data: {qty:qty,pid:pid,pprice:pprice},
                success: function(response){
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