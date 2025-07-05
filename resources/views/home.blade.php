@extends('layouts.main')

@section('include-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="preload" href="{{ asset('common/assets/image/avatar-discussion-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/search.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-0.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-3.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-4.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/menu-5.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-juna.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-arnold.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-marinka.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/chef-renata.png') }}" as="image" type="image/png" />
@endsection

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.25);
        }

        .swiper-recipe,
        .swiper-chef {
            padding-left: 3px;
        }
    </style>
@endsection

@section('content')
    <div class="flex items-center mt-5 mx-4 gap-5">
        <img src="{{ asset('common/assets/image/avatar-discussion-3.png') }}" alt="" width="50px" height="50px">
        <a href="{{ route('profile') }}" class="">
            <div class="text-[#535353] text-sm">Halo, Arif</div>
            <div class="text-[#262626] text-2xl"><b>Temukan Resep</b></div>
        </a>
    </div>
    <div class="mt-5 mx-2 p-0">
        <img src="{{ asset('common/assets/image/search.png') }}" alt="">
    </div>

    <div class="mx-4 mt-6">
        <section>
            <div class="text-[#262626] text-sm font-bold">Mau masak apa hari ini?</div>
            <div class="swiper swiper-recipe mt-2.5 min-h-[150px]">
                <div class="swiper-wrapper">
                    @php
                        $menus = ['Sate Ayam', 'Steak Sapi', 'Mie Goreng', 'Pizza', 'Cake', 'Roti pisang'];
                    @endphp
                    @for ($i = 0; $i < 6; $i++)
                        <div class="swiper-slide !w-[92px] !h-[125px] bg-[#EDEDED] rounded-xl shadow-custom  transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <a href="{{ route('detail-recipe') }}" class="h-full flex flex-col justify-center items-center gap-1.5">
                                <div>
                                    <img src="{{ asset('common') }}/assets/image/menu-{{ $i }}.png"
                                        alt="" width="52" height="52">
                                </div>
                                <div class="text-[12px] text-[#262626]">{{ $menus[$i] }}</div>
                                <div class="text-[10px] text-[#535353] flex items-center gap-0.5">
                                    <img src="{{ asset('common/assets/image/clock.svg') }}" alt="" width="10"
                                        height="10">
                                    <span>15 menit</span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section>
            <div class="flex justify-between">
                <div class="text-[#262626] text-sm"><b>Chef Populer</b></div>
                <a href="#" class="text-[#EFAC25] text-xs mr-2.5">Lihat Semua</a>
            </div>
            <div class="swiper swiper-chef mt-2.5 min-h-[80px]">
                <div class="swiper-wrapper">
                    @php
                        $chefs = ['juna', 'arnold', 'renata', 'marinka'];
                    @endphp
                    @for ($i = 0; $i < 4; $i++)
                        <a href="{{ route('chef-profile') }}" class="swiper-slide !w-[121px] !h-[46px] bg-[#EDEDED] rounded-xl shadow-custom transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <div class="h-full flex justify-center items-center gap-3.5 px-[12px]">
                                <div class="">
                                    <img src="{{ asset('common/assets/image/chef-'). $chefs[$i].'.png' }}" alt=""width="30px" height="30px">
                                </div>
                                <div class="text-xs capitalize">Chef {{ @$chefs[$i] }}</div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </section>

        <section>
            <div class="flex justify-between">
                <div class="text-[#262626] text-sm"><b>Sedang Trending</b></div>
                <a href="#" class="text-[#EFAC25] text-xs mr-2.5">Lihat Semua</a>
            </div>
            <div class="swiper swiper-recipe mt-2.5 min-h-[150px]">
                <div class="swiper-wrapper">
                    @php
                        $menus = ['Sate Ayam', 'Steak Sapi', 'Mie Goreng', 'Pizza', 'Cake', 'Roti pisang'];
                    @endphp
                    @for ($i = 0; $i < 6; $i++)
                       <div class="swiper-slide !w-[92px] !h-[125px] bg-[#EDEDED] rounded-xl shadow-custom  transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <a href="{{ route('detail-recipe') }}" class="h-full flex flex-col justify-center items-center gap-1.5">
                                <div>
                                    <img src="{{ asset('common') }}/assets/image/menu-{{ $i }}.png"
                                        alt="" width="52" height="52">
                                </div>
                                <div class="text-[12px] text-[#262626]">{{ $menus[$i] }}</div>
                                <div class="text-[10px] text-[#535353] flex items-center gap-0.5">
                                    <img src="{{ asset('common/assets/image/clock.svg') }}" alt="" width="10"
                                        height="10">
                                    <span>15 menit</span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section>
            <div class="flex justify-between">
                <div class="text-[#262626] text-sm"><b>Makanan Adat</b></div>
                <a href="#" class="text-[#EFAC25] text-xs mr-2.5">Lihat Semua</a>
            </div>
            <div class="swiper swiper-recipe mt-2.5 min-h-[130px]">
                <div class="swiper-wrapper">
                    @php
                        $menus = ['Sate Ayam', 'Steak Sapi', 'Mie Goreng', 'Pizza', 'Cake', 'Roti pisang'];
                    @endphp
                    @for ($i = 0; $i < 6; $i++)
                        <div class="swiper-slide !w-[92px] !h-[125px] bg-[#EDEDED] rounded-xl shadow-custom  transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                            <a href="{{ route('detail-recipe') }}" class="h-full flex flex-col justify-center items-center gap-1.5">
                                <div>
                                    <img src="{{ asset('common') }}/assets/image/menu-{{ $i }}.png"
                                        alt="" width="52" height="52">
                                </div>
                                <div class="text-[12px] text-[#262626]">{{ $menus[$i] }}</div>
                                <div class="text-[10px] text-[#535353] flex items-center gap-0.5">
                                    <img src="{{ asset('common/assets/image/clock.svg') }}" alt="" width="10"
                                        height="10">
                                    <span>15 menit</span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </div>
@endsection

@section('include-js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
@endsection

@section('js')
    <script>
        const swiper = new Swiper(".swiper-recipe", {
            slidesPerView: 'auto',
            spaceBetween: 12,
            freeMode: true,
        });

        const swiper2 = new Swiper(".swiper-chef", {
            slidesPerView: 'auto',
            spaceBetween: 12,
            freeMode: true,
        });
    </script>
@endsection
