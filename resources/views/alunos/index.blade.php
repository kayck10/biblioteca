<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head
>
<body>

    <table class="table table-striped-columns">
        @csrf
        <thead class="table-primary">
            <tr>
                <td>Nome</td>
                <td>Idade</td>
                <td>Editar</td>
                <td>Excluir</td>
                <td>Livros</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($alunos as $aluno)
                
            <tr>

                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->idade}}</td>
                <td><a href="{{ route('alunos.edit', $aluno->id) }}"><button class="btn btn-info">Editar</button></a></td>
                
                <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
                    @csrf
                    @method('delete')
                   <td><button type="submit" class="btn btn-danger">Excluir</button></td>
                </form>

                <td><a href="{{route('alunos.livros', $aluno->id)}}"><button class="btn btn-primary">Livros</button></a></td>
            </tr>


            @endforeach

        </tbody>
    </table>

    <div style="margin-left:40%">

        <a href="{{route('alunos.create')}}"><button class="btn btn-info">Inserir novo aluno</button></a> 
        
    </div>

</body>
</html>