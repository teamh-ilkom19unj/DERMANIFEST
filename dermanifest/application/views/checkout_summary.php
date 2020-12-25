<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row my-container">
    <div class="col-3"></div>
    <div class="col-6 main text-center">
        <img src="<?= base_url(); ?>assets/images/logo.png">
        <div class="col-12 summary-wrapper text-center">
            <div class="col-12">
                <img src="<?= base_url(); ?>assets/images/checkmark.png" class="checkmark">
                <h2>Terima kasih telah memesan!</h2>
            </div>

            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 50%;"><b>Item</b></th>
                        <th style="width: 25%;"><b>Quantity</b></th>
                        <th style="width: 25%;"><b>Price</b></th>
                    </tr>
                </thead>
                <tbody id="isi-item">

                </tbody>
                <tbody>
                    <tr style="background-color: #FFE8C2;">
                        <td></td>
                        <td>Subtotal</td>
                        <td id="total">Rp0</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 landing-btn">
                <button onclick="resetCart()">Kembali ke menu utama</button>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</div>
<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script>
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);

    //Menampilkan jumlah item dalam cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        let item = '';

        cart.line_items.forEach((items) => {
            item +=
                `<tr>
					<td>${items.name}</td>
					<td>${items.quantity} x</td>
					<td>${items.line_total.formatted_with_symbol}</td>
				</tr>`;
        });

        document.querySelector('#isi-item').innerHTML = item;
        document.querySelector('#total').innerHTML = cart.subtotal.formatted_with_symbol;
    });

    function resetCart(){
        commerce.cart.delete().then((response) => {
            console.log(response)
            window.location.href='<?= base_url(); ?>';
        });
    }
</script>