<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="pt-32 mb-10 lg:container">
    <h1 class="text-center font-bold text-4xl text-white mb-3 lg:text-6xl">About us</h1>
    <p class="text-center mb-5 text-white text-base lg:text-3xl">Discover Our Story</p>
    <img src="./img/Rectangle.png" alt="" class="lg:w-full h-3/6" />
</section>

<!-- Tentang Maharoni -->
<section class="w-full bg-second p-7 lg:p-10">
    <div class="container flex flex-col items-center lg:flex-row lg:gap-10">
        <div class="flex mx-auto">
            <img src="./img/Logo.png" alt="" class="w-36 lg:w-64" />
        </div>
        <div class="lg:w-1/2 w-full flex mx-auto">
            <h1 class="text-center lg:text-lg">
                Maharoni resmi berdiri pada 7 Juli 2023 filosofi antara kata "Mahar & Makaroni", disingkat Maharoni,
                yang berarti produk ini memiliki value yang tinggi, tetapi tidak merendahkan kebawah dan tidak
                memberatkan keatas.
                <span class="block font-semibold mt-3">#TidakSemahalMaharmu</span>
            </h1>
        </div>
    </div>
</section>

<!-- Quality -->
<section class="pt-14 container flex flex-col lg:flex-row">
    <div class="flex flex-col my-auto lg:w-2/4">
        <p class="text-center text-white text-xl mb-3 lg:text-5xl font-bold lg:text-start lg:leading-tight">Kreasikan
            Seleramu</p>
        <p class="text-center text-white text-base mb-3 lg:text-start">
            Makaroni dengan varian rasa Origani, Pranchesee, Sedep Asin, dan Seaweed yang bisa dicampur sesuai selera.
            Nikmati sensasi kelezatan yang menggoda dalam setiap gigitan, dan rasakan kebebasan bereksperimen dengan
            rasa yang tak
            terbatas. Pastikan Anda siap, karena ketagihan ini benar-benar hebat!
        </p>
    </div>
    <div class="flex justify-center lg:w-1/2">
        <img src="./img/Prod.png" alt="" class="w-2/3 lg:w-2/3" />
    </div>
</section>

<!-- Produk -->
<section class="container pt-14 lg:flex lg:gap-6 pb-11">
    <div class="flex justify-center lg:w-1/2">
        <img src="./img/ngemil.png" alt="" class="w-full" />
    </div>
    <div class="flex flex-col items-center lg:w-1/2 lg:justify-between">
        <h1 class="text-center text-white text-lg lg:text-5xl font-bold lg:text-start lg:leading-tight mt-5">Teman
            santaimu</h1>
        <p class="mb-5 text-center mt-3 text-white lg:text-start">Jadikan moment harimu menyenangkan bersama maharoni,
            teman setia dikala gabut melanda.</p>
        <a href="/product"
            class="text-sm md:text-xl font-semibold text-primary bg-second py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out">Pesan
            Sekarang!</a>
    </div>
</section>

<?= $this->endSection(); ?>