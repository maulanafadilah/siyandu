<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class BalitaDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Balita';
        $page_description = 'Daftar Balita';
		$action = __FUNCTION__;
        
        $balita = Balita::where('posyandu', auth()->user()->posyandu)->get();

        return view('balita.index', compact('page_title', 'page_description','action'), ['balita'=>$balita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Tambah Balita';
        $page_description = 'Formulir Tambah Balita';
		
		$action = __FUNCTION__;

        return view('balita/create', compact('page_title', 'page_description','action'));
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

            'nama_lengkap' => 'required',
            'no_kk' => 'required',
            'nik' => 'required|unique:balitas',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'ibu' => 'required',
            'ayah' => 'required',
            'wali' => 'nullable',
            'alamat' => 'required',
            'berat_lahir' => 'required',
            'tinggi_lahir' => 'required',
            'posyandu' => 'required',
            'keterangan' => 'nullable',
        ]);

        
        Balita::create($validatedData);

        return redirect('/balita')->with('success', 'Berhasil Menambah Balita!');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Detail Balita';
        $page_description = 'Detail Informasi Balita';
		
        $action = __FUNCTION__;

        $balita = Balita::find($id);
        $kehadiran = Kehadiran::where('nik', $balita->nik)->get();

        return view('balita.show', compact('page_title', 'page_description','action'), ['balita'=>$balita, 'kehadiran'=>$kehadiran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Balita';
        $page_description = 'Formulir Edit Balita';
		
		$action = __FUNCTION__;
        
        $balita = Balita::find($id);

        return view('balita.edit', compact('page_title', 'page_description','action'), ['balita' => $balita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate ([
            'nama_lengkap' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'ibu' => 'required',
            'ayah' => 'required',
            'wali' => 'nullable',
            'alamat' => 'required',
            'berat_lahir' => 'required',
            'tinggi_lahir' => 'required',
            'posyandu' => 'required',
            'keterangan' => 'nullable',
        ]);


        Balita::where('id', $id)
                    ->update($validatedData);

        return redirect('/balita')->with('success', 'Data Balita Berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balita::destroy($id);

        return redirect('/balita')->with('success', 'Data balita berhasil dihapus!');
    }

    
    
}
