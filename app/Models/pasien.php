<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pasien extends Model
{
    use HasFactory;
    protected $table ='pasien';
    protected $guarded = [];
    // public $timestamps = false;
    use SoftDeletes;

    public function deletePasien(int $id){
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->back()->with('success','Data Berhasil');  
    }

}
