<div class="container">
    <h2>USER</h2><hr>
    <a href="indexAdmin.php?p=input-user" class="btn btn-primary mb-4">Tambah User</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Roles</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <?php
        include"koneksi.php";
        $query="SELECT*FROM user";
        $peserta = mysqli_query($db,$query);
        ?>
        <tbody>
            <?php $nomor=1; while($isi=mysqli_fetch_array($peserta)){?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $isi['nama'];?></td>
                <td><?php echo $isi['username'];?></td>
                <td><?php echo $isi['password'];?></td>
                <td><?php echo $isi['roles'];?></td>
                <td>
                    <button type="button" class="btn btn-warning"><a style="text-decoration:none;color:white;" href="indexAdmin.php?p=edit-user&id_user=<?php echo $isi['id_user'];?>">Edit</a></button>
                    <button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" type="button" class="btn btn-danger"><a style="text-decoration:none;color:white;" href="proses/user-hapus.php?id_user=<?php echo $isi['id_user'];?> ">Delete</a></button>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </div>