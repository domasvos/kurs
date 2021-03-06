@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/quiz/testas" class="btn btn-primary">Pradeti testa</a>
                    <a href="/klausk" class="btn btn-primary">Forumas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .card-header {
        background-color: #993333 !important;
        color: white !important;

    }
    .btn-primary {
        background-color: #993333 !important;
        border-color: #993333 !important;
    }
    .btn-primary:hover{
        background-color: #ec4949 !important;
        border-color: #ec4949 !important;
    }
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
