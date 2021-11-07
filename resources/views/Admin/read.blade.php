<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <div class="text-center mt-3 mb-4">
    <a href=""><button class="btn btn-success">Cadastrar</button>
    </a>
  </div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="col-8 m-auto">
  <table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($livro as $livros)
 
      <tr>
        <th scope="row">{{$livros->id}}</th>
        <td>{{$livros->titulo}}</td>
        <td>{{$livros->autor}}</td>
        <td>{{$livros->categoria}}</td>
        <td>
          <a href=""><button class="btn btn-dark">Visualizar</button>
          </a>

          <a href=""><button class="btn btn-primary">Editar</button>
          </a>
           
          <a href=""><button class="btn btn-danger">Excluir</button>
          </a>
        </td>
      </tr>
    
  @endforeach
</tbody>
</table>
</div>
  
 
</body>
</html>