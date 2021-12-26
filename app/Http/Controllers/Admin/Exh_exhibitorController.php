<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exh_exhibitor;
use Illuminate\Http\Request;

class Exh_exhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email:dns|unique:exh_exhibitors',
            'person1'   => 'required',
            'person2'   => 'required',
            'vehicle'   => 'required',
            'phone'     => 'required|digits_between:10,13|numeric',
            'address'   => 'required',
            'photo'     => 'required',
            'photo.*'   => 'mimes:pdf,jpg,jpeg,png|max:1024',
            'payment'   => 'required|mimes:jpg,jpeg,png,pdf|max:1024',
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        // Uploading Files 
        if ($request->hasFile('photo') && $request->hasFile('payment')) {
            $register_code = 'Exhibitor-' . (Exh_exhibitor::count() ?? 0) + 1;
            $validated['register_code'] = $register_code;

            // Uploading Photo Form
            $photoFiles = $request->file('photo');
            $photoName = [];
            $index = 1;
            foreach ($photoFiles as $file) {
                $filename = $register_code . '_photo' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/pameran/exhibitor/photo'), $filename);
                $photoName[] = $filename;
            }
            $validated['photo'] = implode(';', $photoName);

            $paymentFile = $register_code . '_payment.' . $request->payment->extension();
            $validated['payment'] = $paymentFile;
            $request->payment->move(public_path('files/pameran/exhibitor/payment'), $paymentFile);

            Exh_exhibitor::create($validated);
            return redirect('/exhibitor/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exh_exhibitor  $exh_exhibitor
     * @return \Illuminate\Http\Response
     */
    public function show(Exh_exhibitor $exh_exhibitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exh_exhibitor  $exh_exhibitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Exh_exhibitor $exh_exhibitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exh_exhibitor  $exh_exhibitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exh_exhibitor $exh_exhibitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exh_exhibitor  $exh_exhibitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exh_exhibitor $exh_exhibitor)
    {
        //
    }
}
