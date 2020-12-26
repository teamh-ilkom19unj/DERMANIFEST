<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="my-container">
    <div class="space"></div>

    <?php if (!$isLogin) : ?>
        <div class="row intro">
            <div class="col-md-5 logo-big text-center">
                <img src="<?= base_url(); ?>assets/images/logo-big.png">
            </div>

            <div class="col-md-7 isi-intro">
                <h1><a>Halo</a>, Selamat Datang <br> di Dermanifest!</h1>
                <h5>Ayo, daftar atau log in ke akun Dermanifest-mu!</h5>
                <button onclick="window.location.href='<?= base_url(); ?>login?q=signup';" class="daftar" data-toggle="modal" data-target="#modalRegisterForm">Daftar</button>
                <button onclick="window.location.href='<?= base_url(); ?>login?q=login';" class="login" data-toggle="modal" data-target="#modalLoginForm">Log in</button>
            </div>
        </div>
    <?php endif; ?>

    <div class="fitur">
        <div class="row align-items-center justify-content-center beli">
            <div class="col-md-4 ilustrasi text-center">
                <img src="<?= base_url(); ?>assets/images/landing/beli.svg">
            </div>

            <div class="col-md-8 isi-fitur">
                <h1>Beli Produk</h1>
                <h4>Temukan beberapa produk perawatan kulit sebagai pelengkap rutinitas skincare-an mu!</h4>
                <button onclick="window.location.href='<?= base_url(); ?>product/list';" class="selengkapnya">Selengkapnya</button>
            </div>
        </div>

        <div class="row align-items-center justify-content-center compare">
            <div class="col-md-4 ilustrasi text-center">
                <img src="<?= base_url(); ?>assets/images/landing/compare.svg">
            </div>

            <div class="col-md-8 isi-fitur">
                <h1>Comparison</h1>
                <h4>Tambahkan dua produk perawatan kulit untuk memulai perbandingan!</h4>
                <button onclick="window.location.href='<?= base_url(); ?>product/comparison';" class="selengkapnya">Selengkapnya</button>
            </div>
        </div>

        <div class="row align-items-center justify-content-center care">
            <div class="col-md-4 ilustrasi text-center">
                <img src="<?= base_url(); ?>assets/images/landing/guide.svg">
            </div>

            <div class="col-md-8 isi-fitur">
                <h1>Care Guide</h1>
                <h4>Cari tahu karakteristik kulitmu dan baca artikel seputar skincare yang sesuai untukmu!</h4>
                <button onclick="window.location.href='<?= base_url(); ?>careguide';" class="selengkapnya">Selengkapnya</button>
            </div>
        </div>

        <div class="row align-items-center justify-content-center feedback">
            <div class="col-md-4 ilustrasi text-center">
                <img src="<?= base_url(); ?>assets/images/landing/survey.svg">
            </div>

            <div class="col-md-8 isi-fitur">
                <h1>Feedback</h1>
                <h4>Bantu dermanifest menjadi menjadi lebih baik. Beri tanggapanmu mengenai kepuasan saat menggunakan Dermanifest dengan mengisi kuesioner!</h4>
                <button onclick="window.location.href='<?= base_url(); ?>feedback';" class="selengkapnya">Selengkapnya</button>
            </div>
        </div>
    </div>

    <div class="row outro text-center">
        <div class="col-md-12 outro-pic">
            <img src="<?= base_url(); ?>assets/images/landing/thx.svg">
        </div>
        <div class="col-md-12 isi-outro">
            <h2>Wujudkan kulit impianmu bersama Dermanifest! <br> <br> <a>"Manifesting Your Perfect Skin."</a></h2>
        </div>
    </div>
</div>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("top").style.top = "0";
        } else {
            document.getElementById("top").style.top = "-60px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>

<!------commerce.js-------->
<script>
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);
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