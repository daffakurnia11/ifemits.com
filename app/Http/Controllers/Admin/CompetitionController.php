<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Event_setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.msm.index', [
            'title'     => 'Data Pendaftar MSM',
            'datas'     => Competition::latest()->get(),
            'setting'   => Event_setting::firstWhere('event', 'msm')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Event_setting::firstWhere('event', 'msm');
        $timenow = Carbon::now();

        if ($setting->form_open && $timenow->greaterThan($setting->form_open)) {
            if ($timenow->lessThan($setting->form_closed)) {
                return view('main.msm.regis', [
                    'title' => 'Registrasi MSM'
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
            'email'             => 'required|email:dns|unique:competitions',
            'phone'             => 'required|digits_between:10,13|numeric',
            'data'              => 'required',
            'data.*'            => 'mimes:pdf|max:1024',
            'twibbon'           => 'required',
            'twibbon.*'         => 'mimes:jpg,jpeg,png|max:1024',
            'letter'            => 'required',
            'letter.*'          => 'mimes:pdf|max:1024',
            'recommendation'    => 'required',
            'recommendation.*'  => 'mimes:jpg,jpeg,png,pdf|max:1024',
            'payment'           => 'required|mimes:jpg,jpeg,png,pdf|max:1024',
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        // Uploading Files
        if ($request->hasFile('data') && $request->hasFile('twibbon') && $request->hasFile('letter') && $request->hasFile('recommendation') && $request->hasFile('payment')) {
            $register_code = 'MSM-' . (Competition::count() ?? 0) + 1;
            $validated['register_code'] = $register_code;

            // Uploading Data Form
            $dataFiles = $request->file('data');
            $dataName = [];
            $index = 1;
            foreach ($dataFiles as $file) {
                $filename = $register_code . '_data' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/competition/data'), $filename);
                $dataName[] = $filename;
            }
            $validated['data'] = implode(';', $dataName);

            // Uploading Twibbon Form
            $twibbonFiles = $request->file('twibbon');
            $twibbonName = [];
            $index = 1;
            foreach ($twibbonFiles as $file) {
                $filename = $register_code . '_twibbon' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/competition/twibbon'), $filename);
                $twibbonName[] = $filename;
            }
            $validated['twibbon'] = implode(';', $twibbonName);

            // Uploading Letter Form
            $letterFiles = $request->file('letter');
            $letterName = [];
            $index = 1;
            foreach ($letterFiles as $file) {
                $filename = $register_code . '_letter' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/competition/letter'), $filename);
                $letterName[] = $filename;
            }
            $validated['letter'] = implode(';', $letterName);

            // Uploading Recommendation Form
            $recommendationFiles = $request->file('recommendation');
            $recommendationName = [];
            $index = 1;
            foreach ($recommendationFiles as $file) {
                $filename = $register_code . '_recommendation' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/competition/recommendation'), $filename);
                $recommendationName[] = $filename;
            }
            $validated['recommendation'] = implode(';', $recommendationName);

            $paymentFile = $register_code . '_payment.' . $request->payment->extension();
            $validated['payment'] = $paymentFile;
            $request->payment->move(public_path('files/competition/payment'), $paymentFile);

            Competition::create($validated);
            return redirect('/msm/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        return view('admin.msm.show', [
            'title'         => 'Data Pendaftar ' . $competition->register_code,
            'competition'   => $competition
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        $datas = explode(';', $competition->data);
        $letters = explode(';', $competition->letter);
        $scans = explode(';', $competition->recommendation);
        $images = explode(';', $competition->twibbon);

        foreach ($scans as $scan) {
            unlink(public_path('files/competition/recommendation/' . $scan));
        }
        foreach ($datas as $data) {
            unlink(public_path('files/competition/data/' . $data));
        }
        foreach ($letters as $letter) {
            unlink(public_path('files/competition/letter/' . $letter));
        }
        foreach ($images as $image) {
            unlink(public_path('files/competition/twibbon/' . $image));
        }
        unlink(public_path('files/competition/payment/' . $competition->payment));

        $competition->delete();
        return redirect('/admin/msm')->with('notif', "Data deleted");
    }
}
