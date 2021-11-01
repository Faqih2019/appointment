<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dosen extends Model
{
    public function dataDosen()
    {
        return DB::table('dosens')->get();
    }

    public function getOneData($id){
        return DB::table('dosens')->where('id', $id)->first();
    }

    public function addDosen($data){
        DB::table('dosens')->insert($data);
    }
}
