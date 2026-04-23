<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Json Alvaro</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(count($items) === 0)
                    <p>No hay datos en tenisfutbol.json</p>
                @endif

                @foreach($items as $i => $item)
                    <div class="mb-4 p-4 border rounded">
                        <h3 class="font-bold text-lg">{{ $item['marca'] ?? 'Sin marca' }}</h3>
                        @if(!empty($item['modelos_populares']))
                            <p class="text-gray-600">{{ implode(', ', $item['modelos_populares']) }}</p>
                        @endif
                        <a href="{{ route('json.alvaro.show', ['index' => $i]) }}" class="inline-block mt-3 px-3 py-1 border rounded text-sm">Ver detalle</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
