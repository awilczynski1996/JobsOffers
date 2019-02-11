@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($offers as $offer)
                    @include('site.offers.partials.offer')
                @empty
                    <p class="text-center">Nie udało się pobrać danych z serwera...</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
