<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--------L O A D E R-------->
<div id="loading">
    <img id="loading-image" class="text-center" src="<?= base_url(); ?>assets/images/cart/loader.gif" alt="Loading..." />
</div>


<!--C O N T E N T-->
<div class="my-container text-center" id="kosong">
    <div class="ilus">
        <img src="<?= base_url(); ?>assets/images/cart/cart.svg">
    </div>

    <div class="deskripsi">
        <h1>Cart mu masih kosong. Ayo belanja dulu!</h1>
    </div>

    <div class="tombol">
        <button onclick="window.location.href='<?= base_url(); ?>product/list';">Belanja Sekarang</button>
    </div>
</div>

<div class="row cart-wrapper">
    <div class="col-10 text-left">
        <h1>Cart</h1>
    </div>
    <div class="col-12 summary-wrapper">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 40%;"><b>Item</b></th>
                    <th style="width: 20%;"><b>Quantity</b></th>
                    <th style="width: 20%;"><b>Price</b></th>
                    <th style="width: 20%;"><b><button type="button" class="btn btn-danger" id="empty-cart" onclick="emptyCart();">Kosongkan Cart</button></b></th>
                </tr>
            </thead>
            <tbody id="isi-item">

            </tbody>
            <tbody>
                <tr style="background-color: #FFE8C2;">
                    <td></td>
                    <td>Subtotal</td>
                    <td id="total">Rp0</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="checkout-btn text-right" id="chk-btn">

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#loading').delay(3800).hide(500);
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

<!---RETRIEVE CART----->
<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script>
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);

    //Untuk menampilkan isi cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        let item = '';

        cart.line_items.forEach((items) => {
            item +=
                `<tr>
						  <td>${items.name}</td>
						  <td>
						  	<input type="number" id="item_quantity" name="item_quantity" min="1" max="20" onchange="updateItem('${items.id}', $(this).val());" value="${items.quantity}">
						  </td>
						  <td>${items.line_total.formatted_with_symbol}</td>
						  <td><a onclick="deleteFromCart('${items.id}');" class="delete"><i class="fa fa-trash-o"></i> Hapus</a></td>
					   </tr>`;
        });

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
        document.querySelector('#isi-item').innerHTML = item;
        document.querySelector('#total').innerHTML = cart.subtotal.formatted_with_symbol;

        if (cart.line_items.length > 0) {
            document.querySelector('#kosong').innerHTML = `
				<div class="my-container text-center">
					<div class="ilus">
						<img src="<?= base_url(); ?>assets/images/cart/cart_terisi.svg">
					</div>

					<div class="deskripsi">
						<h1>Cart mu sudah terisi. Sudah siap untuk checkout!</h1>
					</div>
				</div>`;

            document.querySelector('#chk-btn').innerHTML = `
				<button onclick="window.location.href='<?= base_url(); ?>cart/checkout';" class="selengkapnya">Checkout</button>
				`;
        }
    });

    //Meng-update quantity item dalam cart
    function updateItem(item_id, quant) {
        commerce.cart.update(item_id, {
            quantity: quant
        }).then(response => {
            console.log(response)

            location.reload();
            return false;
        });
        alert("Jumlah item sudah diupdate!")
    }


    //Untuk menghapus item tertentu dalam cart
    function deleteFromCart(item_id) {
        commerce.cart.remove(item_id).then((response) => {
            console.log(response)

            location.reload();
            return false;
        });
        alert("Item sudah dihapus dari Cart!")
    }

    function emptyCart() {
        commerce.cart.empty().then(json => {
            console.log(json)

            location.reload();
            return false;
        });
        alert("Cart sudah dikosongkan!")
    }
</script>