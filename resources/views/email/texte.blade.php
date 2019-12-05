@php
    use App\Professore;
    use App\Aluno;
    $consulta = '111111111';

        $usuario = Aluno::where('matricula',$consulta)->get();
        
        if($usuario->count()=='0'){
            $usuario = Professore::where('siape',$consulta)->get();
            if($usuario->count()=='0'){
                echo 'não foram encontrados usuario';
            }
        }
        print_r($usuario->toArray()); 
@endphp