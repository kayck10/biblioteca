<?php

namespace App\Http\Controllers;

use App\Http\Requests\StormUpdateAlunos;
use App\Models\Alunos;
use App\Models\Livros;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index() 
    {
        $alunos = Alunos::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create() 
    {
        return view('alunos.create');
    }

    public function store(StormUpdateAlunos $request) 
    {
        Alunos::create($request->all());
        return redirect()->route('alunos.index');
    }

    public function edit($id) 
    {
        $alunos = Alunos::find($id);
       return view('alunos.edit', compact('alunos'));
    }

    public function update($id, Request $request) 
    {
        $alunos = Alunos::find($id);
        $alunos->update($request->all());
        return redirect()->route('alunos.index');
    }

    public function destroy($id, Request $request) 
    {
        $alunos = Alunos::find($id);
        $alunos->delete();
        return redirect()->route('alunos.index');
    }

    public function livros($id) 
    {
        $aluno = Alunos::with("livros")->where('id', $id)->first();
       
        return view('alunos.livros', compact('aluno'));
    }


}
