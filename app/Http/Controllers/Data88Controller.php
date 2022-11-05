<?php

namespace App\Http\Controllers;

use App\Models\Agama88;
use App\Models\Data88;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Data88Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    // Data
    public function data88()
    {
        $data88 = Data88::all();
        $data_user = User::all();
        $data_agama = Agama88::all();
        // $lahir = Data88::all()->tanggal_lahir;
        // $today = Carbon::now()->format('Y-m-d');
        // $umur = $today->diff($lahir);
        // $umur = \Carbon\Carbon::parse($data88->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
        return view('crud.data88', compact('data88', 'data_user', 'data_agama'));
    }

    public function adddata88()
    {
        $data88 = Data88::all();
        $data_user = User::all();
        $id = Auth::user()->id;
        $data_agama = Agama88::all();
        return view('crud.tambah88', compact('data88', 'data_user', 'id', 'data_agama'));
    }

    public function prosesedit88(Request $request)
    {
        $data = [
            'alamat' => $request->input('alamat'),
            'users_id' => $request->input('users_id'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama_id' => $request->input('agama_id'),
            'foto_ktp' => $request->input('foto_ktp')
        ];

        $data_user = User::all();
        $data_agama = Agama88::all();
        Data88::update([
            'alamat' => $request->alamat,
            'users_id' => $request->users_id,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama_id' => $request->agama_id,
            'foto_ktp' => $request->foto_ktp,
        ]);

        return redirect('/');

        // $tanggal_lahir = explode("/", $request->tanggal_lahir);
        // $umur = (date("md", date("U", mktime(0, 0, 0, $tanggal_lahir[0], $tanggal_lahir[1], $tanggal_lahir[2]))) > date("md") ? ((date("Y") - $tanggal_lahir[2]) - 1) : (date("Y") - $tanggal_lahir[2]));;
    }

    public function editData88($id)
    {
        $editData88 = Data88::findorfail($id);
        $data88 = Data88::all();
        $data_user = User::all();
        $data_agama = Agama88::all();
        return view('crud.edit88', compact('editData88', 'data88', 'data_user', 'data_agama'));
    }

    public function activator88()
    {
        $user = User::all();
        return view("crud.activator88", compact('user'));
    }

    public function aktif88($id)
    {
        $id1 = User::all();
        foreach ($id1 as $a) {
            if ($a->role == 'User') {
                $nonaktif = User::findorfail($id);
                $cek = User::get('isActive');
                $nonaktif->isActive = '0';
                $nonaktif->update($cek->toArray());
            }
        }
        return redirect("activator88");
    }

    public function nonaktif88($id)
    {
        $id1 = User::all();
        foreach ($id1 as $a) {
            if ($a->role == 'User') {
                $nonaktif = User::findorfail($id);
                $cek = User::get('isActive');
                $nonaktif->isActive = '1';
                $nonaktif->update($cek->toArray());
            }
        }
        return redirect("activator88");
    }
}
