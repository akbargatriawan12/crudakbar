<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Tambah data baru ke daftar mata kuliah</title>
		<style>
			form{
				display: flex;
				flex-flow: row wrap-reverse;
				width: 600px;
				height: 200px;
				background-color: black;
				align-content: space-between;
				justify-content: space-between;
			}
		</style>
	</head>
	<body style="background-color: #826d8c;color: black;font-family: sans-serif;">
		<h1>Tambah data baru ke daftar mata kuliah</h1>
		{{ Form::open(["url" => "mata_kuliah"])}}
			<div style="flex-basis: 250px;background-color: #e50000;color: black;">
				<label>NIM: <input type="text" name="nim" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #f97306;color: black;">
				<label>Nama: <input type="text" name="nama" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #ffff14;color: black;">
				<label>Semester: <input type="number" name="semester" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #15b01a;color: black;">
				<label>Kode mata kuliah: <input type="text" name="kode_mata_kuliah" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #e50000;color: black;">
				<label>Mata kuliah: <input type="text" name="mata_kuliah" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #ffff14;color: black;">
				<label>Dosen: <input type="text" name="dosen" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #02d8e9;color: black;">
				<button type="submit">Kirim</button>
			</div>
			<div style="flex-basis: 250px;background-color: #15b01a;color: black;">
				<a href="../mata_kuliah" style="color: black;">Kembali</a>
			</div>
		{{ Form::close()}}
	</body>
</html>