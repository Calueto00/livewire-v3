<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body>
        <nav class="flex bg-slate-700 text-white">
            <a href="/" class="py-4 px-6 hover:bg-slate-800" wire:navigate>Counter</a>
            <a href="/calculator" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>Calculater</a>
            <a href="/todolist" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>TodoList</a>
            <a href="#" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>Cascading</a>
            <a href="#" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>Products</a>
            <a href="#" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>Image</a>
            <a href="#" class="py-4 px-6 hover:bg-slate-800 " wire:navigate>Registration</a>
        </nav>
        {{ $slot }}
        @livewireScripts
    </body>
</html>
