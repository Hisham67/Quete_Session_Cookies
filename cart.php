<?php require 'inc/head.php';
session_start ();
?>
<?php
if (!empty($_SESSION['loginname']))
{
    ?>
    <!--    <a href='logout.php'>Click here to log out</a>;-->
    <a  href="logout.php" class="btn btn-primary" style="align-items: center">
        <span class="glyphicon" aria-hidden="true"></span> Click here to log out
    </a>
    <?php
}
?>
<section class="cookies container-fluid">
    <div class="row">

        <h1>VOTRE PANIER :</h1>;
        <?php

        if (!isset($_SESSION['loginname'])) {
            header('Location:login.php');
        } else
        {
            if (isset($_SESSION['Pecan nuts'])){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
            echo    '<figure class="thumbnail text-center">';
            echo        '<img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">';
            echo        '<figcaption class="caption">';
            echo            '<h3>Pecan nuts</h3>';
            echo            '<p>Cooked by Penny !</p>';
            echo        '</figcaption>';
            echo    '</figure>';
            echo '</div>';
            }
            if (isset($_SESSION['Chocolate chips'])){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
            echo    '<figure class="thumbnail text-center">';
            echo        '<img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">';
            echo        '<figcaption class="caption">';
            echo            '<h3>Chocolate chips</h3>';
            echo            '<p>Cooked by Bernadette !</p>';
            echo        '</figcaption>';
            echo    '</figure>';
            echo '</div>';
            }
            if (isset($_SESSION['Chocolate cookie'])){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
            echo    '<figure class="thumbnail text-center">';
            echo        '<img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">';
            echo        '<figcaption class="caption">';
            echo            '<h3>Chocolate cookie</h3>';
            echo            '<p>Cooked by Bernadette !</p>';
            echo        '</figcaption>';
            echo    '</figure>';
            echo '</div>';
            }
            if (isset($_SESSION['M&M\'s cookies'])){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
            echo    '<figure class="thumbnail text-center">';
            echo        '<img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">';
            echo        '<figcaption class="caption">';
            echo            '<h3>M&M\'s cookies</h3>';
            echo            '<p>Cooked by Penny !</p>';
            echo        '</figcaption>';
            echo    '</figure>';
            echo '</div>';
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
