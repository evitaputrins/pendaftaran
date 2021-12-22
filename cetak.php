
<link rel="stylesheet" type="text/css" href="../style_cetak.css">
<div id="content">
    <div id="beranda-judul-cetak">
		<h1>Data Anggota Peserta</h1>
	</div>
<table border="1" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>Nama Peserta</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Status</th>
		</tr>
		
		<?php		
		$nomor=1;
		$sql="SELECT * FROM siswa ORDER BY id_siswa ASC";
		$q_tampil_siswa = mysqli_query($db, $sql);
		if(mysqli_num_rows($q_tampil_siswa)>0)
		{
		while($r_tampil_siswa=mysqli_fetch_array($q_tampil_siswa)){
			if(empty($r_tampil_siswa['status'])or($r_tampil_siswa['status']=='-'))
				$status = "Peserta";
			else
				$siswa = $r_tampil_siswa['status'];
		?>
		<tr>

			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_siswa['id_siswa']; ?></td>
			<td><?php echo $r_tampil_siswa['nama_siswa']; ?></td>
			<td><?php echo $r_tampil_siswa['jenis_kelamin']; ?></td>
			<td><?php echo $r_tampil_siswa['agama']; ?></td>	
            <td><?php echo $r_tampil_siswa['sekolah_asal']; ?></td>	
            <td><?php echo $r_tampil_siswa['status']; ?></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
