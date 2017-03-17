<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logbook;
use App\Perbaikan;
use App\Petugas;
use Auth;

class LogbookController extends Controller
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
        $page = 'logbook';
        $datalogbook = Logbook::with('perbaikan','petugas')->get();
        $listperbaikan = Perbaikan::pluck('perbaikan','id');
        $listpetugas = Petugas::pluck('nama','id');
        return view('logbook.index',compact('datalogbook', 'listperbaikan', 'listpetugas','page'));
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
            'tanggal' => 'required|date',
            'no_tiket' => 'required|size:9|unique:logbook',
            'wo' => 'sometimes|size:9'
        ]);

        $logbook = new Logbook();
        $logbook->tanggal = $request['tanggal'];
        $logbook->tiket = $request['tiket'];
        $logbook->no_tiket = $request['no_tiket'];
        $logbook->wo = $request['wo'];
        $logbook->lokasi = $request['lokasi'];
        $logbook->keterangan = $request['keterangan'];
        $logbook->save();

        $logbook->perbaikan()->attach($request['perbaikan']);
        $logbook->petugas()->attach($request['petugas']);

        $request->session()->flash('message', 'Data berhasil ditambahkan ke database!');
        return redirect('logbook');
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
            $page = 'logbook';
            $datalogbook = Logbook::find($id);
            $listperbaikan = Perbaikan::pluck('perbaikan','id');
            $listpetugas = Petugas::pluck('nama','id');
            return view('logbook.edit',compact('datalogbook', 'listperbaikan', 'listpetugas','page'));
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
            'tanggal' => 'required|date'
        ]);
        
        $logbook = Logbook::find($id);
        $logbook->tanggal = $request['tanggal'];
        $logbook->tiket = $request['tiket'];
        $logbook->no_tiket = $request['no_tiket'];
        $logbook->wo = $request['wo'];
        $logbook->lokasi = $request['lokasi'];
        $logbook->keterangan = $request['keterangan'];
        $logbook->save();

        $logbook->perbaikan()->sync($request['perbaikan']);
        $logbook->petugas()->sync($request['petugas']);

        $request->session()->flash('message', 'Data berhasil diubah!');
        return redirect('logbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $logbook = Logbook::find($id)->delete();
        $request->session()->flash('message', 'Data berhasil di hapus!');
        return redirect('logbook');
    }
}
