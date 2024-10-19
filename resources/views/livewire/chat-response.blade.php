<div class="flex">
    <div class="block max-w-sm p-3 text-gray-800 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300">
        <div wire:stream="stream-{{ $this->getId() }}">
            {!! $response !!}
        </div>
    </div>
</div>
