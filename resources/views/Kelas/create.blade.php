<h1>Ini Halaman Create</h1>
<form action="{{ route('kelas.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Kode Kelas</td>
            <td><input type="text" name="kode_kelas"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td><input type="text" name="tingkat"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td><input type="text" name="tahun_ajaran"></td>
        </tr>
        <tr>
            <td>Wali Kelas</td>
            <td><input type="text" name="wali_kelas"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
            <td><input type="reset" value="Reset"></td>
    </table>
</form>
