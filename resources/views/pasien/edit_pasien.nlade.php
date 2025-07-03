<form action="{{route('pasien.store')}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="kode" value="{{ $pasien->kode }}"><br>
    <input type="text" name="nama" value="{{ $pasien->nama }}"><br>
    <input type="text" name="tmp_lahir" value="{{ $pasien->tmp_lahir }}"><br>
    <input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}"><br>
    <select nama="gender">
        <option value="L" {{ $pasien->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="L" {{ $pasien->gender == 'L' ? 'selected' : '' }}>Perempuan</option>
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
