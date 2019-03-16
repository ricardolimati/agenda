@extends('template.app')

@section('content')
    <div class="col-md-12 well">
        <div class="col-md-12">
            <h3>Deseja realmente excluir este contato?</h3>
        </div>
        <div class="col-md-6">
            <a class="btn btn-primary" href="{{url("pessoas")}}">
                <i class="fas fa-arrow-circle-left"></i>&nbsp;Cancelar
            </a>
        </div>
        <div class="col-md-6">
            <a class="btn btn-danger" href="{{url("pessoas/$pessoa->id/destroy")}}">
                <i class="fas fa-times-circle"></i>&nbsp;Excluir
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-secondary ml-2 mt-2">
            <div class="card-header bg-danger">
                {{$pessoa->nome}}
            </div>
            <div class="card-body text-secondary">
                @foreach($pessoa->telefones as $telefone)
                    <p class="card-text"><strong>Telefone:</strong> ({{$telefone->ddd}}) {{$telefone->telefone}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection