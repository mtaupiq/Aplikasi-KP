<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
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
        if (Auth::user()->level == 'Supervisor') {
            $page = 'user';
            $datauser = User::all();
            return view('user.index',compact('datauser','page'));
        }else{
            abort(401);
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
            'name' => 'required|max:25',
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|max:25',
            'password' => 'required|min:6|confirmed',
            'level' => 'required',
        ]);

        $user = new User;
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->level = $request['level'];

        $user->save();

        $request->session()->flash('message', 'User berhasil ditambah ke database!');
        return redirect('user');
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
        if (Auth::user()->level == 'Supervisor') {
            $page = 'user';
            $datauser = User::find($id);
            return view('user.edit',compact('datauser','page'));
        }else{
            abort(401);
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
            'name' => 'required|max:255',
            'username' => 'required|min:6',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'level' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->level = $request['level'];

        $user->save();

        $request->session()->flash('message', 'User berhasil diupdate!');
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id)->delete();
        $request->session()->flash('message', 'User berhasil dihapus!');
        return redirect('user');
    }
}
