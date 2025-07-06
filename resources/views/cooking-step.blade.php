@extends('layouts.app')

@section('include-css')
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-3.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-4.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-5.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/step-8.png') }}" as="image" type="image/png" />
@endsection

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>
@endsection

@section('content')
    @include('inc.top', [
        'link' => url()->previous(),
        'title' => 'Step Memasak',
        'sub_title' => "{$_GET['menu']} by Chef Renata",
    ])
    <div class="mt-5 w-[300px] mx-auto">
        <div class="font-semibold text-sm">Langkah-langkah:</div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
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
                    <img src="{{ asset('common/assets/image/ingredient-1.png') }}" alt="" width="40px"
                        height="40px">
                </div>
            </div>
        </div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
            <div class="absolute top-[18px] -left-[18px]">
                <div
                    class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                    2
                </div>
            </div>
            <div class="flex justify-center items-center py-3">
                <div class="mr-3">
                    <p class="text-[10px] text-[#262626] max-w-[160px]">
                        Setelah itu tumbuk cabai, kemiri, bawang putih dan bawang merah <br> secara bersamaan.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('common/assets/image/step-2.png') }}" alt="" width="40px" height="40px">
                </div>
            </div>
        </div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
            <div class="absolute top-[18px] -left-[18px]">
                <div
                    class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                    3
                </div>
            </div>
            <div class="flex justify-center items-center py-3">
                <div class="mr-3">
                    <p class="text-[10px] text-[#262626] max-w-[160px]">
                        Cincang daging ayam sesuai selera, saya sarankan dipotong yang sama rata agar matangnya juga merata.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('common/assets/image/step-3.png') }}" alt="" width="40px" height="40px">
                </div>
            </div>
        </div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
            <div class="absolute top-[16px] -left-[18px]">
                <div
                    class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                    4
                </div>
            </div>
            <div class="flex justify-center items-center py-3">
                <div class="mr-3">
                    <p class="text-[10px] text-[#262626] max-w-[160px]">
                        Tusuk semua daging dan pastikan semua memiliki porsi yang sama.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('common/assets/image/step-4.png') }}" alt="" width="40px" height="40px">
                </div>
            </div>
        </div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
            <div class="absolute top-[16px] -left-[18px]">
                <div
                    class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                    5
                </div>
            </div>
            <div class="flex justify-center items-center py-3">
                <div class="mr-3">
                    <p class="text-[10px] text-[#262626] max-w-[160px]">
                        Setelah itu, olesi daging dengan bumbu dan bakar daging yang sudah ditusuk sampai matang.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('common/assets/image/step-5.png') }}" alt="" width="40px" height="40px">
                </div>
            </div>
        </div>
        <div class="relative w-[18.5rem] mt-5 h-auto bg-[#EDEDED] rounded-xl shadow-custom">
            <div class="absolute top-[16px] -left-[18px]">
                <div
                    class="flex justify-center items-center w-[35px] h-[35px] bg-[#FECD4C] rounded-[10px] text-[#535353] font-medium text-xl shadow-custom">
                    6
                </div>
            </div>
            <div class="flex justify-center items-center py-3">
                <div class="mr-3">
                    <p class="text-[10px] text-[#262626] min-w-[160px]">
                        Sate siap dihidangkan.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('common/assets/image/step-8.png') }}" alt="" width="40px" height="40px">
                </div>
            </div>
        </div>
        {{-- <div class="relative my-5">
            <a href="#" class="block p-3 text-white text-center w-[18.5rem] h-full bg-[#FECD4C] rounded-[20px]">
                <b>
                    Selesai
                </b>
            </a>
        </div> --}}
    </div>
@endsection
