<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Market</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img class="w-10 h-auto" src="{{ Vite::asset('resources\images\logo_4.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-9 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div>
                    <a href="/jobs/create">Post a job</a>
                </div>
            @endauth
            @guest
                <div class="space-x-9 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>

                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[968px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
