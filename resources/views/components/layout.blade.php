@props([
    "header" => true,
    "footer" => true,
])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
        @vite("resources/css/app.css")

        <title>{{ $title ?? "SPK Pemilihan Program studi" }}</title>
    </head>

    <body class="flex min-h-screen flex-col">
        @if ($header)
            <x-header />
        @endif

        <main
            {{ $attributes->merge(["class" => "container mx-auto flex-1 p-4"]) }}
        >
            {{ $slot }}
        </main>

        @if ($footer)
            <x-footer />
        @endif
    </body>
</html>
