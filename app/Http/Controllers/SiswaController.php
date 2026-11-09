<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();
        return view('Siswa.index', compact('siswa'));
    }

    public function detail()
    {
        // gabungkan data siswa dengan data kelasnya
        $siswa = DB::table('siswa')
            ->join('kelas', 'siswa.kelas_id', '=', 'kelas.id')
            ->select(
                'siswa.*',
                'kelas.kode_kelas',
                'kelas.nama_kelas',
                'kelas.tingkat',
                'kelas.tahun_ajaran',
                'kelas.wali_kelas'
            )
            ->get();
        return view('siswadetail', compact('siswa'));
    }

    public function create()
    {
        // data kelas dipakai untuk dropdown pilihan kelas
        $kelas = DB::table('kelas')->get();
        return view('Siswa.create', compact('kelas'));
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id', $id)->first();
        $kelas = DB::table('kelas')->get();
        return view('Siswa.edit', compact('siswa', 'kelas'));
    }

    public function store(Request $request)
    {
        $kelas_id = $request->input('kelas_id');
        $nis = $request->input('nis');
        $nama_lengkap = $request->input('nama_lengkap');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $no_hp = $request->input('no_hp');
        $email = $request->input('email');
        $asal_sekolah = $request->input('asal_sekolah');
        $jurusan = $request->input('jurusan');
        $nama_ayah = $request->input('nama_ayah');
        $nama_ibu = $request->input('nama_ibu');
        $no_hp_wali = $request->input('no_hp_wali');
        $status = $request->input('status');

        try {
            DB::table('siswa')->insert([
                'kelas_id' => $kelas_id,
                'nis' => $nis,
                'nama_lengkap' => $nama_lengkap,
                'jenis_kelamin' => $jenis_kelamin,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'email' => $email,
                'asal_sekolah' => $asal_sekolah,
                'jurusan' => $jurusan,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_hp_wali' => $no_hp_wali,
                'status' => $status,
            ]);

            return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error', 'Terjadi kesalahan saat menambahkan siswa: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $kelas_id = $request->input('kelas_id');
        $nis = $request->input('nis');
        $nama_lengkap = $request->input('nama_lengkap');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $no_hp = $request->input('no_hp');
        $email = $request->input('email');
        $asal_sekolah = $request->input('asal_sekolah');
        $jurusan = $request->input('jurusan');
        $nama_ayah = $request->input('nama_ayah');
        $nama_ibu = $request->input('nama_ibu');
        $no_hp_wali = $request->input('no_hp_wali');
        $status = $request->input('status');

        try {
            DB::table('siswa')->where('id', $id)->update([
                'kelas_id' => $kelas_id,
                'nis' => $nis,
                'nama_lengkap' => $nama_lengkap,
                'jenis_kelamin' => $jenis_kelamin,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'email' => $email,
                'asal_sekolah' => $asal_sekolah,
                'jurusan' => $jurusan,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_hp_wali' => $no_hp_wali,
                'status' => $status,
            ]);

            return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error', 'Terjadi kesalahan saat memperbarui siswa: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('siswa')->where('id', $id)->delete();
            return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error', 'Terjadi kesalahan saat menghapus siswa: ' . $e->getMessage());
        }
    }
}