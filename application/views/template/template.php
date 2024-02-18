<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        nav {
            background-color: #666;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p small {
            color: #666;
        }
    </style>
</head>

<body>
    <header>
        <h1>Dusun Mangir Tengah</h1>
    </header>

    <nav>
        <a href="<?php echo site_url('Home') ?>">Beranda</a>
        <a href="<?php echo site_url('Admin') ?>">Data Admin</a>
        <a href="<?php echo site_url('Penduduk') ?>">Data Penduduk</a>
        <a href="<?php echo site_url('Umkm') ?>">Data UMKM</a>
        <a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
    </nav>

    <section>
        <h2><?php echo $judul; ?></h2>
        </p>

        <!-- isi konten -->
        <?php echo $contents; ?>
        <!-- akhir isi konten -->
    </section>
</body>

</html>
