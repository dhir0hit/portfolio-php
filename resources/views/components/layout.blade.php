<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>dhir0hit.com</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=League+Script&family=Lexend+Mega:wght@100..900&family=Lexend+Zetta:wght@100..900&family=Major+Mono+Display&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navigation')
    <div class="information container">
        <ul>
            @if (session()->has('message'))
                <li id="{{ $id = str_replace(" ", "_", session('message')) }}" class="info">
                    <button
                        class="close_button"
                        onclick="getElementById('{{ $id }}').remove()"
                    >X</button>
                    <span>{{ session('message') }}</span>
                </li>
            @endif

            @if ($errors->any)
                @foreach($errors->all() as $error)
                    <li id="{{ $id = str_replace(" ", "_", $error) }}" class="error">
                        <button
                            class="close_button"
                            onclick="getElementById('{{ $id }}').remove()"
                        >X</button>
                        <span>{{ $error }}</span>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
