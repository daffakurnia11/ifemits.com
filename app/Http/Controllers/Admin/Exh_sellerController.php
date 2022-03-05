<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event_setting;
use App\Models\Exh_seller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Exh_sellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seller.index', [
            'title'     => 'Data Pendaftar Food & Beverage IECC',
            'datas'     => Exh_seller::latest()->get(),
            'setting'   => Event_setting::firstWhere('event', 'food-and-beverage')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Event_setting::firstWhere('event', 'food-and-beverage');
        $timenow = Carbon::now();

        if ($setting->form_open && $timenow->greaterThan($setting->form_open)) {
            if ($timenow->lessThan($setting->form_closed)) {
                return view('main.iecc.fnb.regis', [
                    'title' => 'Registrasi F&B IECC'
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
            'owner'         => 'required',
            'phone'         => 'required|digits_between:10,13|numeric',
            'email'         => 'required|email:dns|unique:exh_sellers',
            'product'       => 'required|in:Makanan,Minuman',
            'amount'        => 'required|numeric',
            'menu'          => 'required',
            'menu.*'        => 'mimes:jpg,jpeg,png,pdf|max:1024',
            'photo'         => 'required',
            'photo.*'       => 'mimes:jpg,jpeg,png,pdf|max:1024',
            'payment'       => 'required|mimes:jpg,jpeg,png|max:1024'
        ]);

        $firstNumber = substr($validated['phone'], 0, 1);
        if ($firstNumber === '0') {
            $validated['phone'] = $validated['phone'];
        } else {
            $validated['phone'] = '0' . $validated['phone'];
        }

        // Uploading Files
        if ($request->hasFile('menu') && $request->hasFile('photo') && $request->hasFile('payment')) {
            $register_code = 'Seller-' . (Exh_seller::count() ?? 0) + 1;
            $validated['register_code'] = $register_code;

            // Uploading Menu Form
            $menuFiles = $request->file('menu');
            $menuName = [];
            $index = 1;
            foreach ($menuFiles as $file) {
                $filename = $register_code . '_menu' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/pameran/seller/menu'), $filename);
                $menuName[] = $filename;
            }
            $validated['menu'] = implode(';', $menuName);

            // Uploading Photo Form
            $photoFiles = $request->file('photo');
            $photoName = [];
            $index = 1;
            foreach ($photoFiles as $file) {
                $filename = $register_code . '_photo' . $index . '.' . $file->extension();
                $index++;
                $file->move(public_path('files/pameran/seller/photo'), $filename);
                $photoName[] = $filename;
            }
            $validated['photo'] = implode(';', $photoName);

            $paymentFile = $register_code . '_payment.' . $request->payment->extension();
            $validated['payment'] = $paymentFile;
            $request->payment->move(public_path('files/pameran/seller/payment'), $paymentFile);

            Exh_seller::create($validated);
            return redirect('/food-and-beverage/registrasi')->with('message', 'Registration Success');
        } else {
            return back()->with('message', 'No File Uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exh_seller  $exh_seller
     * @return \Illuminate\Http\Response
     */
    public function show(Exh_seller $exh_seller)
    {
        return view('admin.seller.show', [
            'title'         => 'Data Pendaftar ' . $exh_seller->register_code,
            'seller'        => $exh_seller
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exh_seller  $exh_seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exh_seller $exh_seller)
    {
        $menus = explode(';', $exh_seller->menu);
        $images = explode(';', $exh_seller->photo);

        foreach ($menus as $menu) {
            unlink(public_path('files/pameran/seller/menu/' . $menu));
        }
        foreach ($images as $image) {
            unlink(public_path('files/pameran/seller/photo/' . $image));
        }
        unlink(public_path('files/pameran/seller/payment/' . $exh_seller->payment));

        $exh_seller->delete();
        return redirect('/admin/iecc/food-and-beverage')->with('notif', "Data deleted");
    }
}
