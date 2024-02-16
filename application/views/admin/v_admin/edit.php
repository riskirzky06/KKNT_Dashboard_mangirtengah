<form class="" action="<?php echo site_url(
    'Admin/update/' . $edit['username']
) ?>" method="post">

    <label>Username</label><br>
    
    <input type="text" name="username" value="<?php echo $edit['username'] ?>">
    <p></p>

    <label>Password</label><br>
    <input type="text" name="password" value="<?php echo $edit['password'] ?>">
    <p>
    </p>
    <button type="submit" name="button">Perbaharui</button>
    <a href="<?php echo site_url('Admin') ?>"><button type="button" name="button">Batal</button></a>
</form>