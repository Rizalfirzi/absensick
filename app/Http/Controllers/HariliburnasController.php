<?php

namespace App\Http\Controllers;

use App\Models\hariliburnas;
use Illuminate\Http\Request;

class HariliburnasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $liburnas = hariliburnas::orderBy('tanggal', 'asc')->get();
        // dd($liburnas);

        return view('admin.hariliburnas.index', compact('liburnas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hariliburnas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        hariliburnas::create($validatedData);

        return redirect()->route('libur.index')->with('success', 'Data libur berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(hariliburnas $hariliburnas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($libur)
    {
        $liburnas = hariliburnas::where('kdharilibur', $libur)->first();

        return view('admin.hariliburnas.edit', compact('liburnas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $libur)
    {
        //
            $request->validate([
                'tanggal' => 'required',
                'keterangan' => 'required',
            ]);

            $liburnas = hariliburnas::where('kdharilibur', $libur)->first();

            $liburnas->update($request->all());

            return redirect()->route('libur.index')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($libur)
    {
        //
        $liburnas = hariliburnas::where('kdharilibur', $libur)->first();
        $liburnas->delete();

        return redirect()->route('libur.index')->with('success', 'Data berhasil dihapus!');
    }
}
