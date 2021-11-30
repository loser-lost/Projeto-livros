@extends('User.temp')

@section('CadEdit')
<body>
    <header class="header">
    <h1 class="text-center">@if(isset($User))Editar Usuario @else Cadastrar Usuario @endif</h1>
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
  
            @if(isset($User))
                <form name="formEdit" id="formEdit" method="post" action="{{url("User/$User->id")}}">
            @method('PUT')
            @else 
                <form name="formCad" id="formCad" method="post" action="{{url('User')}}">      
            @endif
                @csrf
                <input class="form-control" type="text" name="name" id="name" placeholder="Nome:"                   value="{{$User->name ?? ''}}" ><br>
                <input class="form-control" type="text" name="email" id="email" placeholder="Email:"                value="{{$User->email ?? ''}}"><br>
                <input class="form-control" type="password" name="password" id="password" placeholder="Senha:"      value="{{$User->password ?? ''}}"><br>
                
                <input class="btn btn-primary" type="submit" value="@if(isset($User))Editar @else Cadastrar @endif">
      </form>
      <br>
    </div>
    
   
  </body>

@endsection