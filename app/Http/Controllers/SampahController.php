<?php

namespace App\Http\Controllers;

use App\Sampah;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $sampahs = \App\Sampah::where('jenis','LIKE','%'.$request->cari.'%')->get();
            return view('data',['sampahs'=>$sampahs]);
        }else{
       //$sampahs = DB::table('students')->get();
       $sampahs = \App\Sampah::all();
       return view('data',['sampahs' => $sampahs]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menabung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Sampah::create($request->all());

        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function show(Sampah $sampah)
    {
        return view('detail',['sampah' => $sampah]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sampah $sampah)
    {
        return view('edit',['sampah' => $sampah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sampah $sampah)
    {
        //validation
        $request->validate([
            'jenis' => 'required',
            'berat' => 'required',
            'alamat' => 'required',
            'pesan' => 'required',
        ]);

        Sampah::where('id', $sampah->id)
            ->update([
                        'jenis'     => $request -> jenis,
                        'berat'     => $request -> berat,
                        'alamat'    => $request -> alamat,
                        'pesan'     => $request -> pesan
                    ]);

        return redirect('/data/')-> with('status','Data mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sampah  $sampah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sampah $sampah)
    {
        Sampah::destroy($sampah -> id);
        return redirect('/data/')-> with('status','Data mahasiswa berhasil dihapus');
    }
}
