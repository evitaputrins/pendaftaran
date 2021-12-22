<?php
include'../koneksi.php';

$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit'])){
        extract($_POST);
        $sql="UPDATE user SET 
                nama ='$nama',
                username ='$username',
                password = '$password'
                WHERE id_user='$id_user'";
        $query=mysqli_query($db,$sql);
        if (!$query) {
                echo"<script>alert('Data gagal diedit');
                document.location.href='../indexAdmin.php?p=user';
                </script>";
        }else{
                echo"<script>alert('Data berhasil diedit');
                document.location.href='../indexAdmin.php?p=user';
                </script>";
        }
// header("location:../index.php?p=user");
}
?>