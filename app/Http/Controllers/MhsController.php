<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use App\Models\Matkul;
use App\Exports\MhsExport;
use App\Imports\MhsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function mhsexport()
    {
        return Excel::download(new MhsExport, 'data-mhs.xlsx');
    }

    public function mhsimport(Request $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move('datamhs', $filename);
        
        Excel::import(new MhsImport, public_path('/datamhs/'.$filename));
        return redirect()->route('index')->with('success', 'Data mahasiswa telah diimport!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs = Mhs::all();
        $mhs = Mhs::latest()->paginate(5);
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mhs = Mhs::all();
        $matkul = Matkul::all();
        return view('mhs.create', compact('mhs', 'matkul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'matkul_id' => 'required',
        ]);

        Mhs::create($request->all());
        return redirect()->route('index')->with('success', 'Data mahasiswa telah dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mhs::find($id);
        $matkul = Matkul::all();
        return view('mhs.edit', compact('mhs', 'matkul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'matkul_id' => 'required',
        ]);
        
        $mhs = Mhs::find($id);
        $mhs->update($request->all());
        return redirect()->route('index')->with('success', 'Data mahasiswa telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mhs::find($id);
        $mhs->delete();
        return redirect()->route('index')->with('success', 'Data mahasiswa telah diupdate!');
    }
}
