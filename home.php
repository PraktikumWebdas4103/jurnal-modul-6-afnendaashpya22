<form action="" method="POST">
	<center>
		<h1>REGISTRASI DATA MAHASISWA</h1>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01</td>
				<td><input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02</td>
				<td><input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03</td>
				<td><input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</td>
				<td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="checkbox" name="hobi[]" value="baca">Membaca Novel</td>
				<td><input type="checkbox" name="hobi[]" value="musik">Mendengarkan Musik</td>
				<td><input type="checkbox" name="hobi[]" value="travelling">Travelling</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="fit">Ilmu Terapan</option>
					<option value="fri">Rekayasa Industri</option>
					<option value="fte">Teknik Elektro</option>
					<option value="fif">Teknik Informatika</option>
				</select></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="REGISTRASI"></td>
			</tr>
		</table>
	</center>
</form>

<?php
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jenis_kelamin'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$data = mysqli_query("INSERT INTO 'mahasiswa'('nama', 'nim', 'kelas', 'jenis_kelamin', 'hobi', 'fakultas', 'alamat')
				 VALUES ('$nama', '$nim', '$kelas', '$jenis_kelamin', 'hobi', '$fakultas', 'alamat')"
				) or die (mysqli_error());
		if ($data) {
			$_SESSION['nama'
		}
	}
?>