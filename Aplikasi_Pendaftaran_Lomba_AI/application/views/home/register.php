<div class="container mt-5">
    <?= form_open_multipart('home/tambah_peserta'); ?>
    <div class="form-group">
        <label for="exampleInputPassword1"> Nama </label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Masukkan Nama Lengkap Anda" name="nama" value="<?= set_value('nama'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jenkel" value="<?= set_value('jenkel'); ?>">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('jenkel'); ?></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Asal Sekolah </label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Masukkan Asal sekolah Anda" name="sekolah" value="<?= set_value('sekolah'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('sekolah'); ?></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">No HP</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Masukkan No HP Anda" name="nohp" value="<?= set_value('nohp'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('nohp'); ?></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Alamat</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Masukkan Alamat Lengkap Anda" name="alamat" value="<?= set_value('alamat'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat'); ?></small>
    </div>
    <div class="form-group">
        <label> Ide Lomba </label>
        <textarea class="form-control" rows="3" name="ide"> <?= set_value('ide'); ?></textarea>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('ide'); ?></small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Masukkan Alamat Email Anda" name="email" value="<?= set_value('email'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Masukkan Pasword Anda" name="password" value="<?= set_value('password'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
    </div>
    <div>
        <input type="file" name="foto" id="foto" value="<?= set_value('foto'); ?>">
        <small id="emailHelp" class="form-text text-danger"><?= form_error('foto'); ?></small>
    </div>
    <div class="mt-4 mb-4">
        <button type="submit" class="btn btn-dark"> SIMPAN </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
    <?php form_close(); ?>
</div>