<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Visualizar</h1><hr>
  <div class="col-8 m-auto">
    Titulo: {{$livro->titulo}}<br>
    Autor: {{$livro->autor}}<br>
    Categoria: {{$livro->categoria}}<br>
    Resumo: {{$livro->resumo}}<br>
    Link: {{$livro->link}}<br>

</div>
  
 
</body>
</html>