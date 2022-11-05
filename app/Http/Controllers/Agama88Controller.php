<?php

namespace App\Http\Controllers;

use App\Models\Agama88;
use Illuminate\Http\Request;

class Agama88Controller extends Controller
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

    // Agama
    public function addAgama88()
    {
        return view('agama.tambah88');
    }

    public function prosestambah88(Request $request)
    {
        $this->validate($request, [
            'nama_agama' => 'required'
        ]);

        $addagama = Agama88::create([
            'nama_agama' => $request->nama_agama,
        ]);

        return redirect('/dataagama88');
    }

    public function data88()
    {
        $dataagama88 = Agama88::all();
        return view('agama.data88', compact('dataagama88'));
    }

    public function delete88($id)
    {
        $deleteagama = Agama88::findorfail($id);
        $deleteagama->delete();
        return back();
    }
}
