<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Nombre: {{ $usuario->nombre }}</p>
                    <p>Rol: {{ $usuario->rol }}</p>
                    <p>Sexo: {{ $usuario->sexo }}</p>
                    <p>Fecha de nacimiento: {{ $usuario->fechaNacimiento }}</p>
                    <p>Ciudad de residencia: {{ $usuario->ciudad }}</p>
                    <p>Pais de residencia: {{ $usuario->pais }}</p>
                    <p>Direccion de email: {{ $usuario->email }}</p>

                    <a class="btn btn-warning" href="{{ route('editUser', $usuario->id) }}">Editar</a>

                    <form class="d-inline" action="{{ route('deleteUser', $usuario->id) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
