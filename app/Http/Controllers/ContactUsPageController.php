<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Privacy;
use App\Models\LandingPage;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = LandingPage::findOrFail(1);
        $data['dataset'] = Setting::first();
        return view('contact-us.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 1;
        ContactUs::create($data);
        return redirect('contact-us')->with('success', 'Berhasil kirim masukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['contact'] = ContactUs::latest()->get();
        return view('contact-us.admin', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->status = 2;
        $contact->update();
        $data['contact_us'] = ContactUs::findOrFail($id);
        return view('contact-us.detail', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ContactUs::findOrFail($id);
        $data->delete();
        return redirect('contact')->with('success', 'Berhasil Hapus Data');
    }
}
