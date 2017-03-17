<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Petugas;
use Auth;

class PetugasController extends Controller
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
            $page = 'petugas';
            $datapetugas = Petugas::all();
            return view('petugas.index',compact('datapetugas','page'));
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
            'nik' => 'required|unique:petugas',
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto' => 'sometimes|image',
        ]);

        $petugas = new Petugas();

        if($request->file('foto') == "")
        {
            $foto_name = null;
        } 
        else
        {
            if ($request->hasFile('foto')){
                $foto = $request->file('foto');
                $ext = $foto->GetClientOriginalExtension();

                if ($request->file('foto')->isValid()){
                    $foto_name = $request['nik']."_".date('d-m-Y_His'). ".$ext";
                    $upload_path = 'foto';
                    $request->file('foto')->move($upload_path, $foto_name);
                }
            }
        }
        $petugas->nik = $request['nik'];
        $petugas->nama = $request['nama'];
        $petugas->tgl_lahir = $request['tgl_lahir'];
        $petugas->jenis_kelamin = $request['jenis_kelamin'];
        $petugas->alamat = $request['alamat'];
        $petugas->no_hp = $request['no_hp'];
        $petugas->foto = $foto_name;

        $petugas->save();

        $request->session()->flash('message', 'Data berhasil ditambahkan ke database!');
        return redirect('petugas/'.$petugas->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->level == 'Staff' or Auth::user()->level == 'Supervisor') {
            $page = 'petugas';
            $datapetugas = Petugas::find($id);
            return view('petugas.show',compact('datapetugas','page'));
        }else{
            abort(404);
        }
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
            $page = 'petugas';
            $datapetugas = Petugas::find($id);
            return view('petugas.edit',compact('datapetugas','page'));
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
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto' => 'sometimes|mimes:jpg,jpeg,bmp,png,gif',
        ]);

        $petugas = Petugas::find($id);

        if($request->file('foto') == "")
        {
            $foto_name = $petugas->foto;
        } 
        else
        {
            if ($request->hasFile('foto')){
                File::delete('foto/'.$petugas->foto);
                $foto = $request->file('foto');
                $ext = $foto->GetClientOriginalExtension();

                if ($request->file('foto')->isValid()){
                    $foto_name = $request['nama']."_".date('dmYHis'). ".$ext";
                    $upload_path = 'foto';
                    $request->file('foto')->move($upload_path, $foto_name);
                }
            }
        }

        $petugas->nama = $request['nama'];
        $petugas->tgl_lahir = $request['tgl_lahir'];
        $petugas->jenis_kelamin = $request['jenis_kelamin'];
        $petugas->alamat = $request['alamat'];
        $petugas->no_hp = $request['no_hp'];
        $petugas->foto = $foto_name;

        $petugas->save();

        $request->session()->flash('message', 'Data berhasil diupdate!');
        return redirect('petugas/'.$petugas->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $petugas = Petugas::find($id);
        File::delete('foto/'.$petugas->foto);
        $petugas->delete();
        $request->session()->flash('message', 'Data berhasil di hapus!');
        return redirect('petugas');
    }
}
