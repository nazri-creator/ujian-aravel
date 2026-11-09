<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('Kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('Kelas.create');
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')->where('id', $id)->first();
        return view('Kelas.edit', compact('kelas'));
    }

    public function store(Request $request)
    {
        $kode_kelas = $request->input('kode_kelas');
        $nama_kelas = $request->input('nama_kelas');
        $tingkat = $request->input('tingkat');
        $tahun_ajaran = $request->input('tahun_ajaran');
        $wali_kelas = $request->input('wali_kelas');
        try {
            DB::table('kelas')->insert([
                'kode_kelas' => $kode_kelas,
                'nama_kelas' => $nama_kelas,
                'tingkat' => $tingkat,
                'tahun_ajaran' => $tahun_ajaran,
                'wali_kelas' => $wali_kelas,
            ]);

            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error', 'Terjadi kesalahan saat menambahkan kelas: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $kode_kelas = $request->input('kode_kelas');
        $nama_kelas = $request->input('nama_kelas');
        $tingkat = $request->input('tingkat');
        $tahun_ajaran = $request->input('tahun_ajaran');
        $wali_kelas = $request->input('wali_kelas');

        try {
            DB::table('kelas')->where('id', $id)->update([
                'kode_kelas' => $kode_kelas,
                'nama_kelas' => $nama_kelas,
                'tingkat' => $tingkat,
                'tahun_ajaran' => $tahun_ajaran,
                'wali_kelas' => $wali_kelas
            ]);

            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui.');
        } catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error', 'Terjadi kesalahan saat memperbarui kelas: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('kelas')->where('id', $id)->delete();
            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
        } catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error', 'Terjadi kesalahan saat menghapus kelas: ' . $e->getMessage());
        }
    }
}
