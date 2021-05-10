@extends('layout.main')

@section('pageTitle')
    La Molisana
@endsection

@section('content')
    <div class="sfondo_home">
        <!-- SECTION LUNGHE -->
        <section>
            <h2>Le lunghe</h2>
            <div class="cards">
                @foreach($lunghe as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', ['id' => $pasta['id']])}}">
                            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- SECTION CORTE -->
        <section>
            <h2>Le corte</h2>
            <div class="cards">
                @foreach($corte as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', ['id' => $pasta['id']])}}">
                            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- SECTION CORTISSIME -->
        <section>
            <h2>Le cortissime</h2>
            <div class="cards">
                @foreach($cortissime as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', ['id' => $pasta['id']])}}">
                            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection

