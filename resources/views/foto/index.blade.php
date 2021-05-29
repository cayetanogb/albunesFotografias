<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fotos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        @foreach ($fotos as $foto)
                            <div class="col-xs-6 col-sm-4 col-md-3 pb-4 text-center">
                                <img class="mx-auto d-block" src="{{ asset('storage/' . $foto->imagen) }}"
                                    style="height: 200px">
                                <h4 class="py-2">{{ $foto->titulo }}</h4>
                                <form action="{{ route('destacadoFoto', $foto->id) }}" method="post">
                                    @method('put')
                                    @csrf

                                    @if ($foto->fav == false)
                                        <input type="hidden" name="fav" value="1">
                                        <input class="btn btn-success" type="submit" value="Añadir a favoritas">
                                    @else
                                        <input type="hidden" name="fav" value="0">
                                        <input class="btn btn-danger" type="submit" value="Eliminar de favoritas">
                                    @endif
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
