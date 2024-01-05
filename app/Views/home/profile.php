<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="pt-24 container mb-10 flex">
    <div class="max-w-3xl w-full mx-auto grid gap-4 grid-cols-1" bis_skin_checked="1">
        <!-- profile card -->
        <div class="flex flex-col" bis_skin_checked="1">
            <div class="bg-second shadow-lg rounded-2xl p-4" bis_skin_checked="1">
                <div class="flex-none sm:flex" bis_skin_checked="1">
                    <div class=" relative h-32 w-32   sm:mb-0 mb-3" bis_skin_checked="1">
                        <img src="https://api.duniagames.co.id/api/content/upload/file/8143860661599124172.jpg"
                            alt="fajar" class=" w-32 h-32 object-cover rounded-2xl">
                    </div>
                    <div class="flex-auto sm:ml-5 justify-evenly" bis_skin_checked="1">
                        <div class="flex items-center justify-between sm:mt-2" bis_skin_checked="1">
                            <div class="flex items-center" bis_skin_checked="1">
                                <div class="flex flex-col" bis_skin_checked="1">
                                    <div class="w-full flex-none text-lg text-slate-950 font-bold leading-none"
                                        bis_skin_checked="1"> <?= session('nama_lengkap') ?></div>
                                    <div class="flex-auto text-slate-500 mt-2" bis_skin_checked="1">
                                        <span class="mr-3"> <?= session('email') ?></span>
                                    </div>
                                    <div class="flex-auto text-gray-500 my-1" bis_skin_checked="1">
                                        <span class="mr-3 "> <?= session('no_telp') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex pt-2 text-sm text-gray-400 justify-end" bis_skin_checked="1">
                            <a href="/logout"
                                class="flex-no-shrink text-second bg-primary py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (session()->getFlashdata('update')) : ?>
        <div id="toast-default"
            class="flex items-center w-full max-w-xs p-4 z-['999999'] text-black bg-second rounded-lg shadow-lg"
            role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="rgb(255 179 61)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                <polyline points="7 3 7 8 15 8"></polyline>
            </svg>
            <div class="ms-3 text-sm font-normal"><?= session()->getFlashdata('update'); ?></div>
        </div>
        <?php endif; ?>
        <!---stats-->
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2" bis_skin_checked="1">
            <!--edit form-->
            <div class="p-10 bg-second shadow-lg  rounded-2xl" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <h1 class="font-bold">Edit Profile</h1>
                    <form action="/edit" method="post" class="mt-5 d-flex align-items-center justify-center">
                        <?= csrf_field(); ?>
                        <input type="text" name="id" value="<?= session('id') ?>" hidden>
                        <div class="relative z-0 w-full group mb-5">
                            <label for="email" class="">Email</label>
                            <input type="email" name="email" id="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                                placeholder=" " value="<?= session('email') ?>" />
                        </div>

                        <div class="relative z-0 w-full group mb-5">
                            <label for="nama" class="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                                placeholder="" value="<?= session('nama_lengkap') ?>" />
                        </div>

                        <div class="relative z-0 w-full group mb-5">
                            <label for="password" class="">Password</label>
                            <input type="password" name="password" id="password"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                                placeholder=" " value="<?= session('password') ?>" />
                        </div>

                        <div class="relative z-0 w-full group mb-5">
                            <label for="no_telp" class="">No Telp</label>
                            <input type="number" name="no_telp" id="no_telp"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                                placeholder=" " value="<?= session('no_telp') ?>" />
                        </div>
                        <button type="submit"
                            class="text-sm text-center md:text-base font-semibold text-second bg-primary py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out w-full">Update</button>
                    </form>
                    <a href="/hapus/<?= session('id') ?>"
                        class="text-sm text-center md:text-base font-semibold text-second bg-red-600 py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out block mt-8">Hapus</a>
                </div>
            </div>
            <!--elements-->
            <div class="flex flex-col space-y-4" bis_skin_checked="1">
                <!-- elements 1 -->
                <?php foreach ($tr as $key => $value) :?>
                <div class="flex flex-col p-4 bg-second shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105"
                    bis_skin_checked="1">
                    <div class="flex items-center justify-between" bis_skin_checked="1">
                        <div class="flex items-center mr-auto" bis_skin_checked="1">
                            <div class="inline-flex w-auto" bis_skin_checked="1">
                                <img src="/img/<?= $value->foto; ?>" alt="maharoni" class=" relative w-20 ">
                            </div>

                            <div class="flex flex-col ml-3" bis_skin_checked="1">
                                <div class="leading-none text-slate-950 font-bold" bis_skin_checked="1">
                                    <?= $value->nama; ?></div>
                                <p class="text-sm text-gray-500 font-bold leading-none mt-2"><?= $value->status; ?></p>
                                <p class="text-sm text-gray-500 leading-none mt-2"><?= $value->jumlah; ?> Pcs</p>
                                <p class="text-sm text-gray-500 leading-none mt-2">Rp <?= $value->total; ?></p>
                                <p class="text-sm text-gray-500 leading-none mt-2"><?= $value->jasa_kirim; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>