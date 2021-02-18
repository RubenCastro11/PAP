<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mota;


class MotaController extends Controller
{
    
    public function index(){
    	$mota=Mota::all();
    	return view('mota.index',[
    		'mota'=>$mota
    	]);
    }
    public function show(Request $request){
    	$idmota=request->id;
    	$mota=Mota::where('id_mota',$idmota)->first();
    	return view('mota.show',[
    		'mota'=>$mota
    }
}
