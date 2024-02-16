<form class="" action="<?php echo site_url(
    'Umkm/update/' . $edit['id']
) ?>" method="post">

    <label>Nama Usaha</label><br>
    <input type="text" name="nama_perusahaan" value="<?php echo $edit['nama_perusahaan'] ?>">
    <p></p>

    <label>Pemilik</label><br>
    <input type="text" name="pemilik" value="<?php echo $edit['pemilik'] ?>">
    <p>
    </p>

    <label>Alamat</label><br>
    <input type="text" name="alamat" value="<?php echo $edit['alamat'] ?>">
    <p>
    </p>

    <label>Foto</label><br>
    <input type="text" name="foto" value="<?php echo $edit['foto'] ?>">
    <p>
    </p>
    <label>Keterangan</label><br>
    <input type="text" name="keterangan" value="<?php echo $edit['keterangan'] ?>">
    <p>
    </p>
    
    <button type="submit" name="button">Perbaharui</button>
    <a href="<?php echo site_url('Umkm') ?>"><button type="button" name="button">Batal</button></a>
</form>