<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{ asset('storage/' . $foto->imagen) }}" style="height: 400px">
                        </div>
                        <div class="col-sm-8">
                            <h3>{{ $foto->titulo }}</h3>
                            <p>Pais: {{ $foto->pais }}</p>
                            <p>Añadida: {{ $foto->created_at }}</p>

                            <a class="btn btn-warning" href="{{ route('editFoto', $foto->id) }}">Editar</a>
                            <form class="d-inline" action="{{ route('deleteFoto', $foto->id) }}" method="post">
                                @method('delete')
                                @csrf

                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
