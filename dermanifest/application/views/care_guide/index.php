<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--isi konten nya di siniii-->
<div class="container">
    <h1>Care Guide</h1>
    <h3>Artikel</h3>
    <br>
    <div class="frame-content">
        <div class="guide-post">
            <div class="guide-img">
                <img src="<?= base_url(); ?>assets/images/guide/undraw_add_to_cart_vkjp-1024x768.jpg" alt="sunscreen" height="200px">
            </div>
            <div class="blog.post-info">
                <h1 class="blog-title"><b>Sesuaikan konten kamu!</b></h1>
                <p class="blog-txt">Cari artikel sesuai dengan kulitmu dengan onboarding.</p>
                <button onclick="window.location.href='<?= base_url(); ?>careguide/skintone';" class="lanjut">Selengkapnya</button>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <?php foreach ($artikel as $item) : ?>
            <div class="col-md-6">
                <div class="card artikel-card">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/images/coverartikel/<?= $item->banner; ?>" alt="<?= $item->nama; ?>">
                    <div class="card-body">
                        <h5><?= $item->nama; ?></h5>
                        <p class="card-text"><?= $item->konten; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("top").style.top = "0";
        } else {
            document.getElementById("top").style.top = "-150px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>

<!------commerce.js-------->
<script>
    const commerce = new Commerce('pk_198151521f223e07df237e6a4e021d27b0114da5ccaef', true);
    commerce.products.list().then((products) => {
        console.log(products)
    });


    //Menampilkan jumlah item dalam cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
    });
</script>