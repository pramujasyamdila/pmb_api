<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    protected $hidden=['updated_at', 'created_at'];
    protected $table = 'tbl_calon_mahasiswa';
    protected $primaryKey = 'nims';
    protected $fillable =['nik','nm_clnmhs','id_kecamatan','user_create','updated_at', 'created_at'];
}
