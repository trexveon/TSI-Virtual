<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Egresso;
use illuminate\Support\Facades\Auth;
use App\Aluno;
use App\Professore;
class noticiasController extends Controller
{

    public function index()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->take(3)->get();
        $egressos = Egresso::all();
        return view('index',compact('noticias','egressos'));  
    }

    public function all()
    {
        
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(10);
        return view('noticias.noticias',compact('noticias'));  
    }

    public function search(Request $request)
    {
        $value = $request->input('pesquisa');
        $noticias = Noticia::where('titulo','like',"%$value%")->paginate(10); 
        return view('noticias.noticias',compact('noticias','value'));
    }

    public function sendmail(Request $request)
    {
        $nome = $request['nome'];
        $email = $request['email'];
        $assunto = $request['assunto'];
        $mensagem = $request['mensagem'];

        Mail::send('email.email',['mensagem' => $mensagem,'email' => $email],function($message) use ($nome,$email,$assunto){
            $message->from($email, $nome);
            $message->to('tsivirtual@gmail.com');
            $message->subject($assunto);
        });
        return 'Mensagem enviada com sucesso!';

    }


    public function consulta(Request $request)
    {
        $consulta = $request['consulta'];

        $usuario = Aluno::where('matricula',$consulta)->where('registro','false')->get();
        
        if($usuario->count()=='0'){
            $usuario = Professore::where('siape',$consulta)->where('registro','false')->get();
            if($usuario->count()=='0'){
                return 'não foram encontrados usuarios';
            }
        }
        return response()->json($usuario);

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        if(isset($noticia)){
            return view('noticias.visualizar',compact('noticia'));
            
        }
        return redirect('/');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
