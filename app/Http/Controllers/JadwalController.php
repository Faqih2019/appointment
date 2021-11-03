<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $datajadwal = jadwal::all();
        return view('jadwal')->with('dataJadwal', $datajadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataMahasiswa = mahasiswa::all();
        $dataDosen = dosen::all();
        return view('jadwalcreate')->with('dataMahasiswa', $dataMahasiswa)->with('dataDosen', $dataDosen);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jadwal::create([
            'mahasiswa_id'=>$request['mahasiswa'],
            'dosen_id'=>$request['dosen'],
            'judul'=>$request['judul'],
            'deskripsi'=>$request['deskripsi'],
            'awal'=>$request['awal'],
            'akhir'=>$request['akhir']
        ]);

        return redirect("jadwal");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = jadwal::findOrFail($id);
        return view('jadwalshow')->with('jadwal', $jadwal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataMahasiswa = mahasiswa::all();
        $dataDosen = dosen::all();
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwaledit')->with('dataMahasiswa', $dataMahasiswa)->with('dataDosen', $dataDosen)->with('jadwal', $jadwal);
        
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
        jadwal::where('id', $id)->update([
            'mahasiswa_id'=>$request['mahasiswa'],
            'dosen_id'=>$request['dosen'],
            'judul'=>$request['judul'],
            'deskripsi'=>$request['deskripsi'],
            'awal'=>$request['awal'],
            'akhir'=>$request['akhir']
        ]);
        return redirect("jadwal");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::destroy($id);
        return redirect("jadwal");
    }
}
