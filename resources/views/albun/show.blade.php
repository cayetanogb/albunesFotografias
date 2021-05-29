<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albun') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (auth()->user()->id == $albun->user_id)
                        <a class="btn btn-success" href="{{ route('addFoto', $albun->id) }}">Añadir foto</a>
                        <a class="btn btn-warning" href="{{ route('editAlbun', $albun->id) }}">Editar</a>
                        <form class="d-inline" action="{{ route('deleteAlbun', $albun->id) }}" method="post">
                            @method('delete')
                            @csrf

                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    @endif

                    <div class="row pt-3">
                        @foreach ($fotosAlbun as $foto)
                            <div class="col-xs-6 col-sm-4 col-md-3 pb-4 text-center">
                                <a class="text-decoration-none text-dark" href="{{ route('showFoto', $foto->id) }}">
                                    <img class="mx-auto d-block" src="{{ asset('storage/' . $foto->imagen) }}"
                                        style="height: 200px">
                                    <h4 class="py-2">{{ $foto->titulo }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
