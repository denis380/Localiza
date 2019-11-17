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
                 ->where('nome', 'ilike', '%' . $data .'%')
                 ->get();
            $resultado = $escolas;
            return view ('resultado', compact('resultado'));

            
        }elseif(isset($request->edtZona)){
            $data = $request->edtZona;
            $escolas = Escola::select('idLocal', 'nome')
            ->where('zona', 'ilike', '%' . $data .'%')
            ->get();
            $resultado = $escolas;
            return view ('resultado', compact('resultado'));
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
        $st = 'nome: ' . $local->nome . " // id: " . $local->id;
        return redirect('/cadastra')->with('st', $st);

    }

    function insereEscola(Request $request){
        $escola = new Escola;
        $escola->nome = $request->edtNome;
        $escola->zona = $request->edtZona;
        $escola->idLocal = $request->edtIdLocal;

        $escola->save();
        $st = 'nome: ' . $escola->nome . " // id: " . $escola->id;
        return redirect('/cadastra')->with('st', $st);
    }

    function localCorrespondente($idLocal){
        $local = LocalVotacao::findOrFail($idLocal);
        return view ('resultado', compact('local'));
    }

    function info(){
        return view('info');
    }

    function tabela(){
        $escolas = Escola::get()->all();
        $locais = LocalVotacao::get()->all();
        return view('tabela', compact('escolas', 'locais'));
    }

    function deletaEscola($idEscola){
        $escola = Escola::findOrFail($idEscola);
        $escola->delete();
        return back();
    }
    function deletaLocal($idLocal){
        $local = LocalVotacao::findOrFail($idLocal);
        $local->delete();
        return back();
    }
}
