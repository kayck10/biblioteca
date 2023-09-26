<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="col-3 mx-auto">
            <form action="{{route('livros.update', $livro->id)}}" method="post">
                <fieldset>
                    <Legend>Editar dados</Legend>
                    <label for="" class="form-label" >
                        @method('put') @csrf
                            <div class="mb-3">
                                <input class="form-control" type="text" name="titulo" value="{{$livro->titulo}}">
                            </div>
                                    
                            <div class="mb-3">
                                <input class="form-control" type="number" name="ano" value="{{$livro->ano}}">
                            </div>
                    
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn btn-info btn-block" type="submit" value="Enviar">
                            </div>
                    </label>
            </fieldset>
            </form>
        </div>
    </div>
   

</body>
</html>