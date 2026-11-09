<h1>Kelas Berhasil Di Simpan</h1>

<table border="1" cellpadding="7" cellspacing="0">
    <thead>
        <tr>
            <th>Kelas</th>
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
            <th>No. Hp Wali</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>{{ $kelas_id->kelas_id}}</tr>
        <tr>{{ $nis->nis}}</tr>
        <tr>{{ $nama_lengkap->nama_lengkap}}</tr>
        <tr>{{ $jenis_kelamin->jenis_kelamin}}</tr>
        <tr>{{ $tempat_lahir->tempat_lahir}}</tr>
        <tr>{{ $tanggal_lahir->tanggal_lahir}}</tr>
        <tr>{{ $alamat->alamat}}</tr>
        <tr>{{ $no_hp->no_hp}}</tr>
        <tr>{{ $email->email}}</tr>
        <tr>{{ $asal_sekolah->asal_sekolah}}</tr>
        <tr>{{ $jurusan->jurusan}}</tr>
        <tr>{{ $nama_ayah->nama_ayah}}</tr>
        <tr>{{ $nama_ibu->nama_ibu}}</tr>
        <tr>{{ $no_hp_wali->no_hp_wali}}</tr>
        <tr>{{ $status->status}}</tr>
    </tbody>
