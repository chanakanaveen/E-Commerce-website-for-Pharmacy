<?php
    require("../connection/connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
<style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="addProduct.php">Add Products</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


    <section class="bg-success">
        <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Products</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql="select * from `orders`";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $number=$row['number'];
                            $address=$row['address'];
                            $products=$row['products'];
                            $amount_paid=$row['amount_paid'];
                            $mode=$row['mode'];
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$number.'</td>
                                <td>'.$address.'</td>
                                <td>'.$products.'</td>
                                <td>Rs. '.$amount_paid.'</td>
                                <td>'.$mode.'</td>
                                <td>
                                    <button class="btn btn-success" name="update"><a class="text-light" style="text-decoration: none;" href="./update/cusUpdate.php?updateid='.$id.'"><i class="fa-solid fa-cart-flatbed"></i></a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>

                </tbody>
            </table>
    </section>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    <!-- footer-->
    <?php require('includes/footer.php') ?>
</body>

</html>