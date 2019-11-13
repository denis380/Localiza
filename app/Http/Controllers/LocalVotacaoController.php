<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalVotacao;
use App\Models\Escola;

class LocalVotacaoController extends Controller
{
    function verifica(Request $request){

        if(isset($request->edtNomeEscola)){

            $data = $request->edtNomeEscola;
            $escolas = Escola::select('idLocal', 'nome')
                ->where('nome', 'like', '%' . $data .'%')
                ->get();
            if(count($escolas) > 1){
                return view ('base')->with('message', 'mais de uma');
            }elseif(count($escolas) < 1 ){
                return view ('base')->with('message', 'Não encontramos nenhuma escola correspondente!');
            }else{
                $resultado = $escolas;
                return view ('resultado', compact('resultado'));
            }
            
        }elseif(isset($request->edtZona)){
            $data = $request->edtZona;
            $escolas = Escola::select('idLocal', 'nome')
            ->where('zona', 'like', '%' . $data .'%')
            ->get();
            dd($escolas);
        }else{
            return back()->with('message', 'Preencha pelo menos um campo acima para efetuar a busca.');
        }

        $resultado = $data;
        return view ('resultado', compact('resultado'));
        
    }

    function cadastra(){
        return view ('cadastro');
    }

    function insereLocal(Request $request){
        $local = new LocalVotacao;
        $local->nome = $request->edtNome;
        $local->zona = $request->edtZona;

        $local->save();

        return view('cadastro');

    }

    function insereEscola(Request $request){
        $escola = new Escola;

        $escola->nome = $request->edtNome;
        $escola->zona = $request->edtZona;
        $escola->idLocal = $request->edtIdLocal;

        $escola->save();

        return view('cadastro');


    }
}
