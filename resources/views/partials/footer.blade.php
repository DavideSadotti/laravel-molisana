<footer>
    <div class="container">
        <div>
            <div>
                <div>
                    <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
                </div>
                <div>
                    <ul>
                        @foreach($info as $item)
                            <li>{{ $item['name'] }}{{ $item['text'] }} {{ $item['alert'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h3>Pastificio</h3>
                <ul>
                    @foreach($pastificio as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
            <h3>Collezione da chef</h3>
                <ul>
                    @foreach($collezione as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
            <h3>Prodotti</h3>
                <ul>
                    @foreach($prodotto as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>