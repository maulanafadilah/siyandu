<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\User;
use App\Models\Balita;
use App\Models\Kehadiran;
use App\Http\Controllers\Controller;
use App\Models\Posyandu;

class SiyanduController extends Controller
{
    // Dashboard
    public function index()
    {
        $user_role = auth()->user()->role;

        // return $user_role;

        if($user_role == 'Admin') {
            $page_title = 'Beranda Admin';
            $page_description = 'Beranda Posyandu';
            $logo = "images/logo-babydaily.png";
            $logoText = "images/logo-babydaily-text.png";
            $active="active";
            $event_class="schedule-event";
            $button_class="btn-primary";
            $action = __FUNCTION__;
            

            $kaderCount = User::where('role', 'Kader')->count();
            $ortuCount = User::where('role', 'Orang Tua')->count();
            $posyanduCount = Posyandu::count();

            $blog = Blog::limit(3)->latest()->get();

            return view('admin.index', compact('page_title', 'page_description','action','logo','logoText'), ['kader'=>$kaderCount, 'ortu' =>$ortuCount, 'posyandu'=>$posyanduCount ,'blog'=>$blog]);
        } 
        elseif($user_role == 'Kader'){
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

            $blog = Blog::limit(3)->latest()->get();
            
            return view('index', compact('page_title', 'page_description','action','logo','logoText'), ['kehadiran'=>$kehadiranCount, 'balita'=>$balitaCount, 'posyandu'=>$posyandu, 'blog'=>$blog]);
        }



        
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