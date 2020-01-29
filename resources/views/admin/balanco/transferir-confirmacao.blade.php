@extends('adminlte::page')

@section('title', 'Confirmar Transferência Saldo')

@section('content_header')
    <h1>Confirmar Transferência</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
        <li><a href="">Confirmação</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Confirmar Transferência Saldo</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')

            <p><strong>Recebedor: </strong>{{ $recebedor->name }}</p>
            <p><strong>Seu Saldo Atual: </strong>{{ number_format($balanco->montante, 2, ',', '.') }}</p>

            <form method="POST" action="{{ route('transferir.store') }}">
                {!! csrf_field() !!}

                <input type="hidden" name="recebedor_id" value="{{ $recebedor->id }}" required>

                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor:" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>
            </form>
        </div>
    </div>
@stop
