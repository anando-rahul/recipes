@extends('layouts.main')

@section('include-css')
  <link rel="preload" href="{{ asset('common/assets/image/avatar-discussion-3.png') }}" as="image" type="image/png" />
@endsection

@section('content')
    <div class="mt-10 mx-6">
        <div class="flex">
            <div class="w-full h-full flex justify-center items-center">
                <div class="flex flex-col items-center gap-2.5">
                    <img src="{{ asset('common/assets/image/avatar-discussion-3.png') }}" alt="" width="100px" height="100px">
                    <div class="text-center">
                        <div class="font-bold text-md">Halo, Arif</div>
                        <div class="font-regular text-xs">Member</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 flex justify-center items-center gap-6">
            <div class="text-center">
                <div class="font-reguler text-[#A3A3A3] text-xs">Resep</div>
                <div class="text-bold text-[#EFAC25]"><b>17</b></div>
            </div>
            <div class="text-center">
                <div class="font-reguler text-[#A3A3A3] text-xs">Pengikut</div>
                <div class="text-bold text-[#EFAC25]"><b>105</b></div>
            </div>
            <div class="text-center">
                <div class="font-reguler text-[#A3A3A3] text-xs">Mengikuti</div>
                <div class="text-bold text-[#EFAC25]"><b>12</b></div>
            </div>
        </div>
        <section class="mt-[50px] space-y-4">
            <div class="text-[#121212]"><b>Profile</b></div>
            <div class="flex justify-between border border-[#C6C6C6] p-3 rounded-[0.625rem]">
                <div class="flex gap-4">
                    <img src="{{ asset('common/assets/image/change-pic.svg') }}" alt="">
                    <div class="">Ubah Foto</div>
                </div>
                <img src="{{ asset('common/assets/image/arrow-right.svg') }}" alt="">
            </div>
            <div class="flex justify-between border border-[#C6C6C6] p-3 rounded-[0.625rem]">
                <div class="flex gap-4">
                    <img src="{{ asset('common/assets/image/lang.svg') }}" alt="">
                    <div class="">Pilih Bahasa</div>
                </div>
                <img src="{{ asset('common/assets/image/arrow-right.svg') }}" alt="">
            </div>
            <div class="flex justify-between border border-[#C6C6C6] p-3 rounded-[0.625rem]">
                <div class="flex gap-4">
                    <img src="{{ asset('common/assets/image/feedback.svg') }}" alt="">
                    <div class="">Bagikan Umpan Balik</div>
                </div>
                <img src="{{ asset('common/assets/image/arrow-right.svg') }}" alt="">
            </div>
        </section>
        <section class="mt-6 space-y-4">
            <div class="text-[#121212]"><b>Lainnya</b></div>
             <div class="flex justify-between border border-[#C6C6C6] p-3 rounded-[0.625rem]">
                <div class="flex gap-4">
                    <img src="{{ asset('common/assets/image/setting.svg') }}" alt="">
                    <div class="">Pengaturan</div>
                </div>
                <img src="{{ asset('common/assets/image/arrow-right.svg') }}" alt="">
            </div>
            <div class="flex justify-between border border-[#C6C6C6] p-3 rounded-[0.625rem]">
                <div class="flex gap-4">
                    <img src="{{ asset('common/assets/image/headphone.svg') }}" alt="">
                    <div class="">Pusat Bantuan</div>
                </div>
                <img src="{{ asset('common/assets/image/arrow-right.svg') }}" alt="">
            </div>
        </section>
    </div>
@endsection
