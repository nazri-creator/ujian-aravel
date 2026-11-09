<h1>Ini Halaman Kelas</h1>

<h4>
    <a href="{{route ('kelas.index')}}">Data Kelas</a> |
    <a href="{{route ('siswa.index')}}">Data Siswa</a> |
    <a href="{{route ('siswa.detail')}}">Data Detail Siswa</a>
</h4>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif  

<a href="{{route ('kelas.create')}}">Tambah Kelas</a>


<table border="1" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Tingkat</th>
            <th>Tahun Ajaran</th>
            <th>Wali Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $k)
        <tr>
            <td>{{ $k->kode_kelas }}</td>
            <td>{{ $k->nama_kelas }}</td>
            <td>{{ $k->tingkat }}</td>
            <td>{{ $k->tahun_ajaran }}</td>
            <td>{{ $k->wali_kelas }}</td>
            <td>   
                <div style="display: flex; gap: 10px;">
                    <a href="{{ route('kelas.edit', ['id' => $k->id]) }}">Edit</a> |
                    <form  action="{{ route('kelas.destroy', ['id' => $k->id]) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>