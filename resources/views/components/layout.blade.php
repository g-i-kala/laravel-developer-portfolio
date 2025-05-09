<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karo::Creative</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite (['resources/js/app.js'])
</head>

<body class="bg-bg-main text-text font-inter pb-20">
    <div id="page" class="wrapper px-10">
        <x-skip-link />
        <x-header />
        <x-dev-buttons />

        <main id="content-wrapper" class="main mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
    <x-backtotop />
</body>
</html>