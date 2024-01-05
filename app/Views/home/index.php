<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Hero -->
<section class="pt-24 relative">
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div id="toast-default"
        class="flex items-center w-full max-w-xs p-4 text-black bg-second rounded-lg absolute right-0 top-0 m-10 mt-20 shadow-lg"
        role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="rgb(255 179 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
        </svg>
        <div class="ms-3 text-sm font-normal"><?= session()->getFlashdata('pesan'); ?></div>
    </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('login')) : ?>
    <div id="toast-default"
        class="flex items-center w-full max-w-xs p-4 text-black bg-second rounded-lg absolute right-0 top-0 m-10 mt-20 shadow-lg"
        role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="rgb(255 179 61" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
            </path>
        </svg>
        <div class="ms-3 text-sm font-normal"><?= session()->getFlashdata('login'); ?></div>
    </div>
    <?php endif; ?>
    <div class="container lg:mt-10">
        <div class="flex flex-wrap">
            <div class="w-full self-center items-center px-4 md:w-1/2">
                <h1 class="text-2xl font-bold text-second lg:text-5xl md:mb-6 mb-2">It's not just snack</h1>
                <h1 class="text-2xl font-bold text-second lg:text-5xl md:mb-5 mb-2">It's <span
                        class="font-amarilo text-zinc-900">Mahar-Oni</span></h1>
                <p class="text-sm text-second mb-5 md:mb-10 md:text-l lg:text-xl">"Rasakan cemilan yang kamu gemari
                    dengan Maharoni. Temukan kenikmatannya sekarang!"</p>
                <a href="/products"
                    class="text-sm md:text-xl font-semibold text-primary bg-second py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out">Pesan
                    Sekarang!</a>
            </div>
            <div class="w-full self-end px-4 md:w-1/2">
                <div class="relative md:left-0-0 mt-16 md:mt-10 md:flex">
                    <div class="md:w-[90%] w-full mr-5">
                        <div class="swiper mySwiper w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/img/Mokap1.png" alt="" class="w-52" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/MokapCheese.png" alt="" class="w-52" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/MokapOrigani.png" alt="" class="w-52" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="flex justify-center gap-10 mt-5 md:flex-col">
                        <li>
                            <a href="https://instagram.com/maharoni.id" target="_blank"><img src="/img/Instagram.svg"
                                    alt="Instagram"
                                    class="hover:opacity-80 hover:scale-105 transition duration-200 md:w-9" /></a>
                        </li>
                        <li>
                            <a href=""><img src="/img/Tiktok.svg" alt="Tiktok"
                                    class="hover:opacity-80 hover:scale-105 transition duration-200 md:w-9" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<?= $this->endSection(); ?>