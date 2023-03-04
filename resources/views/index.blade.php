<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Carros</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('carro/cadastrar')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="thead">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Marca</th>
                <th scope="col">Carro</th>
                <th scope="col">Cor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
            <tr>
                <th scope="row">{{$carro->id}}</th>
                <td>{{$carro->marca}}</td>
                <td>{{$carro->carro}}</td>
                <td>{{$carro->cor}}</td>
                <td>
                    <a href="{{url("carro/visualizar/$carro->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="{{url("carro/editar/$carro->id")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="{{url("carro/deletar/$carro->id")}}">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    
    </table>
</div>

</body>
</html>