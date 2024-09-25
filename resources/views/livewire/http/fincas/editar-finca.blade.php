<div>
    <h2 class="text-lg font-bold">Editar Finca</h2>

    <form wire:submit.prevent="actualizarFinca" class="mt-4">
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" wire:model="nombre" id="nombre" 
                   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                   required>
            @error('nombre') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label for="ubicacion_lat" class="block text-sm font-medium text-gray-700">Ubicación Latitude:</label>
            <input type="text" wire:model="ubicacion_lat" id="ubicacion_lat" 
                   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('ubicacion_lat') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label for="ubicacion_long" class="block text-sm font-medium text-gray-700">Ubicación Longitude:</label>
            <input type="text" wire:model="ubicacion_long" id="ubicacion_long" 
                   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('ubicacion_long') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label for="tipo_de_suelo" class="block text-sm font-medium text-gray-700">Tipo de Suelo:</label>
            <input type="text" wire:model="tipo_de_suelo" id="tipo_de_suelo" 
                   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('tipo_de_suelo') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label for="superficie" class="block text-sm font-medium text-gray-700">Superficie:</label>
            <input type="text" wire:model="superficie" id="superficie" 
                   class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('superficie') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
        </div>

        <button type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-sm px-5 py-2.5">
            Actualizar Finca
        </button>
    </form>
</div>
