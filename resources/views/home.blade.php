@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<!-- HERO -->
<section class="mx-16 mt-8 bg-gradient-to-br from-yellow-100 via-yellow-300 to-orange-400 rounded-[40px] p-16 flex items-center justify-between">
    <div class="w-1/2">
        <h1 class="text-8xl font-black leading-tight">
            <span class="text-amber-950">Toko</span><br>
            <span class="text-orange-500">Ayam</span><br>
            <span class="text-amber-950">Goreng</span><br>
            <span class="text-red-600">Crispy</span>
        </h1>
        <p class="mt-8 text-2xl text-amber-950">
            Ayam goreng crispy paling renyah, 
            gurih, dan bikin nagih.
        </p>
        <a href="/pesan"
           class="mt-10 inline-block bg-orange-500 text-white px-10 py-5 rounded-full text-2xl font-bold hover:bg-orange-600">
            Pesan Sekarang
        </a>
    </div>
    <div class="w-1/2 flex justify-center">
        <img src="{{ asset('images/ayam1.jpg') }}"
             class="w-[500px] rounded-[40px] shadow-2xl">
    </div>
</section>
<!-- MENU -->
<section class="mx-16 mt-10 mb-20">
    <h2 class="text-5xl font-bold text-center mb-10 text-amber-950">
        Menu Favorit
    </h2>
    @php
    $menus = [
        [
            'image' => asset('images/ayam1.jpg'),
            'title' => 'Ayam Goreng Original',
            'description' => 'Gurih dan crispy sempurna'
        ],
        [
            'image' => asset('images/ayam2.jpg'),
            'title' => 'Ayam Sambal Matah',
            'description' => 'Pedas segar khas Bali'
        ],
        [
            'image' => asset('images/ayam3.jpg'),
            'title' => 'Ayam Goreng Bumbu BBQ',
            'description' => 'Manis smoky, bikin nagih!'
        ]
    ];
    @endphp
    <div class="grid grid-cols-3 gap-10">
        @foreach ($menus as $menu)
            <div class="bg-white p-6 rounded-[30px] shadow-xl">
                <img src="{{ $menu['image'] }}"
                     class="w-full h-72 object-cover rounded-[20px]">
                <h3 class="text-3xl font-bold mt-5 text-amber-950">
                    {{ $menu['title'] }}
                </h3>
                <p class="mt-3 text-gray-600">
                    {{ $menu['description'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>
@endsection