<div class="w-4/5 mx-auto my-16 overflow-hidden rounded-lg shadow-lg dark:shadow-black/20">
    <div class="h-[400px] bg-gradient-to-t from-slate-100 dark:from-gray-800 p-6 overflow-y-auto flex flex-col-reverse">
        <div class="flex flex-col space-y-4">
            @foreach($messages as $key => $message)
                @if ($message['role'] === 'user')
                    <div class="flex justify-end">
                        <div class="block p-3 text-blue-800 bg-blue-100 rounded-lg dark:bg-blue-600 dark:text-blue-200">
                            {{ $message['content'] }}
                        </div>
                    </div>
                @endif

                @if ($message['role'] === 'assistant')
                    <livewire:chat-response :key="$key" :messages="$messages" :prompt="$messages[$key - 1]" />
                @endif
            @endforeach
        </div>
    </div>

    <form wire:submit="send" class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
        <textarea wire:model="body" id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Escribe tu mensaje..."></textarea>
        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
            </svg>
            <span class="sr-only">Enviar mensaje</span>
        </button>
    </form>
</div>