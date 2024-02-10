<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/dashboard"><button class="m-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"> <-- Volver Atras</button></a>
                    <div class="max-w-sm mx-auto">
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo: {{ $producto -> codigo }}</p>
                        </div>
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo: {{ $producto -> modelo }}</p>
                        </div>
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fabricante: {{ $producto -> fabricante }}</p>
                        </div>
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion: {{ $producto -> descripcion }}</p>
                        </div>
                        <div class="mb-5">
                            <img src="{{ asset('storage/producto_'. $producto->id . '.jpg') }}">
                        </div>
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock: {{ $producto -> stock }}</p>
                        </div>
                        <div class="mb-5">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado: {{ $producto -> estado }}</p>
                        </div>
                    </div>
                <form class="max-w-sm mx-auto" method="POST" action="/producto/addLocation/{{ $producto -> id }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-5">
                            <label for="localizacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localizacion</label>
                            <select name="localizacion" id="localizacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($localizaciones as $localizacion) 
                                    <option value=" {{ $localizacion->id }} "> {{ $localizacion->direccionEdificio }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
                </form>

            </div> 
        </div>
    </div>

</x-app-layout>