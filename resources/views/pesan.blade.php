@extends('layouts.app')
@section('title', 'Pesan Sekarang')
@section('content')

<div class="max-w-3xl mx-auto py-16 px-6">

    <div class="text-center mb-12">

        <h1 class="text-5xl font-black text-amber-950">
            Pesan <span class="text-orange-500">Ayam Crispy</span>
        </h1>

        <p class="mt-4 text-gray-600 text-lg">
            Silakan isi form di bawah untuk melakukan pemesanan.
        </p>

    </div>

    <div class="bg-white shadow-2xl rounded-3xl p-10">

        <form>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Nama Pelanggan
                </label>

                <input type="text"
                       placeholder="Masukkan nama"
                       class="w-full border-2 border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:border-orange-500">

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Pilih Produk
                </label>

                <select class="w-full border-2 border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:border-orange-500">

                    <option>Ayam Original</option>
                    <option>Ayam Sambal Matah</option>
                    <option>Ayam BBQ</option>
                    <option>Ayam Korea</option>
                    <option>Ayam Crispy Pedas</option>
                    <option>paket box crispy</option>

                </select>

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Jumlah Pesanan
                </label>

                <input type="number"
                       placeholder="Masukkan jumlah"
                       class="w-full border-2 border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:border-orange-500">

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Alamat Pengiriman
                </label>

                <textarea rows="4"
                          placeholder="Masukkan alamat lengkap"
                          class="w-full border-2 border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:border-orange-500"></textarea>

            </div>

            <div class="mb-8">

                <label class="block text-lg font-semibold mb-2">
                    Metode Pembayaran
                </label>

                <select class="w-full border-2 border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:border-orange-500">

                    <option>COD (Bayar di Tempat)</option>
                    <option>Transfer Bank</option>
                    <option>E-Wallet</option>

                </select>

            </div>

            <!-- BUTTON -->
            <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 rounded-xl text-lg transition">

                Kirim Pesanan

            </button>

        </form>

    </div>

</div>

@endsection