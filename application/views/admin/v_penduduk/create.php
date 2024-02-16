<form class="" action="<?php echo site_url('Penduduk/save') ?>" method="post">
    <label>NIK</label><br>
    <input type="text" name="nik" value="">
    <br><br>

    <label>Nama</label><br>
    <input type="text" name="nama" value="">
    <br><br>

    <label>Jenis Kelamin</label><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br><br>

    <label>Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" value="">
    <br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"></textarea>
    <br><br>

    <label>Pekerjaan</label><br>
    <input type="text" name="pekerjaan" value="">
    <br><br>

    <label>Pendidikan</label><br>
    <input type="text" name="pendidikan" value="">
    <br><br>

    <label>RT</label><br>
    <select name="rt">
        <option value="RT 01">RT 01</option>
        <option value="RT 02">RT 02</option>
        <option value="RT 03">RT 03</option>
        <option value="RT 04">RT 04</option>
    </select>
    <br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="Tetap">Tetap</option>
        <option value="Pindah">Pindah</option>
        <option value="Almarhum">Almarhum</option>
    </select>
    <br><br>

    <button type="submit" name="button">Simpan</button>
    <a href="<?php echo site_url('Penduduk') ?>">
        <button type="button" name="button">Batal</button>
    </a>
</form>
