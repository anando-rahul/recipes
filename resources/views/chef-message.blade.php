@extends('layouts.app')

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>
@endsection

@section('content')
    <div class="relative w-full h-[115px] bg-[#EFAC25]">
        <div class="absolute top-[50px] left-[25px] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            <a href="{{ route('chef-profile') }}" class="">
                <img src="{{ asset('common/assets/image/back-button.svg') }}" alt="" width="50px" height="50px">
            </a>
        </div>
        <div class="pt-12 pb-7 w-full">
            <div class="pb-5">
                <div class="text-xl text-center text-white"><b>Juna</b></div>
                <div class="text-center text-white text-sm">Chef</div>
            </div>
        </div>
        <div class="absolute top-[50px] right-[25px]">
            <a href="{{ route('chef-profile') }}" class="">
                <img src="{{ asset('common/assets/image/chef-juna.png') }}" alt="" width="50px" height="50px">
            </a>
        </div>
    </div>

    <div class="relative mt-5 mx-6">
        <div class="mt-5 flex justify-end">
            <div class="h-full max-w-[210px] bg-[#EDEDED] rounded-t-[10px] rounded-bl-[10px] shadow-custom">
                <div class="p-3 text-center">
                    <p class="text-[#535353] text-[0.75rem] w-full">
                        Hallo Chef Juna
                    </p>
                </div>
            </div>
        </div>
        <small class="block w-full mt-[5px] text-end font-light text-[#A3A3A3] text-[0.625rem]">10:21 AM</small>
        <div class="mt-5">
            <div class="h-full max-w-[208px] bg-[#EDEDED] rounded-t-[10px] rounded-bl-[10px] shadow-custom">
                <div class="p-3 flex justify-center">
                    <p class="max-w-[150px] text-[#535353] text-[0.75rem] w-full">
                        Hallo juga Arif, ada yang bisa saya bantu?
                    </p>
                </div>
            </div>
        </div>
        <small class="block w-full mt-[5px] font-light text-[#A3A3A3] text-[0.625rem]">10:21 AM</small>
        <div class="mt-5 flex justify-end">
            <div class="h-full w-[208px] bg-[#EDEDED] rounded-t-[10px] rounded-bl-[10px] shadow-custom">
                <div class="p-3 flex justify-center">
                    <p class="text-[#535353] text-[0.75rem] w-[160px]">
                        Saya kesulitan untuk mendapatkan rasa yang enak chef
                    </p>
                </div>
            </div>
        </div>
        <small class="block w-full mt-[5px] text-end font-light text-[#A3A3A3] text-[0.625rem]">10:21 AM</small>

        <div class="fixed bottom-0 max-w-md left-1/2 -translate-x-1/2 z-50 w-full">
            <div class="w-full bg-[#EFAC25] text-text-6 px-6 py-5 rounded-t-[1.25rem] flex flex-row items-center justify-between">
                <img src="{{ asset('common/assets/image/chat.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
