<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div id="top">
    <div class="d-block sticky-top header">
        <div class="row sticky-top justify-content-center isi-header">
            <div class="col-md-2 logo">
                <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.png"></a>
            </div>
            <div class="col-md-6 search">
                <input type="text" name="search-input" placeholder="&#xF002; Search skincare...">
            </div>
            <div class="col-md-2 cart">
                <a class="isi-cart" href="<?= base_url(); ?>cart" id="jml-item">
                    <div class="material-icons-outlined">shopping_cart</div>Cart: 0
                </a>
            </div>
            <?php if ($this->session->userdata('id')) : ?>
                <div class="col-md-2 account">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="material-icons-outlined">account_circle</span> Account
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Hello, Dear <?= $this->session->userdata('nama'); ?>!</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span class="material-icons-outlined">settings</span>Account Setting</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>logout"><span class="material-icons-outlined">exit_to_app</span>Logout</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!--nav di bawah header-->
    <div class="nav">
        <div class="row justify-content-center isi-nav">
            <div class="col-md-12 flex-left nav-home">
                <ul>
                    <li class="first"><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="<?= base_url(); ?>product/list">Product</a></li>
                    <li><a href="<?= base_url(); ?>product/comparison">Comparison</a></li>
                    <li><a href="<?= base_url(); ?>careguide">Care Guide</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>