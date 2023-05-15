<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas;
use App\Mapel;
use App\Jurusan;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $guru = User::where('level', 'guru')->get()->all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $mapel = Mapel::all();
        return view('user.user-create', compact('user','kelas', 'mapel', 'guru', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->input('password'))
        {
            $input['password'] = bcrypt($input['password']);
        }
        User::create($input);
        return back();
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
        $user = User::find($id);
        $kelas = Kelas::all();
        return view('user.user-edit', compact('user','kelas'));
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
        $user = User::findOrFail($id);
        // $kelas = Kelas::all();
        $data = $request->all();

        if($request->input('password'))
        {
            // jika data password akan diubah, maka data yang baru akan di enkripsi 
            $data['password'] = bcrypt($data['password']);
        }
        else
        {
            // jika data tidak diubah, maka akan menggunakan data lama dan tetap dienkripsi
            $data = Arr::except($data,['password']);
        }
        Kelas::create($data);
        $user->update($data);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/user');
    }
}
