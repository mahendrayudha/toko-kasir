<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyPolicy extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['privacy'] = Privacy::first();
        return view('privacy.index', $data);
        // @dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function term()
    {
        $data['term'] = Privacy::findOrFail(2);
        return view('privacy.term', $data);
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
        //
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
        // $data = $request->all();
        $priv = Privacy::first();
        $priv->deskripsi = $request->deskripsi;
        // echo $request->deskripsi;
        $priv->update();
        return redirect('privacy')->with('success', 'Berhasil Ubah Data');
    }

    public function updateterm(Request $request)
    {
        $priv = Privacy::findOrFail(2);
        $priv->deskripsi = $request->deskripsi;
        // echo $request->deskripsi;
        $priv->update();
        return redirect('term')->with('success', 'Berhasil Ubah Data');
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
