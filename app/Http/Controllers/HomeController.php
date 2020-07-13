<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('menabung');
    }

    public function store(Request $request)
    {

        //validation
        $request->validate([
        'jenis' => 'required',
        'berat' => 'required|size:9',
        'option' => 'required',
        'alamat' => 'required',
        'pesan' => 'required'
    ]);
        //untuk mengambil request insert ke databases
        student::create($request->all());       
        //untuk kembali ke halaman student setelah tombol  di tekan
        return redirect('/students/')-> with('status','Data mahasiswa berhasil di tambahkan');
    }
}
