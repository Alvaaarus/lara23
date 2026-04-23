<h1>Lista de datos Mundo ITI</h1>

@forelse($traductorson as $enlace)
    <p>{{ $enlace['title']}}</p>
    <hr>
@empty
    <p>No hay datos disponibles.</p>
@endforelse