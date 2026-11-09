<h1>Ini Halaman Edit Kelas</h1>
<form method="POST" action="{{ route('kelas.update', ['id' => $kelas->id]) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Kode Kelas</td>
            <td><input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td><input type="text" name="tingkat" value="{{ $kelas->tingkat }}"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td><input type="text" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}"></td>
        </tr>
        <tr>
            <td>Wali Kelas</td>
            <td><input type="text" name="wali_kelas" value="{{ $kelas->wali_kelas }}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>