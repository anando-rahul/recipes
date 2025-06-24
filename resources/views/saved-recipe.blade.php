@extends('layouts.main')

@section('css')
    <style>
        .shadow-custom {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection

@section('content')
    <div class="mt-[70px] mx-6">
        <div class="font-semibold text-md text-[#262626]">Resep Tersimpan</div>
        <div class="mt-6 space-y-2.5" id="recipe-list">
            <div class="relative w-full h-[130px] bg-[#EDEDED] rounded-[10px] shadow-custom saved-recipe-card">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img class="rounded-full" src="{{ asset('common/assets/image/saved-recipe-1.png') }}"
                                alt="" width="40px" height="40px">
                            <div class="font-semibold text-sm text-[#262626]">Sate Ayam</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">15 June 2023</div>
                    </div>
                    <p class="mt-[5px] text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="absolute right-2.5 bottom-2.5 delete-btn">
                    <img src="{{ asset('common/assets/image/delete.svg') }}" alt="">
                </div>
            </div>
            <div class="relative w-full h-[130px] bg-[#EDEDED] rounded-[10px] shadow-custom saved-recipe-card">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img class="rounded-full" src="{{ asset('common/assets/image/saved-recipe-2.png') }}"
                                alt="" width="40px" height="40px">
                            <div class="font-semibold text-sm text-[#262626]">Ayam Rica</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">15 June 2023</div>
                    </div>
                    <p class="mt-[5px] text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="absolute right-2.5 bottom-2.5 delete-btn">
                    <img src="{{ asset('common/assets/image/delete.svg') }}" alt="">
                </div>
            </div>
            <div class="relative w-full h-[130px] bg-[#EDEDED] rounded-[10px] shadow-custom saved-recipe-card">
                <div class="py-5 px-6">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-3 items-center">
                            <img class="rounded-full" src="{{ asset('common/assets/image/saved-recipe-3.png') }}"
                                alt="" width="40px" height="40px">
                            <div class="font-semibold text-sm text-[#262626]">Soto Betawi</div>
                        </div>
                        <div class="text-[#535353] text-[0.625rem]">15 June 2023</div>
                    </div>
                    <p class="mt-[5px] text-[#535353] text-[0.625rem]">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="absolute right-2.5 bottom-2.5 delete-btn">
                    <img src="{{ asset('common/assets/image/delete.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="hidden" id="empty-state">
            <div class="w-full h-[540px] flex flex-col gap-3 justify-center items-center">
                <img src="{{ asset('common/assets/image/saved-no-data.svg') }}" alt="" width="80px"
                    height="80px">
                <div class="text-[#A3A3A3] text-sm">Tidak ada resep yang tersimpan.</div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            const emptyState = document.getElementById('empty-state');

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.saved-recipe-card');
                    if (card) {
                        card.classList.add('hidden');
                    }

                    // Cek jika semua card sudah hidden
                    const remainingCards = document.querySelectorAll(
                        '.saved-recipe-card:not(.hidden)');
                    if (remainingCards.length === 0) {
                        emptyState.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
@endsection
