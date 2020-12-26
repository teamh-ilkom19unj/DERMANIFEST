<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--isi konten nya di siniii-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<form action="<?= base_url(); ?>careguide/skincondition" method="get">
    <?php if ($get != null) :
        foreach ($get as $key => $value) : ?>
            <input type="hidden" name="<?= $key; ?>" value="<?= $value; ?>">
    <?php endforeach;
    endif; ?>
    <div class="container" style="height: 1200px">
        <h1>Care Guide</h1>
        <h3>Jenis Kulit</h3>
        <?php $x = 1;
        $count = count($jenis);
        foreach ($jenis as $key => $item) : ?>
            <?php if ($x % 2 != 0) : ?>
                <ul class="d-flex justify-content-center">
                <?php endif; ?>
                <li>
                    <div class="tempat">
                        <input type="checkbox" name="jenis" id="myCheckbox<?= $x; ?>" value="<?= $this->my_encrypt->encrypt($item->id); ?>" />
                        <label for="myCheckbox<?= $x; ?>"><img class="check-img" src="<?= base_url(); ?>assets/images/guide/jenis/<?= $item->img; ?>" />
                            <h5 class="skin-name"> <b><?= $item->name; ?></b> </h5>
                            <p class="skin-name"><?= $item->deskripsi; ?></p>
                        </label>
                    </div>
                </li>
                <?php if ($x % 2 == 0 || $count == $x) : ?>
                </ul>
            <?php endif; ?>
        <?php $x++;
        endforeach; ?>
    </div>

    <div class="d-flex justify-content-center" id="btn-sbm">
        <button type="button" onclick="window.location.href='<?= base_url(); ?>careguide/skintone';" class="sblm">Sebelumnya</button>
        <button type="submit" class="lanjut">Selanjutnya</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('input:checkbox').click(function() {
            $('input:checkbox').not(this).prop('checked', false);
        });
    });
</script>

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