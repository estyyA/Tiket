<?php

namespace App\Http\Controllers;
use App\Tiket;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function searchtiket(Request $request)
    {
        $cari = $request->input('q');

        $tiket = tiket::where('stasiun_asal', 'LIKE', "%$cari%")->get();

        if($tiket->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => "Data tidak di temukan"
                ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
        return response()->json([
                 'success' => true,
                 'data' => $tiket
                 ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500'); 
        }
    }
            
}
