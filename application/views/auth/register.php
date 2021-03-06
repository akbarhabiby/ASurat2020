    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="<?= base_url('auth/register'); ?>" class="login100-form validate-form">
                    <span class="login100-form-title p-b-48">
                        <i class="">ASurat</i>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter Your Name">
                        <input class="input100" type="text" name="fullname">
                        <span class="focus-input100" data-placeholder="Nama Lengkap"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username"><?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Kamu sudah punya akun?
                        </span>
                        <br>
                        <a class="txt2" href="<?= base_url('') ?>auth">
                            ← Kembali ke Login
                            <br>
                    </div>
                </form>
            </div>
        </div>
    </div>