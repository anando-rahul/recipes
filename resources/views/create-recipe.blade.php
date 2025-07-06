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
    <link rel="preload" href="{{ asset('common/assets/image/post-recipe-thumbnail.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-3.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-4.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-5.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-3.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/create-recipe-upload-image.png') }}" as="image" type="image/png" />
    @yield('include-css')

    {{-- Styles --}}
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-WjNvXiUv.css') }}"> --}}

    <style>
        .shadow-custom {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        body {
            font-family: 'Poppins';
        }
    </style>
</head>

<body class="relative font-source-poppins min-h-screen">
    <div
        class="relative min-h-screen overflow-x-hidden container w-full max-w-md mx-auto h-full bg-[#939393] container-color">
        <main class="relative z-10 mt-5">
            <div class="relative w-full h-screen">
                <div class="absolute bottom-0 w-full bg-white rounded-t-4xl shadow-sm">
                    <div class="pt-8 px-6 space-y-4">
                        <div class="text-center text-sm font-semibold text-[#262626]">
                            Posting Resep
                        </div>
                        <section>
                            <div class="w-full flex justify-between">
                                <div class="font-semibold text-sm text-[#262626]">Nama</div>
                                <div class="font-semibold text-sm text-[#A3A3A3] mr-2.5">Foto</div>
                            </div>
                            <div class="mt-2.5 w-full flex justify-between">
                                <input class="ps-3.5 w-[258px] h-[40px] bg-[#EDEDED] rounded-[0.625rem] text-[#535353] text-medium" type="text" value="Ayam rica-rica">
                                <img class="rounded-[0.625rem]"
                                    src="{{ asset('common/assets/image/post-recipe-thumbnail.png') }}"
                                    alt="" width="50px" height="50px">
                            </div>
                            <div class="mt-5 w-full">
                                <div class="text-[#262626] font-semibold text-sm">Bahan</div>
                            </div>
                            <div class="mt-3 w-full flex flex-wrap gap-2.5 items-center justify-between">
                                @for ($i = 1; $i <= 5; $i++)
                                    <img class="rounded-md"
                                        src="{{ asset('common') }}/assets/image/ingredient-{{ $i }}.png"
                                        alt="" width="40px" height="40px">
                                @endfor
                                <div
                                    class="w-[65px] h-[24px] bg-[#EDEDED] rounded-[0.625rem] flex justify-center items-center text-[#535353] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                                    <img class="mr-[3px]" src="{{ asset('common/assets/image/plus.svg') }}" alt="">
                                    <span class="font-semibold text-[0.625rem]">Tambah</span>
                                </div>
                            </div>
                            <div class="mt-6 font-semibold text-sm text-[#262626]">Langkah-langkah</div>
                            <div class="w-full flex flex-col items-center justify-center">
                                <div class="relative w-[280px] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
                                    <div class="absolute top-[27px] -left-[18px]">
                                        <div
                                            class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                                            1
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center py-3">
                                        <div class="mr-3">
                                            <p class="text-[10px] text-[#262626] max-w-[160px]">
                                                Pertama, siapkan cabai, bawang putih, bawang merah, gula, garam,
                                                kemiri, kecap, gula jawa, dan daging ayam segar.
                                            </p>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('common/assets/image/ingredient-1.png') }}"
                                                alt="" width="40px" height="40px">
                                        </div>
                                    </div>
                                </div>
                                <div class="relative w-[280px] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
                                    <div class="absolute top-[18px] -left-[18px]">
                                        <div
                                            class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                                            2
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center py-3">
                                        <div class="mr-3">
                                            <p class="text-[10px] text-[#262626] max-w-[160px]">
                                                Setelah itu tumbuk cabai, kemiri, bawang putih dan bawang merah <br>
                                                secara bersamaan.
                                            </p>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('common/assets/image/step-2.png') }}" alt=""
                                                width="40px" height="40px">
                                        </div>
                                    </div>
                                </div>
                                <div class="relative w-[280px] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
                                    <div class="absolute top-[18px] -left-[18px]">
                                        <div
                                            class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                                            3
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center py-3">
                                        <div class="mr-3">
                                            <p class="text-[10px] text-[#262626] max-w-[160px]">
                                                Cincang daging ayam sesuai selera, saya sarankan dipotong yang sama
                                                rata
                                                agar matangnya juga merata.
                                            </p>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('common/assets/image/step-3.png') }}" alt=""
                                                width="40px" height="40px">
                                        </div>
                                    </div>
                                </div>
                                <div class="relative w-[280px] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
                                    <div class="absolute top-[18px] -left-[18px]">
                                        <div
                                            class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                                            4
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center py-3">
                                        <div class="mr-3">
                                            <p class="text-[10px] text-[#A3A3A3] min-w-[160px] font-normal">
                                                Tambahkan deskripsi...
                                            </p>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('common/assets/image/create-recipe-upload-image.png') }}"
                                                alt="" width="40px" height="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="flex w-full justify-center">
                            <div class="w-[75px] h-[24px] bg-[#EDEDED] rounded-[0.625rem] flex justify-center items-center text-[#535353] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                                <img class="mr-[3px]" src="{{ asset('common/assets/image/plus.svg') }}" alt="">
                                <span class="font-semibold text-[0.625rem]">Tambah</span>
                            </div>
                        </div>
                        {{-- <button type="submit" class="w-full h-full bg-[#FECD4C] text-white rounded-[1.25rem] py-3 mb-8 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <b>Post</b>
                        </button> --}}
                        <a href="{{ route('my-recipe') }}" class="block text-center w-full h-full bg-[#FECD4C] text-white rounded-[1.25rem] py-3 mb-8 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <b>Post Resep</b>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    {{-- Border for Desktop --}}
    <div
        class="hidden xl:block fixed w-full -z-0 container inset-0 max-w-md mx-auto h-full min-h-screen border-x border-white/5">
    </div>
</body>

</html>
