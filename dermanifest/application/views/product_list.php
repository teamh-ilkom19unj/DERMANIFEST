<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--bagian list product-->
<div class="my-container">
    <div class="row my-content">

        <!----------------bagian produk---------------->
        <div class="col-md-12 list">
            <div class="row mar-left">
                <h1>Produk</h1>
            </div>

            <div class="row" id="wrapper">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
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
            document.getElementById("top").style.top = "-150px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<!--============================COMMERCE.JS==================================-->
<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script defer>
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);

    //Output List Produk
    commerce.products.list().then((products) => {
        console.log(products)

        let product = '';

        products.data.forEach((item) => {
            product += `<div class="col-md-4 col-sm-6 prod">
			            <div class="product-grid6">
			                <div class="product-image6">
			                    <a href="<?= base_url(); ?>product/detail?id=${item.id}">
			                        <img class="pic-1" src="${item.media.source}">
			                    </a>
			                </div>
			                <div class="product-content">
			                    <h3 class="title"><a href="#">${item.name}</a></h3>
			                    <div class="price">${item.price.formatted_with_symbol}
			                    </div>
			                </div>
			                <ul class="social">
			                    <li><a href="<?= base_url(); ?>product/detail?id=${item.id}" id="detail" data-tip="Product Detail"><i class="fa fa-search"></i></a></li>
			                    <li><a href="#" data-tip="Add to Cart" onclick="addToCart('${item.id}');"><i class="fa fa-shopping-cart"></i></a></li>
			                </ul>
			            </div>
			        </div>`;
        });

        document.querySelector('#wrapper').innerHTML = product;
    });

    //Menampilkan jumlah item dalam cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
    });

    //Add to Cart
    function addToCart(prod_id) {
        commerce.cart.add(prod_id, 1).then(json => {
            console.log(json)
        });
        commerce.cart.retrieve(cart_id).then((cart) => {
            localStorage.setItem('cart', cart.id)
            console.log(cart)

            document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;

            location.reload();
            return false;
        });
        alert("Produk sudah ditambahkan ke Cart!")
    };
</script>