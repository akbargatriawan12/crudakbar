<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Daftar mata kuliah untuk jurusan Akuntansi dan Komputerisasi Akuntansi</title>
	</head>
	<body style="background-color: #7f7053;color: black;font-family: sans-serif;">
		<h1>Daftar mata kuliah untuk jurusan Akuntansi dan Komputerisasi Akuntansi</h1>
		<div style="display: flex;flex-direction: row;width: 900px;">
			<div style="background-color: #c3909b;flex: 1 200px;">
				<ul style="display: flex;flex-direction: column;justify-content: space-between;list-style-type: none;height: 200px;width: 160px;">
					<li style="flex-basis: 50px;">
						<a href="../admin" style="color: black;">Daftar Mahasiswa</a>
					</li>
					<li style="flex-basis: 50px;">
						Daftar Mata Kuliah
					</li>
				</ul>
			</div>
			<div style="background-color: #826d8c;flex: 1 600px;">
				<a href="mata_kuliah/create" style="color: black;padding: 1px 6px;background-color: #4efd54;">Tambah data baru</a>
				@foreach($mata_kuliah as $baris)
				<div style="display: flex;flex-flow: row wrap-reverse;width: 600px;justify-content: space-between;align-content: space-between;height: 400px;border: 5px dotted black;">
					<div style="flex-basis: 250px;background-color: #e50000;">
						<p>NIM: {{ $baris->nim}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #f97306;">
						<p>Nama: {{ $baris->nama}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #ffff14;">
						<p>Semester: {{ $baris->semester}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #15b01a;">
						<p>Kode mata kuliah: {{ $baris->kode_mata_kuliah}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #e50000;">
						<p>Nama mata kuliah: {{ $baris->mata_kuliah}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #f97306;">
						<p>Dosen: {{ $baris->dosen}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #ffff14;">
						{{ link_to('mata_kuliah/' . $baris->id . '/edit', 'Edit Data') }}
					</div>
					<div style="flex-basis: 250px;background-color: #15b01a;">
						{{ Form::open(['url' => 'mata_kuliah/' . $baris->id, 'method' => 'DELETE'])}}
						{{ Form::submit('Hapus')}}
						{{ Form::close()}}
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</body>
</html>