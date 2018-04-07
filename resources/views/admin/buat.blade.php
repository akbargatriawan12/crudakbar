<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Tambah data baru</title>
		<style>
			form{
				display: flex;
				flex-flow: row wrap;
				width: 600px;
				height: 150px;
				background-color: black;
				align-content: space-between;
				justify-content: space-between;
			}
		</style>
	</head>
	<body style="background-color: #647d8e;color: black;font-family: sans-serif;">
		<h1>Tambah data baru</h1>
		{{ Form::open(["url" => "admin"])}}
			<div style="flex-basis: 250px;background-color: #ff474c;color: black;">
				<label>NIM: <input type="text" name="nim" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #fdaa48;color: black;">
				<label>Nama: <input type="text" name="nama" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #fffe7a;color: black;">
				<label>Jurusan: <input type="text" name="jurusan" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #76ff7b;color: black;">
				<label>Angkatan: <input type="number" name="angkatan" /></label>
			</div>
			<div style="flex-basis: 250px;background-color: #fcb001;color: black;">
				<button type="submit">Buat</button>
			</div>
			<div style="flex-basis: 250px;background-color: #bbf90f;color: black;">
				<a href="../admin" style="color: black;">Kembali</a>
			</div>
		{{ Form::close()}}
	</body>
</html>