<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="#"><h1 class="px-6 py-3 mt-4 mb-4 underline decoration-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Productos</h1></a>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Codigo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Modelo
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Fabricante
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripcion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Imagen
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    stock
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    estado
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div> 
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="#"><h1 class="px-6 py-3 mt-4 mb-4 underline decoration-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Localizaciones</h1></a>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Ciudad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre Edificio
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Direccion Edificio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Número de Sala
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div> 
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="#"><h1 class="px-6 py-3 mt-4 mb-4 underline decoration-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Categorias</h1></a>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Nombre
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div> 
        </div>
    </div>
</x-app-layout>
