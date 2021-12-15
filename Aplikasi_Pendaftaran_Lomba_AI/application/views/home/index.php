<?php if ($this->session->flashdata("hapus")) {
    echo "<script>alert('" . $this->session->flashdata("hapus") .  "');</script>";
} ?>
<div id="carouselExampleCaptions" class="carousel slide hero" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 mx-auto" src="<?= base_url("assets/img/gambar1.jpg"); ?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>SELAMAT DATANG PESERTA LOMBA AI </h1>
                <a class="btn btn-primary btn-lg" href=" <?= ('home/register'); ?>" role="button"> JOIN NOW ! </a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mx-auto" src="<?= base_url("assets/img/robot.jpg"); ?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>SELAMAT DATANG PESERTA LOMBA AI </h1>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mx-auto" src="<?= base_url("assets/img/gambar2.png"); ?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>