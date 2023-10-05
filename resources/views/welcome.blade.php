<!DOCTYPE html>
<html>
<head>
    <title>Página de Turismo</title>
</head>
<body>

    <main>
        <section>
            <h2>Destinos Populares</h2>
            <ul>
                @foreach($destinosPopulares as $destino)
                    <li>{{ $destino }}</li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Ofertas Especiales</h2>
            <ul>
                @foreach($ofertasEspeciales as $oferta)
                    <li>{{ $oferta['nombre'] }} - {{ $oferta['descuento'] }}</li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Testimonios de Clientes</h2>
            <ul>
                @foreach($testimonios as $testimonio)
                    <li>{{ $testimonio['nombre'] }} - {{ $testimonio['comentario'] }}</li>
                @endforeach
            </ul>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
