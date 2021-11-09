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
  <h1 class="text-center">@if(isset($livro))Editar @else Cadastrar @endif</h1><hr>
  
  <div class="col-8 m-auto">
    
      @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p2 alert-danger">  
        @foreach ($errors->all() as $erro)
            {{$erro}}
        @endforeach
      </div>
      @endif

      @if(isset($livro))
      
      <form name="formEdit" id="formEdit" method="post" action="{{url("livro/$livro->id")}}">
        @method('PUT')

      @else 

        <form name="formCad" id="formCad" method="post" action="{{url('livro')}}">      
      
      @endif
      @csrf
      <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo:"           value="{{$livro->titulo ?? ''}}" ><br>
      <input class="form-control" type="text" name="autor" id="autor" placeholder="Autor:"              value="{{$livro->autor ?? ''}}"><br>
      <input class="form-control" type="text" name="resumo" id="resumo" placeholder="Resumo:"           value="{{$livro->resumo ?? ''}}"><br>
      <input class="form-control" type="text" name="link" id="link" placeholder="Link:"                 value="{{$livro->link ?? ''}}"><br>
      <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria:"  value="{{$livro->categoria ?? ''}}"><br>
      <input class="btn btn-primary" type="submit" value="@if(isset($livro))Editar @else Cadastrar @endif">
    </form>
    
  </div>
  
 
</body>
</html>