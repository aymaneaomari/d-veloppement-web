
<?php  include_once 'includes/header.php'?>
<?php  include_once 'includes/headercompenent.php'?>

<main class="panier-main">
    <div class="panier-chosed-products">
            <div class="header">
                <h1>Products</h1>
            </div>

    </div>
    <div class="payment">
        <h2 class="payment-total">Total</h2>
        <div class="payment-sousTotal-Div">
            <h3 class="payment-sousTotal">Sous-Total</h3>
            <h4 class="payment-sousTotal-price">0</h4>
        </div>
        <button class="payment-Button">Paiement</button>
        <p class="payment-acceptation">Our Acceptations</p>
        <div class="payment-acceptation-div">
            <img class="payment-acceptation-img" src="assets/payment/masterCardLogo.png" alt="">
            <img  class="payment-acceptation-img"src="assets/payment/paypalLogo.png" alt="">
            <img  class="payment-acceptation-img"src="assets/payment/visaLogo.png" alt="">
        </div>
        <p class="payment-lastText">If you have a code Promotion, Add it in the next Step.</p>
    </div>
</main>



<?php include_once 'includes/footercompenent.php'?>
<?php include_once'includes/footer.php' ?>