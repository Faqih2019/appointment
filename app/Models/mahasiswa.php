<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Model
{
    public function dataMahasiswa()
    {
        return DB::table('mahasiswas')->get();
    }

    public function getOneData($id){
        return DB::table('mahasiswas')->where('id', $id)->first();
    }

    public function addMahasiswa($data){
        DB::table('mahasiswas')->insert($data);
    }
}
