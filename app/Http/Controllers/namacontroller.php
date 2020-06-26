<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nama;

class namacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nama::all();

        return view('nama.nama_index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nama.nama_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Nama;
        $data->id_siswa = $request->input('id_siswa');
        $data->nama_siswa = $request->input('nama_siswa');
        $data->save();

        // return 'sukses';
        return redirect('/nama');
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
        $data = Nama::find($id);
        return view('nama.nama_edit')->with('data',$data);
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
        
        $data = Nama::find($id);
        $data->id_siswa = $request->input('id_siswa');
        $data->nama_siswa = $request->input('nama_siswa');
        $data->save();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Nama::find($id);
        $data->delete();
        return redirect('/nama');
    }
}
