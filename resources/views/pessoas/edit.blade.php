@extends('template.app')

@section('content')
    <div class="col-md-4">
        <h3>Editar Contato</h3>
    </div>
    <div class="col-md-4">
        <form class="col-md-12" action="{{url('/pessoas/update')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$pessoa->id}}>
            <div class="form-group col-md-12{{$errors->has('nome')? 'has-error' : ''}}">
                <label  class="control-label">Nome</label>
                <input class="form-control" value="{{$pessoa->nome}}" name="nome" placeholder="Nome">
                @if($errors->has('nome'))
                    <span class="help-block">
                        {{$errors->first('nome')}}
                    </span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-primary btn-">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <div class="card border-secondary ml-2 mt-2">
            <div class="card-header">
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