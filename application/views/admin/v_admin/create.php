<form class="" action="<?php echo site_url('Admin/save') ?>" method="post">
    <label>Username</label><br>
    <input type="text" name="username" value="">
    <p></p>

    <label>Password</label><br>
    <input type="text" name="password" value="">
    <p>
    </p>
    <button type="submit" name="button">Simpan</button>
    <a href="<?php echo site_url('Admin') ?>">
        <button 
            type="button" 
            name="button">Batal
        </button>
    </a>

</form>