<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Secari';
        $page_description = 'Daftar Secari';
		$action = __FUNCTION__;
        
        $kehadiran = Kehadiran::where('posyandu', auth()->user()->posyandu)->orderby('tanggal', 'desc')->get();

        // return $kehadiran;

        return view('kehadiran.index', compact('page_title', 'page_description','action'), ['kehadiran'=>$kehadiran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nik' => 'required|exists:balitas',
            'tanggal' => 'required|date',
            'nama_lengkap' => 'required|exists:balitas',
            'usia' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'posyandu' => 'required',
            'ntob' => 'nullable',
            'imunisasi' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        
        Kehadiran::create($validatedData);

            // dd($validatedData);
        return redirect('/kehadiran')->with('success', 'Berhasil Menambah Data Secari!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function show(Kehadiran $kehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Secari';
        $page_description = 'Formulir Edit Secari';
		
		$action = __FUNCTION__;
        
        $kehadiran = Kehadiran::find($id);

        return view('kehadiran.edit', compact('page_title', 'page_description','action'), ['kehadiran' => $kehadiran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate ([
            'nik' => 'required|exists:balitas',
            'tanggal' => 'required|date',
            'nama_lengkap' => 'required|exists:balitas',
            'usia' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'posyandu' => 'required',
            'ntob' => 'nullable',
            'imunisasi' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        Kehadiran::where('id', $id)
                    ->update($validatedData);

        return redirect('/kehadiran')->with('success', 'Data Kehadiran Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kehadiran::destroy($id);

        return redirect('/kehadiran')->with('success', 'Data Kehadiran berhasil dihapus!');
    }
}
