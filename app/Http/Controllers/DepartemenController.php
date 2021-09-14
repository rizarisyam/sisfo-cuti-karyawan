<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Faker\DefaultGenerator;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen = Departemen::all();
        return view('admin.departemen.index', compact('departemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departemen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Departemen::create([
            'departemen' => $request->input('departemen'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->route('departemen.index');
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
        $departemen = Departemen::find($id);
        return view('admin.departemen.edit', compact('departemen'));
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
        $departemen = Departemen::find($id);
        $departemen->update([
            'departemen' => $request->input('departemen'),
            'keterangan' => $request->input('keterangan')
        ]);

        return redirect()->route('departemen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departemen = Departemen::find($id);
        $departemen->delete();

        return redirect()->route('departemen.index');
    }
}
