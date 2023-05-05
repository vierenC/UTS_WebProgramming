## UTS Web Programming

- Nama: Vieren Cristian
- NIM: 2440102202

--------------------------------------
Installation
--------------------------------------
1. Pastikan node.js dan laravel sudah tersedia
2. Jalankan perintah `php artisan migrate:fresh --seed` untuk membuat tabel baru dan mengisi data awal ke dalam database
3. Pastikan vite sudah terinstal dan sudah dijalankan
   - Untuk menginstall vite `vite install`
   - Untuk menjalankan vite `npm run dev`
4. Jalankan laravel `php artisan serve`

   Jika terdapat error saat menjalankan kode, lakukan hal berikut:
   - Jalankan perintah `composer install`
   - Jika terdapat error "key not generated" atau "500|server error", jalankan perintah `php artisan key:generate`
   - Jika pada saat menjalankan syntax ini terdapat error tidak dapat menemukan file .env. Perlu dilakukan rename file `.env.example` menjadi `.env` kemudian jalankan kembali syntax tersebut dengan perintah `cp .env.example .env`
   - Jika terdapat error "vite manifest not found" pada web, lakukan hal berikut :
      - Jalankan perintah `npm install --save-dev vite laravel-vite-plugin`
      - Update file package.json dengan menambahkan script berikut: "scripts": { "dev": "vite", "build": "vite build" }
      - Jalankan perintah `npm run build`
   - Jalankan Laravel `php artisan serve`

5. Jalankan perintah `npm run watch`
