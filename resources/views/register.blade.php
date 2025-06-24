@extends('layouts.app')

@section('content')
    <div class="pt-[100px] px-[50px]">
        <div class="text-xl text-center text-[#FECD4C]"><b>Daftar</b></div>

        <form action="" method="POST" class="mt-14 space-y-4">
            @csrf
            <div class="relative">
                <label for="username">Username</label>
                <input class="mt-3.5 ps-7 h-11 w-full bg-[#EDEDED] rounded-[1.25rem]" type="text" placeholder="Buat Username">
            </div>
            <div class="relative">
                <label for="email">Email</label>
                <input class="mt-3.5 ps-7 h-11 w-full bg-[#EDEDED] rounded-[1.25rem]" type="text" placeholder="Email">
            </div>
            <div class="relative">
                <label for="password">Password</label>
                <input class="mt-3.5 ps-7 h-11 w-full bg-[#EDEDED] rounded-[1.25rem]" type="password" placeholder="Password">
            </div>
            <div class="mt-8">
                <button type="submit" class="w-full h-11 bg-[#FECD4C] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    <b>Daftar</b>
                </button>
            </div>
            <div class="text-center text-[#121212]">
                Sudah memiliki akun? <a href="" class="text-[#EFAC25]">Masuk</a></a>
            </div>
        </form>
    </div>
@endsection
