<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albunes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($albunes != null)
                        @foreach ($albunes as $albun)
                            <div class="col-xs-6 col-sm-4 col-md-3 pb-4 text-center">
                                <a class="text-decoration-none text-dark" href="{{ route('showAlbun', $albun->id) }}">
                                    <img class="mx-auto d-block" src="{{ asset('storage/' . $albun->portada) }}"
                                        style="height: 200px">
                                    <h4 class="py-2">{{ $albun->titulo }}</h4>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>No hay ninguna albun</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
