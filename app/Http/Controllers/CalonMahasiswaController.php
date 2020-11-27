<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalonMahasiswaController extends Controller
{
    public function get()
    {
        $data = DB::table('tbl_calon_mahasiswa')
        ->join('kecamatan', 'tbl_calon_mahasiswa.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();

        return response()->json(
            [// variable name dan temenya
                "message" => "Success get data yg sudah di join",
                "data"=>$data
            ]
            );
    }
}
