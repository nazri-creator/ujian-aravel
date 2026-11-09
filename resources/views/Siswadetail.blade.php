<h1>Ini Halaman Detail Siswa</h1>

<h4>
    <a href="{{route ('kelas.index')}}">Data Kelas</a> |
    <a href="{{route ('siswa.index')}}">Data Siswa</a> |
    <a href="{{route ('siswa.detail')}}">Data Detail Siswa</a>
</h4>

<table border="1" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Asal Sekolah</th>
            <th>Jurusan</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>No. HP Wali</th>
            <th>Status</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Tingkat</th>
            <th>Tahun Ajaran</th>
            <th>Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($siswa as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama_lengkap }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->tempat_lahir }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_hp }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->asal_sekolah }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->nama_ayah }}</td>
            <td>{{ $s->nama_ibu }}</td>
            <td>{{ $s->no_hp_wali }}</td>
            <td>{{ $s->status }}</td>
            <td>{{ $s->kode_kelas }}</td>
            <td>{{ $s->nama_kelas }}</td>
            <td>{{ $s->tingkat }}</td>
            <td>{{ $s->tahun_ajaran }}</td>
            <td>{{ $s->wali_kelas }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="20" align="center">Belum ada data siswa.</td>
        </tr>
        @endforelse
    </tbody>
</table>