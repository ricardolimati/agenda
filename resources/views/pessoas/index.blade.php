@extends('template.app')

@section('content')
    <style>
        .btnLetra{
            height: 30px;
            width: 30px;
            text-align: center;
        }
    </style>
    <div class="form-group col-md-12">
    @foreach(range('A', 'Z') as $letra)
        <div class="btn-group">
            <a href="{{url('pessoas/'.$letra)}}" class="btn btn-primary {{ $letra === $criterio ? 'disabled':''}}">{{$letra}}</a>
        </div>
    @endforeach
    </div>
    <div class="row">
        <div class="col-sm-8"><h1>Critério: {{$criterio}}</h1></div>
            <form action="{{url('/pessoas/busca/')}}" method="post">
                <div class="col-sm-4 input-group">
                    <input type="text" class="form-control" name="criterio" placeholder="Procurar por...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">IR</button>
                        </span>
                </div>
            </form>

    </div>
    <div class="row mt-3">
        @foreach($pessoas as $pessoa)
            <div class="card border-secondary ml-2 mt-2" style="max-width: 18rem;">
                <div class="card-header">
                    {{$pessoa->nome}}
                    <a href="{{url("/pessoas/$pessoa->id/excluir")}}" class="btn btn-xs btn-danger btn-action">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="{{url("/pessoas/$pessoa->id/editar")}}" class="btn btn-xs btn-primary btn-action">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>
                <div class="card-body text-secondary">
                    @foreach($pessoa->telefones as $telefone)
                        <p class="card-text"><strong>Telefone:</strong> ({{$telefone->ddd}}) {{$telefone->telefone}}</p>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

@endsection