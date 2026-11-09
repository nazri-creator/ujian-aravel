<h1>Kelas Berhasil Di Simpan</h1>

<table border="1" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Tingkat</th>
            <th>Tahun Ajaran</th>
            <th>Wali Kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $kelas->kode_kelas }}</td>
            <td>{{ $kelas->nama_kelas }}</td>
            <td>{{ $kelas->tingkat }}</td>
            <td>{{ $kelas->tahun_ajaran }}</td>
            <td>{{ $kelas->wali_kelas }}</td>
        </tr>
    </tbody>

</table>