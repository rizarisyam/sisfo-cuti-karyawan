<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role == 'karyawan') {
            $cuti = Cuti::where('user_id', auth()->user()->id)->get();

            return view("karyawan.cuti.index", compact('cuti'));
        }
        if(auth()->user()->role == 'super admin') {
            $cuti = Cuti::all();
            // dd($cuti);
            return view("admin.cuti.index", compact('cuti'));
        }
        if(auth()->user()->role == 'staf hr') {
            $cuti = Cuti::all();
            // dd($cuti);
            return view("stafhr.cuti.index", compact('cuti'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == 'karyawan') {
            return view("karyawan.cuti.create");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->role == 'karyawan') {
            $initial_cuti = 12;
            $cuti = Cuti::where('user_id', auth()->user()->id)->get();
            // dd($cuti);
            if(count($cuti) > 0) {
                Cuti::create([
                    'user_id' => auth()->user()->id,
                    'mulai_cuti' => $request->input('mulai_cuti'),
                    'akhir_cuti' => $request->input('akhir_cuti'),
                    'jenis_cuti' => $request->input('jenis_cuti'),
                    'jumlah_cuti' => $request->input('jumlah_cuti'),
                    'sisa_cuti' => ($cuti[count($cuti) - 1]->sisa_cuti - $request->input('jumlah_cuti')),
                    'keterangan' => $request->input('keterangan'),
                    'status' => 'pending',
                ]);
            }else {
                Cuti::create([
                    'user_id' => auth()->user()->id,
                    'mulai_cuti' => $request->input('mulai_cuti'),
                    'akhir_cuti' => $request->input('akhir_cuti'),
                    'jenis_cuti' => $request->input('jenis_cuti'),
                    'jumlah_cuti' => $request->input('jumlah_cuti'),
                    'sisa_cuti' => ($initial_cuti - intval($request->input('jumlah_cuti'))),
                    'keterangan' => $request->input('keterangan'),
                    'status' => 'pending',
                ]);
            }


            return redirect()->route('cuti.index');
        }
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
        if(auth()->user()->role == 'super admin') {
            $cuti = Cuti::find($id);
            // dd($cuti);
            return view("admin.cuti.edit", compact('cuti'));
        }
        if(auth()->user()->role == 'staf hr') {
            $cuti = Cuti::find($id);
            // dd($cuti);
            return view("stafhr.cuti.edit", compact('cuti'));
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
        $cuti = Cuti::find($id);
        $cuti->update([
            'user_id' => $cuti->user_id,
            'mulai_cuti' => $request->input('mulai_cuti'),
            'akhir_cuti' => $request->input('akhir_cuti'),
            'jenis_cuti' => $request->input('jenis_cuti'),
            'jumlah_cuti' => $request->input('jumlah_cuti'),
            'sisa_cuti' => $request->input('sisa_cuti'),
            'keterangan' => $request->input('keterangan'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('cuti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->role == 'super admin') {
            $cuti = Cuti::find($id);
            $cuti->delete();
            return redirect()->route('cuti.index');
        }

        if(auth()->user()->role == 'staf hr') {
            $cuti = Cuti::find($id);
            $cuti->delete();
            return redirect()->route('cuti.index');
        }
    }
}
