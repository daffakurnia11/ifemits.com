<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
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
            'name'          => 'required',
            'instance'      => 'required',
            'email'         => 'required|email:dns|unique:webinars',
            'phone'         => 'required|digits_between:10,13|numeric',
            'share'         => 'required',
            'share.*'       => 'mimes:jpg,jpeg,png|max:1024',
            'age'           => 'required|numeric',
            'promotion'     => 'required'
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        if ($request->hasFile('share')) {
            $register_code = 'Webinar-' . (Webinar::count() ?? 0) + 1;
            $validated['register_code'] = $register_code;

            // Uploading Share Form
            $shareFiles = $request->file('share');
            $shareName = [];
            $index = 1;
            foreach ($shareFiles as $file) {
                $filename = $register_code . '_share' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/webinar/share'), $filename);
                $shareName[] = $filename;
            }
            $validated['share'] = implode(';', $shareName);
            $validated['promotion'] = implode(',', $request->promotion);

            Webinar::create($validated);
            return redirect('/webinar/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function show(Webinar $webinar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinar $webinar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webinar $webinar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinar $webinar)
    {
        //
    }
}
