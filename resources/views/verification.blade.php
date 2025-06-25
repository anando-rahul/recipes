@extends('layouts.app')

@section('include-css')
  <link rel="preload" href="{{ asset('common/assets/image/verification-success.png') }}" as="image" type="image/png" />
@endsection

@section('css')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection


@section('content')
    @if (@$_GET['state'] != 'verification-success')
        <div class="pt-[100px] px-[50px]">
            <div class="text-xl text-center text-[#FECD4C]"><b>Verifikasi</b></div>
            <div class="mt-[75px] mb-32 flex gap-3.5">
                @for ($i = 1; $i <= 4; $i++)
                    <input
                        class="w-[72px] h-[72px] rounded-[20px] bg-[#F3F3F3] border border-[#C6C6C6] text-center font-bold text-3xl"
                        type="number" min="0" max="9" oninput="this.value = this.value.slice(0, 1)">
                @endfor
            </div>
            <div class="text-center text-sm text-[#121212]">
                Tidak mendapatkan kode verifikasi?
            </div>
            <div class="text-center">
                <a href="#" class="text-[#EFAC25] text-sm" id="countdown-timer">Kirim ulang 01:59</a>
            </div>
            <div class="mt-8">
                <form action="{{ route('verification') }}" method="GET">
                    <input type="hidden" name="state" value="verification-success">
                    <button type="submit"
                        class="w-full h-11 bg-[#FECD4C] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                        <b>Verifikasi</b>
                    </button>
                </form>
            </div>
        </div>
    @endif

    @if (@$_GET['state'] == 'verification-success')
        <div class="px-[50px] h-screen flex flex-col items-center justify-center gap-6">
            <img src="{{ asset('common/assets/image/verification-success.png') }}" alt="" width="142px" height="auto">
            <div class="text-2xl text-center text-[#535353]"><b>Verifikasi Berhasil</b></div>
            <div class="h-[300px] w-full flex flex-col justify-end">
                <form action="{{ route('login') }}" method="get">
                    <button type="submit"
                        class="w-full h-11 bg-[#FECD4C] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                        <b>Lanjut</b>
                    </button>
                </form>
            </div>
        </div>
    @endif
@endsection

@section('js')
    <script>
        let time = 119; // Waktu awal countdown (01:59) = 119 detik
        let countdownInterval; // Untuk menyimpan ID interval

        // Ambil elemen countdown
        const countdownElement = document.getElementById('countdown-timer');

        // Fungsi untuk update countdown
        function updateCountdown() {
            const minutes = Math.floor(time / 60); // Hitung menit
            const seconds = time % 60; // Hitung detik

            // Format menjadi MM:SS
            countdownElement.innerHTML =
                `Kirim ulang ${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

            // Kurangi waktu setiap detik
            if (time > 0) {
                time--;
            } else {
                // Jika waktu habis, ganti teks dengan 'Kirim ulang' dan hentikan interval
                countdownElement.innerHTML = "Kirim ulang";
                clearInterval(countdownInterval); // Hentikan interval saat waktu habis
            }
        }

        // Memulai countdown
        function startCountdown() {
            // Set waktu awal (01:59)
            time = 119;

            // Jika interval sebelumnya masih berjalan, hentikan
            if (countdownInterval) {
                clearInterval(countdownInterval);
            }

            // Update tampilan pertama kali
            updateCountdown();

            // Mulai countdown setiap detik
            countdownInterval = setInterval(updateCountdown, 1000);
        }

        // Mulai countdown otomatis ketika halaman dimuat
        startCountdown();

        // Event listener untuk mereset timer saat "Kirim ulang" diklik
        countdownElement.addEventListener('click', function(event) {
            event.preventDefault(); // Menghindari reload halaman saat klik
            startCountdown(); // Reset timer dan mulai lagi
        });
    </script>
@endsection
