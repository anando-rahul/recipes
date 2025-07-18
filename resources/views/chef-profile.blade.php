@extends('layouts.main')

@section('include-css')
  <link rel="preload" href="{{ asset('common/assets/image/sate-ayam-2.png') }}" as="image" type="image/png" />
@endsection

@section('content')
    <div class="mt-5 mx-6">
        <a href="{{ url()->previous() }}" class="absolute transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            <img src="{{ asset('common/assets/image/back-button.svg') }}" alt="" width="50px" height="50px">
        </a>
        <div class="flex">
            <div class="w-full h-full flex justify-center items-center">
                <div class="flex flex-col items-center gap-2.5">
                    @if (@$_GET['chef'])
                        <img src="{{ asset('common/assets/image/chef-'). @$_GET['chef'].'.png' }}" alt="" width="136px" height="136px">
                    @else
                        <img src="{{ asset('common/assets/image/chef-juna.png') }}" alt="" width="136px" height="136px">
                    @endif
                    <div class="font-semibold text-md">Chef <span style="text-transform: capitalize;">{{ @$_GET['chef'] }}</span></div>
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
        <div class="mt-5 flex justify-center gap-2.5">
            <div id="follow"
                class="max-w-[65px] h-[30px] bg-[#EFAC25] rounded-[30px] text-white flex items-center justify-center p-1.5 px-5 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <img src="{{ asset('common/assets/image/people.svg') }}" alt="" width="12px" height="12px">
                <span class="mx-1 font-regular text-[0.625rem]">Ikuti</span>
            </div>
            <div id="followed"
                class="hidden max-w-[80px] h-[30px] bg-[#EFAC25] rounded-[30px] text-white items-center justify-center p-1.5 px-5 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <img src="{{ asset('common/assets/image/followed.svg') }}" alt="" style="width: 14px; height: 14px;">
                <span class="ms-[2px] font-regular text-[0.625rem]">Mengikuti</span>
            </div>
            <a href="{{ route('chef-message', ['chef' => @$_GET['chef']]) }}"
                class="max-w-[65px] h-[30px] bg-[#1981DE] rounded-[30px] text-white flex items-center justify-center p-1.5 px-5 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <img src="{{ asset('common/assets/image/comment-icon.svg') }}" alt="" width="12px" height="12px">
                <span class="mx-1 font-regular text-[0.625rem]">Pesan</span>
            </a >
        </div>
        <section class="mt-6 space-y-4">
            <div class="relative w-full h-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            @if (@$_GET['chef'])
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-'). @$_GET['chef'].'.png' }}" alt=""
                                    width="20px" height="20px">
                            @else
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-juna.png')}}" alt="" width="20px" height="20px">
                            @endif
                            <div class="font-semibold text-sm text-[#262626]">Chef <span style="text-transform: capitalize;">{{ @$_GET['chef'] ? $_GET['chef'] : 'Juna' }}</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">31m yang lalu</div>
                    </div>
                    <p class="mt-2.5 mb-2.5 text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing
                        and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it
                        to make a type specimen book.</p>
                    <div class="p-3 w-full h-[84px] bg-white rounded-[10px]">
                        <div class="flex gap-5">
                            <img class="rounded-[0.625rem]" src="{{ asset('common/assets/image/sate-ayam-2.png') }}"
                                alt="" width="98px" height="60px">
                            <div class="ml-3">
                                <div class="font-semibold text-xs text-[#000000]">Sate Ayam</div>
                                <div class="text-[0.625rem] text-[#535353] flex gap-1 items-center font-normal">
                                    <img src="{{ asset('common/assets/image/flame.svg') }}" alt="">
                                    422 Kalori
                                </div>
                                <div class="text-[0.625rem] text-[#535353] flex gap-1 items-center font-normal">
                                    <img src="{{ asset('common/assets/image/clock-2.svg') }}" alt="">
                                    15 Menit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-2.5 gap-1">
                        <div
                            class="w-[40px] h-[24px] bg-[#FF295E] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/love-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            10
                        </div>
                        <div
                            class="w-[40px] h-[24px] bg-[#1981DE] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/comment-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            10
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full h-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            @if (@$_GET['chef'])
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-'). @$_GET['chef'].'.png' }}" alt=""
                                    width="20px" height="20px">
                            @else
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-juna.png')}}" alt="" width="20px" height="20px">
                            @endif
                            <div class="font-semibold text-sm text-[#262626]">Chef <span style="text-transform: capitalize;">{{ @$_GET['chef'] ? $_GET['chef'] : 'Juna' }}</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">31m yang lalu</div>
                    </div>
                    <p class="mt-2.5 mb-2.5 text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        to make a type specimen book.</p>
                    <div class="flex mt-2.5 gap-1">
                        <div
                            class="w-[40px] h-[24px] bg-[#FF295E] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/love-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            13
                        </div>
                        <div
                            class="w-[40px] h-[24px] bg-[#1981DE] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/comment-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            7
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full h-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            @if (@$_GET['chef'])
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-'). @$_GET['chef'].'.png' }}" alt=""
                                    width="20px" height="20px">
                            @else
                                <img class="rounded-full" src="{{ asset('common/assets/image/chef-juna.png')}}" alt="" width="20px" height="20px">
                            @endif
                            <div class="font-semibold text-sm text-[#262626]">Chef <span style="text-transform: capitalize;">{{ @$_GET['chef'] ? $_GET['chef'] : 'Juna' }}</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">31m yang lalu</div>
                    </div>
                    <p class="mt-2.5 mb-2.5 text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        to make a type specimen book.</p>
                    <div class="flex mt-2.5 gap-1">
                        <div
                            class="w-[40px] h-[24px] bg-[#FF295E] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/love-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            13
                        </div>
                        <div
                            class="w-[40px] h-[24px] bg-[#1981DE] flex justify-center items-center text-white font-normal text-[0.625rem] gap-1.5 rounded-[0.625rem]">
                            <img src="{{ asset('common/assets/image/comment-icon.svg') }}" alt="" width="12px"
                                height="12px">
                            7
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const follow = document.getElementById("follow");
            const followed = document.getElementById("followed");

            follow.addEventListener("click", function() {
                follow.classList.add("hidden");
                follow.classList.remove("flex");
                followed.classList.remove("hidden");
                followed.classList.add("flex");
            });

            followed.addEventListener("click", function() {
                followed.classList.add("hidden");
                followed.classList.remove("flex");
                follow.classList.remove("hidden");
                follow.classList.add("flex");
            });
        });
    </script>
@endsection
