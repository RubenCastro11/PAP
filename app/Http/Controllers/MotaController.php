<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mota;
use App\Models\Estilo;

class MotaController extends Controller
{
    
    public function index(){
    	$motas=Mota::all();
    	return view('mota.index',[
    		'motas'=>$motas
    	]);
    }
    public function show(Request $request){
    	$idmota=$request->id;
    	$mota=Mota::where('id_mota',$idmota)->first();
    	return view('mota.show',[
    		'mota'=>$mota
    	]);
     }

    public function create(){
      $estilos=Estilo::all();
         return view('mota.create',[
          'estilos'=>$estilos
         ]);
    }
    public function store(Request $request){

        $novoMota =$request->validate([
            'id_estilo'=>['required','numeric'],
            'marca'=>['required','min:3','max:50'],
            'modelo'=>['required','min:1','max:50'],

            'cilindrada'=>['required','numeric','min:0'],
            'quilometros'=>['required','numeric','min:0'],
            'preco'=>['required','numeric','min:0'],

            'cor'=>['required','min:3','max:10'],
            'data_fabrico'=>['required','date'],
            'observacoes'=>['nullable','min:3','max:255'],
            'fotografia'=>['required']

        ]);

        $mota = Mota::create($novoMota);

        return redirect()->route('motas.show',[
          'id'=>$mota->id_mota
        ]);

}
}
