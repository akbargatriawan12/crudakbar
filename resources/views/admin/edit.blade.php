<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Edit data</title>
		<style>
			form{
				display: flex;
				flex-flow: column wrap;
				width: 600px;
				height: 150px;
				background-color: black;
				align-content: space-between;
				justify-content: space-between;
			}
		</style>
	</head>
	<body style="background-color: #86a17d;color: black;font-family: sans-serif;">
		<h1>Edit data</h1>
		{{ Form::model($admin, ['url' => 'admin/' . $admin->id, 'method' => 'PUT'])}}
			<div style="flex-basis: 55px;background-color: #ff474c;color: black;">
				<label>NIM:
				{{ Form::text('nim', null)}}
				</label>
			</div>
			<div style="flex-basis: 55px;background-color: #fdaa48;color: black;">
				<label>Nama:
				{{ Form::text('nama', null)}}
				</label>
			</div>
			<div style="flex-basis: 55px;background-color: #fffe7a;color: black;">
				<label>Jurusan:
				{{ Form::text('jurusan', null)}}
				</label>
			</div>
			<div style="flex-basis: 55px;background-color: #76ff7b;color: black;">
				<label>Angkatan:
				{{ Form::text('angkatan', null)}}
				</label>
			</div>
			<div style="flex-basis: 55px;background-color: #fcb001;color: black;">
				{{ Form::submit('Edit')}}
			</div>
			<div style="flex-basis: 55px;background-color: #bbf90f;color: black;">
				<a href="../../admin" style="color: black;">Kembali</a>
			</div>
		{{ Form::close()}}
	</body>
</html>