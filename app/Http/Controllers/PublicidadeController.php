<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicidade;

class PublicidadeController extends Controller
{
    public function index(){
    	$publicidade=Publicidade::all();
    	return view('publicidade.index',[
    		'publicidade'=>$publicidade
    	]);

    }
    public function show(Request $request){
        $idpublicidade=$request->id;
        $publicidade=Publicidade::where('id_publicidade',$idpublicidade)->first();
         return view('publicidade.show',[
            'publicidade'=>$publicidade
         ]);
   {
    public function create(){
         return view('publicidade.create');
    }
    public function store(Request $request){
        $novoPublicidade=$request->validate([
            
        ]);
}
