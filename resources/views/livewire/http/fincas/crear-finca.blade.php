<!-- resources/views/livewire/fincas/crear-finca.blade.php -->

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Nueva Finca</h2>

        <form wire:submit.prevent="crearFinca" class="mt-4">
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div class="col-span-2">
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Finca</label>
                    <input type="text" wire:model="nombre" placeholder="Nombre de la Finca" class="bg-gray-50  dark:bg-gray-800 border border-gray-300 text-gray-900  dark:text-white text-sm rounded-lg block w-full p-2.5">
                    @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="ubicacion_lat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitud</label>
                    <input type="text" wire:model="ubicacion_lat" placeholder="Latitud" class="bg-gray-50  dark:bg-gray-800 border border-gray-300 text-gray-900  dark:text-white text-sm rounded-lg block w-full p-2.5">
                    @error('ubicacion_lat') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="ubicacion_long" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitud</label>
                    <input type="text" wire:model="ubicacion_long" placeholder="Longitud" class="bg-gray-50  dark:bg-gray-800 border border-gray-300 text-gray-900  dark:text-white text-sm rounded-lg block w-full p-2.5">
                    @error('ubicacion_long') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-2">
                    <label for="tipo_de_suelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Suelo</label>
                    <input type="text" wire:model="tipo_de_suelo" placeholder="Tipo de Suelo" class="bg-gray-50  dark:bg-gray-800 border border-gray-300 text-gray-900  dark:text-white text-sm rounded-lg block w-full p-2.5">
                    @error('tipo_de_suelo') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-2">
                    <label for="superficie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Superficie (Hectáreas)</label>
                    <input type="text" wire:model="superficie" placeholder="Superficie" class="bg-gray-50  dark:bg-gray-800 border border-gray-300 text-gray-900  dark:text-white text-sm rounded-lg block w-full p-2.5">
                    @error('superficie') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-sm px-5 py-2.5">
                Guardar Finca
            </button>
        </form>
    </div>
</div>
