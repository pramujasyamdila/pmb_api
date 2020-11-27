<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{


    public function get()
    {
        $data = DB::table('kecamatan')->get();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success get data Kecamatan",
                "data"=>$data
            ]
            );
    }

    public function post(Request $request){
        $data = new Kecamatan();
        $data->nama_kecamatan=$request->nama_kecamatan;
        $data->save();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success menambah data Kecamatan",
                "data"=>$data
            ]
            );
    }


    function getById($id){
        $data=Kecamatan::where('id_kecamatan',$id)->get();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success getById",
                "data"=>$data
            ]
            );
    }

    function put($id,Request $request){
        $data=Kecamatan::where('id_kecamatan',$id)->first();
        if ($data) {
            $data->nama_kecamatan=$request->nama_kecamatan ? $request->nama_kecamatan : $data->nama_kecamatan;
            $data->save();
            return response()->json(
                [// variable name dan temenya
                    "message" => "Success put data Kecamatan",
                    "data"=>$data
                ]
                );
        }
        return response()->json(
            [// variable name dan temenya
                "message" => "Mohon Maaf untuk ID ".$id." Tidak Dapat Di temukan"
            ],400
            );
    }

    function delete($id)
    {
        $data=Kecamatan::where('id_kecamatan',$id)->first();
        if ($data) {
            $data->delete();
            return response()->json(
                [// variable name dan temenya
                    "message" => "Success Data Dengan ID " .$id." Berhasil Di Delete"
                ]
                );

         }
        return response()->json(
                [// variable name dan temenya
                    "message" => "Delete Data Dengan ID " .$id." Tidak Berhasil Karna Id Tidak Di temukan"
                ],400

                );
    }



}
