<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Balita;
use App\Models\User;
use App\Models\Kehadiran;

class SiyanduController extends Controller
{
    // Dashboard
    public function index()
    {
        $page_title = 'Beranda';
        $page_description = 'Beranda Posyandu';
        $logo = "images/logo-babydaily.png";
        $logoText = "images/logo-babydaily-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;

        $kehadiranCount = Kehadiran::where('posyandu', auth()->user()->posyandu)->count();
        $balitaCount = Balita::where('posyandu', auth()->user()->posyandu)->count();
        $posyandu = User::where('id', auth()->user()->id)->get();
		
        return view('index', compact('page_title', 'page_description','action','logo','logoText'), ['kehadiran'=>$kehadiranCount, 'balita'=>$balitaCount, 'posyandu'=>$posyandu]);
    }
 
    // public function laporan()
    // {
        
    //     $page_title = 'Laporan';
    //     $page_description = 'Laporan Bulanan Posyandu';
    //     $logo = "images/logo-babydaily.png";
    //     $logoText = "images/logo-babydaily-text.png";
		
    //     $action = __FUNCTION__;

    //     return view('laporan', compact('page_title', 'page_description','action','logo','logoText'));
    // }
	
	//      // Event Detail
    // public function laporan_detail()
    // {
    //     $page_title = 'Detail Laporan';
    //     $page_description = 'Detail Laporan Bulanan';
    //     $logo = "images/logo-babydaily.png";
    //     $logoText = "images/logo-babydaily-text.png";
		
    //     $action = __FUNCTION__;

    //     return view('laporan_detail', compact('page_title', 'page_description','action','logo','logoText'));
    // }
}