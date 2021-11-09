@extends('Admin.template')

@section('content')
  
<h1 class="text-center">Crud</h1><hr>
<div class="text-center mt-3 mb-4">
  <a href="{{url('livro/create')}}"><button class="btn btn-success">Cadastrar</button>
  </a>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="col-8 m-auto">
  @csrf
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
        <a href="{{url("livro/$livros->id")}}"><button class="btn btn-dark">Visualizar</button>
        </a>

        <a href="{{url("livro/$livros->id/edit")}}"><button class="btn btn-primary">Editar</button>
        </a>
         
        <a href="{{url("livro/$livros->id")}}" class="js-del"><button class="btn btn-danger">Deletar</button>
</a>
      </td>
    </tr>
  
@endforeach

</tbody>
</table>
</div>
@endsection