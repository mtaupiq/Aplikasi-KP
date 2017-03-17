<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbaikan;
use Auth;

class PerbaikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 'Staff' or Auth::user()->level == 'Supervisor') {
            $page = 'perbaikan';
            $dataperbaikan = Perbaikan::all();
            return view('perbaikan.index',compact('dataperbaikan','page'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'perbaikan' => 'required|unique:perbaikan',
            'deskripsi' => 'required'
        ]);

        $perbaikan = new Perbaikan();
        $perbaikan->perbaikan = $request['perbaikan'];
        $perbaikan->deskripsi = $request['deskripsi'];
        $perbaikan->save();

        $request->session()->flash('message', 'Data berhasil ditambahkan ke database!');
        return redirect('perbaikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->level == 'Staff') {
            $page = 'perbaikan';
            $dataperbaikan = Perbaikan::find($id);
            return view('perbaikan.edit',compact('dataperbaikan','page'));
        }else{
            abort(404);
        }
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
         $this->validate($request,[
            'perbaikan' => 'required',
            'deskripsi' => 'required'
        ]);

        $perbaikan = Perbaikan::find($id);
        $perbaikan->perbaikan = $request['perbaikan'];
        $perbaikan->deskripsi = $request['deskripsi'];
        $perbaikan->save();

        $request->session()->flash('message', 'Data berhasil diubah!');
        return redirect('perbaikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $perbaikan = Perbaikan::find($id)->delete();
        $request->session()->flash('message', 'Data berhasil di hapus!');
        return redirect('perbaikan');
    }
}
