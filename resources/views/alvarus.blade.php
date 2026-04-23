<h1> Holis soy alvarus </h1>

@foreach ($alvaroJson as $alvarus)
    <p> {{ $alvarus['id'] }}</p>
    <p> {{ $alvarus['equipo_id'] }}</p>
    <p> {{ $alvarus['nombre'] }}</p>
    <p> {{ $alvarus['posicion'] }}</p>
    <p> {{ $alvarus['numero'] }}</p>
    <hr>
@endforeach
