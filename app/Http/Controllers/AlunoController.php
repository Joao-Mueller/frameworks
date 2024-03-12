<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function listar()
    {
        $alunos = Aluno::all();
        return view('listarAlunos')->with('alunos', $alunos);
        //return response()->json($aluno);
    }

    public function listarID($id)
    {
        $alunos = Aluno::find($id);
        if($alunos){
            return view('listarAluno')->with('aluno',$alunos);
        }else{
            return redirect('/alunos')->withErrors(['erro' => 'O aluno não foi encontrado']);
        //return response()->json($aluno);
        }
    }

    public function store(Request $request)
    {
        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->curso = $request->curso;
        $aluno->save();

        return redirect()->route('alunos.listar');
    }

    public function criar() {
        return view('novoAluno');
    }

    public function update(Request $request)
    {
        $aluno = Aluno::find($request->id);
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->curso = $request->curso;
        $aluno->save();

        return redirect()->route('alunos.listar');
    }
}