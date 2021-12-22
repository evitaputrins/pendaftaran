<?php
include'../koneksi.php';
$id_user=$_GET['id_user'];

mysqli_query($db,
        "DELETE FROM user
        WHERE id_user='$id_user'");
header("location:../indexAdmin.php?p=user");
?>