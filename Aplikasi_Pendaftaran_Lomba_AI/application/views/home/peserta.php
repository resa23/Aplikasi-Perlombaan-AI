<?php if ($this->session->flashdata("edit")) { ?>
    <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata("edit"); ?>
    </div>
<?php } ?>
<?php if (isset($_SESSION['email'])) { ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data Anda
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Foto</th>
                            <th> Nama </th>
                            <th> Asal Sekolah </th>
                            <th> Ide Perlombaan </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="20%"> <img src="<?= base_url("assets/img/" . $login['foto']); ?>" alt="" style="width: 100%;"> </td>
                            <td> <?= $login['nama']; ?> </td>
                            <td> <?= $login['asal_sekolah']; ?> </td>
                            <td> <?= $login['ide']; ?> </td>
                            <td>
                                <a href="<?= base_url("home/edit/" . $login['id']); ?>" class="btn btn-success">Edit</a>
                                <form action="<?= base_url("home/delete"); ?>" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $login['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Semua Peserta
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> Foto</th>
                        <th> Nama </th>
                        <th> Asal Sekolah </th>
                        <th> Ide Perlombaan </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peserta as $p) { ?>
                        <tr>
                            <td width="20%"> <img src="<?= base_url("assets/img/" . $p['foto']); ?>" alt="" style="width: 100%;"> </td>
                            <td> <?= $p['nama']; ?> </td>
                            <td> <?= $p['asal_sekolah']; ?> </td>
                            <td> <?= $p['ide']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>