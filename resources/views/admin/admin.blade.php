<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Rumpun Mahasiswa Akuntansi di Politeknik TEDC Bandung</title>
	</head>
	<body style="background-color: #929591;color: black;font-family: sans-serif;">
		<h1>Rumpun Mahasiswa Akuntansi di Politeknik TEDC Bandung</h1>
		<div style="display: flex;flex-direction: row;width: 900px;">
			<div style="background-color: #86a17d;flex: 1 200px;">
				<ul style="display: flex;flex-direction: column;justify-content: space-between;list-style-type: none;height: 200px;width: 160px;">
					<li style="flex-basis: 50px;">
						Daftar Mahasiswa
					</li>
					<li style="flex-basis: 50px;">
						<a href="../mata_kuliah" style="color: black;">Daftar Mata Kuliah</a>
					</li>
				</ul>
			</div>
			<div style="background-color: #647d8e;flex: 1 600px;">
				<a href="admin/buat" style="color: black;padding: 1px 6px;background-color: #4efd54;">Tambah data baru</a>
				@foreach($admin as $baris)
				<div style="display: flex;flex-flow: row wrap;width: 600px;justify-content: space-between;align-content: space-between;height: 150px;border: 5px dotted black;">
					<div style="flex-basis: 250px;background-color: #ff474c;">
						<p>NIM: {{ $baris->nim}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #fdaa48;">
						<p>Nama: {{ $baris->nama}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #fffe7a;">
						<p>Jurusan: {{ $baris->jurusan}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #76ff7b;">
						<p>Angkatan: {{ $baris->angkatan}}</p>
					</div>
					<div style="flex-basis: 250px;background-color: #ff474c;">
						{{ link_to('admin/' . $baris->id . '/edit', 'Edit Data') }}
					</div>
					<div style="flex-basis: 250px;background-color: #fdaa48;">
						{{ Form::open(['url' => 'admin/' . $baris->id, 'method' => 'DELETE'])}}
						{{ Form::submit('Hapus')}}
						{{ Form::close()}}
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</body>
</html>