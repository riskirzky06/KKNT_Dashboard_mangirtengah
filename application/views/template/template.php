<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Desa Mangir</title>
</head>

<body>
    <a href="<?php echo site_url('Home') ?>">Beranda</a> |
    <a href="<?php echo site_url('Admin') ?>">Data Admin</a> |
    <a href="<?php echo site_url('Kategori') ?>">Data Penduduk</a> |
    <a href="<?php echo site_url('Berita') ?>">Data UMKM</a> |
    <a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
    <hr>
    <?php echo $judul;
    echo '<small>';
    echo ' >> ';
    echo $sub;
    echo '</small>'; ?>
    <p></p>

    <!--isi content-->
    <?php echo $contents ?>
    <!--end isi content-->

</body>

</html>