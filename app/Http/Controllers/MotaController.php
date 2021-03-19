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
            'fotografia'=>['required','image','max:2000'],

        ]);

        if ($request->hasFile('fotografia')){
            $nomeimagem = $request->file('fotografia')->getClientOriginalName();
            
            $nomeImagem = time(). '_'. $nomeimagem;
            $guardarImagem = $request->file('fotografia')->storeAs('imagens/mota',$nomeImagem);
            
            $novoMota['fotografia']=$nomeImagem;

        }

        $mota = Mota::create($novoMota);
        return redirect()->route('motas.show',[
          'id'=>$mota->id_mota
        ]);
}


public function update (Request $request){
            $idmota=$request->id_mota;
            $mota=Mota::where('id_mota',$idmota)->first();
           
            $atualizarMota=$request->validate([
            'id_estilo'=>['required','numeric'],
            'marca'=>['required','min:3','max:50'],
            'modelo'=>['required','min:1','max:50'],

            'cilindrada'=>['required','numeric','min:0'],
            'quilometros'=>['required','numeric','min:0'],
            'preco'=>['required','numeric','min:0'],

            'cor'=>['required','min:3','max:10'],
            'data_fabrico'=>['required','date'],
            'observacoes'=>['nullable','min:3','max:255'],
            'fotografia'=>['nullable','image','max:2000'],
            ]);
            
            if($request->hasFile('fotografia')){
                $nomeImagem=$request->file('fotografia')->getClientOriginalName();
                $nomeImagem=time().'_'.$nomeImagem;
                $guardarImagem=$request->file('fotografia')->storeAs('imagens/mota',$nomeImagem);
                $atualizarMota['fotografia']=$nomeImagem;
            }
            $mota->update($atualizarMota);
        
        return redirect()->route('motas.show',[
            'id'=>$mota->id_mota
        ]);
}

        public function edit(Request $request){
            $idmota=$request->id_mota; 
            $mota=Mota::where('id_mota',$idmota)->with('estilo')->first();
            $estilos=Estilo::all();
            return view('mota.edit',[
                'mota'=>$mota,
                'estilos'=>$estilos
            ]);     
        }

    public function delete(Request $request){
        $idmota=$request->id_mota;
        $mota=Mota::where('id_mota',$idmota)->first();
        
            if(is_null($mota)){
                return redirect()->route('motas.index');
            }
            else
            {
                return view('mota.delete',[
                    'mota'=>$mota
                ]);
            }
        }
    
    public function destroy(Request $request){
        $idmota=$request->id_mota;
        $mota=Mota::where('id_mota',$idmota)->first();
        
            if(is_null($mota)){
                return redirect()->route('motas.index');
            }
            else
            {
                $mota->delete();
                return redirect()->route('motas.index')->with('mensagem','Mota eliminada!');
            }
        
    }    
}


    
 









