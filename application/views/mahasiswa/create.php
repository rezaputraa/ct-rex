<?= validation_errors(); ?>
<?= form_open('mahasiswa/create'); ?>
	<p>NIM</p>
	<input type="text" name="nim"><br>

	<p>Nama</p>
	<input type="text" name="nama"><br>

	<p>Jenis Kelamin</p>
	<input type="radio" name="jenis_kelamin" value="L">Laki-laki<br>
	<input type="radio" name="jenis_kelamin" value="P">Perempuan<br>

	<p>Tempat Lahir</p>
	<input type="text" name="tempat_lahir"><br>

	<p>Tanggal Lahir</p>
	<input type="date" name="tanggal_lahir"><br>

	<p>Tahun Angkatan</p>
	<input type="text" name="tahun_angkatan"><br>

	<input type="submit" value="Simpan">
</form>