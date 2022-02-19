<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Posyandu';
        $page_description = 'Daftar Posyandu';
		$action = __FUNCTION__;
        
        $posyandu = Posyandu::all();

        return view('admin.posyandu.index', compact('page_title', 'page_description','action'), ['posyandu'=>$posyandu]);
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
            'posyandu' => 'required',
            'kode' => 'required|unique:posyandus',
        ]);

        
        Posyandu::create($validatedData);

        return redirect('/posyandu')->with('success', 'Berhasil Menambah Data Posyandu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function show(Posyandu $posyandu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Posyandu';
        $page_description = 'Formulir Edit Posyandu';
		
		$action = __FUNCTION__;
        
        $posyandu = Posyandu::find($id);

        return view('admin.posyandu.edit', compact('page_title', 'page_description','action'), ['posyandu' => $posyandu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'posyandu' => 'required',
            'kode' => 'required',
        ]);

       Posyandu::where('id', $id)
                    ->update($validatedData);

        return redirect('/posyandu')->with('success', 'Data Posyandu Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posyandu::destroy($id);

        return redirect('/posyandu')->with('success', 'Data Posyandu berhasil dihapus!');
    }
}
