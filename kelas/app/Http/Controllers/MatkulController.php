<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Matkul;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mk = Matkul::all();
        return view('matkul.index', compact('mk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'sks' => 'required',
            'kelas' => 'required'
            ]);
            $mk = new Matkul;
            $mk->id = $request->id;
            $mk->nama = $request->nama;
            $mk->sks = $request->sks;
            $mk->kelas= $request->kelas;
            $mk->save();
            return redirect()->route('matkul.index')->with('message','Mata Kuliah baru berhasil ditambahkan!');
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
        $mk = Matkul::find($id);
        return view('matkul.edit',compact('mk'));
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
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'sks' => 'required',
            'kelas' => 'required',
            ]);
            $mk = Matkul::find($id);
            $mk->id = $request->id;
            $mk->nama = $request->nama;
            $mk->sks= $request->sks;
            $mk->kelas = $request->kelas;
            $mk->save();
            return redirect()->route('matkul.index')->with('message','Mata Kuliah berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
