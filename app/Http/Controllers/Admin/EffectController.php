<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Effect;
use App\Models\Effect_team;
use App\Models\Event_setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EffectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.effect.index', [
            'title'     => 'Data Pendaftar EFFECT',
            'datas'     => Effect::latest()->get(),
            'setting'   => Event_setting::firstWhere('event', 'effect')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Event_setting::firstWhere('event', 'effect');
        $timenow = Carbon::now();

        if ($setting->form_open && $timenow->greaterThan($setting->form_open)) {
            if ($timenow->lessThan($setting->form_closed)) {
                return view('main.effect.regis', [
                    'title' => 'Registrasi EFFECT'
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
        $register_code = 'EFFECT-' . (Effect::count() ?? 0) + 1;
        $validated = $request->validate([
            // Page 1
            'member1'           => 'required',
            'email'             => 'required|email:dns|unique:competitions',
            'phone'             => 'required|digits_between:10,13|numeric',
            'photo1'            => 'required|mimes:jpg,jpeg,png|max:1024',
            'identity1'         => 'required|mimes:jpg,jpeg,png|max:1024',
            // Page 2
            'member2'           => 'required',
            'photo2'            => 'required|mimes:jpg,jpeg,png|max:1024',
            'identity2'         => 'required|mimes:jpg,jpeg,png|max:1024',
            'member3'           => 'required',
            'photo3'            => 'required|mimes:jpg,jpeg,png|max:1024',
            'identity3'         => 'required|mimes:jpg,jpeg,png|max:1024',
            // Page 3
            'member4'           => 'required',
            'photo4'            => 'required|mimes:jpg,jpeg,png|max:1024',
            'identity4'         => 'required|mimes:jpg,jpeg,png|max:1024',
            'member5'           => 'required',
            'photo5'            => 'required|mimes:jpg,jpeg,png|max:1024',
            'identity5'         => 'required|mimes:jpg,jpeg,png|max:1024',
            // Page 4
            'team'              => 'required',
            'collage'           => 'required',
            'proposal'          => 'required|mimes:pdf|max:5120',
            'payment'           => 'required|mimes:jpg,jpeg,png|max:1024'
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        // Uploading Proposal and Payment
        $proposal = $register_code . '_proposal.' . $request->proposal->extension();
        $request->proposal->move(public_path('files/effect/proposal'), $proposal);
        $payment = $register_code . '_payment.' . $request->payment->extension();
        $request->payment->move(public_path('files/effect/payment'), $payment);

        $datas = [
            'register_code'     => $register_code,
            'email'             => $validated['email'],
            'phone'             => $validated['phone'],
            'team'              => $validated['team'],
            'collage'           => $validated['collage'],
            'proposal'          => $proposal,
            'payment'           => $payment,
        ];
        $foreignId = Effect::create($datas)->id;

        for ($i = 1; $i <= 5; $i++) {
            $photo = $register_code . "_photo$i." . $validated["photo$i"]->extension();
            $validated["photo$i"]->move(public_path('files/effect/photo'), $photo);
            $identity = $register_code . "_identity$i." . $validated["identity$i"]->extension();
            $validated["identity$i"]->move(public_path('files/effect/ktm'), $identity);

            $team = [
                'effect_id'     => $foreignId,
                'register_code' => $register_code,
                'name'          => $validated["member$i"],
                'photo'         => $photo,
                'identity'      => $identity
            ];
            Effect_team::create($team);
        }
        return redirect('/effect/registrasi')->with('message', 'Registration Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Effect  $effect
     * @return \Illuminate\Http\Response
     */
    public function show(Effect $effect)
    {
        return view('admin.effect.show', [
            'title'         => 'Data Pendaftar ' . $effect->register_code,
            'effect'        => $effect,
            'members'       => Effect_team::where('effect_id', $effect->id)->get()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Effect  $effect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Effect $effect)
    {
        unlink(public_path('files/effect/proposal/' . $effect->proposal));
        unlink(public_path('files/effect/payment/' . $effect->payment));

        $members = Effect_team::where('effect_id', $effect->id);
        foreach ($members as $member) {
            unlink(public_path('files/effect/ktm/' . $member->identity));
            unlink(public_path('files/effect/photo/' . $member->photo));
            $member->delete();
        }
        $effect->delete();
        return redirect('/admin/effect')->with('notif', "Data deleted");
    }
}
