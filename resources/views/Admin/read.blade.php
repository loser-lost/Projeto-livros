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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="col-8 m-auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Resumo</th>
        
        <th scope="col">Categoria</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($livro as $livros)
 
      <tr>
        <th scope="row">{{$livros->id}}</th>
        <td>{{$livros->titulo}}</td>
        <td>{{$livros->autor}}</td>
        <td>{{$livros->resumo}}</td>
        
        <td>{{$livros->categoria}}</td>
      </tr>
    
  @endforeach
</tbody>
</table>
</div>
  
 
</body>
</html>