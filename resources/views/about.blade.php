@extends('layouts.app')
@section('title','tentang')
@section('content')

<section class="mx-16 mt-16 bg-white rounded-[40px] p-16 shadow-xl">

    <h1 class="text-6xl font-black text-center text-orange-500">
        Tentang Kami
    </h1>

    <p class="mt-10 text-2xl leading-relaxed text-center text-gray-700">
         Toko Ayam Crispy merupakan tempat kuliner yang menyediakan berbagai 
         menu ayam goreng crispy dengan cita rasa khas, gurih, dan renyah di 
         setiap gigitan. Kami menggunakan bahan-bahan berkualitas serta bumbu 
         pilihan untuk menghadirkan rasa terbaik bagi para pelanggan. 
         Dengan proses pengolahan yang higienis dan pelayanan yang ramah, 
         Toko Ayam Crispy hadir sebagai pilihan tepat untuk menikmati hidangan 
         ayam crispy bersama keluarga, teman, maupun orang terdekat. Kami selalu 
         berkomitmen memberikan rasa yang lezat, harga yang terjangkau, serta 
         pengalaman kuliner yang memuaskan bagi setiap pelanggan yang datang.
    </p>

    <div class="flex justify-center mt-12">

        <img src="{{ asset('images/logo.png') }}"
             class="w-72 rounded-full shadow-xl">

    </div>

    @php
        $kelebihan = ['Renyah', 'Murah', 'Cepat'];
    @endphp

    <div class="flex justify-center gap-10 mt-16">

        @foreach ($kelebihan as $item)

            <div class="bg-orange-500 text-white px-10 py-5 rounded-full text-2xl font-bold">
                {{ $item }}
            </div>

        @endforeach

    </div>

</section>

@endsection