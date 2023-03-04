<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Visualizar</h1>
</div>

    <div class="col-8 m-auto">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="marca" 
    placeholder="Nome da marca" value="{{$carro->marca}}" disabled>

    <label for="carro">Carro</label>
    <input type="text" class="form-control" id="carro" placeholder="Nome do carro" value="{{$carro->carro}}" disabled>

    <label for="cor">Cor</label>
    <input type="text" class="form-control" id="cor" placeholder="Nome da cor" value="{{$carro->cor}}" disabled><br>
        <div class="text-center">
            <a href="{{url('carro')}}">
                <input class="btn btn-secondary" type="button" value="Voltar">
                </a>
        </div>
    </div>
</body>
</html>