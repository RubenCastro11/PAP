<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    //
     public function index(){
        $marcas=Marca::all();
        return view('marca.index',[
            'marcas'=>$marcas
        ]);
    }
    public function show(Request $request){
        $idmarca=$request->id;
        $marca=Marca::where('id_marca',$idmarca)->first();
         return view('marca.show',[
            'marca'=>$marca
       ]);    
    }
    public function create(){
        return view('marca.create');
    }
    public function store(Request $request){
        $novoMarca =$request->validate([
            'nome'=>['required','min:3','max:25'],
            'origem_marca'=>['nullable','min:3','max:20'],
            'ano_criacao'=>['nullable','min:3','max:4'],
            'logotipo'=>['required','image','max:2000']     
        ]);


        if ($request->hasFile('logotipo')){
            $nomeimagem = $request->file('logotipo')->getClientOriginalName();
            
            $nomeImagem = time(). '_'. $nomeimagem;
            $guardarImagem = $request->file('logotipo')->storeAs('imagens/marca',$nomeImagem);
            
            $novoMarca['logotipo']=$nomeImagem;

        }
        $marca = Marca::create($novoMarca);
        return redirect()->route('marcas.show',[
          'id'=>$marca->id_marca
        ]);
}

public function update (Request $request){
            $idmarca=$request->id;
            $marca=Marca::findOrFail($idmarca);

            $atualizarmarca=$request->validate([

            'nome'=>['required','min:3','max:25'],
            'origem_marca'=>['nullable','min:3','max:20'],
            'ano_criacao'=>['nullable','min:3','max:4'],
            'logotipo'=>['required','image','max:2000'],
            ]);
            if($request->hasFile('logotipo')){
                $nomeImagem=$request->file('logotipo')->getClientOriginalName();
                $nomeImagem=time().'_'.$nomeImagem;
                $guardarImagem=$request->file('logotipo')->storeAs('imagens/marca',$nomeImagem);
                $atualizarmarca['logotipo']=$nomeImagem;
            }
            $marca->update($editMarca);
        
        return redirect()->route('marcas.show',[
            'id'=>$marca->id_marca
        ]);
        }
    }