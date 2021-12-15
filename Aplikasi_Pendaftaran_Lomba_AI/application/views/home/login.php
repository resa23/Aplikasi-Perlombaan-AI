<div class="container mb-5 mt-5" id="login">
    <div class="row justify-content-center">
        <div class="col">
            <h3 style="display: flex; justify-content: center;">LOGIN</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <h4 style="display: flex; justify-content: center;">SILAKAN LOGIN TERLEBIH DAHULU</h4>
        </div>
    </div>
    <?php if ($this->session->flashdata("daftar")) { ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata("daftar"); ?>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata("login-gagal")) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $this->session->flashdata("login-gagal"); ?>
        </div>
    <?php } ?>

    <div class="row justify-content-center">
        <div class="col-4 bg-light justify-content-center pb-5">
            <div class="row">
                <h1><i class="bi bi-people-fill mx-auto pl-3"></i></h1>

            </div>
            <div class="row">
                <div class="container">
                    <?= form_open('home/login_peserta'); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="tbl_login">Submit</button>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>