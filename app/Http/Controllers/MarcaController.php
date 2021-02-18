<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    //
     public function index(){
        $marca=Marca::all();
        return view('marca.index',[
            'marca'=>$marca
        ]);
    }
    public function show(Request $request){
        $idmarca=request->id;
        $marca=Marca::where('id_marca',$idestilo)->with('marca')->first();
         return view('marca.show',[
            'marca'=>$marca
    }
}
