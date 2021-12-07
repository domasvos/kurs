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

                    <a href="/quiz/klausimas" class="btn btn-primary">Pradeti testa</a>
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
        background-color: #ec4949 !important;
        border-color: #ec4949 !important;
    }
    .btn-primary:hover{
        background-color: #993333 !important;
        border-color: #993333 !important;
    }
</style>
