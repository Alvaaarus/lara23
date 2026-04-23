<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json AntonioG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .item-list {
            list-style: none;
            padding: 0;
        }
        .item {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .item-name {
            font-size: 16px;
            font-weight: 500;
            color: #495057;
        }
        .btn-detalle {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.2s;
        }
        .btn-detalle:hover {
            background-color: #0056b3;
        }
        .no-data {
            text-align: center;
            color: #6c757d;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Json AntonioG</h1>
        
        @if(isset($jsonData['botas_futbol']) && !empty($jsonData['botas_futbol']))
            <ul class="item-list">
                @foreach($jsonData['botas_futbol'] as $bota)
                    <li class="item">
                        <span class="item-name">{{ $bota['marca'] }}</span>
                        <a href="#" class="btn-detalle" onclick="mostrarDetalle('{{ $bota['marca'] }}', {{ json_encode($bota['modelos_populares']) }}); return false;">Ver detalle</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="no-data">No hay datos disponibles.</p>
        @endif
    </div>

    <script>
        function mostrarDetalle(marca, modelos) {
            let modelosTexto = modelos.join(', ');
            alert('Marca: ' + marca + '\nModelos populares:\n' + modelosTexto);
        }
    </script>
</body>
</html>
