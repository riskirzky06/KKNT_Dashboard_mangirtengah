<a href="<?php echo site_url('Admin/create') ?>">
    <button type="button" name="button" title="untuk menambah data">Tambah</button></a>

<table border="1"width="70%">
    <tr>
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
        <td>Aksi</td>
    </tr>

    <?php
    $no = 1;
    //$read yang diambil dari control function index 
    foreach ($read->result_array() as $row) {
        ?>
        <tr>
            <td>
                <?php echo $no ?>
            </td>
            <td>
                <?php echo $row['username'] ?>
            </td>
            <td>
                <?php echo $row['password'] ?>
            </td>
            <td>
                <!--memanggil halaman edit atau edit.php-->
                <a href="<?php echo site_url('Admin/edit/'.$row['username']) ?>" title="tombol utk merubah data">Ubah</a> |
                <!--memanggil aksi delete-->
                <a href="<?php echo site_url('Admin/delete/'.$row['username']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['username']; ?>')">Hapus</a>
            </td>
        </tr>
        <?php
        $no++;
    }
    ?>
</table>