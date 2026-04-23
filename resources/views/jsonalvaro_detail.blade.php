<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detalle</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-bold text-xl">{{ $brand['marca'] ?? 'Sin marca' }}</h3>

                @if(!empty($brand['modelos_populares']))
                    <ul class="list-disc list-inside mt-3">
                        @foreach($brand['modelos_populares'] as $model)
                            <li>{{ $model }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-600">No hay modelos populares listados.</p>
                @endif

                <a href="{{ route('json.alvaro.index') }}" class="inline-block mt-4 px-3 py-1 border rounded">Volver</a>
            </div>
        </div>
    </div>
</x-app-layout>
