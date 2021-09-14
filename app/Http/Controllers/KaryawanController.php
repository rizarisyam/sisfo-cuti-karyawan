<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view("admin.karyawan.index", compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == 'staf hr') {
            return view("stafhr.karyawan.create");
        }
        return view("admin.karyawan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $karyawan = Karyawan::create([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'tmpt_lahir' => $request->input('tmpt_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'status_nikah' => $request->input('status_nikah'),
            'status_karyawan' => $request->input('status_karyawan'),
            'pendidikan' => $request->input('pendidikan'),
            'departemen' => $request->input('departemen'),
            'jabatan' => $request->input('jabatan')
        ]);

        return redirect()->route('karyawan.index');
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
        $k = Karyawan::find($id);
        if(auth()->user()->role == 'staf hr') {
            return view("stafhr.karyawan.edit", compact('k'));
        }
        return view("admin.karyawan.edit", compact('k'));
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
        $k = Karyawan::find($id);
        if(auth()->user()->role == 'staf hr') {
            $k->update([
                'nik' => $request->input('nik'),
                'nama' => $request->input('nama'),
                'tmpt_lahir' => $request->input('tmpt_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'telp' => $request->input('telp'),
                'alamat' => $request->input('alamat'),
                'status_nikah' => $request->input('status_nikah'),
                'status_karyawan' => $request->input('status_karyawan'),
                'pendidikan' => $request->input('pendidikan'),
                'departemen' => $request->input('departemen'),
                'jabatan' => $request->input('jabatan')
            ]);

            return redirect()->route('karyawan.index');
        }

        $k->update([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'tmpt_lahir' => $request->input('tmpt_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'status_nikah' => $request->input('status_nikah'),
            'status_karyawan' => $request->input('status_karyawan'),
            'pendidikan' => $request->input('pendidikan'),
            'departemen' => $request->input('departemen'),
            'jabatan' => $request->input('jabatan')
        ]);

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
