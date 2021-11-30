<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>

      html { width: 100%; height:100%; overflow:hidden; }
    
      body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #000203;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #4e4848 0%, #082553 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #796061 0%,#072353 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #5d4d4e 0%,#09295c 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #625050 0%,#08295f 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #70494a 0%,#01163a 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
    
    
        div{
            text-align: center;
        }
        .classdiv{
          background-color: #3c4452;
          border: 2px solid rgb(4, 9, 85);
          border-radius: 5px;
          background-color: rgb(79, 80, 80);
        }
    
        .header{
	text-align: center;
	border-bottom: 6px solid rgb(44, 44, 44);
	background-color: rgb(41, 44, 56);
  }
    
    </style>

  </head>
<body>
  <header class="header">
  
  <h1 class="text-center">@if(isset($livro))Editar @else Cadastrar @endif</h1>
  <a href="{{route('inicio')}}"><button class="btn btn-dark">Home</button>
  </a>
  <a href="{{url('livro')}}"><button class="btn btn-dark">Crud</button>
  </a>
 
  
</header>
  
  <div class="col-8 m-auto classdiv">
    <br>
    
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
    <br>
  </div>
  
 
</body>
</html>