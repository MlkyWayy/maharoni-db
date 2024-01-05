<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Produk -->
<section class="pt-32 container pb-7 mx-auto">
    <div class="text-gray-700 body-font overflow-hidden bg-second rounded-lg p-7">
        <a href="/products">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H6M12 5l-7 7 7 7" />
            </svg>
        </a>
        <div class="mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap items-center">
                <img alt="Maharoni" class="w-1/2 border-gray-200 mx-auto md:w-1/4 hover:scale-110 transition"
                    src="/img/<?= $produk['foto']; ?>" />
                <div class="lg:w-1/2 w-full lg:pl-10 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-bold mb-1"><?= $produk['nama']; ?></h1>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-primary"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-primary"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-primary"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-primary"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class="text-gray-600 ml-3">16 Reviews</span>
                        </span>
                    </div>
                    <p class="leading-relaxed">
                        <?= $produk['deskripsi']; ?>
                    </p>
                    <?php if(session()->get('log')==TRUE) : ?>
                    <div class="flex flex-wrap mt-7 gap-4">
                        <span class="title-font font-bold text-2xl text-gray-900">Rp. <?= $produk['harga']; ?></span>
                        <a href="/checkout/<?= $produk['id']; ?>"
                            class="flex ml-auto text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:opacity-90 rounded-lg text-center text-base">Beli
                            Sekarang</a>
                    </div>
                    <?php else : ?>
                    <div class="flex flex-wrap mt-7 gap-4">
                        <span class="title-font font-bold text-2xl text-gray-900">Rp. <?= $produk['harga']; ?></span>
                        <a href="/login"
                            class="flex ml-auto text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:opacity-90 rounded-lg text-center text-base">Login
                            terlebih dahulu</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>