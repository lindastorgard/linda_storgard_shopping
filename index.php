<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- include Head -->
<?php include 'partials/head.php';?>

<body>

    <!-- include Header -->
    <?php include 'partials/header.php';?>

    <div class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="welcomeHeader">Hi Apple Lover</h1>
                <p class="welcomeText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto velit minima consequuntur officia harum odio saepe, voluptate minus!</p>

                <!-- include discount text if Monday or Friday -->
                <?php include 'partials/indexDiscountText.php';?>

            </section>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="col-12" action="checkout.php" method="POST">
                <div class="row">

                    <!-- include Product Array -->
                    <?php include 'partials/productArray.php';?>

                    <!-- include Index Product Loop for echoing out product, price etc. -->
                    <?php include 'partials/indexProductLoop.php';?>

                    <!-- continues with personal details in the form -->
                    <div class="form-group personalDetailsTop col-12">
                        <input class="inputField" id="name" aria-label="Name" name="name" type="text" placeholder="Name" required>
                    </div>
                    <div class="form-group col-12">
                        <input class="inputField" id="address" aria-label="Address" name="address" type="text" placeholder="Address" required>
                    </div>
                    <div class="form-group col-12">
                        <input class="inputField" id="number" aria-label="Phone number" name="number" type="number" placeholder="Phone number" required>
                    </div>
                    <div class="form-group col-12">
                        <input class="inputField" id="email" aria-label="E-mail" name="email" type="email" placeholder="E-mail address" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark checkoutButton">Go to checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col-12">
                <a class="btn btn-dark logoutButton" href="partials/logout.php" role="button">Logout</a>
            </form>
        </div>
    </div>

    <?php
    if(isset($_GET["error"])) {
    echo ($_GET["error"]);
    }
    ?>

    <!-- include Footer -->
    <?php include 'partials/footer.php';?>

</body>

</html>
