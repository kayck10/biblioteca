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
    

    @if ($errors->any())

    <ul>
         @foreach ($errors->all as $error)
             <li>{{ $error }}</li>
         @endforeach
    </ul>
        
    @endif

    <div class="row">
       <div class="col-3 mx-auto">
          <form action="{{route('alunos.store')}}" method="POST">

            <fieldset>
                @csrf
                <legend>Inserir Aluno</legend>
                  <label  class="form-label">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="nome" placeholder="Digite seu Nome">
                            </div>
                                    
                            <div class="mb-3">
                                <input class="form-control" type="number" name="idade" id="idade" placeholder="Digite sua idade">
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