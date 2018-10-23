<?php require 'inc/head.php';
session_start ();

if (@$_GET['add_to_cart']){
    if (!isset($_SESSION['loginname'])) {
        header('Location: login.php');
    } else {
        if (isset($_GET['add_to_cart'])) {
            if ($_GET['add_to_cart'] == '46') {
                @$_SESSION['Pecan nuts'] =+ 1;
            } elseif ($_GET['add_to_cart'] == '36') {
                @$_SESSION['Chocolate chips'] =+ 1 ;
            } elseif ($_GET['add_to_cart'] == '58') {
                @$_SESSION['Chocolate cookie'] =+ 1;
            } elseif ($_GET['add_to_cart'] == '32') {
                @$_SESSION['M&M\'s cookies'] =+ 1;
            }



        }

    }
}

?>
<section class="cookies container-fluid">
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
    <br>
    <br>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Pecan nuts</h3>
              <p>Cooked by Penny !</p>
                <a  href="?add_to_cart=46" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
            </figcaption>
          </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Chocolate chips</h3>
              <p>Cooked by Bernadette !</p>
                <a  href="?add_to_cart=36" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
            </figcaption>
          </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>Chocolate cookie</h3>
              <p>Cooked by Bernadette !</p>
<!--                <form action="" method="post">-->
<!--                    <input type="submit" class="btn btn-primary" name="ChocolateCookie" value="Addtocart">-->
<!--                </form>-->
                <a  href="?add_to_cart=58" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
            </figcaption>
          </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure class="thumbnail text-center">
            <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
            <figcaption class="caption">
              <h3>M&M's cookies</h3>
              <p>Cooked by Penny !</p>

                <a  href="?add_to_cart=32" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
            </figcaption>
          </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>