<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = LandingPage::findOrFail(1);
        return view('landingpage.index',  $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $landingpage = LandingPage::first();
        $landingpage->hero_title = $request->hero_title;
        $landingpage->hero_subtitle = $request->hero_subtitle;
        $landingpage->download_title = $request->download_title;
        $landingpage->download_subtitle = $request->download_subtitle;
        $landingpage->footer_desc = $request->footer_desc;
        $landingpage->url_appstore = $request->url_appstore;
        $landingpage->url_googleplay = $request->url_googleplay;
        $landingpage->url_fb = $request->url_fb;
        $landingpage->url_twitter = $request->url_twitter;
        $landingpage->url_ig = $request->url_ig;

        // if ($request->hasFile('path_logo')) {
        //     $file = $request->file('path_logo');
        //     $nama = 'logo-' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('/img'), $nama);

        //     $landingpage->logo = "/img/$nama";
        // }

        // if ($request->hasFile('hero_app_image')) {
        //     $file = $request->file('hero_app_image');
        //     $nama = 'logo-' . date('Y-m-dHis') . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('/img'), $nama);

        //     $landingpage->hero_app_image = "/img/$nama";
        // }
        // if ($request->hasFile('download_hero_app_image')) {
        //     $file = $request->file('download_hero_app_image');
        //     $nama = 'logo-' . date('Y-m-dHis') . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('/img'), $nama);

        //     $landingpage->download_app_image = "/img/$nama";
        // }

        $landingpage->update();
        return redirect('landing_page')->with('success', 'Berhasi Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
