<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Edit data di daftar mata kuliah</title>
		<style>
			form{
				display: flex;
				flex-flow: column wrap-reverse;
				width: 1000px;
				height: 200px;
				background-color: black;
				align-content: space-between;
				justify-content: space-between;
			}
		</style>
	</head>
	<body style="background-color: #c3909b;color: black;font-family: sans-serif;">
		<h1>Edit data di daftar mata kuliah</h1>
		{{ Form::model($mata_kuliah, ['url' => 'mata_kuliah/' . $mata_kuliah->id, 'method' => 'PUT'])}}
			<div style="flex-basis: 70px;background-color: #e50000;color: black;">
				<label>NIM:
				{{ Form::text('nim', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #f97306;color: black;">
				<label>Nama:
				{{ Form::text('nama', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #ffff14;color: black;">
				<label>Semester:
				{{ Form::text('semester', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #15b01a;color: black;">
				<label>Kode mata kuliah:
				{{ Form::text('kode_mata_kuliah', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #e50000;color: black;">
				<label>Mata kuliah:
				{{ Form::text('mata_kuliah', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #f97306;color: black;">
				<label>Dosen:
				{{ Form::text('dosen', null)}}
				</label>
			</div>
			<div style="flex-basis: 70px;background-color: #ffff14;color: black;">
				{{ Form::submit('Edit')}}
			</div>
			<div style="flex-basis: 70px;background-color: #15b01a;color: black;">
				<a href="../../mata_kuliah" style="color: black;">Kembali</a>
			</div>
		{{ Form::close()}}
	</body>
</html>