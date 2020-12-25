<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<?php if ($this->session->flashdata('status') == 'success') : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('msg'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('status') == 'gagal') : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('msg'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<form action="<?= base_url(); ?>admin/simpanartikel" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama Artikel</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Artikel" maxlength="50" required>
    </div>
    <div class="form-group">
        <label for="warna">Warna Kulit</label>
        <select class="select2-selector" multiple name="warna[]" id="warna" style="width: 100%;" required>
            <option></option>
            <?php foreach ($warnaKulit as $item) : ?>
                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="jenis">Jenis Kulit</label>
        <select class="select2-selector" multiple name="jenis[]" id="jenis" style="width: 100%;" required>
            <option></option>
            <?php foreach ($jenisKulit as $item) : ?>
                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="kondisi">Kondisi Kulit</label>
        <select class="select2-selector" multiple name="kondisi[]" id="kondisi" style="width: 100%;" required>
            <option></option>
            <?php foreach ($kondisiKulit as $item) : ?>
                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="konten">Konten</label>
        <textarea class="form-control" id="konten" name="konten" rows="10" required></textarea>
    </div>

    <div class="form-group">
        <label for="banner">Gambar Cover</label>
        <input type="file" accept=".jpg,.png,.jpeg" class="form-control" id="banner" name="banner" placeholder="Pilih gambar cover" required>
    </div>

    <button class="btn btn-primary" type="submit" name="simpan-btn" value="simpan">Simpan</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $('.select2-selector').select2({
        width: 'resolve',
        placeholder: 'Pilih item'
    })

    $('#konten').summernote({
        height: "100%",
        callbacks: {
            onImageUpload: function(image) {
                uploadImage(image[0]);
            },
            onMediaDelete: function(target) {
                deleteImage(target[0].src);
            }
        }
    });

    function uploadImage(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?= base_url('admin/uploadImage') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#konten').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function deleteImage(src) {
        $.ajax({
            data: {
                src: src
            },
            type: "POST",
            url: "<?= base_url('admin/deleteImage') ?>",
            cache: false,
            success: function(response) {
                console.log(response);
            }
        });
    }
</script>