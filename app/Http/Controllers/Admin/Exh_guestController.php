<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exh_guest;
use Illuminate\Http\Request;

class Exh_guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guest.index', [
            'title'     => 'Data Pengunjung IECC',
            'datas'     => Exh_guest::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.iecc.regis', [
            'title' => 'Registrasi Pengunjung IECC'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email:dns|unique:exh_guests',
            'ticket'    => 'required|numeric',
            'phone'     => 'required|digits_between:10,13|numeric',
            'payment'   => 'required|mimes:jpg,jpeg,png,pdf|max:1024'
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        // Uploading Files
        if ($request->hasFile('payment')) {
            $register_code = 'Guest-' . (Exh_guest::count() ?? 0) + 1;
            $validated['register_code'] = $register_code;

            $paymentFile = $register_code . '_payment.' . $request->payment->extension();
            $validated['payment'] = $paymentFile;
            $request->payment->move(public_path('files/pameran/guest/payment'), $paymentFile);

            Exh_guest::create($validated);
            return redirect('/pameran/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exh_guest  $exh_guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exh_guest $exh_guest)
    {
        unlink(public_path('files/pameran/guest/payment/' . $exh_guest->payment));

        $exh_guest->delete();
        return redirect('/admin/food-and-beverage')->with('notif', "Data deleted");
    }
}
