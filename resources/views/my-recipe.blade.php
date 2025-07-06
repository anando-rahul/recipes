@extends('layouts.main')

@section('include-css')
    <link rel="preload" href="{{ asset('common/assets/image/chef-juna.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-arnold.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/detail-recipe-avatar.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-marinka.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-a.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-b.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-c.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/sate-ayam-2.png') }}" as="image" type="image/png" />
@endsection

@section('content')
    <div class="mt-5 mx-6">
        <div class="flex justify-between">
            <div class="font-semibold text-md">Postingan Resep</div>
            <a href="{{ route('create-recipe') }}"
                class="w-[82px] h-[26px] flex items-center justify-center bg-[#EFAC25] text-[0.625rem] text-white rounded-[50px] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                <img class="mr-[5px]" src="{{ asset('common/assets/image/plus-circle.svg') }}" alt="" width="12px"
                    height="12px">
                Buat Post
            </a>
        </div>
        <div class="mt-5">
            <div class="flex gap-2.5">
                @php
                    $chefs = ['juna', 'arnold', 'renata', 'marinka', 'a', 'b', 'c'];
                @endphp
                @for ($i = 0; $i < 7; $i++)
                    <a href="{{ route('chef-profile', ['chef' => $chefs[$i]]) }}">
                        <img class="p-0.5 border-2 border-[#FECD4C] rounded-full" src="{{ asset("common/assets/image/chef-{$chefs[$i]}.png") }}" alt="" width="40px" height="40px">
                    </a>
                @endfor
            </div>
        </div>
        <section class="mt-6 space-y-4">
            <div class="relative w-full h-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img class="rounded-full" src="{{ asset('common/assets/image/chef-juna.png') }}" alt=""
                                width="20px" height="20px">
                            <div class="font-semibold text-sm text-[#262626]">Chef Juna</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">15m yang lalu</div>
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
                            <img class="rounded-full" src="{{ asset('common/assets/image/chef-renata.png') }}"
                                alt="" width="20px" height="20px">
                            <div class="font-semibold text-sm text-[#262626]">Chef Renata</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">31m yang lalu</div>
                    </div>
                    <p class="mt-2.5 mb-2.5 text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s.
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
                            <img class="rounded-full" src="{{ asset('common/assets/image/chef-juna.png') }}"
                                alt="" width="20px" height="20px">
                            <div class="font-semibold text-sm text-[#262626]">Chef Renata</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">31m yang lalu</div>
                    </div>
                    <p class="mt-2.5 mb-2.5 text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the
                        printing
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
        </section>
    </div>
@endsection
