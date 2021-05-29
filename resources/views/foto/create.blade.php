<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear foto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('createFoto') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">Titulo</label>
                            <input class="form-control" type="text" name="titulo" value="{{ old('titulo') }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Pais</label>
                            <input class="form-control" type="text" name="pais" value="{{ old('pais') }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Imagen</label>
                            <input class="form-control" type="file" name="imagen" value="{{ old('imagen') }}">
                        </div>

                        <div class="d-grid gap-2 col-2 mx-auto pt-3">
                            <input class="btn btn-primary" type="submit" value="Crear">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
