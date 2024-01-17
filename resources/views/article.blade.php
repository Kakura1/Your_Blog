@extends('layouts.app')

@section('title')
    YB - Inicio
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-bg-8">
            <div class="card">
                <div class="card-header mt-1">
                    <h2 class="text-center">
                        Yourblog - Administrador de articulos
                    </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection