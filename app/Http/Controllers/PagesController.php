<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    // Webinar
    public function webinar_info()
    {
        return view('main.webinar.index');
    }
    public function webinar_regis()
    {
        return view('errors.comingsoon');
        // return view('main.webinar.regis');
    }

    // MSM
    public function msm_info()
    {
        return view('main.msm.index');
    }
    public function msm_regis()
    {
        return view('main.msm.regis');
    }

    // Pameran
    public function pameran_info()
    {
        return view('main.pameran.index');
    }
    public function pameran_detail()
    {
        return view('main.pameran.info');
    }
    public function pameran_regis()
    {
        return view('main.pameran.regis');
    }

    // Exhibitor
    public function exhibitor_info()
    {
        return view('main.pameran.exhibitor.index');
    }
    public function exhibitor_regis()
    {
        return view('main.pameran.exhibitor.regis');
    }

    // Food & Beverage
    public function fnb_info()
    {
        return view('main.pameran.fnb.index');
    }
    public function fnb_regis()
    {
        return view('main.pameran.fnb.regis');
    }
}
