@extends('layouts.app')

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>
@endsection

@section('include-css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preload" href="{{ asset('common/assets/image/avatar-discussion-1.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/avatar-discussion-2.png') }}" as="image" type="image/png" />
    <link rel="preload" href="{{ asset('common/assets/image/avatar-discussion-3.png') }}" as="image"
        type="image/png" />
@endsection

@section('content')
    @include('inc.top', [
        'link' => url()->previous(),
        'title' => @$_GET['menu'],
        'sub_title' => 'Diskusi Komunitas',
    ])
    <div class="mt-5 mb-10 mx-6">
        <section>
            <div class="font-semibold text-sm">Rating</div>
            <div class="mt-2.5 flex justify-between">
                <div class="w-[120px] h-[80px] bg-[#EDEDED] rounded-[10px]">
                    <div class="flex flex-col justify-center items-center w-full h-full">
                        <div class="font-semibold text-xl text-[#000000]">4.7</div>
                        <div class="font-medium text-[10px] text-[#A3A3A3]">31 ulasan</div>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="flex justify-center items-center">
                        <div class="w-[161px] h-[8px] bg-[#EFAC25] rounded-[10px] mr-1.5"></div>
                        <div class="font-semibold text-[#000000] text-[0.625rem] mr-1">5</div>
                        <img src="{{ asset('common/assets/image/star.svg') }}" alt="" width="14px" height="14px">
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="relative w-[161px] h-[8px] bg-[#D9D9D9] rounded-[10px] mr-1.5">
                            <div class="absolute bg-[#EFAC25] w-[49px] h-[8px] rounded-[10px]"></div>
                        </div>
                        <div class="font-semibold text-[#000000] text-[0.625rem] mr-1">4</div>
                        <img src="{{ asset('common/assets/image/star.svg') }}" alt="" width="14px" height="14px">
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="relative w-[161px] h-[8px] bg-[#D9D9D9] rounded-[10px] mr-1.5">
                            <div class="absolute bg-[#EFAC25] w-[36px] h-[8px] rounded-[10px]"></div>
                        </div>
                        <div class="font-semibold text-[#000000] text-[0.625rem] mr-1">3</div>
                        <img src="{{ asset('common/assets/image/star.svg') }}" alt="" width="14px" height="14px">
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="relative w-[161px] h-[8px] bg-[#D9D9D9] rounded-[10px] mr-1.5">
                            <div class="absolute bg-[#EFAC25] w-[26px] h-[8px] rounded-[10px]"></div>
                        </div>
                        <div class="font-semibold text-[#000000] text-[0.625rem] mr-1">2</div>
                        <img src="{{ asset('common/assets/image/star.svg') }}" alt="" width="14px" height="14px">
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="relative w-[161px] h-[8px] bg-[#D9D9D9] rounded-[10px] mr-1.5">
                            <div class="absolute bg-[#EFAC25] w-[18px] h-[8px] rounded-[10px]"></div>
                        </div>
                        <div class="font-semibold text-[#000000] text-[0.625rem] mr-1">1</div>
                        <img src="{{ asset('common/assets/image/star.svg') }}" alt="" width="14px" height="14px">
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="font-semibold text-sm mb-5">Ulasan Terkini</div>
            <div id="review-container" class="mb-8 space-y-4 overflow-y-scroll max-h-[26.5rem]">
                <div class="h-full w-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                    <div class="p-5">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2.5">
                                <img src="{{ asset('common/assets/image/avatar-discussion-2.png') }}" alt=""
                                    width="20px" height="20px">
                                <div class="font-semibold text-[#262626] text-xs">Junaidi</div>
                            </div>
                            <div class="bg-white w-[36px] h-[18px] rounded-[10px]">
                                <div class="h-full w-full flex justify-center items-center">
                                    <div class="font-semibold text-[0.625rem] text-[#000000] mx-0.5">5</div>
                                    <img src="{{ asset('common/assets/image/star.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="mt-2.5 text-[#535353] text-[0.75rem] w-full">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
                <div class="h-full w-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                    <div class="p-5">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2.5">
                                <img src="{{ asset('common/assets/image/avatar-discussion-3.png') }}" alt=""
                                    width="20px" height="20px">
                                <div class="font-semibold text-[#262626] text-xs">Alex</div>
                            </div>
                            <div class="bg-white w-[36px] h-[18px] rounded-[10px]">
                                <div class="h-full w-full flex justify-center items-center">
                                    <div class="font-semibold text-[0.625rem] text-[#000000] mx-0.5">5</div>
                                    <img src="{{ asset('common/assets/image/star.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="mt-2.5 text-[#535353] text-[0.75rem] w-full">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
            </div>
            <button type="button" class="fixed bottom-8 w-[21.5rem] h-12 bg-[#FECD4C] text-white rounded-[1.25rem] py-3"
                data-modal-target="default-modal" data-modal-toggle="default-modal">
                <b>Tambah Ulasan</b>
            </button>
        </section>
    </div>
@endsection

@section('modal')
    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed bottom-0 full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-t-4xl shadow-sm">
                <div class="p-8 space-y-4">
                    <div class="text-sm font-semibold text-[#262626]">
                        Tambah Ulasan
                    </div>
                    <div class="w-[328px] h-[102px] bg-[#EDEDED] rounded-[1.25rem] mb-5">
                        <textarea class="text-[#535353] text-xs border-none w-full h-full p-4" name="" id=""
                            maxlength="170">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</textarea>
                    </div>
                    <div class="text-sm font-semibold text-[#262626]">
                        Beri Rating
                    </div>
                    <div class="flex gap-6 justify-center" id="star-rating">
                        <!-- Star placeholders -->
                        <img src="{{ asset('common/assets/image/star-rating.svg') }}" alt="star"
                            class="w-6 h-6 cursor-pointer" data-index="1" />
                        <img src="{{ asset('common/assets/image/star-rating.svg') }}" alt="star"
                            class="w-6 h-6 cursor-pointer" data-index="2" />
                        <img src="{{ asset('common/assets/image/star-rating.svg') }}" alt="star"
                            class="w-6 h-6 cursor-pointer" data-index="3" />
                        <img src="{{ asset('common/assets/image/star-rating.svg') }}" alt="star"
                            class="w-6 h-6 cursor-pointer" data-index="4" />
                        <img src="{{ asset('common/assets/image/star-rating.svg') }}" alt="star"
                            class="w-6 h-6 cursor-pointer" data-index="5" />
                    </div>
                    <button id="add-review" data-modal-hide="default-modal" type="button"
                        class="w-full h-full bg-[#FECD4C] text-white rounded-[1.25rem] py-3">
                        <b>Tambah Ulasan</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('include-js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@endsection

@section('js')
    <script>
        const stars = document.querySelectorAll('#star-rating img');
        const defaultSrc = "{{ asset('common/assets/image/star-rating.svg') }}"; // abu-abu
        const selectedSrc = "{{ asset('common/assets/image/star-rating-selected.svg') }}"; // kuning

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const rating = index + 1;

                stars.forEach((s, i) => {
                    s.src = i < rating ? selectedSrc : defaultSrc;
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addButton = document.getElementById('add-review');
            const reviewContainer = document.getElementById('review-container');

            addButton.addEventListener('click', function() {
                const newReview = document.createElement('div');
                newReview.className = 'h-full w-full bg-[#EDEDED] rounded-[10px] shadow-custom z-10';
                newReview.innerHTML = `
              <div class="h-full w-full bg-[#EDEDED] rounded-[10px] shadow-custom">
                    <div class="p-5">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2.5">
                                <img src="{{ asset('common/assets/image/avatar-discussion-1.png') }}" alt=""
                                    width="20px" height="20px">
                                <div class="font-semibold text-[#262626] text-xs">Arif</div>
                            </div>
                            <div class="bg-white w-[36px] h-[18px] rounded-[10px]">
                                <div class="h-full w-full flex justify-center items-center">
                                    <div class="font-semibold text-[0.625rem] text-[#000000] mx-0.5">5</div>
                                    <img src="{{ asset('common/assets/image/star.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="mt-2.5 text-[#535353] text-[0.75rem] w-full">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
        `;

                reviewContainer.appendChild(newReview);
            });
        });
    </script>
@endsection
