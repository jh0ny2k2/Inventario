<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="{{ route('addProducto') }}"><button type="button" class="m-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">añadir <i class="zmdi zmdi-plus"></i> </button></a>

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
                                    Stock
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Estado
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Localizacion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td>{{ $producto -> codigo}}</td>
                                <td>{{ $producto -> modelo}}</td>
                                <td>{{ $producto -> fabricante}}</td>
                                <td>{{ $producto -> descripcion}}</td>
                                <td><img src="{{ asset('storage/producto_'. $producto->id . '.jpg') }}"></td>
                                <td>{{ $producto -> stock}}</td>
                                <td>{{ $producto -> estado}}</td>
                                <td><a href=""><a href="/producto/addLocalizacion/ {{$producto->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="zmdi zmdi-plus mdc-text-red"></i></button></a>
                                <a href=""><a href="/producto/show/ {{$producto->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="zmdi zmdi-eye mdc-text-red"></i></button></a></td>
                                <td><a href="/producto/ {{$producto->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="zmdi zmdi-delete mdc-text-red"></i></button></a>
                            
                                <a href="/producto/editar/ {{$producto->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="zmdi zmdi-edit"></i></button></a>                            
                            
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div> 
        </div>
    </div>

</x-app-layout>
