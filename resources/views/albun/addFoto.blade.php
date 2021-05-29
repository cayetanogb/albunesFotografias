<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir foto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <form action="{{ route('storeFotoAlbun', $albun->id) }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="form-label">Seleccione una foto</label>
                                <select class="form-control" name="foto_id">
                                    @foreach ($fotos as $foto)
                                        <option value="{{ $foto->id }}">
                                            <img src="{{ asset('storage/' . $foto->imagen) }}">
                                            {{ $foto->titulo }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-grid gap-2 col-2 mx-auto mt-3">
                                <input class="btn btn-primary" type="submit" value="Añadir">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
