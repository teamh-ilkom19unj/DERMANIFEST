<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--isi konten nya di siniii-->
<form action="<?= base_url(); ?>careguide/result" method="get">
    <?php if ($get != null) :
        foreach ($get as $key => $value) : ?>
            <input type="hidden" name="<?= $key; ?>" value="<?= $value; ?>">
    <?php endforeach;
    endif; ?>
    <div class="container" style="height: 700px">
        <h1>Care Guide</h1>
        <h3>kondisi Kulit</h3>
        <?php $x = 1;
        $count = count($kondisi);
        foreach ($kondisi as $key => $item) : ?>
            <?php if ($x % 4 == 1) : ?>
                <ul class="d-flex justify-content-center">
                <?php endif; ?>
                <li>
                    <input type="checkbox" name="kondisi[]" id="myCheckbox<?= $x; ?>" value="<?= $this->my_encrypt->encrypt($item->id); ?>" />
                    <label for="myCheckbox<?= $x; ?>"><img src="<?= base_url(); ?>assets/images/guide/kondisi/<?= $item->img; ?>" />
                        <p class="skin-name"><?= $item->name; ?></p>
                    </label>
                </li>
                <?php if ($x % 4 == 0 || $count == $x) : ?>
                </ul>
            <?php endif; ?>
        <?php $x++;
        endforeach; ?>
        <div class="d-flex justify-content-center">
            <button type="button" onclick="window.location.href='<?= base_url(); ?>careguide/skin<?= $link != '' ? ('?' . $link) : ''; ?>';" class="sblm">Sebelumnya</button>
            <button type="submit" class="lanjut">Cek Hasil</button>
        </div>
    </div>
</form>
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