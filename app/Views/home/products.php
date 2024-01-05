<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Produk -->
<section class="pt-32 container flex flex-col">
    <div class="list-produk flex flex-wrap justify-center gap-10 lg:gap-20 mb-10">
        <?php foreach($produk as $p) : ?>
        <a href="/product/<?= $p['id']; ?>"
            class="produk mt-20 rounded-lg bg-coklat flex flex-col w-64 h-72 justify-between p-5 relative group hover:scale-105 duration-200 shadow-lg md:w-72 md:h-80">
            <div class="text-base text-white font-semibold"><img src="/img/Bintang.svg" alt="" srcset=""
                    class="w-4 inline" /> 8,9</div>
            <img src="/img/<?= $p['foto']; ?>" alt=""
                class="absolute w-44 right-0 -top-20 pr-2 group-hover:rotate-3 group-hover:scale-110 duration-200 md:w-48" />
            <div class="deskripsi w-3/4">
                <div class="nama-produk text-lg font-bold text-white mb-1 md:text-xl"><?= $p['nama']; ?></div>
                <div class="harga-produk text-base text-white">Rp <?= $p['harga']; ?></div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection(); ?>