<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<!-- Checkout -->
<form class="pt-28 container pb-7 mx-auto" method="post" action="/beli">
    <?= csrf_field(); ?>
    <h1 class="text-2xl font-bold text-white text-center pb-6">Checkout</h1>
    <div class="bg-white rounded-lg w-full px-2 py-4 lg:p-10">
        <a href="/products">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H6M12 5l-7 7 7 7" />
            </svg>
        </a>
        <div class="grid lg:grid-cols-2">
            <div class="mt-10 px-5 pt-8 lg:mt-0 rounded-lg">
                <p class="text-xl font-medium text-center">Pesanan</p>
                <p class="text-gray-400 text-center">Cek kembali produk, dan pilih jasa pengiriman.</p>
                <div class="mt-8 space-y-3 px-2 py-4 sm:px-6 rounded-lg border">
                    <div class="flex flex-col sm:flex-row">
                        <img class="m-2 w-1/3 rounded-md" src="/img/<?= $produk['foto']; ?>" alt="" />
                        <input type="text" value="<?= $produk['id']; ?>" hidden name="id">
                        <div class="flex w-full flex-col px-4 py-4">
                            <span class="font-semibold"><?= $produk['nama']; ?></span>
                            <p class="mt-auto text-lg font-bold">Rp <?= $produk['harga']; ?>,-</p>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-lg font-medium">Jasa Kirim</p>

                <div class="mt-5 grid gap-6">
                    <div class="relative">
                        <input class="peer hidden" id="radio_1" type="radio" name="jasa_kirim" checked value="JNE" />
                        <span
                            class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label
                            class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                            for="radio_1">
                            <img class="w-14 object-contain"
                                src="https://jnewsonline.com/wp-content/uploads/2021/11/Foto-2-Naskah-Mengenal-Sosok-Kreator-Logo-%E2%80%98Biru-Tua-Merah-JNE.jpg"
                                alt="" />
                            <div class="ml-5">
                                <span class="mt-2 font-semibold">JNE</span>
                                <p class="text-slate-500 text-sm leading-6">Pengiriman: 3-5 Hari</p>
                            </div>
                        </label>

                    </div>
                    <div class="relative">
                        <input class="peer hidden" id="radio_2" type="radio" name="jasa_kirim" checked
                            value="J&T Express" />
                        <span
                            class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label
                            class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                            for="radio_2">
                            <img class="w-14 object-contain"
                                src="https://upload.wikimedia.org/wikipedia/commons/3/35/Logo_J%26T_Merah_Square.jpg"
                                alt="" />
                            <div class="ml-5">
                                <span class="mt-2 font-semibold">J&T Express</span>
                                <p class="text-slate-500 text-sm leading-6">Pengiriman: 2-3 Hari</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-10 px-5 pt-8 lg:mt-0 rounded-lg">
                <p class="text-xl font-medium">Detail Pengiriman</p>
                <p class="text-gray-400">Lengkapi pembayaran dibawah</p>
                <div class="">
                    <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                    <div class="relative">
                        <input type="text" name="id_pengguna" value="<?php echo session('id') ?>" hidden>
                        <input type="text" id="email"
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-primary focus:ring-primary"
                            readonly value="<?php echo session('email') ?>" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                    </div>

                    <label for="nama" class="mt-4 mb-2 block text-sm font-medium">Nama Lengkap</label>
                    <div class="relative">
                        <input type="text" id="nama"
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-primary focus:ring-primary"
                            readonly value="<?php echo session('nama_lengkap') ?>" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            </svg>
                        </div>
                    </div>

                    <label for="telp" class="mt-4 mb-2 block text-sm font-medium">No Telp</label>
                    <div class="relative">
                        <input type="number" id="telp"
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-primary focus:ring-primary"
                            readonly value="<?php echo session('no_telp') ?>" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <label for="alamat" class="mt-4 mb-2 block text-sm font-medium">Alamat Lengkap</label>
                    <div class="relative">
                        <textarea name="alamat" id="alamat" cols="30" rows="10"
                            class="w-full rounded-md border border-gray-200 p-2 text-sm shadow-sm outline-none focus:z-10 focus:border-primary focus:ring-primary"
                            required></textarea>
                    </div>
                </div>

                <!-- Total -->
                <div class="mt-6 border-b py-2">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Jumlah Produk</p>
                        <div class="inline-flex md:items-center justify-end mt-2">
                            <div class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200"
                                onclick="kurang()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 12H4" />
                                </svg>
                            </div>
                            <input type="number" id="jum_prod" name="jumlah" oninput="totalHarga();"
                                class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 px-4 py-1  md:w-full w-2/6 text-xs md:text-base text-center"
                                required readonly>
                            <div class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200"
                                onclick="tambah()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Subtotal produk</p>
                        <input type="number"
                            class="font-semibold text-gray-900 text-right md:w-full w-1/5 text-xs md:text-base"
                            value="0" id="sub_prod" readonly>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Pengiriman</p>
                        <input type="number"
                            class="font-semibold text-gray-900 text-right md:w-full w-1/5 text-xs md:text-base"
                            value="0" id="pengiriman" readonly>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Total</p>
                        <input type="number"
                            class="text-right font-semibold text-gray-900 md:w-full w-2/6 text-m md:text-2xl" value="0"
                            name="total" id="total" readonly>
                        <input type="text" value="Diproses" name="status" hidden>
                    </div>
                </div>
                <button type="submit" id="pesananbarang"
                    class="mt-4 mb-8 w-full rounded-lg bg-primary px-6 py-3 font-medium text-white hover:opacity-90">Pesan
                    Sekarang</button>
                <div id="toast-simple"
                    class="fixed bottom-5 right-5 shadow-lg mx-auto transition hidden items-center w-full max-w-xs p-4 space-x-4 text-white bg-primary divide-x rounded-lg space-x"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                    </svg>
                    <div class="pl-4 text-sm font-normal">Pesanan berhasil dibuat.</div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>