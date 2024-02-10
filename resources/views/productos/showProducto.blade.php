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

            </div> 
        </div>
    </div>

</x-app-layout>