<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Siswa;
use App\Models\Jurusan;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);
        $jurusans = Jurusan::latest()->paginate(10);
        return view('daftar.index', compact('jurusans', 'siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'scan_kk' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        // Access the correct input names
        $foto = $request->file('foto');
        $scan_kk = $request->file('scan_kk');

        // Generate unique file names
        $hash1 = $foto->hashName();
        $hash2 = $scan_kk->hashName();

        // Store the files in 'storage/app/public/siswas'
        $foto->storeAs('public/siswas', $hash1, 'public');
        $scan_kk->storeAs('public/siswas', $hash2, 'public');

        // Save to the database
        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'foto' => $hash1, // Save the file name
            'scan_kk' => $hash2, // Save the file name
        ]);

        return redirect()->route('daftar.table')->with('success', 'Files uploaded successfully.');
    }

    public function table()
    {
        $siswas = Siswa::latest()->paginate(10);
        $jurusans = Jurusan::latest()->paginate(10);
        return view('daftar.list', compact('jurusans', 'siswas'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        $siswa = Siswa::findOrFail($siswa);

        return view('admin.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse{
        $siswa = Siswa::findOrFail($id);

        Storage::delete('public/siswa/' . $siswa->image);
        $siswa->delete();

        return redirect()->route('admin.index');
    }
}
