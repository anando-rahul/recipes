@extends('layouts.app')

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px -4px 50px rgba(0, 0, 0, 0.25);
        }
    </style>
    <link rel="preload" href="{{ asset('common/assets/image/thumbnail-detail-recipe.png') }}" as="image"
        type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/detail-recipe-info.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/detail-recipe-avatar.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-3.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-4.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-5.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-6.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/ingredient-7.png') }}" as="image" type="image/png" />
@endsection

@section('include-css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="mt-5 mx-6 w-90 md:w-100 flex justify-between">
        <a href="{{ route('home') }}"
            class="transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            <img src="{{ asset('common/assets/image/back-button.svg') }}" alt="" width="50px" height="50px">
        </a>
        <div class="transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95"
            id="love-button">
            <img src="{{ asset('common/assets/image/love-button.svg') }}" alt="" width="50px" height="50px">
        </div>
        <div class="hidden transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95"
            id="love-button-clicked">
            <img src="{{ asset('common/assets/image/love-button-clicked-2.svg') }}" alt="" width="50px"
                height="50px">
        </div>
    </div>
    <div class="mt-4 mb-10 flex justify-center">
        <img src="{{ asset('common') }}/assets/image/menu-{{ @$_GET['index'] }}.png" alt="" width="200px"
            height="200px">
    </div>

    <div class="h-full w-full rounded-t-[20px] bg-[#F4F4F4] shadow-custom">
        <div class="relative h-full pb-6">
            <div class="absolute w-full flex justify-center -top-[30px]">
                <img src="{{ asset('common/assets/image/detail-recipe-info.png') }}" alt="" height="50px"
                    width="250px">
            </div>
            <div class="absolute flex w-full justify-end p-[20px] !z-50">
                <a href="#"
                    class="transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95"
                    data-modal-toggle="favorite-modal" data-modal-target="favorite-modal">
                    <img src="{{ asset('common/assets/image/favorite-button.svg') }}" alt="">
                </a>
            </div>
            <div class="pt-12 mx-6">
                <div class="text-[#262626] text-[24px]"><b>{{ @$_GET['menu'] ? $_GET['menu'] : 'Nama Resep' }}</b></div>
                <div class="mt-1 flex items-center gap-1">
                    <div class="">
                        <img src="{{ asset('common/assets/image/detail-recipe-avatar.png') }}" alt=""
                            width="16px" height="16px">
                    </div>
                    <div class="text-[#A3A3A3] text-xs">By Chef Renata</div>
                </div>
                <div class="mt-5 w-full flex justify-between">
                    <div class="text-[#262626] font-semibold text-sm">Bahan</div>
                    <div class="text-[#EFAC25] text-xs font-normal">Lihat Semua</div>
                </div>
                <div class="mt-3 w-full flex flex-wrap gap-2.5">
                    @for ($i = 1; $i <= 7; $i++)
                        <img class="rounded-md"
                            src="{{ asset('common') }}/assets/image/ingredient-{{ $i }}.png" alt=""
                            width="40px" height="40px">
                    @endfor
                </div>
                <div class="mt-6 text-[#262626] font-semibold text-sm">Deskripsi</div>
                <p class="text-[#7c7c7c] font-xs w-full">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis
                    neque voluptates quasi nostrum quo fuga
                    at. Facere aperiam facilis praesentium libero voluptate quod inventore veritatis eligendi vel
                    consequuntur ullam neque, eos deserunt, minima quos. Dolore dolores ducimus, earum, aliquam quisquam
                    nemo quasi, odio optio provident aspernatur nulla aperiam laudantium facilis!</p>
            </div>
            <div class="mt-6 flex gap-7 justify-center">
                <div
                    class="flex justify-center items-center w-[150px] h-[40px] rounded-[1.25rem] bg-[#A3A3A3] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    <a href="{{ route('discussion', ['menu' => @$_GET['menu']]) }}" class="text-center text-xs text-white">
                        <b>Lihat Diskusi</b>
                    </a>
                </div>
                <div
                    class="flex justify-center items-center w-[150px] h-[40px] rounded-[1.25rem] bg-[#FECD4C] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    <a href="{{ route('cooking-step', ['menu' =>@$_GET['menu']]) }}" class="text-center text-xs text-white">
                        <b>Mulai Masak</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Main modal -->
    <div id="favorite-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <a href="#" data-modal-hide="favorite-modal">
            <div class="h-full w-full flex justify-center items-center full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative flex flex-col justify-center items-center">
                    <img src="{{ asset('common/assets/image/success-saving-recipe.svg') }}" alt="">
                    <div class="mt-6 text-white text-xl"><b>Resep berhasil disimpan</b></div>
                </div>
            </div>
        </a>
    </div>
@endsection

@section('include-js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@endsection

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loveButton = document.getElementById("love-button");
            const loveButtonClicked = document.getElementById("love-button-clicked");

            loveButton.addEventListener("click", function() {
                loveButton.classList.add("hidden");
                loveButtonClicked.classList.remove("hidden");
            });

            loveButtonClicked.addEventListener("click", function() {
                loveButtonClicked.classList.add("hidden");
                loveButton.classList.remove("hidden");
            });
        });
    </script>
@endsection
