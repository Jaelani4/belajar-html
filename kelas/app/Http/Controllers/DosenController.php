<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

/**
 * Class DosenController
 * @package App\Http\Controllers
 */
class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dosens = \DB::table('dosen')->paginate(5);
        return view('dosen.index', compact('dosens'))->with('i', (request()->input('page', 1) - 1) * $dosens->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = new Dosen();
        return view('dosen.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cek validasi
        request()->validate(Dosen::$rules);

        //mulai transaksi
        \DB::beginTransaction();
        try {
            //simpan ke tabel dosen
            \DB::table('dosen')->insert([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'golongan' => $request->golongan,
                'email' => $request->email,
            ]);
            //jika tidak ada kesalahan commit/simpan
            \DB::commit();
            return redirect()->route('dosens.index')
                ->with('success', 'Dosen created successfully.');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('dosens.index')
                ->with(
                    'success',
                    'Penyimpanan dibatalkan semua, ada kesalahan......'
                );
        }
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
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
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
        request()->validate(Dosen::$rules);
        //mulai transaksi
        \DB::beginTransaction();
        try {
            \DB::table('dosen')->where('nip', $id)->update([
                'nama' => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'golongan' => $request->golongan,
                'email' => $request->email,
            ]);
            //$dosen->update($request->all());
            \DB::commit();
            return redirect()->route('dosens.index')
                ->with('success', 'Dosen updated successfully');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('dosens.index')
                ->with('success', 'Dosen Batal diubah, ada kesalahan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //mulai transaksi
        \DB::beginTransaction();
        try {
            //hapus rekaman tabel kota
            $dosen = Dosen::find($id)->delete();
            \DB::commit();
            return redirect()->route('dosens.index')
                ->with('success', 'Dosen deleted successfully');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('dosens.index')
                ->with('success', 'Dosen ada kesalahan hapus batal... ');
        }
    }
}
