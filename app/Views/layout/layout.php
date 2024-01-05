<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?=base_url();?>//css/app.css" rel="stylesheet" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 230px;
    }
    </style>

    <title>Maharoni | <?= $title; ?></title>
</head>

<body class="opacity-0 transition duration-300 scroll-smooth" onload="document.body.style.opacity='1'">
    <!-- Header -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="/" class="block"><img src="./img/Logo.png" alt="" class="w-16 py-4" /></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" class="block absolute right-4 md:hidden">
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 origin-top-left"></span>
                        <span class="w-[23px] h-[2px] my-2 block bg-white transition duration-300"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-second shadow-lg rounded-lg max-w-[250px] w-full right-4 top-20 transition duration-300 md:block md:static md:bg-transparent md:max-w-full md:shadow-none md:rounded-none">
                        <ul class="block md:flex">
                            <li class="group"><a href="/"
                                    class="text-base md:text-second text-primary py-2 mx-8 group-hover:opacity-50 flex md:font-medium">Home</a>
                            </li>
                            <li class="group"><a href="/products"
                                    class="text-base md:text-second text-primary py-2 mx-8 group-hover:opacity-50 flex md:font-medium">Product</a>
                            </li>
                            <li class="group"><a href="/about"
                                    class="text-base md:text-second text-primary py-2 mx-8 group-hover:opacity-50 flex md:font-medium">About</a>
                            </li>
                            <?php if(session()->get('log')==TRUE) : ?>
                            <li class="group">
                                <a href="/profile"
                                    class="text-base md:text-second text-primary py-2 mx-8 group-hover:opacity-50 flex md:font-medium w-">
                                    <img src="https://api.duniagames.co.id/api/content/upload/file/8143860661599124172.jpg"
                                        alt="" srcset="" class="w-10 rounded-full">
                                </a>
                            </li>
                            <?php else : ?>
                            <li class="group"><a href="/login"
                                    class="text-base md:text-second text-primary py-2 mx-8 group-hover:opacity-50 flex md:font-medium">Login</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <footer class="text-center text-white text-sm container mb-2 mt-7">&copy; Copyright 2023 Maharoni. All Rights
        Reserved.
    </footer>

    <!-- My JS -->
    <script src="<?=base_url();?>//js/script.js"></script>
    <script src="<?=base_url();?>//js/checkout.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
    });

    var count = 0;
    var countDisplay = document.getElementById("jum_prod");

    function tambah() {
        count++;
        updateDisplay();
    }

    function kurang() {
        if (count > 0) {
            count--;
            updateDisplay();
        }
    }

    function updateDisplay() {
        countDisplay.value = count;
        totalHarga();
    }

    function totalHarga() {
        let jp = parseInt(document.getElementById('jum_prod').value) || 0;
        subtot = jp * 10000;
        let peng = parseInt(document.getElementById('pengiriman').value = 8000);
        let sb = document.getElementById('sub_prod').value = subtot;
        total = subtot + peng;
        document.getElementById("total").value = total;
    }
    </script>

</body>

</html>