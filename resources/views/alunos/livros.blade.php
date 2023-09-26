<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped-columns">
        <thead class="table table-primary">
            <tr>
                <td>Título</td>
                <td>Ano</td>
                <td>editar</td>
                <td>Excluir</td>
            </tr>
        </thead>


        <tbody>

            {{-- @for ($i = 0; $i < count($aluno->livros); $i++) 
                $aluno->livros[$i]->titulo
            @endfor --}}
            @foreach ($aluno->livros as $livro)
                
            <tr>
                <td>{{$livro->titulo}}</td>
                <td>{{$livro->ano}}</td>
                <td><a href="{{ route('livros.edit', $livro->id) }}"><button class="btn btn-info">Editar Livro</button></a></td>

            <form action="{{route('livros.destroy', $livro->id)}}" method="POST">

                @method('delete')@csrf
                <td><button type="submit" class="btn btn-danger">Excluir</button></td>
            
            </form>
            </tr>

            @endforeach
        </tbody>

    </table>

    <div style="margin-left:40%">

        <a href="{{route('livros.create', $aluno->id)}}"><button class="btn btn-info">Cadastrar livro para o aluno</button></a> 
    </div>

</body>
</html>