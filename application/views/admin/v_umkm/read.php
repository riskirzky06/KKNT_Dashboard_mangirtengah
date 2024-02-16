<a href="<?php echo site_url('Umkm/create') ?>">
    <button type="button" name="button" title="untuk menambah data">Tambah</button>
</a>

<table border="1"width="70%">
    <tr>
        <td>ID</td>
        <td>Nama Usaha</td>
        <td>Pemilik</td>
        <td>Alamat</td>
        <td>Foto</td>
        <td>Keterangan</td>
        <td>Aksi</td>
    </tr>
    <?php
    
    //$read yang diambil dari control function index 
    foreach ($read->result_array() as $row) {
        ?>
        <tr>
            
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['nama_perusahaan'] ?>
            </td>
            <td>
                <?php echo $row['pemilik'] ?>
            </td>
            <td>
                <?php echo $row['alamat'] ?>
            </td>
            <td>
                <?php echo $row['foto'] ?>
            </td>
            <td>
                <?php echo $row['keterangan'] ?>
            </td>
            <td>
                <!--memanggil halaman edit atau edit.php-->
                <a href="<?php echo site_url('Umkm/edit/'.$row['id']) ?>" title="tombol utk merubah data">Ubah</a> |
                <!--memanggil aksi delete-->
                <a href="<?php echo site_url('Umkm/delete/'.$row['nama_perusahaan']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_perusahaan']; ?>')">Hapus</a>
            </td>
        </tr>
        <?php
        
    }
    ?>
</table>

