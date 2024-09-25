<!-- resources/views/livewire/fincas/index.blade.php -->

<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Fincas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">

                <button  type="button"  wire:click='redirigir'   class="px-4 py-2 my-3 mb-5 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    Crear Finca
                </button>
                <br>
                

                @if(session()->has('message'))
                    <div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg"> 
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ubicación
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tipo de Suelo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Superficie
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Acciones</span> 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fincas as $finca)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> 
                                        {{ $finca->nombre }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $finca->ubicacion_lat }}, {{ $finca->ubicacion_long }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $finca->tipo_de_suelo }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $finca->superficie }}
                                    </td>
                                    <td class="px-6 py-4 text-right"> 
                                        <button data-modal-target="editarFincaModal" data-modal-toggle="editarFincaModal"
                                                wire:click.prevent="edit({{ $finca->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Editar
                                        </button>
                                        <button wire:click="deleteFinca({{ $finca->id }})"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $fincas->links() }} 
            </div>
        </div>
    </div>
</div>