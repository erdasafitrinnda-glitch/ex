@extends('layouts.app')
@section('title', 'Kontak')
@section('content')

<section class="mx-16 mt-10 mb-20">
    <div class="bg-white rounded-[40px] shadow-xl p-16 max-w-3xl mx-auto">
        <h1 class="text-4xl font-black text-center text-orange-500 mb-2">
            Kontak Kami
        </h1>
        <p class="text-center text-gray-400 mb-10">
            Hubungi kami untuk pemesanan atau pertanyaan
        </p>

        <div class="space-y-6">
            <div class="flex items-center gap-4 p-5 bg-yellow-50 rounded-2xl">
                <span class="text-2xl">📞</span>
                <div>
                    <p class="text-sm text-gray-400 font-medium">Telepon</p>
                    <p class="text-lg font-bold text-amber-950">0822-XXXX-XXXX</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-5 bg-yellow-50 rounded-2xl">
                <span class="text-2xl">📍</span>
                <div>
                    <p class="text-sm text-gray-400 font-medium">Alamat</p>
                    <p class="text-lg font-bold text-amber-950">Kota Baubau, Sulawesi Tenggara</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-5 bg-yellow-50 rounded-2xl">
                <span class="text-2xl">📧</span>
                <div>
                    <p class="text-sm text-gray-400 font-medium">Email</p>
                    <p class="text-lg font-bold text-amber-950">ayamcrispy@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-5 bg-yellow-50 rounded-2xl">
                <span class="text-2xl">🕐</span>
                <div>
                    <p class="text-sm text-gray-400 font-medium">Jam Operasional</p>
                    <p class="text-lg font-bold text-amber-950">Senin - Minggu, 08.00 - 21.00</p>
                </div>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="/pesan"
               class="inline-block bg-orange-500 text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-orange-600 transition">
                Pesan Sekarang
            </a>
        </div>
    </div>
</section>

@endsection