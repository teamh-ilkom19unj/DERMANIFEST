<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--isi konten nya di siniii-->
<div class="my-container">
    <div class="row product">
        <div class="col-6 text-center product-pic" id="product-image">
            FOTO PRODUK
        </div>
        <div class="col-6 product-detail">
            <div class="nama" id="product-name">

            </div>
            <div class="harga" id="product-price">

            </div>
            <div class="stock" id="product-stock">

            </div>
            <span id="add-cart"><button class="cart-btn">Tambahkan ke Cart</button> <br></span>
        </div>
    </div>

    <div class="description">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'deskripsi')" id="defaultOpen">DESKRIPSI</button>
            <button class="tablinks" onclick="openTab(event, 'ulasan')">ULASAN</button>
        </div>

        <div id="deskripsi" class="tabcontent">

        </div>

        <div id="ulasan" class="tabcontent">
            <h3>Ulasan</h3>
            <p>Sangat cocok di kulit dan mudah juga untuk digunakan.</p>
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

<!---untuk menampilkan tab detail dan ulasan---->
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>

<!----untuk menampilkan detail produk---->
<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script>
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);
    commerce.products.retrieve(window.location.search.replace('?id=', ''))
        .then((item) => {
            document.querySelector('#product-name').innerHTML = `
				<h2>${item.name}</h2>
			`;
            document.querySelector('#product-price').innerHTML = item.price.formatted_with_symbol;
            document.querySelector('#product-image').innerHTML = `
				<img src="${item.media.source}" />
			`;
            document.querySelector('#product-stock').innerHTML = `Stock: ${item.quantity}`;
            document.querySelector('#deskripsi').innerHTML = item.description;
            document.querySelector('#add-cart').innerHTML =
                `<button class="cart-btn" onclick="addToCart('${item.id}');">Tambahkan ke Cart</button> <br>`;
        });

    //Menampilkan jumlah item dalam cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
    });

    //Add to cart
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