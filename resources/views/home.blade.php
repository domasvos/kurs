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

                    <a href="/quiz/klausimas" class="btn btn-dark">Pradeti testa</a>
                    <a href="/klausk" class="btn btn-dark">Forumas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
