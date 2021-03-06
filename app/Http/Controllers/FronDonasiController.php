<?php

namespace App\Http\Controllers;

use App\Models\form_donasi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class FronDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $form_donasi = Form_donasi::all();
        // return view('pronen.donasi');
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
            'nama_donatur' => 'required',
            'email' => 'required|unique:form_donasis',
            'no_tlp' => 'required',
            'nominal' => 'required',
            'tgl_transfer' => 'required',
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'transfer_kebank' => 'required',

        ]);

        $form_donasi = new form_donasi;
        $form_donasi->nama_donatur = $request->nama_donatur;
        $form_donasi->email = $request->email;
        $form_donasi->no_tlp = $request->no_tlp;
        $form_donasi->nominal = $request->nominal;
        $form_donasi->tgl_transfer = $request->tgl_transfer;
        $form_donasi->nama_bank = $request->nama_bank;
        $form_donasi->no_rek = $request->no_rek;
        $form_donasi->transfer_kebank = $request->transfer_kebank;
        Alert::success('Good Job', 'Berhasil Menambah Data');
        $form_donasi->save();
        return redirect()->route('donasi');


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
    public function update(Request $request, $id)
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
        //
    }
}
