@extends('layouts.app')

@section('include-css')
    <link rel="preload" href="{{ asset('common/assets/image/splash.png') }}" as="image" type="image/png" />
@endsection

@section('content')
    <div class="h-screen flex items-center justify-center">
        <img src="{{ asset('common/assets/image/splash.png') }}" alt="" width="247px" height="228px">
    </div>
@endsection


@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                window.location.href = "{{ route('boarding') }}";
            }, 3000);
        });
    </script>
@endsection
