<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwal()
    {
        return view('jadwal');
    }

    public function jadwaledit()
    {
        return view('jadwaledit');
    }

    public function dosenedit()
    {
        return view('jadwalshow');
    }
}
