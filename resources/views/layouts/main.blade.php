<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ @$page_title }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Mono&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&display=swap"
        rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/favicon.png') }}">
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
    @yield('include-css')

    {{-- Styles --}}
    @vite('resources/css/app.css')

    @yield('css')
</head>

<body class="relative font-source-poppins min-h-screen">
    <div
        class="mb-32 relative min-h-screen overflow-x-hidden container w-full max-w-md mx-auto h-full bg-white container-color">
        <main class="relative z-10">
            @yield('content')
        </main>

        @yield('modal')
    </div>
    {{-- Border for Desktop --}}
    <div
        class="hidden xl:block fixed w-full -z-0 container inset-0 max-w-md mx-auto h-full min-h-screen border-x border-white/5">
    </div>

    {{-- Navigation Phone --}}
    <nav class="fixed bottom-0 max-w-md left-1/2 -translate-x-1/2 z-50 w-full">
        <div class="w-full bg-[#EFAC25] text-text-6 px-6 py-5 rounded-t-[1.25rem] flex flex-row items-center justify-between"
            style="">
            <a href="{{ route('home') }}" class="flex flex-col w-1/5 items-center">
                <img src="{{ asset('common/assets/image/home.svg') }}" alt="">
            </a>

            <a href="{{ route('my-recipe') }}" class="flex flex-col w-1/5 items-center">
                <img src="{{ asset('common/assets/image/post.svg') }}" alt="">
            </a>

            <a href="{{ route('create-recipe') }}" class="flex flex-col w-1/5 items-center">
                <img src="{{ asset('common/assets/image/add.svg') }}" alt="">
            </a>

            <a href="{{ route('saved-recipe') }}" class="flex flex-col w-1/5 items-center">
                <img src="{{ asset('common/assets/image/save.svg') }}" alt="">
            </a>

            <a href="{{ route('profile') }}" class="flex flex-col w-1/5 items-center">
                <img src="{{ asset('common/assets/image/profile.svg') }}" alt="">
            </a>
        </div>
    </nav>

    @yield('include-js')
    @yield('js')
</body>

</html>
