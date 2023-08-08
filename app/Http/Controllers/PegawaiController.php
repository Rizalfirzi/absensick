<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pegawai = DB::table('t_pegawai')
            ->select('t_pegawai.*', 'direktorat.direktorat as nama_direktorat', 'satker.nama as nama_satker')
            ->leftJoin('direktorat', 't_pegawai.direktorat_id', '=', 'direktorat.direktorat_id')
            ->leftJoin('satker', function ($join) {
                $join->on('t_pegawai.satker_id', '=', 'satker.satker_id')->orWhere('t_pegawai.ppk_id', '=', DB::raw('satker.satker_id'));
            })
            ->where('t_pegawai.status', 1)
            ->orderBy('t_pegawai.satker_id')
            ->orderBy('t_pegawai.nama', 'asc')
            ->get();

        return view('admin.pegawai.index', compact('pegawai'));
        // $direktorats = DB::table('direktorat')->get();
        // $pegawai = [];
        // $satkerOptions = [];

        // if ($request->has('q1')) {
        //     $direktoratId = $request->q1;

        //     if ($direktoratId) {
        //         $satkerOptions = DB::table('satker')
        //             ->where('direktorat_id', $direktoratId)
        //             ->get();
        //     }

        //     $pegawai = DB::table('t_pegawai')
        //         ->select('t_pegawai.*', 'direktorat.direktorat as nama_direktorat', 'satker.nama as nama_satker')
        //         ->leftJoin('direktorat', 't_pegawai.direktorat_id', '=', 'direktorat.direktorat_id')
        //         ->leftJoin('satker', function ($join) {
        //             $join->on('t_pegawai.satker_id', '=', 'satker.satker_id')
        //                 ->orWhere('t_pegawai.ppk_id', '=', DB::raw('satker.satker_id'));
        //         })
        //         ->where('t_pegawai.status', 1)
        //         ->when($direktoratId, function ($query) use ($direktoratId) {
        //             return $query->where('t_pegawai.direktorat_id', $direktoratId);
        //         })
        //         ->orderBy('t_pegawai.satker_id')
        //         ->orderBy('t_pegawai.nama', 'asc')
        //         ->get();
        // }

        // return view('admin.pegawai.index', compact('direktorats', 'pegawai', 'satkerOptions'));
    }

    // public function getSatker($direktoratId)
    // {
    //     $satkerOptions = DB::table('satker')
    //         ->where('direktorat_id', $direktoratId)
    //         ->get();

    //     return response()->json($satkerOptions);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pegawai $pegawai)
    {
        //
    }
}