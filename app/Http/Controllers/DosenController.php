<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function __construct(){
        $this->Dosen = new Dosen();
    }

    public function dosen()
    {
        $data = ['dosen' => $this->Dosen->dataDosen()];
        return view('dosen', $data);
    }

    public function dosencreate()
    {
        $data = ['title' => "Create Dosen"];
        return view('dosenedit', $data);
    }

    public function dosenedit()
    {
        $data = ['title' => "Edit Dosen"];
        return view('dosenedit', $data);
    }

    public function dosenshow($id)
    {
        $data=['dosen' => $this->Dosen->getOneData($id)];
        return view('dosenshow',$data);
    }

    public function dosenadd(){
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nidn' => Request()->nidn,
                'alamat' => Request()-> alamat,
                'kontak' => Request()->kontak,
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ];
            $this->Dosen->adddosen($data);
            return redirect("dosen");
    }
}
