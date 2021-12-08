@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patvirtinkite el. pašto adresą</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Naujas patvirtinimo laiškas jums išsiųstas.
                        </div>
                    @endif

                    Prieš tesdami pasitikrinkite el. pašto dėžutę,
                    Jei negavote laiško,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">spauskite čia, kad gautumėte kitą</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
