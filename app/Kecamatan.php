<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $hidden=['updated_at', 'created_at'];
    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $fillable =['nama_kecamatan','updated_at', 'created_at'];
}
