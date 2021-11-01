<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct(){
        $this->Mahasiswa = new Mahasiswa();
    }

    public function mahasiswa()
    {
        $data = ['mahasiswa' => $this->Mahasiswa->dataMahasiswa()];
        return view('mahasiswa', $data);
    }
    public function mahasiswacreate()
    {
        $data = ['title' => "Create Mahasiswa"];
        return view('mahasiswacreate', $data);
    }

    public function mahasiswaEdit($id){
        $data = ['mahasiswa' => $this->Mahasiswa->getOneData($id),
                'title' => "Edit Mahasiswa"];
        return view('mahasiswaedit', $data);
    }

    public function mahasiswashow($id)
    {
        $data=['mahasiswa' => $this->Mahasiswa->getOneData($id)];
        return view('mahasiswashow',$data);
    }

    public function mahasiswaadd(){
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'tanggal_lahir' => Request()->tanggallahir,
                'alamat' => Request()-> alamat,
                'tahun_masuk' => Request()->tahunmasuk,
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ];
            $this->Mahasiswa->addMahasiswa($data);
            return redirect("mahasiswa");
    }

    public function mahasiswachange($id){
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'tanggal_lahir' => Request()->tanggallahir,
                'alamat' => Request()->alamat,
                'tahun_masuk' => Request()->tahunmasuk,
                'updated_at' => $datetime,
            ];

            $this->Mahasiswa->editMahasiswa($data, $id);
            return redirect("mahasiswa");
    }

    public function mahasiswaDelete($id){
        $this->Mahasiswa->deleteMahasiswa($id);
        return redirect('mahasiswa');
    }

}
