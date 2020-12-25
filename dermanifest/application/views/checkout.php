<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div id="top">

    <!--nav di bawah header-->
    <div class="d-block nav">
        <div class="row justify-content-center isi-nav">
            <div class="col-md-12 flex-left nav-home">
                <h6>Pembayaran Anda aman. Info lebih lanjut hubungi teamhilkom19unj@gmail.com</h6>
            </div>
        </div>
    </div>
</div>

<!--space-->
<div class="row space"></div>

<!--isi konten nya di siniii-->
<div class="row my-container">
    <div class="col-md-5 order-first order-md-2">
        <div class="col-12 summary-wrapper">
            <h3>Ringkasan Pesanan</h3>
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
        </div>
    </div>

    <div class="col-md-7 checkout-wrapper">
        <h3>Form Pemesanan</h3>
        <hr>
        <form class="needs-validation" novalidate action="#" name="checkout" method="post" data-checkout-token="">

            <!-------Nama Customer------->
            <div class="form-row collect cstm-nm" data-collecting="customer-name">
                <div class="col-12 title">Nama</div>
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Nama Depan" name="customer[firstname]" required>
                    <div class="invalid-feedback">Nama depan masih kosong.</div>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Nama Belakang" name="customer[lastname]" required>
                    <div class="invalid-feedback">Nama belakang masih kosong.</div>
                </div>
            </div>

            <!-------Email Customer------->
            <div class="form-row collect" data-collecting="customer-email">
                <div class="col-12 title">Email</div>
                <div class="col-12">
                    <input class="form-control" type="text" placeholder="nama@domain.com" name="customer[email]" required>
                    <div class="invalid-feedback">Email masih kosong.</div>
                </div>
            </div>

            <!-------Alamat Pengiriman------->
            <div class="form-row collect address" data-collecting="shipping-address">
                <div class="col-12 title">Alamat Pengiriman</div>
                <div class="col-12 no-margin-top">
                    <input class="form-control" type="text" placeholder="Nama Penerima (Nama Lengkap)" name="shipping[name]" required>
                    <div class="invalid-feedback">Nama penerima masih kosong.</div>
                </div>
                <div class="col-12">
                    <input class="form-control" type="text" value="Indonesia" placeholder="Indonesia" readonly>
                    <input type="hidden" value="ID" name="shipping[country]" required>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-12">
                    <input class="form-control" type="text" placeholder="Alamat Jalan" name="shipping[street]" required>
                    <div class="invalid-feedback">Alamat jalan masih kosong.</div>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" placeholder="Kota" name="shipping[town_city]" required>
                    <div class="invalid-feedback">Kota masih kosong.</div>
                </div>
                <div class="col-4">
                    <select class="form-control plh-prov" name="shipping[county_state]" required>
                        <option disabled="" selected="" value="">Provinsi</option>
                        <option value="AC">Aceh</option>
                        <option value="BA">Bali</option>
                        <option value="BT">Banten</option>
                        <option value="BE">Bengkulu</option>
                        <option value="GO">Gorontalo</option>
                        <option value="JK">Jakarta Raya</option>
                        <option value="JA">Jambi</option>
                        <option value="JWU">Jawa</option>
                        <option value="JB">Jawa Barat</option>
                        <option value="JT">Jawa Tengah</option>
                        <option value="JI">Jawa Timur</option>
                        <option value="KAU">Kalimantan</option>
                        <option value="KB">Kalimantan Barat</option>
                        <option value="KS">Kalimantan Selatan</option>
                        <option value="KT">Kalimantan Tengah</option>
                        <option value="KI">Kalimantan Timur</option>
                        <option value="KU">Kalimantan Utara</option>
                        <option value="BB">Kepulauan Bangka Belitung</option>
                        <option value="KR">Kepulauan Riau</option>
                        <option value="LA">Lampung</option>
                        <option value="MA">Maluku</option>
                        <option value="MAU">Maluku</option>
                        <option value="NUU">Nusa Tenggara</option>
                        <option value="NB">Nusa Tenggara Barat</option>
                        <option value="NT">Nusa Tenggara Timur</option>
                        <option value="PA">Papua</option>
                        <option value="PB">Papua Barat</option>
                        <option value="RI">Riau</option>
                        <option value="SLU">Sulawesi</option>
                        <option value="SR">Sulawesi Barat</option>
                        <option value="SN">Sulawesi Selatan</option>
                        <option value="ST">Sulawesi Tengah</option>
                        <option value="SG">Sulawesi Tenggara</option>
                        <option value="SA">Sulawesi Utara</option>
                        <option value="SMU">Sumatera</option>
                        <option value="SB">Sumatera Barat</option>
                        <option value="SS">Sumatera Selatan</option>
                        <option value="SU">Sumatera Utara</option>
                        <option value="YO">Yogyakarta</option>
                    </select>
                    <div class="invalid-feedback">Pilih Provinsi Anda!</div>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" placeholder="Kode Pos / Zip" name="shipping[postal_zip_code]" required>
                    <div class="invalid-feedback">Kode Pos / Zip masih kosong.</div>
                </div>
            </div>

            <hr class="beda">

            <!-------Pembayaran------->
            <div class="form-row collect payment" data-collecting="payment">
                <div class="col-12 title no-margin-top">Nomor Kartu Kredit</div>
                <div class="col-12 input-group">
                    <input class="card-number form-control" name="payment[card][number]" placeholder="4242 4242 4242 4242" type="tel" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="invalid-feedback">Nomor kartu kredit masih kosong.</div>
                </div>
                <div class="col-4">
                    <div class="title">Kadaluarsa</div>
                </div>
                <div class="col-4">
                    <div class="title">CVC (CVV)</div>
                </div>
                <div class="col-4">
                    <div class="title">Kode Pos</div>
                </div>
                <div class="col-2">
                    <input class="form-control" type="text" name="payment[card][expiry_month]" placeholder="BB" required>
                    <div class="invalid-feedback">Bulan kadaluarsa masih kosong.</div>
                </div>

                <div class="col-2">
                    <input class="form-control" type="text" name="payment[card][expiry_year]" placeholder="TTTT" required>
                    <div class="invalid-feedback">Tahun kadaluarsa masih kosong.</div>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="payment[card][cvc]" placeholder="123" required>
                    <div class="invalid-feedback">CVC (CVV) masih kosong.</div>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="payment[card][zip]" placeholder="14210" required>
                    <div class="invalid-feedback">Kode pos masih kosong.</div>
                    <input type="text" name="temp" placeholder="temporary" required hidden>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-right">
                    <button class="btn btn-primary submit-btn" type="submit" onclick="validate();">Submit form</button>
                </div>
            </div>
        </form>
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


<!---------INPUT VALIDATION----------->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
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
					<td>${items.quantity} x</td>
					<td>${items.line_total.formatted_with_symbol}</td>
				</tr>`;
        });

        document.querySelector('#isi-item').innerHTML = item;
        document.querySelector('#total').innerHTML = cart.subtotal.formatted_with_symbol;
    });
</script>

<script>
    //=============V A L I D A T I O N=============//
    function validate() {
        var a = document.forms["checkout"]["customer[firstname]"].value;
        var b = document.forms["checkout"]["customer[lastname]"].value;
        var c = document.forms["checkout"]["customer[email]"].value;
        var d = document.forms["checkout"]["shipping[name]"].value;
        var e = document.forms["checkout"]["shipping[street]"].value;
        var f = document.forms["checkout"]["shipping[town_city]"].value;
        var g = document.forms["checkout"]["shipping[county_state]"].value;
        var h = document.forms["checkout"]["shipping[postal_zip_code]"].value;
        var i = document.forms["checkout"]["payment[card][number]"].value;
        var j = document.forms["checkout"]["payment[card][expiry_month]"].value;
        var k = document.forms["checkout"]["payment[card][expiry_year]"].value;
        var l = document.forms["checkout"]["payment[card][cvc]"].value;
        var m = document.forms["checkout"]["payment[card][zip]"].value;


        if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "" || j == "" || k == "" || l == "" || m == "") {
            alert("Data masih ada yang kosong");
            return false;
        } else {
            window.location.href = '<?= base_url(); ?>cart/checkoutsummary';
        }
    }
</script>