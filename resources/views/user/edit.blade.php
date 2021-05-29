<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('updateUser', $usuario->id) }}" method="post">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label class="form-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="{{ $usuario->nombre }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Fecha de nacimiento</label>
                            <input class="form-control" type="date" name="fechaNacimiento"
                                value="{{ $usuario->fechaNacimiento }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Ciudad de residencia</label>
                            <input class="form-control" type="text" name="ciudad" value="{{ $usuario->ciudad }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Pais de residencia</label>
                            <input class="form-control" type="text" name="pais" value="{{ $usuario->pais }}">
                        </div>

                        <div class="form-group pt-3">
                            <label class="form-label">Direccion de email</label>
                            <input class="form-control" type="email" name="email" value="{{ $usuario->email }}">
                        </div>

                        <div class="d-grid gap-2 col-2 mx-auto pt-3">
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
