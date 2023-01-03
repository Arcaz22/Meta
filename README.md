# **META TIM**
**<img alt="MetaTim" width="200" src="public/img/meta.png">**
## _Tugas Besar Praktikum WEB 20221_
---
> *Anggota*
* Chandra Arcychan Azfar – 203040151
* Jhonatan Karakaray – 183040059
*	Dian Nurcahya Ningrum 203040124
* Akbar Maulana – 203040136
* M.Tegar Nurul Fuad Rosmali – 203040150
---
> _Built With_
* [![Laravel][Laravel.com]][Laravel-url]
* [![Tailwind][Tailwind.com]][Tailwilnd-url]
---
## _Booking Travel_
> *Summary* 
<p>Seiring dengan perkembangan teknologi, banyak perusahaan jasa transportasi atau travel yang membuat website agar mempermudah para penumpangnya dalam memesan tiket secara online. Dikarenakan mayoritas di dalam kelompok bukan orang Bandung dan menggunakan travel untuk datang ke Bandung maka kami mengambil tema dalam pembuatan website ini tentang pemesanan travel.<p>
<p>MetaTrans merupakan jasa transportasi antar kota point to point yang dapat dipesan secara online. 
Pada website ini terdapat fitur CRUD, yaitu</p> 

* create, untuk reservasi berupa memilih kursi dan tanggal keberangkatan 
* read, untuk menampilkan hasil dari reservasi
* update, untuk mengubah data apabila ada kesalahan dalam pemesanan 
* delete, untuk menghapus data yang sudah dipesan
---

## _Installation_
1. Clone the repo
   ```sh
   git clone https://github.com/Arcaz22/Meta.git
   ```
2. Install Composer
   ```sh
   composer update
   ```
3. Buat `.env`
   ```sh
   cp .env.example .env
   ```   
4. Generate `.env`
   ```js
   php artisan key:generate
   ```
5. Install node Modules
   ```js
   npm install
   ```
--- 
## _Running_
Buka di terminal code editor
   ```sh
   php artisan migrate:fresh --seed
   ```
   ```sh
   php artisan serve
   ```
   ```sh
   npm run dev
   ```

[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com

[Tailwind.com]: https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwilnd-url]: https://tailwindcss.com/
