<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-PAKER | REGISTER</title>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/pati1.png" />
    
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?=base_url();?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/login/css/style.css">

    <!-- SweetAlert -->
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Di dalam <head> atau sebelum </body> -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <?php if ($this->session->flashdata('validation_errors')){ ?>
    <script>
    swal({
        title: "Gagal Mendaftar",
        text: "Silahkan Isi Semua Data Form",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('recaptcha_err')){ ?>
    <script>
    swal({
        title: "Gagal Mendaftar",
        text: "SMasukkan Re-Captcha",
        icon: "error"
    });
    </script>
    <?php } ?>
    
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Terdaftar!",
        text: "Silahkan Anda Login!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('password_err')){ ?>
    <script>
    swal({
        title: "Error Password!",
        text: "Ketik Ulang Password!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        
                        <form method="POST" class="register-form" id="register-form"
                            action="<?= base_url();?>Register/proses_user">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lf2PVEpAAAAAGLeJIlJKRM6GvcYUETLPiI3a2qY"></div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?=base_url();?>assets/login/images/registrasi.jpg" alt="sing up image">
                        </figure>
                        <a href="<?=base_url();?>Login/login_user" class="signup-image-link">Saya sudah terdaftar</a>
                        <br>
                        <a href="<?=base_url();?>web_public" class="signup-image-link">Kembali Ke Beranda</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?=base_url();?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>