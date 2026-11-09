<h1>Ini Halaman Siswa</h1>

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

<a href="{{ route ('siswa.create')}}">Tambah Data</a>

<table border="1" cellpadding='7' cellspacing='0'>
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Nama Siswa</th>
            <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->kelas_id }}</td>
            <td>{{ $s->nama_lengkap }}</td>
            <td>   
                <div style="display: flex; gap: 10px;">
                    <a href="{{ route('siswa.edit', ['id' => $s->id]) }}">Edit</a> |
                    <form  action="{{ route('siswa.destroy', ['id' => $s->id]) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">
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