<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudModel;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'ini adalah index';
        $data = CrudModel::all();
        $kelas = 'a';
        // $data = CrudModel::where('kelas','like','%'.$kelas.'%')->get();
        return view('crud.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new CrudModel;
        $data->nama = $request->input('nama');
        $data->kelas = $request->input('kelas');
        $data->save();

        // return 'sukses';
        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CrudModel::find($id);
        return 'nama saya : "'.$data->nama.'" dan kelas saya : "'.$data->kelas.'"';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CrudModel::find($id);
        return view('crud.edit')->with('data',$data);
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
        $data = CrudModel::find($id);
        $data->nama = $request->input('nama');
        $data->kelas = $request->input('kelas');
        $data->save();
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CrudModel::find($id);
        $data->delete();
        return redirect('/crud');
    }
}
