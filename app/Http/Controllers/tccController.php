<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tcc;

class tccController extends Controller
{

    public function index()
    {
        $tccs = Tcc::orderBy('created_at', 'desc')->paginate(10);
        return view('tccs.tcc',compact('tccs')); 
    }

    public function search(Request $request)
    {
        $value = $request->input('pesquisa');
        $tccs = Tcc::where('titulo','like',"%$value%")->orWhere('aluno','like',"%$value%")->orWhere('ano','like',"%$value%")->orWhere('palavras_chave','like',"%$value%")->paginate(10);
        return view('tccs.tcc',compact('tccs','value'));  
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
