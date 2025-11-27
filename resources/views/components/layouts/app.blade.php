<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

    <nav>
        <a href="/" wire:navigate>Welcome</a>
        <a href="/counter/1" wire:navigate>Counter</a>
        <a href="/articles" wire:navigate>Articles</a>
    </nav>
        {{ $slot }}
    </body>
</html>
