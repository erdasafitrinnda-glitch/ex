<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $produks = [
            [
                'nama' => 'Ayam Goreng Original',
                'gambar' => 'ayam1.jpg',
                'deskripsi' => 'Gurih dan crispy sempurna',
                'harga' => 15000,
                'stok' => 50,
            ],
            [
                'nama' => 'Ayam Sambal Matah',
                'gambar' => 'ayam2.jpg',
                'deskripsi' => 'Pedas segar khas Bali',
                'harga' => 18000,
                'stok' => 40,
            ],
            [
                'nama' => 'Ayam Goreng Bumbu BBQ',
                'gambar' => 'ayam3.jpg',
                'deskripsi' => 'Manis smoky, bikin nagih!',
                'harga' => 20000,
                'stok' => 30,
            ],
            [
                'nama' => 'Ayam Korea',
                'gambar' => 'ayam4.jpg',
                'deskripsi' => 'Manis pedas ala Korea, gochujang autentik',
                'harga' => 22000,
                'stok' => 35,
            ],
            [
                'nama' => 'Ayam Crispy Pedas',
                'gambar' => 'ayam5.jpg',
                'deskripsi' => 'Level pedas nampol, untuk pecinta sambal',
                'harga' => 39000,
                'stok' => 35,
            ],
            [
                'nama' => 'Paket Box Crispy',
                'gambar' => 'ayam6.jpg',
                'deskripsi' => 'Paket lengkap nasi, ayam crispy, dan sambal',
                'harga' => 99000,
                'stok' => 25,
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}