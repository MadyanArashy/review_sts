<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noj = 1;
        $nos = 1;
        $siswas = Siswa::latest()->paginate(10);
        $jurusans = Jurusan::latest()->paginate(10);
        return view('admin.index', compact('jurusans', 'siswas', 'noj', 'nos'));
    }
    public function list()
    {
        $no = 1;
        $siswas = Siswa::latest()->paginate(10);
        $jurusans = Jurusan::latest()->paginate(10);
        return view('daftar.list', compact('jurusans', 'siswas', 'no'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'jurusan' => 'required',
            'detail' => 'required',
        ]);
        
        Jurusan::create([
            'jurusan' => $request->jurusan,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        
    }
}
