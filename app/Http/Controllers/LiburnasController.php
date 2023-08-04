<?php

namespace App\Http\Controllers;

use App\Models\Harilibur;
use Illuminate\Http\Request;

class LiburnasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harilibur = Harilibur::orderBy('tanggal', 'asc')->get();

        return view('admin.hariliburnas.index', compact('harilibur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.hariliburnas.create');
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
        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        Harilibur::create($request->all());

        return redirect()->route('hariliburnas.index')->with('success', 'Libur created successfully!');
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
        $liburnas = Harilibur::findOrFail($id);

        return view('admin.hariliburnas.edit', compact('liburnas'));
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
            $request->validate([
                'tanggal' => 'required',
                'keterangan' => 'required',
            ]);

            $liburnas = Harilibur::findOrFail($id);
            $liburnas->update($request->all());

            return redirect()->route('hariliburnas.index')->with('success', 'Data berhasil dihapus!');
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
        $liburnas = Harilibur::findOrFail($id);
        $liburnas->delete();

        return redirect()->route('hariliburnas.index')->with('success', 'Data berhasil dihapus!');
    }
}
