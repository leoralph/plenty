<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>

    <div class="flex min-h-screen flex-col">
        <main class="flex-grow">
            <div>
                <div class="mx-auto w-full max-w-md px-4 py-10 sm:px-0">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>

    @livewireScriptConfig
</body>

</html>
