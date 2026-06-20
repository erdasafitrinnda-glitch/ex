@extends('layouts.app')
@section('title', 'Produk')
@section('content')

<!-- HERO -->
<div class="text-center py-16 px-6 bg-yellow-50">

    <h1 class="text-5xl font-black text-amber-950">
        Menu <span class="text-orange-500">Ayam Crispy</span> Kami
    </h1>

    <p class="mt-3 text-gray-500 text-lg">
        Pilih menu favoritmu — renyah di luar, juicy di dalam!
    </p>

</div>

<!-- PRODUK -->
<div class="grid grid-cols-3 gap-8 max-w-6xl mx-auto px-6 py-16">

    @foreach ($produk as $item)

        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">

            <img src="{{ asset('images/' . $item->gambar) }}"
                 class="w-full h-52 object-cover"
                 alt="{{ $item->nama }}">

            <div class="p-5">

                <h3 class="text-2xl font-bold text-amber-950">
                    {{ $item->nama }}
                </h3>

                <p class="text-gray-500 mt-2">
                    {{ $item->deskripsi }}
                </p>

                <div class="flex justify-between items-center mt-5">

                    <span class="text-orange-500 font-bold text-xl">
                        Rp {{ number_format($item->harga) }}
                    </span>

                    <a href="/pesan?produk={{ $item->nama }}"
                    class="bg-orange-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-orange-600">

                    Pesan

                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection