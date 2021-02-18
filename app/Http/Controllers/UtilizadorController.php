<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilizador;

class UtilizadorController extends Controller
{
    public function index(){
    	$utilizador=Utilizador::all();
    	return view('utilizador.index',[
    		'utilizador'=>$utilizador
    	]);
    }
    public function show(Request $request){
    	$idutilizador=request->id;
    	$utilizador=Utilizador::where('id_utilizador',$idutilizador)->first();
    	return view('utilizador.show',[
    		'utilizador'=>$utilizador
    }
}
