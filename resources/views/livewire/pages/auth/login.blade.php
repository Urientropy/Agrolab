<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="justify-center items-center w-full bg-white rounded-lg shadow lg:flex md:mt-0 lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0 dark:bg-gray-800">
    <div class="hidden w-2/3 lg:flex">
        <img class="rounded-l-lg" src="{{ asset('img/img1.jpg') }}" alt="login image">
    </div>
    <div class="p-6 space-y-8 w-full sm:p-8 lg:p-16 lg:py-0">
        <h2 class="text-2xl font-bold text-gray-900 lg:text-3xl dark:text-white">
            Inicio de Sesión
        </h2>

    <form class="mt-8 space-y-6" wire:submit.prevent="login">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico</label>
            <x-text-input wire:model="form.email" id="email" type="email" name="email"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                          placeholder="correo@ejemplo.com" required/>
            <x-input-error :messages="$errors->get('form.email')" class="mt-2"/>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
            <x-text-input wire:model="form.password" id="password" type="password"
                          name="password" placeholder="••••••••"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                          required/>
            <x-input-error :messages="$errors->get('form.password')" class="mt-2"/>
        </div>
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input wire:model="form.remember" id="remember" aria-describedby="remember"
                       name="remember" type="checkbox"
                       class="w-4 h-4 bg-gray-50 rounded border-gray-300 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                       required>
            </div>
            <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-white">Mantener sesión abierta</label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                   class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Olvidaste tu contraseña?</a>
            @endif
        </div>
        <button type="submit"
                class="py-3 px-5 w-full text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Iniciar Sesión
        </button>
    </form>
