<div class="container">
    <h2>Tambah Data User</h2>
    <form action="proses/user-input.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row mb-4">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Nama" name="nama">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="roles" class="col-sm-2 col-form-label">Roles</label>
            <div class="col-sm-10">
                <select class="form-select" id="roles" placeholder="Roles" name='roles'>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" onClick="window.location.reload()" class="btn btn-info text-light">Reset</button>
    </form>
</div>