<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Kehadiran;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Laporan';
        $page_description = 'Daftar Laporan';
		$action = __FUNCTION__;
        
        $laporan = Laporan::where('posyandu', auth()->user()->posyandu)->get();

        return view('laporan.index', compact('page_title', 'page_description','action'), ['laporan'=>$laporan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Buat Laporan';
        $page_description = 'Generate Laporan';
		
		$action = __FUNCTION__;

        return view('laporan.create', compact('page_title', 'page_description','action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
        ]);

        
        Laporan::create($validatedData);

        return redirect('/laporan')->with('success', 'Berhasil Membuat Laporan!');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Detail Laporan';
        $page_description = 'Detail Laporan';
		
		$action = __FUNCTION__;

        // $tgl_akhir = Laporan::find($id)->get('tanggal_akhir');
        $tgl_awal = Laporan::where('id', $id)->get('tanggal_awal')[0];
        $tgl_akhir = Laporan::where('id', $id)->get('tanggal_akhir')[0];

        $laporan = Kehadiran::where('tanggal', '>=', $tgl_awal->tanggal_awal)->where('tanggal', '<=', $tgl_akhir->tanggal_akhir)->get();

        return view('laporan.show', compact('page_title', 'page_description','action'), ['laporan'=>$laporan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
