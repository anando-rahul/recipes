@extends('layouts.app')

@section('content')
    <div class="pt-[80px] px-[50px]">
        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('common/assets/image/boarding.png') }}" alt="" width="282px" height="auto">
            <div class="max-w-[256px] text-xl text-center text-[#262626]"><b>Menjadi koki profesional sekarang!</b></div>
            <p class="mt-4 w-[250px] text-xs text-center text-[#A3A3A3] leading-normal">Bergabunglah dengan komunitas memasak
                terbesar di dunia! Belajar memasak atau berbagi resep Anda dengan dunia.</p>
        </div>
        <div class="mt-28 h-full flex flex-col gap-2.5">
            <button type="submit"
                class="w-full h-11 bg-[#FECD4C] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <b>Daftar</b>
            </button>
            <button type="submit"
                class="w-full h-11 bg-[#A3A3A3] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <b>Masuk</b>
            </button>
        </div>
    </div>
@endsection
