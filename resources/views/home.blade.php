@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te has logueado con exito!') }}
                    <header align="center" style="color:#FF0000"; > <h1>Acceso Concedido</h1></header><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
