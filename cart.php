<?php
session_start();

if(!empty($_SESSION["user"])) {

    require "inc/data/products.php";
    $addChart = $_GET["id"];

    switch ($addChart) {
        case 46:
            setcookie("product_46", $catalog[$addChart]["name"], time() + 60*60*24, null, null, false, true);
            break;
        case 36:
            setcookie("product_36", $catalog[$addChart]["name"], time() + 60*60*24, null, null, false, true);
            break;
        case 58:
            setcookie("product_58", $catalog[$addChart]["name"], time() + 60*60*24, null, null, false, true);
            break;
        case 32:
            setcookie("product_32", $catalog[$addChart]["name"], time() + 60*60*24, null, null, false, true);
            break;
    }

?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <!-- TODO : Display shopping cart items from $_COOKIES here. -->
        <?php require_once 'cartLoading.php' ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

<?php } else {
    header("LOCATION: login.php");
};
?>