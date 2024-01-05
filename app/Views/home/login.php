    <?= $this->extend('layout/layout'); ?>

    <?= $this->section('content'); ?>

    <!-- Form -->
    <section class="pt-24 container">
        <div class="card flex w-full rounded-2xl shadow-lg bg-second md:w-4/5 mx-auto relative">
            <div
                class="loginimg md:w-[55%] md:z-10 absolute top-1/2 -translate-y-1/2 right-0 mr-7 loginimg transition duration-1000 ease-in-out hidden xl:block">
                <img src="<?=base_url();?>/img/imglogin 2.jpg" alt="" class="w-full rounded-xl" />
            </div>
            <div class="login w-full p-10 md:px-24 transition duration-1000 ease-in-out xl:block">
                <img src="<?=base_url();?>/img/Logo.png" alt="" class="w-24 md:w-28 mx-auto" />
                <h1 class="text-center text-2xl font-bold mb-1">Welcome Back</h1>
                <h1 class="text-center text-slate-500 font-light text-base">Not Registered Yet? <button id="signup"
                        class="text-slate-950 font-medium">Sign Up</button></h1>

                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="flex mt-3 items-center p-4 mb-4 text-sm text-red-600 rounded-lg border border-red-600"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium"><?= session()->getFlashdata('pesan'); ?></span>
                    </div>
                </div>
                <?php endif ?>

                <?php if (session()->getFlashdata('create')) : ?>
                <div class="flex mt-3 items-center p-4 mb-4 text-sm text-green-800 rounded-lg border-green-800 border"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium"><?= session()->getFlashdata('create'); ?></span>
                    </div>
                </div>
                <?php endif ?>
                <form action="/login" method="post" class="mt-5 flex flex-col items-center">
                    <?= csrf_field(); ?>
                    <div class="relative z-0 w-full group mb-5">
                        <input type="email" name="email" id="email"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                            placeholder=" " required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>

                    <div class="relative z-0 w-full group mb-5">
                        <input type="password" name="password" id="password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                            placeholder=" " required />
                        <label for="password"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>

                    <button type="submit"
                        class="text-sm text-center md:text-base font-semibold text-second bg-primary py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out w-4/5">Login</button>
                </form>
                <h1 class="mt-4 text-center font-light text-slate-500 text-sm">Forgot Password? <a href=""
                        class="text-slate-900 font-normal">Click here</a></h1>
            </div>



            <!-- Signup -->
            <div class="signup w-full p-10 md:px-24 transition duration-1000 ease-in-out xl:block hidden skiri">
                <h1 class="text-center text-slate-500 font-light text-base">Already a member? <button id="signin"
                        class="text-slate-950 font-medium">Sign In</button></h1>

                <form action="/regist" class="mt-5 flex flex-col items-center" method="post">
                    <?= csrf_field(); ?>
                    <div class="relative z-0 w-full group mb-5">
                        <input type="text" name="nama" id="usn"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                            placeholder=" " required />
                        <label for="usn"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>

                    <div class="relative z-0 w-full group mb-5">
                        <input type="email" name="email" id="email"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                            placeholder="" required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>

                    <div class="relative z-0 w-full group mb-5">
                        <input type="password" name="password" id="password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-500 peer"
                            placeholder=" " required />
                        <label for="password"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <button
                        class="text-sm md:text-base font-semibold text-second bg-primary py-3 px-6 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-200 ease-in-out w-4/5">Signup</button>
                    <h1 class="mt-4 text-center font-light text-slate-500 text-sm w-10/12">By Signin up, i agree to
                        Terms and Conditions and Privacy Policy</h1>
                </form>
            </div>
        </div>
    </section>
    <?= $this->endSection(); ?>