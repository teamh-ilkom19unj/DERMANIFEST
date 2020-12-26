<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row space"></div>

<!--isi konten nya di siniii-->
<div class="container">
    <h1>Care Guide</h1>
    <h3>Konten Kamu</h3>
    <br>
    <br>
    <h1 class="text-center hasil">Berikut Ini Artikel yang Cocok Buat Kamu:</h1>
    <br>
    <br>
    <div class="row">
        <?php if ($search != null) : ?>
            <?php foreach ($search as $key => $item) : ?>
                <div class="col-md-6">
                   <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/coverartikel/<?= $item->banner; ?>" alt="<?= $item->nama; ?>">
                        <div class="card-body">
                            <a href="#" class="link">
                                <h5><?= $item->nama; ?></h5>
                            </a>
                            <p class="card-text"><?= $item->konten; ?></p>
                        </div>
                    </div>
                </div> 
        <?php endforeach; ?>

        <?php else : ?>
            <!-- Data Kosong -->
            Data Artikel Kosong
        <?php endif; ?>
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

    app.get('/api/skin', ((req, res) => {
        const semua_warna = 'semua_warna';
        const kondisi_kusam = 'kondisi_kusam';
        const kondisi_skintighteining = 'kondisi_skintighteining';
        const kondisi_aging = 'kondisi_aging';
        const kondisi_flek = 'kondisi_flek';
        const kondisi_komedo = 'kondisi_komedo';
        const kondisi_poribesar = 'kondisi_poribesar';
        const kondisi_jerawat = 'kondisi_jerawat';
        const jenis_kering = 'jenis_kering';
        const jenis_normal = 'jenis_normal';
        const jenis_sensitif = 'jenis_sensitif';
        const jenis_minyak = 'jenis_minyak';
        const jenis_kombinasi = 'jenis_kombinasi';
        const jenis_semua = 'jenis_semua';

        let obj = [{
                title: 'Menghindari Kulit Kering dan Kusam yuk intip caranya',
                url: "https://www.hipwee.com/list/menghindari-kulit-kering-dan-kusam-yuk-intip-caranya/",
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_kusam],
                    type: [jenis_normal, jenis_kering],
                }
            },
            {
                title: 'Mencegah kerutan di wajah',
                url: 'https://www.hipwee.com/tips/mencegah-kerutan-di-wajah/\n',
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_skintighteining, kondisi_aging, kondisi_flek],
                    type: [jenis_semua],
                }
                // tags: [semua_warna, kondisi_skintighteining, kondisi_aging, kondisi_flek, jenis_semua]
            },
            {
                title: 'Cara menghilangkan komedo',
                url: 'https://www.hipwee.com/tips/cara-menghilangkan-komedo/',
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_komedo, kondisi_poribesar],
                    type: [jenis_semua],
                }
                // tags: [semua_warna, kondisi_komedo, kondisi_poribesar, jenis_semua]
            },
            {
                title: 'Cara mengecilkan pori pori',
                url: 'https://www.hipwee.com/tips/cara-mengecilkan-pori-pori/\n',
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_komedo, kondisi_poribesar, kondisi_jerawat],
                    type: [jenis_semua],
                }
                // tags: [semua_warna, kondisi_komedo, kondisi_poribesar, kondisi_jerawat, jenis_semua]
            },
            {
                title: 'Skincare untuk kulit sensitif',
                url: 'https://www.hipwee.com/narasi/skincare-untuk-kulit-sensitif/\n',
                tagsColor: [semua_warna],
                tagsCondition: [kondisi_jerawat, kondisi_komedo, kondisi_poribesar, kondisi_kusam],
                tagsType: [jenis_sensitif],
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_jerawat, kondisi_komedo, kondisi_poribesar, kondisi_kusam],
                    type: [jenis_sensitif],
                }
                // tags: [semua_warna, kondisi_jerawat, kondisi_komedo, kondisi_poribesar, kondisi_kusam, jenis_sensitif]
            },
            {
                title: "Do's and don't kulit berminyak",
                url: 'https://www.hipwee.com/tips/dos-and-dont-kulit-berminyak/',
                tagsColor: [semua_warna],
                tagsCondition: [kondisi_jerawat, kondisi_komedo, kondisi_poribesar, kondisi_kusam, kondisi_flek],
                tagsType: [jenis_minyak, jenis_kombinasi, jenis_sensitif],
                tags: {
                    color: [semua_warna],
                    condition: [kondisi_jerawat, kondisi_komedo, kondisi_poribesar, kondisi_kusam, kondisi_flek],
                    type: [jenis_minyak, jenis_kombinasi, jenis_sensitif],
                }
                // tags: [semua_warna, kondisi_jerawat, kondisi_poribesar, kondisi_kusam, kondisi_flek, kondisi_komedo, jenis_minyak, jenis_kombinasi, jenis_sensitif]
            }
        ];
        let result = [];
        let params = ['color', 'condition', 'type'];
        params.forEach((param, k) => {
            let s = obj.filter(v => v.tags[param].includes(req.query[param]));
            result.push(...new Set(s));
        });
        result = [...new Set(result)];
        res.status(200).json(result);
    }));
</script>