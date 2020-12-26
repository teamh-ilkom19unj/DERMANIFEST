<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-6 text-center intro">
        <h1>Selamat Datang di</h1>
        <img src="<?= base_url(); ?>assets/images/logo-big.png">
    </div>

    <div class="box-login">
        <div class="select text-center">
            <a id="defaultOpen" class="tablinks" onclick="openTab(event, 'daftar')">Daftar</a>
            <span class="vl"></span>
            <a class="tablinks sel-login" id="login-tab" onclick="openTab(event, 'login')">Log In</a>
        </div>
        <hr>
        <?php if (validation_errors() != null) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?php if ($successMsg != '') : ?>
            <div class="alert alert-success" role="alert">
                <?= $successMsg; ?>
            </div>
        <?php endif; ?>
        <?php if ($errorMsg != '') : ?>
            <div class="alert alert-danger" role="alert">
                <?= $errorMsg; ?>
            </div>
        <?php endif; ?>
        <div id="daftar" class="tabcontent">
            <form method="POST">
                <label for="nm-email"><i class="fa fa-envelope"></i>Email</label> <br>
                <input type="email" id="nm-email" name="email" maxlength="50" value="<?= $role == 'signup' ? set_value('email') : ''; ?>" required> <br>
                <label for=" nm-user"><i class="fa fa-user"></i>Username</label> <br>
                <input type="text" id="nm-user" name="username" maxlength="30" value="<?= $role == 'signup' ? set_value('username') : ''; ?>" required> <br>
                <label for="nm-user"><i class="fa fa-user"></i>Nama</label> <br>
                <input type="text" id="nm-user" name="nama" value="<?= set_value('nama'); ?>" required> <br>
                <label for="nm-pass"><i class="fa fa-lock"></i>Password</label> <br>
                <input type="password" id="nm-pass" name="password" minlength="8" required> <br>

                <input type="submit" name="sign-up-btn" value="Sign Up">
                <hr>
                <a class="text-center btn btn-outline-secondary btn-google" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png">Daftar dengan Google</a>
            </form>
        </div>

        <div id="login" class="tabcontent">
            <form method="POST">
                <label for="nm-user"><i class="fa fa-user"></i>Username / Email</label> <br>
                <input type="text" id="nm-user" name="username" value="<?= $role == 'login' ? set_value('username') : ''; ?>" required> <br>
                <label for="nm-pass"><i class="fa fa-lock"></i>Password</label> <br>
                <input type="password" id="nm-pass" name="password" required> <br>

                <input type="submit" name="login-btn" value="Log In">
                <hr>
                <a class="text-center btn btn-outline-secondary btn-google" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png">Log In dengan Google</a>
            </form>
        </div>
    </div>
</div>
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

    <?php if ($role == 'login') : ?>
        document.getElementById("login-tab").click();
    <?php else : ?>
        document.getElementById("defaultOpen").click();
    <?php endif; ?>
</script>