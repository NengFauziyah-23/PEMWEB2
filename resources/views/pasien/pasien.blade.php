<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas</title>
</head>
<body>
    <h2>Data Pasien</h2>
    <a href="{{ route('pasien.create' }}">+ Tambah Pasien</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($datapasien as $pasien)
            <tr>
                <td>{{ $pasien->id}}</td>
                <td>{{ $pasien->kode}}</td>
                <td>{{ $pasien->nama}}</td>
                <td>{{ $pasien->tmp_lahir}}</td>
                <td>{{ $pasien->tgl_lahir}}</td>
                <td>{{ $pasien->gender === 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
                <td>{{ $pasien->email}}</td>
                <td>{{ $pasien->alamat}}</td>
                <td>{{ $pasien->kelurahan_id}}</td>
                <td><a href="{{ route('pasien.edit', $pasien->) }}">Edit</a>
                <form action="{{ route('pasien.destroy', $pasien->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <buttom type="submit" style="background: none; border: none; color: red; cursor: pointer;">
                    </buttom>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>