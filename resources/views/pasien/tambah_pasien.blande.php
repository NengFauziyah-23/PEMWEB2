<form action="{{route('pasien.store')}}" method="POST">
    @csrf
    <input type="text" name="kode" placeholder="Kode"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="tmp_lahir" placeholder="Tempat Lahir"><br>
    <input type="date" name="tgl_lahir"><br>
    <select nama="gender">
        <option value="L">Laki-laki</option>
        <option value="L">Perempuan</option>
    </select><br>
    <input type="email" name="emaIL" value="{{ $pasien->email }}"><br>
    <textarea name="alamat">{{ $pasien->alamat }}</textarea><br>
    <select name="kelurahan_id">
    @foreach ($kelurahan as $k)
        <option value="{{ $k->id }}" {{ $pasien->kelurahan_id == $k->id ? 'selected' : '' }}>
            {{ $k->name }}
        </option>
    @endforeach
    </select><br>
    <buttom type="submit">Update</buttom>
</form>
