@extends('layout.main')

@section('pageTitle')
    Prodotto
@endsection

@section('cdnFontAwesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="sfondo_prodotto">
        <div class="container">
            <h1>{{ $pasta['titolo'] }}</h1>
            <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
            <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
            <p>{!! $pasta['descrizione'] !!}</p>

            <div class="chevron">
                <a href="{{route('prodotto', $prev)}}">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="{{route('prodotto', $next)}}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
@endsection