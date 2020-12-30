<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="my-container">
    <div class="row space"></div>
    <div class="row title text-center">
        <div class="col-md-12">
            <h1>User Acceptance & Satisfaction Survey</h1>
            <h5>Terima Kasih sudah mendaftar dan menggunakan fitur yang ada di Dermanifest.
                Yuk, bantu kami untuk mengisi kuesioner tentang kepuasan Anda selama menggunakan web app ini!</h5>
        </div>
    </div>

    <div class="form-check">
        <form action="<?= base_url(); ?>feedback/simpan" method="POST">
            <div class="form-group">
                <label for="inputNama">Nama</label>
                <input type="text" name="nama" class="form-control" id="inputNama" value="<?= $this->session->userdata('nama'); ?>" placeholder="Nama Anda" required>
            </div>
            <h4>1. Seberapa puaskah Anda terhadap fitur-fitur yang ada Web kami?</h4>
            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_1" id="pertanyaan1-jawaban1" value="1" required>
                <label class="form-check-label" for="pertanyaan1-jawaban1">
                    Tidak Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_1" id="pertanyaan1-jawaban2" value="2">
                <label class="form-check-label" for="pertanyaan1-jawaban2">
                    Kurang Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_1" id="pertanyaan1-jawaban3" value="3">
                <label class="form-check-label" for="pertanyaan1-jawaban3">
                    Cukup Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_1" id="pertanyaan1-jawaban4" value="4">
                <label class="form-check-label" for="pertanyaan1-jawaban4">
                    Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_1" id="pertanyaan1-jawaban5" value="5">
                <label class="form-check-label" for="pertanyaan1-jawaban5">
                    Sangat Puas
                </label>
            </div>

            <h4>2. Seberapa puaskah Anda terhadap desain Web kami?</h4>
            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_2" id="pertanyaan2-jawaban1" value="1" required>
                <label class="form-check-label" for="pertanyaan2-jawaban1">
                    Tidak Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_2" id="pertanyaan2-jawaban2" value="2">
                <label class="form-check-label" for="pertanyaan2-jawaban2">
                    Kurang Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_2" id="pertanyaan2-jawaban3" value="3">
                <label class="form-check-label" for="pertanyaan2-jawaban3">
                    Cukup Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_2" id="pertanyaan2-jawaban4" value="4">
                <label class="form-check-label" for="pertanyaan2-jawaban4">
                    Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_2" id="pertanyaan2-jawaban5" value="5">
                <label class="form-check-label" for="pertanyaan2-jawaban5">
                    Sangat Puas
                </label>
            </div>

            <h4>3. Seberapa puaskah Anda dengan alur interaksi yang ada di Web kami?</h4>
            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_3" id="pertanyaan3-jawaban1" value="1" required>
                <label class="form-check-label" for="pertanyaan3-jawaban1">
                    Tidak Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_3" id="pertanyaan3-jawaban2" value="2">
                <label class="form-check-label" for="pertanyaan3-jawaban2">
                    Kurang Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_3" id="pertanyaan3-jawaban3" value="3">
                <label class="form-check-label" for="pertanyaan3-jawaban3">
                    Cukup Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_3" id="pertanyaan3-jawaban4" value="4">
                <label class="form-check-label" for="pertanyaan3-jawaban4">
                    Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_3" id="pertanyaan3-jawaban5" value="5">
                <label class="form-check-label" for="pertanyaan3-jawaban5">
                    Sangat Puas
                </label>
            </div>

            <h4>4. Seberapa puaskah Anda dengan penyelesaian masalah (tentang pemakaian skincare) yang diberikan oleh Web kami?</h4>
            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_4" id="pertanyaan4-jawaban1" value="1" required>
                <label class="form-check-label" for="pertanyaan4-jawaban1">
                    Tidak Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_4" id="pertanyaan4-jawaban2" value="2">
                <label class="form-check-label" for="pertanyaan4-jawaban2">
                    Kurang Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_4" id="pertanyaan4-jawaban3" value="3">
                <label class="form-check-label" for="pertanyaan4-jawaban3">
                    Cukup Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_4" id="pertanyaan4-jawaban4" value="4">
                <label class="form-check-label" for="pertanyaan4-jawaban4">
                    Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_4" id="pertanyaan4-jawaban5" value="5">
                <label class="form-check-label" for="pertanyaan4-jawaban5">
                    Sangat Puas
                </label>
            </div>

            <h4>5. Secara keseluruhan, seberapa besar kemungkinan Anda merekomendasikan Web kami kepada teman atau kolega?</h4>
            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_5" id="pertanyaan5-jawaban1" value="1" required>
                <label class="form-check-label" for="pertanyaan5-jawaban1">
                    Tidak Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_5" id="pertanyaan5-jawaban2" value="2">
                <label class="form-check-label" for="pertanyaan5-jawaban2">
                    Kurang Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_5" id="pertanyaan5-jawaban3" value="3">
                <label class="form-check-label" for="pertanyaan5-jawaban3">
                    Cukup Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_5" id="pertanyaan5-jawaban4" value="4">
                <label class="form-check-label" for="pertanyaan5-jawaban4">
                    Puas
                </label>
            </div>

            <div class="form-group mb-1">
                <input class="form-check-input" type="radio" name="jwb_5" id="pertanyaan5-jawaban5" value="5">
                <label class="form-check-label" for="pertanyaan5-jawaban5">
                    Sangat Puas
                </label>
            </div>


            <button class="btn btn-primary simpan" type="submit" name="submit-btn" value="simpan">Submit</button>
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
            document.getElementById("top").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<script type="text/javascript" src="https://cdn.chec.io/v2/commerce.js"></script>
<script>
    //Menampilkan jumlah item dalam cart\
    const commerce = new Commerce('<?= COMMERCE_KEY; ?>', true);
    const cart_id = localStorage.getItem('cart');

    commerce.cart.retrieve(cart_id).then((cart) => {
        localStorage.setItem('cart', cart.id)
        console.log(cart)

        document.querySelector('#jml-item').innerHTML = `<div class="material-icons-outlined">shopping_cart</div> Cart: ${cart.total_items}`;
    });
</script>
