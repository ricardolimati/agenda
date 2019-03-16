@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Novo Contato</h3>
    </div>
    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('/pessoas/store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group col-md-12{{$errors->has('nome')? 'has-error' : ''}}">
                <label  class="control-label">Nome</label>
                <input class="form-control" value="{{ old('nome') }}" name="nome" placeholder="Nome" >
                @if($errors->has('nome'))
                    <span class="help-block">{{$errors->first('nome')}}</span>
                @endif
            </div>
            <div class="form-group col-md-3 ">
                <label  class="control-label">DDD</label>
                <input class="form-control col-md-12" value="{{ old('ddd') }}" name="ddd" placeholder="DDD">
                @if($errors->has('ddd'))
                    <span class="help-block">{{$errors->first('ddd')}}</span>
                @endif
            </div>
            <div class="form-group col-md-8">
                <label  class="control-label">Telefone:</label>
                <input class="form-control" name="telefone" value="{{old('telefone')}}" placeholder="Telefone">
                @if($errors->has('telefone'))
                    <span class="help-block">{{$errors->first('telefone')}}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <button style="margin-top: 5px; float: right;" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection