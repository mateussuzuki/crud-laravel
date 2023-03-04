<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Cadastrar</h1> <hr>
    <div class="col-8 m-auto">
    <form class="text-center" name="cad" method="POST" action="{{url("carro/cadastrar")}}">
        @csrf
        <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" required> <br>
        <input class="form-control" type="text" name="carro" id="carro" placeholder="Carro" required> <br>
        <input class="form-control" type="text" name="cor" id="cor" placeholder="Cor" required> <br>
        <a href="{{url('carro')}}">
            <input class="btn btn-secondary" type="button" value="Voltar">
        </a>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
    </div>
</body>
</html>