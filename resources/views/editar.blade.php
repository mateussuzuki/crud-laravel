<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center"></h1> <hr>
    <div class="col-8 m-auto">
    <form name="cad" method="post" action="{{url("carro/editar/$carro->id")}}">
        @csrf
        <label for="marca">Marca</label>
        <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" value= '{{$carro->marca}}' required> <br>

        <label for="carro">Carro</label>
        <input class="form-control" type="text" name="carro" id="carro" placeholder="Carro" value= '{{$carro->carro}}' required> <br>

        <label for="cor">Cor</label>
        <input class="form-control" type="text" name="cor" id="cor" placeholder="Cor" value= '{{$carro->cor}}' required> <br>
        <div class="text-center">
            <a href="{{url('carro')}}">
                <input class="btn btn-secondary" type="button" value="Voltar">
            </a>
            <input class="btn btn-primary" type="submit" value="Editar">
        </div>
    
    </form>
    </div>
</body>
</html>