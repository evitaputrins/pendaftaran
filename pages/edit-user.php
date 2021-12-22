<?php
    include"koneksi.php";
    $id_user=$_GET['id_user'];
    $query=mysqli_query($db,"SELECT*FROM user WHERE id_user='$id_user'");
    $isi=mysqli_fetch_array($query);
?>
<div class="container">
    <h2>Edit Data User</h2>
    <form action="proses/user-edit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_user" value="<?php echo $isi['id_user'];?>">
        <div class="form-group row mb-4">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Nama" name="nama" value="<?php echo $isi['nama']?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="username" placeholder="Username" rows="2" name="username"><?php echo $isi['username']?></textarea>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $isi['password']?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="roles" class="col-sm-2 col-form-label">Roles</label>
            <div class="col-sm-10">
                <select class="form-select" id="roles" placeholder="Roles" name='roles'>
                    <option value="<?php echo $isi['roles']?>"><?php echo $isi['roles']?></option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" onClick="window.location.reload()" class="btn btn-info text-light">Reset</button>
        <button type="button" class="btn btn-success"><a style="text-decoration:none;color:white;"href="indexAdmin.php?p=user">Kembali</a></button>
    </form>
</div>