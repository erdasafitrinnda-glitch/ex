Kondisi Saat Ini

Saat ini terdapat dua laptop yang bekerja dengan satu repository Laravel yang sama.

1. Laptop Lama (Development Utama)

Laptop lama adalah perangkat utama yang digunakan untuk mengembangkan project Laravel.

Kondisinya:

Project Laravel sudah berjalan
Memiliki source code utama
Memiliki dependency lama
Memiliki keterbatasan hardware sehingga proses instalasi/update package cukup berat

Laptop lama memiliki repository GitHub sebagai sumber utama project.

2. Laptop Baru (Mesin Bantuan / Build Machine)

Laptop baru digunakan untuk membantu pekerjaan yang membutuhkan resource lebih besar.

Saat ini:

Repository Laravel baru saja di-clone dari GitHub
Laptop baru memiliki salinan project yang sama dengan laptop lama
Tujuan laptop baru bukan untuk menggantikan laptop lama, tetapi membantu melakukan pekerjaan berat seperti:
update dependency
migrasi package
instalasi package baru
Tujuan yang Ingin Dicapai

Ada dua pekerjaan utama yang ingin dilakukan di laptop baru:

1. Upgrade Tailwind CSS

Kondisi awal:

Tailwind CSS v3.1

Target:

Tailwind CSS v4.3

Proses upgrade dilakukan di laptop baru menggunakan:

npm install tailwindcss@latest

dan:

npx @tailwindcss/upgrade

Karena proses migrasi Tailwind dapat mengubah beberapa file seperti:

package.json
package-lock.json
tailwind.config.js
resources/css/app.css
postcss.config.js

maka perubahan tersebut akan dilakukan di laptop baru.

2. Install Laravel Fortify

Laptop baru juga akan melakukan instalasi package backend:

composer require laravel/fortify

Kemudian menjalankan konfigurasi Fortify:

php artisan fortify:install

Yang menghasilkan perubahan seperti:

composer.json
composer.lock
config/fortify.php
app/Providers/FortifyServiceProvider.php
routes/
Alur Kerja yang Diinginkan

Setelah semua perubahan selesai di laptop baru:

Laptop baru melakukan:

git status

Memastikan perubahan terlihat.

Kemudian:

git add .
git commit -m "upgrade tailwind and install fortify"
git push

Perubahan masuk ke GitHub.

Setelah Itu Laptop Lama

Laptop lama tidak perlu melakukan proses instalasi dari awal.

Cukup:

git pull

Kemudian sinkronisasi dependency:

Untuk PHP:

composer install

Untuk frontend:

npm install

Karena:

composer.json sudah berubah
composer.lock sudah berubah
package.json sudah berubah
package-lock.json sudah berubah

maka laptop lama hanya mengambil instruksi dependency terbaru dan menginstalnya.

Kenapa Kita Tidak Memasukkan Vendor dan Node Modules ke Git?

Karena kita memilih workflow yang lebih standar.

Repository hanya menyimpan:

Source Code
+
Dependency Definition

Bukan:

Source Code
+
Hasil Instalasi Dependency

Jadi:

Composer:

composer.json
composer.lock
        |
        v
composer install
        |
        v
vendor/

NPM:

package.json
package-lock.json
        |
        v
npm install
        |
        v
node_modules/
Status Git yang Diharapkan di Laptop Baru Saat Ini

Sebelum migrasi Tailwind:

git status

harus bersih:

nothing to commit, working tree clean

Karena tool:

npx @tailwindcss/upgrade

membutuhkan kondisi repository bersih agar perubahan migrasi tidak bercampur dengan perubahan lain.

Jadi singkatnya:

Laptop baru = tempat melakukan upgrade dan instalasi

GitHub = tempat menyimpan hasil perubahan

Laptop lama = tinggal mengambil perubahan dan install dependency sesuai file terbaru

Flow akhirnya:

Laptop Lama
    |
    | push project awal
    v
GitHub
    |
    | clone
    v
Laptop Baru

Laptop Baru:
    |
    | update Tailwind 3 → 4
    | install Fortify
    |
    v

GitHub
    |
    | pull
    v

Laptop Lama:
    |
    | composer install
    | npm install
    |
    v

Project siap dengan dependency terba

Jadi sekarang kita sedang berada di tahap: Laptop baru sudah clone project, lalu akan melakukan upgrade Tailwind dan instalasi Fortify sebelum push kembali ke GitHub.