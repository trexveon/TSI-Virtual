<?php

namespace App\Http\Controllers;

use App\Egresso;

use Illuminate\Http\Request;

class egressosController extends Controller



{

    public function index()
    {
        $egressos = Egresso::orderBy('created_at', 'desc')->paginate(10);
        return view('egressos.egressos',compact('egressos'));
    }

    public function search(Request $request)
    {
        $value = $request->input('pesquisa');
        $egressos = Egresso::where('nome','like',"%$value%")->orWhere('empresa','like',"%$value%")->paginate(10); 
        return view('egressos.egressos',compact('egressos','value'));
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
