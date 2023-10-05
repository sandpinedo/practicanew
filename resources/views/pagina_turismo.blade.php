<!DOCTYPE html>
<html>
<head>
    <title>Página de Turismo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    @include('partials.header')

    <main class="container mt-4">
        <section>
            <h2 class="mb-3">Destinos Populares</h2>
            <ul class="list-group">
                @foreach($destinosPopulares as $destino)
                    <li class="list-group-item">{{ $destino }}</li>
                @endforeach
            </ul>
        </section>

        <section class="mt-4">
            <h2 class="mb-3">Ofertas Especiales</h2>
            <ul class="list-group">
                @foreach($ofertasEspeciales as $oferta)
                    <li class="list-group-item">{{ $oferta['nombre'] }} - {{ $oferta['descuento'] }}</li>
                @endforeach
            </ul>
        </section>

        <section class="mt-4">
            <h2 class="mb-3">Testimonios de Clientes</h2>
            <ul class="list-group">
                @foreach($testimonios as $testimonio)
                    <li class="list-group-item">{{ $testimonio['nombre'] }} - {{ $testimonio['comentario'] }}</li>
                @endforeach
            </ul>
        </section>
    </main>

    @include('partials.footer')

    <!-- Incluir Bootstrap JS y jQuery al final del cuerpo para el funcionamiento de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
