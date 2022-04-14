<!DOCTYPE html>
<html>
<head>
	<title>Form Input Matakuliah</title>
<style>
	.pesan {color: red; font-style: italic;}
</style>
</head>
<body>
	<div class="pesan">
		<?php echo validation_errors(); ?>
	</div>
		<center>
			<form action="<?>= base_url('matakuliah/cetak'); ?>" methode="post">
				<table>
					<tr>
						<th colspan="3">
							Form Input Data Mata Kuliah
						</th>
					</tr>
					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>
					<tr>
						<th>Kode MTK</th>
						<th>:</th>
						<td>
							<input type="text" name="kode" placeholder="input kode" id="kode">
					</tr>
					<tr>
						<th>Nama MTK</th>
						<td>:</td>
						<td><input type="text" name="nama" id="nama" placeholder="required"></td>
					</tr>
					<tr>
						<th>SKS</th>
					<td>:</td>
					<td>
						<select name="sks">
						<option value="">Pilih SKS</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						</select>
					</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" value="Submit">
						</td>
					</tr>
				</table>
</body>
</html>
