<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event_setting;
use App\Models\Webinar;
use Carbon\Carbon;
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
        return view('admin.if-web.index', [
            'title'     => 'Data Pendaftar IF-WEB',
            // 'datas'     => Webinar::whereRaw('MONTH(created_at) = 11')->get()
            'datas'     => Webinar::latest()->get(),
            'setting'   => Event_setting::firstWhere('event', 'if-web')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Event_setting::firstWhere('event', 'if-web');
        $timenow = Carbon::now();

        if ($setting->form_open && $timenow->greaterThan($setting->form_open)) {
            if ($timenow->lessThan($setting->form_closed)) {
                return view('main.if-web.regis', [
                    'title' => 'Registrasi IF-WEB'
                ]);
            } else {
                return view('errors.closed');
            }
        } else {
            return view('errors.comingsoon');
        }
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
            $validated['promotion'] = implode(', ', $request->promotion);

            Webinar::create($validated);
            return redirect('/if-web/registrasi')->with('message', 'Registration Success');
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
        return view('admin.if-web.show', [
            'title'     => 'Data Pendaftar ' . $webinar->register_code,
            'webinar'   => $webinar
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinar $webinar)
    {
        $images = explode(';', $webinar->share);

        foreach ($images as $image) {
            unlink(public_path('files/webinar/share/' . $image));
        }

        $webinar->delete();
        return redirect('/admin/if-web')->with('notif', "Data deleted");
    }
}
