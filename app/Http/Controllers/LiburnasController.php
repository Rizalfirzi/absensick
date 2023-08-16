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
        $liburnas = Harilibur::orderBy('tanggal', 'asc')->get();
        // dd($liburnas);

        return view('admin.hariliburnas.index', compact('liburnas'));
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
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        // Mengambil nilai terbesar saat ini dari kolom 'kdharilibur'
        $lastKdharilibur = Harilibur::max('kdharilibur');

        // Mengecek apakah ada data sebelumnya atau belum
        if (!$lastKdharilibur) {
            $newKdharilibur = 1; // Jika belum ada data, dimulai dari 1
        } else {
            $newKdharilibur = $lastKdharilibur + 1; // Jika sudah ada data, tambahkan 1
        }

        // Menambahkan 'kdharilibur' ke dalam data yang divalidasi
        $validatedData['kdharilibur'] = $newKdharilibur;

        // Membuat record baru menggunakan data yang sudah divalidasi
        $harilibur = Harilibur::create($validatedData);

        return redirect()->route('libur.index')->with('success', 'Libur created successfully!');
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
    public function edit($libur)
    {
        $liburnas = Harilibur::where('kdharilibur', $libur)->first();

        return view('admin.hariliburnas.edit', compact('liburnas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $libur)
    {
        //
            $request->validate([
                'tanggal' => 'required',
                'keterangan' => 'required',
            ]);

            $liburnas = Harilibur::where('kdharilibur', $libur)->first();

            $liburnas->update($request->all());

            return redirect()->route('libur.index')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($libur)
    {
        //
        $liburnas = Harilibur::where('kdharilibur', $libur)->first();
        $liburnas->delete();

        return redirect()->route('libur.index')->with('success', 'Data berhasil dihapus!');
    }
}
