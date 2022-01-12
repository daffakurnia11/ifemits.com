<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bundle;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guest.index', [
            'title'     => 'Data Pengunjung',
            'datas'     => Bundle::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tickets = Bundle::all();
        $registered = 0;
        foreach ($tickets as $ticket) {
            $registered = $registered + $ticket->ticket;
        }

        if ($registered < 300) {
            $ticket = 300 - $registered;
        }

        return view('main.if-talk.regis', [
            'title' => 'Registrasi Pengunjung',
            'register'  => $registered,
            'ticket'    => $ticket
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
        $tickets = Bundle::all();
        $registered = 0;
        foreach ($tickets as $ticket) {
            $registered = $registered + $ticket->ticket;
        }
        $maxticket = 300 - $registered;
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email:dns|unique:bundles',
            'ticket'    => "required|numeric|max:$maxticket",
            'phone'     => 'required|digits_between:10,13|numeric',
            'payment'   => 'required|mimes:jpg,jpeg,png,pdf|max:1024'
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        if ($registered < 300) {
            $register_code = 'Bundle-3' . sprintf("%03s", (Bundle::count() ?? 0) + 1);
            $validated['bundle'] = 3;
        } else {
            $register_code = 'Bundle-2' . sprintf("%03s", (Bundle::count() ?? 0) + 1);
            $validated['bundle'] = 2;
        }
        $validated['register_code'] = $register_code;

        // Uploading Files
        if ($request->hasFile('payment')) {

            $paymentFile = $register_code . '_payment.' . $request->payment->extension();
            $validated['payment'] = $paymentFile;
            $request->payment->move(public_path('files/bundling/payment'), $paymentFile);

            Bundle::create($validated);
            return redirect('/bundling/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundle $bundle)
    {
        unlink(public_path('files/bundling/payment/' . $bundle->payment));

        $bundle->delete();
        return redirect('/admin/ticket')->with('notif', "Data deleted");
    }
}
