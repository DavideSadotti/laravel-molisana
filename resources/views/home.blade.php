<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONT OPEN SANS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>La Molisana</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('partials.header');

    <main>
        <!-- SECTION LUNGHE -->
        <section>
            <h2>Le lunghe</h2>
            <div class="cards">
                @foreach($lunghe as $pasta)
                    <div class="card">
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
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
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
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
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    @include('partials.footer');
    
</body>
</html>