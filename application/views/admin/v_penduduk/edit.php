<form class="" action="<?php echo site_url(
    'Penduduk/update/' . $edit['nik']
) ?>" method="post">

    <label>NIK</label><br>
    <input type="text" name="nik" value="<?php echo $edit['nik'] ?>"><br><br>

    <label>Nama</label><br>
    <input type="text" name="nama" value="<?php echo $edit['nama'] ?>"><br><br>

    <label>Jenis Kelamin</label><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki" <?php if ($edit['jenis_kelamin'] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if ($edit['jenis_kelamin'] == "Perempuan") echo "selected"; ?>>Perempuan</option>
    </select><br><br>

    <label>Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" value="<?php echo $edit['tanggal_lahir'] ?>"><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"><?php echo $edit['alamat'] ?></textarea><br><br>

    <label>Pekerjaan</label><br>
    <input type="text" name="pekerjaan" value="<?php echo $edit['pekerjaan'] ?>"><br><br>

    <label>Pendidikan</label><br>
    <input type="text" name="pendidikan" value="<?php echo $edit['pendidikan'] ?>"><br><br>

    <label>RT</label><br>
    <select name="rt">
        <option value="RT 01" <?php if ($edit['rt'] == "RT 01") echo "selected"; ?>>RT 01</option>
        <option value="RT 02" <?php if ($edit['rt'] == "RT 02") echo "selected"; ?>>RT 02</option>
        <option value="RT 03" <?php if ($edit['rt'] == "RT 03") echo "selected"; ?>>RT 03</option>
        <option value="RT 04" <?php if ($edit['rt'] == "RT 04") echo "selected"; ?>>RT 04</option>
    </select><br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="Tetap" <?php if ($edit['status'] == "Tetap") echo "selected"; ?>>Tetap</option>
        <option value="Pindah" <?php if ($edit['status'] == "Pindah") echo "selected"; ?>>Pindah</option>
        <option value="Almarhum" <?php if ($edit['status'] == "Almarhum") echo "selected"; ?>>Almarhum</option>
    </select><br><br>

    <button type="submit" name="button">Perbaharui</button>
    <a href="<?php echo site_url('Penduduk') ?>"><button type="button" name="button">Batal</button></a>
</form>
