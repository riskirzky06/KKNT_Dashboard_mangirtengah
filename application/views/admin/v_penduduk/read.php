<a href="<?php echo site_url('Penduduk/create') ?>">
    <button type="button" name="button" title="untuk menambah data">Tambah</button>
</a>

<table border="1" width="70%">
    <tr>
        <td>No</td>
        <td>NIK</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Pekerjaan</td>
        <td>Pendidikan</td>
        <td>RT</td>
        <td>Status</td>
        <td>Aksi</td>
    </tr>

    <?php
    $no = 1;
    //$read yang diambil dari control function index 
    foreach ($read->result_array() as $row) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row['nik'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['jenis_kelamin'] ?></td>
            <td><?php echo $row['tanggal_lahir'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['pekerjaan'] ?></td>
            <td><?php echo $row['pendidikan'] ?></td>
            <td><?php echo $row['rt'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td>
                <!--memanggil halaman edit-->
                <a href="<?php echo site_url('Penduduk/edit/'.$row['nama']) ?>" title="tombol untuk merubah data">Ubah</a> |
                <!--memanggil aksi delete-->
                <a href="<?php echo site_url('Penduduk/delete/'.$row['nik']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama']; ?>')">Hapus</a>
            </td>
        </tr>
        <?php
        $no++;
    }
    ?>
</table>
