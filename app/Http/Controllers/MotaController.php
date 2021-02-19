<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mota;


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

   //  public function create(){
   //       return view('mota.create');
   //  }
   //  public function store(Request $request){
   //      $novoMota =$request->validate([
   //          'nome'=>['']
   //      ]);


}
