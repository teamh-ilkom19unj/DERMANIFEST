<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<!--space-->
<div class="row space"></div>

<!--isi konten nya di siniii-->
<div class="row my-container">
    <div class="col-12 text-center">
        <h1>Comparison</h1>
    </div>

    <div class="col-md-6 text-center compare1">
        <h3 class="prod1-name">Produk 1</h3>
        <img class="prod1-img" src="<?= base_url(); ?>assets/images/prod_pic_temp.png">
        <div class="search-prod1 text-center">
            <select class="select2-selector" name="seacrh-prod1" style="width: 320px;" placeholder="Cari Produk 1...">
                <option></option>
            </select>
        </div>
        <div class="card" style="width: 18rem; margin: 20px auto !important;">
            <ul class="list-group list-group-flush compare-item-prod1">
                <li class="list-group-item"><b class="prod1-name">NAMA PRODUK 1</b></li>
                <li class="list-group-item paraben">
                    <span></span>
                    Paraben Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Paraben adalah pengawet yang umum digunakan di industri kosmetik dan produk pembersih. Sampo, sabun, deodoran, pelembap, tabir surya, lipstik, dan maskara adalah beberapa contoh produk yang sering kali mengandung paraben.">?</button>
                </li>
                <li class="list-group-item alcohol">
                    <span></span>
                    Alcohol Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Alkohol memiliki bermacam-macam jenis dan manfaat. Namun bila digunakan secara terus menerus, produk skincare berbahan alkohol juga bisa berefek buruk bagi kulit wajahmu. Alkohol mengganggu fungsi lapisan sebum pelindung alami kulit dan Alkohol dapat menyebabkan sel kulit menjadi mati.">?</button></li>
                <li class="list-group-item silicone">
                    <span></span>
                    Silicone Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Silikon merupakan senyawa kimia buatan manusia yang terbuat dari mineral alami. Meski terlihat aman, silikon juga punya efek samping untuk kulit seperti: Memicu timbulnya jerawat dan Menghalangi penyerapan produk lain.">?</button></li>
                <li class="list-group-item fungal">
                    <span></span>
                    Fungal Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Fungal acne adalah &quot;jerawat&quot; yang disebabkan oleh pertumbuhan jamur Malassezia secara berlebihan pada folikel rambut. Bentuk fungal acne pada kulit menyerupai jerawat pada umumnya, yakni berukuran kecil seperti komedo putih disertai dengan rasa gatal. Penting untuk menggunakan produk skincare untuk fungal acne yang tepat agar jerawat jamur dapat hilang sepenuhnya.">?</button>
                </li>
                <li class="list-group-item sulfate">
                    <span></span>
                    Sulfate Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Sulfate Free adalah suatu kandungan yang merupakan foaming agent (mampu menimbulkan busa) dan biasa dipakai pada produk seperti pembersih wajah, sampo, dan pasta gigi. Sulfat dihindari oleh sebagaian orang karena dapat menyebabkan kulit dehidrasi, kering, dan berpotensi merusak lapisan pelindung kulit.">?</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 text-center compare2">
        <h3 class="prod2-name">Produk 2</h3>
        <img class="prod2-img" src="<?= base_url(); ?>assets/images/prod_pic_temp.png">
        <div class="search-prod2">
            <select class="select2-selector" name="seacrh-prod2" style="width: 320px;" placeholder="Cari Produk 2...">
                <option></option>
            </select>
        </div>
        <div class="card" style="width: 18rem; margin: 20px auto !important;">
            <ul class="list-group list-group-flush compare-item-prod2">
                <li class="list-group-item"><b class="prod2-name">NAMA PRODUK 2</b></li>
                <li class="list-group-item paraben">
                    <span></span>
                    Paraben Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Paraben adalah pengawet yang umum digunakan di industri kosmetik dan produk pembersih. Sampo, sabun, deodoran, pelembap, tabir surya, lipstik, dan maskara adalah beberapa contoh produk yang sering kali mengandung paraben.">?</button>
                </li>
                <li class="list-group-item alcohol">
                    <span></span>
                    Alcohol Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Alkohol memiliki bermacam-macam jenis dan manfaat. Namun bila digunakan secara terus menerus, produk skincare berbahan alkohol juga bisa berefek buruk bagi kulit wajahmu. Alkohol mengganggu fungsi lapisan sebum pelindung alami kulit dan Alkohol dapat menyebabkan sel kulit menjadi mati.">?</button></li>
                <li class="list-group-item silicone">
                    <span></span>
                    Silicone Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Silikon merupakan senyawa kimia buatan manusia yang terbuat dari mineral alami. Meski terlihat aman, silikon juga punya efek samping untuk kulit seperti: Memicu timbulnya jerawat dan Menghalangi penyerapan produk lain.">?</button></li>
                <li class="list-group-item fungal">
                    <span></span>
                    Fungal Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Fungal acne adalah &quot;jerawat&quot; yang disebabkan oleh pertumbuhan jamur Malassezia secara berlebihan pada folikel rambut. Bentuk fungal acne pada kulit menyerupai jerawat pada umumnya, yakni berukuran kecil seperti komedo putih disertai dengan rasa gatal. Penting untuk menggunakan produk skincare untuk fungal acne yang tepat agar jerawat jamur dapat hilang sepenuhnya.">?</button>
                </li>
                <li class="list-group-item sulfate">
                    <span></span>
                    Sulfate Free
                    <button class="tool-tip" data-toggle="tooltip" data-placement="bottom" title="Sulfate Free adalah suatu kandungan yang merupakan foaming agent (mampu menimbulkan busa) dan biasa dipakai pada produk seperti pembersih wajah, sampo, dan pasta gigi. Sulfat dihindari oleh sebagaian orang karena dapat menyebabkan kulit dehidrasi, kering, dan berpotensi merusak lapisan pelindung kulit.">?</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- 
    <div class="col-12 text-center compare-btn">
        <button>Compare</button>
    </div> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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

<!--------COMMERCE.JS---------->
<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script>
    $('.select2-selector').select2({
        width: 'resolve',
        placeholder: 'Pilih produk'
    });
    $('.select2-selector').next('.select2-container').hide();
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);
    var productList = [];
    commerce.products.list().then((products) => {
        if (products.data.length > 0)
            products.data.forEach(item => {
                // var newOption = new Option(item.name, item.id, false, false);
                // $('.select2-selector').append(newOption).trigger('change');
                $('.select2-selector').append('<option value="' + item.id + '" data-img="' + item.media.source + '">' + item.name + '</option>').trigger('change');
                if ($('.select2-selector')[0].children.length == products.data.length)
                    $('.select2-selector').next('.select2-container').show();
            });
        else
            $('.select2-selector').next('.select2-container').show();
    });

    $('[name="seacrh-prod1"]').on('select2:select', function(e) {
        var data = e.params.data;
        $('.prod1-name').html(data.text);
        $('.prod1-img').attr('src', data.element.dataset.img);

        $.ajax({
            type: "GET",
            url: "<?= base_url(); ?>product/get",
            data: {
                'id': data.id
            },
            dataType: "json",
            success: function(response, status, xhr) {
                if (status === 'success') {
                    $.each(response, function(k, v) {
                        if (k != 'id' && k != 'nama_prod') {
                            if (v == '1')
                                $('.compare-item-prod1 .' + k + ' span').html('<i class="fa fa-check text-success fa-2x" aria-hidden="true"></i>');
                            else
                                $('.compare-item-prod1 .' + k + ' span').html('<i class="fa fa-times text-danger fa-2x" aria-hidden="true"></i>');
                        }
                    })
                } else {
                    //ERROR MESSAGE ON STATUS NOT 200
                }
            },
            failure: function(response) {
                //ERROR MESSAGE ON FAILURE
            }
        });
    });

    $('[name="seacrh-prod2"]').on('select2:select', function(e) {
        var data = e.params.data;
        $('.prod2-name').html(data.text);
        $('.prod2-img').attr('src', data.element.dataset.img);

        $.ajax({
            type: "GET",
            url: "<?= base_url(); ?>product/get",
            data: {
                'id': data.id
            },
            dataType: "json",
            success: function(response, status, xhr) {
                if (status === 'success') {
                    $.each(response, function(k, v) {
                        if (k != 'id' && k != 'nama_prod') {
                            if (v == 1)
                                $('.compare-item-prod2 .' + k + ' span').html('<i class="fa fa-check text-success fa-2x" aria-hidden="true"></i>');
                            else
                                $('.compare-item-prod2 .' + k + ' span').html('<i class="fa fa-times text-danger fa-2x" aria-hidden="true"></i>');
                        }
                    })
                } else {
                    //ERROR MESSAGE ON STATUS NOT 200
                }
            },
            failure: function(response) {
                //ERROR MESSAGE ON FAILURE
            }
        });
    });
</script>

<script>
    //Menampilkan jumlah item dalam cart
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
    });
</script>