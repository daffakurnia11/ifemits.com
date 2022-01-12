<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'title' => 'Home'
        ]);
    }

    public function about()
    {
        return view('main.about', [
            'title' => 'About Us'
        ]);
    }

    // IF-WEB
    public function webinar_info()
    {
        return view('main.if-web.index', [
            'title' => 'IF-WEB'
        ]);
    }

    // MSM
    public function msm_info()
    {
        return view('main.msm.index', [
            'title' => 'MSM'
        ]);
    }

    // IECC
    public function pameran_info()
    {
        $tickets = Bundle::all();
        $registered = 0;
        foreach ($tickets as $ticket) {
            $registered = $registered + $ticket->ticket;
        }
        return view('main.iecc.index', [
            'title'     => 'IECC',
            'ticket'    => $registered
        ]);
    }
    public function pameran_detail()
    {
        return view('main.iecc.info', [
            'title' => 'Informasi IECC'
        ]);
    }

    // Exhibitor
    public function exhibitor_info()
    {
        return view('main.iecc.exhibitor.index', [
            'title' => 'Informasi Exhibitor'
        ]);
    }

    // Food & Beverage
    public function fnb_info()
    {
        return view('main.iecc.fnb.index', [
            'title' => 'Informasi F&B'
        ]);
    }

    // EFFECT
    public function effect_info()
    {
        return view('main.effect.index', [
            'title' => 'EFFECT'
        ]);
    }

    // IF-Talk
    public function talkshow_info()
    {
        $tickets = Bundle::all();
        $registered = 0;
        foreach ($tickets as $ticket) {
            $registered = $registered + $ticket->ticket;
        }
        return view('main.if-talk.index', [
            'title'     => 'IF-Talk 2022',
            'ticket'    => $registered
        ]);
    }

    // Workshop
    public function workshop_info()
    {
        return view('main.workshop.index', [
            'title' => 'Workshop'
        ]);
    }
}
