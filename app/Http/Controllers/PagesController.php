<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'title' => 'Home'
        ]);
    }

    // Webinar
    public function webinar_info()
    {
        return view('main.webinar.index', [
            'title' => 'Webinar'
        ]);
    }
    public function webinar_regis()
    {
        // return view('errors.comingsoon', [
        //     'title' => 'Registrasi Webinar'
        // ]);
        return view('main.webinar.regis', [
            'title' => 'Registrasi Webinar'
        ]);
    }

    // MSM
    public function msm_info()
    {
        return view('main.msm.index', [
            'title' => 'MSM'
        ]);
    }
    public function msm_regis()
    {
        return view('main.msm.regis', [
            'title' => 'Registrasi MSM'
        ]);
    }

    // Pameran
    public function pameran_info()
    {
        return view('main.pameran.index', [
            'title' => 'Pameran'
        ]);
    }
    public function pameran_detail()
    {
        return view('main.pameran.info', [
            'title' => 'Informasi Pameran'
        ]);
    }
    public function pameran_regis()
    {
        return view('main.pameran.regis', [
            'title' => 'Registrasi Pengunjung Pameran'
        ]);
    }

    // Exhibitor
    public function exhibitor_info()
    {
        return view('main.pameran.exhibitor.index', [
            'title' => 'Informasi Exhibitor'
        ]);
    }
    public function exhibitor_regis()
    {
        return view('main.pameran.exhibitor.regis', [
            'title' => 'Registrasi Exhibitor Pameran'
        ]);
    }

    // Food & Beverage
    public function fnb_info()
    {
        return view('main.pameran.fnb.index', [
            'title' => 'Informasi F&B'
        ]);
    }
    public function fnb_regis()
    {
        return view('main.pameran.fnb.regis', [
            'title' => 'Registrasi F&B Pameran'
        ]);
    }
}
