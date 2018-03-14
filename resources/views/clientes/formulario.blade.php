@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do cliente
                	<a class="pull-right" href="{{ url('clientes')}}">Listagem de Clientes</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }} </div> 
                    @endif

                    @if(Request::is('*/editar'))
                         {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                        
                    @else
                        {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif

                    

                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('CPF', 'CPF') !!}
                    {!! Form::input('text', 'CPF', null, ['class' => 'form-control', 'placeholder' => 'CPF']) !!}

                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('text', 'endereco',null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Endereço']) !!}

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::input('text', 'email', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Email']) !!}

                    {!! Form::label('telefone', 'Telefone') !!}
                    {!! Form::input('text', 'telefone', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Telefone']) !!}

                    {!! Form::submit('Salvar', ['class' => 'brn brn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection