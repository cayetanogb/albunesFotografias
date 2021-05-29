<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-center">Albunes</h3>
                    @if ($albunes != null)
                        <div class="row">
                            @foreach ($albunes as $albun)
                                <div class="col-xs-6 col-sm-4 col-md-3 pb-4 text-center">
                                    <a class="text-decoration-none text-dark"
                                        href="{{ route('showAlbun', $albun->id) }}">
                                        <img class="mx-auto d-block" src="{{ asset('storage/' . $albun->portada) }}"
                                            style="height: 200px">
                                        <h4 class="py-2">{{ $albun->titulo }}</h4>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No hay ninguna albun</p>
                    @endif

                    <h3 class="text-center">Fotos destacadas</h3>
                    @if ($fotos != null)
                        <div class="row">
                            @foreach ($fotos as $foto)
                                <div class="col-xs-6 col-sm-4 col-md-3 pb-4 text-center">
                                    <a class="text-decoration-none text-dark"
                                        href="{{ route('showFoto', $foto->id) }}">
                                        <img class="mx-auto d-block" src="{{ asset('storage/' . $foto->imagen) }}"
                                            style="height: 200px">
                                        <h4 class="py-2">{{ $foto->titulo }}</h4>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No hay ninguna foto destacada</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
