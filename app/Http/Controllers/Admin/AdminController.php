<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Exh_exhibitor;
use App\Models\Exh_guest;
use App\Models\Exh_seller;
use App\Models\Shortlink;
use App\Models\Visitor;
use App\Models\Webinar;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->roles == 'Admin' || auth()->user()->roles == 'Superadmin') {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }

        return back()->with('message', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Success');
    }

    public function visitor_data()
    {
        $data = [];
        $data[] = Visitor::whereMonth('created_at', '=', '12')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '1')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '2')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '3')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '4')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '5')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '6')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '7')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '8')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '9')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '10')->count();
        $data[] = Visitor::whereMonth('created_at', '=', '11')->count();
        // $jan_visitor = Visitor::whereMonth('created_at', '=', '1')->count();
        // $feb_visitor = Visitor::whereMonth('created_at', '=', '2')->count();
        // $mar_visitor = Visitor::whereMonth('created_at', '=', '3')->count();
        // $apr_visitor = Visitor::whereMonth('created_at', '=', '4')->count();
        // $may_visitor = Visitor::whereMonth('created_at', '=', '5')->count();
        // $jun_visitor = Visitor::whereMonth('created_at', '=', '6')->count();
        // $jul_visitor = Visitor::whereMonth('created_at', '=', '7')->count();
        // $aug_visitor = Visitor::whereMonth('created_at', '=', '8')->count();
        // $sep_visitor = Visitor::whereMonth('created_at', '=', '9')->count();
        // $oct_visitor = Visitor::whereMonth('created_at', '=', '10')->count();
        // $nov_visitor = Visitor::whereMonth('created_at', '=', '11')->count();
        // $des_visitor = Visitor::whereMonth('created_at', '=', '12')->count();

        // $data[] = [$jan_visitor, $feb_visitor, $mar_visitor, $apr_visitor, $may_visitor, $jun_visitor, $jul_visitor, $aug_visitor, $sep_visitor, $oct_visitor, $nov_visitor, $des_visitor];
        return json_encode($data);
    }

    public function index()
    {
        return view('admin.index', [
            'title'             => 'Admin Dashboard',

            'links'             => Shortlink::count(),
            'link_inc'          => Shortlink::whereDate('created_at', Carbon::today())->count(),

            'visitors'          => Visitor::count(),
            'visitor_inc'       => Visitor::whereDate('created_at', Carbon::today())->count(),

            'webinars'          => Webinar::count(),
            'webinar_inc'       => Webinar::whereDate('created_at', Carbon::today())->count(),

            'competitions'      => Competition::count(),
            'competition_inc'   => Competition::whereDate('created_at', Carbon::today())->count(),

            'guests'            => Exh_guest::count(),
            'guest_inc'         => Exh_guest::whereDate('created_at', Carbon::today())->count(),

            'exhibitors'        => Exh_exhibitor::count(),
            'exhibitor_inc'     => Exh_exhibitor::whereDate('created_at', Carbon::today())->count(),

            'sellers'           => Exh_seller::count(),
            'seller_inc'        => Exh_seller::whereDate('created_at', Carbon::today())->count(),
        ]);
    }
}
