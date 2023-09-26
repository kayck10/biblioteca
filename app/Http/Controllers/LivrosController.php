<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
  public function create($id)
  {
    return view('alunos.livros-create', compact('id'));
  }

  public function store(Request $request)
  {

    $livro = Livros::create($request->all());
    $id = $livro->aluno_id;
    return redirect()->route('alunos.livros', compact('id'));
  }

  public function edit($id)
  {
    $livro = Livros::find($id);
    return view('alunos.livros-edit', compact('livro'));
  }

  public function update($id, Request $request)
  {
    $livro = Livros::find($id);
    $id = $livro->aluno_id;
    $livro->update($request->all());
    return redirect()->route('alunos.livros', compact('id'));
  }

  public function destroy($id, Request $request)
  {
    $livro = Livros::find($id);
    $id = Alunos::find($livro->aluno_id);
    $livro->delete();
    return redirect()->route('alunos.livros', compact('id'));
  }
}
