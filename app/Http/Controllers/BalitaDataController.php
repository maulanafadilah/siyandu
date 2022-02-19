<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Kehadiran;
use App\Models\l_z_score;
use App\Models\p_z_score;
use Illuminate\Support\Facades\DB;
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

        // return view('balita.show', compact('page_title', 'page_description','action'), ['balita'=>$balita, 'kehadiran'=>$kehadiran]);
        // $line = DB::table('l_z_scores')->select('min_3_sd')->get();
        $coba = p_z_score::all();
        $balita = Balita::find($id);
        $gd = Balita::where('id', $id)->get('jenis_kelamin');
        // $s2 = json_encode($gd, true);
        // dd($s2);
        // $balita2 = DB::table('users')->where('name', 'John')->value('email');
        $blt = DB::table('balitas')->where('id', $id)->value('nik');
        $s = json_encode($blt);
        $khrn = Kehadiran::where('nik', $s)->get('berat');
        $s2 = json_encode($khrn, true);
//  dd($khrn);

foreach ($coba as $student) {
            
    $cwk[] = array(
        // "usia" => 
        // $student['usia'],
        // "data" => [
            // $student['tinggi_lahir']
            $student['plus_1_sd'],
            // ($student['min_1_sd']),
            // ($student['median']),
            // ($student['plus_1_sd']),
            // ($student['plus_2_sd']),
            // ($student['plus_3_sd']),
        // ],
    );
}
$md = json_encode($cwk);
// dd($md);
foreach ($gd as $student) {
            
    $dataPoints2 = array(
        // "usia" => 
        // $student['usia'],
        // "data" => [
            $student['jenis_kelamin'],
            // $student['min_2_sd'],
            // ($student['min_1_sd']),
            // ($student['median']),
            // ($student['plus_1_sd']),
            // ($student['plus_2_sd']),
            // ($student['plus_3_sd']),
        // ],
    );
}
$ss = json_encode($dataPoints2);
// dd($ss);
// if (($ss) == "P"){
//     $jkk = "Berat Badan menurut Umur (Perempuan)";
// } 
// if (($ss) == "L"){
//     $jkk = "Berat Badan menurut Umur (Laki-Laki)";
// }
// $jenis = json_encode($jkk);
// dd($ss);
        foreach ($khrn as $student) {
            
            $dataPoints[] = array(
                // "usia" => 
                // $student['usia'],
                // "data" => [
                    // $student['tinggi_lahir']
                    $student['berat'],
                    // ($student['min_1_sd']),
                    // ($student['median']),
                    // ($student['plus_1_sd']),
                    // ($student['plus_2_sd']),
                    // ($student['plus_3_sd']),
                // ],
            );
        }
        $s = json_encode($dataPoints);
        // dd($s);
        $page_title = 'Detail Balita';
        $page_description = 'Detail Informasi Balita';
		// dd($data);
        $action = __FUNCTION__;
        // dd($balita);
        $kehadiran = Kehadiran::where('nik', $balita->nik)->get();

        return view('balita.show', compact('page_title', 'page_description','action','s','ss'), ['balita'=>$balita, 'kehadiran'=>$kehadiran]);
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
