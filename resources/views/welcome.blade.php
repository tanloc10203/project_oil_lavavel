<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    {{-- HEADER --}}
    <header
        class="max-w-full w-[1140px] mx-auto px-5 py-[16px] lg:py-[40px] grid gap-y-4 grid-cols-1 lg:grid-cols-4 place-items-center  transition-all">
        <h3 class="font-semibold lg:w-full">AR-SHAKIR</h3>

        <nav class="col-span-2 w-full hidden lg:flex justify-center">
            <div before="/" class="after:content-[attr(before)]">
                <a href="" class=" hover:text-main transition-colors px-8 text-lg font-[500] text-black">Home</a>
            </div>
            <div before="/" class="after:content-[attr(before)]">
                <a href=""
                    class="hover:text-main transition-colors text-lg px-8 font-[500] text-black">Products</a>
            </div>
            <div before="/" class="after:content-[attr(before)]">
                <a href="" class="hover:text-main transition-colors text-lg px-8 font-[500] text-black">About
                    Us</a>
            </div>
            <div before="/" class="after:content-[attr(before)] last:after:content-[''] ">
                <a href=""
                    class="hover:text-main transition-colors text-lg px-8 font-[500] text-black">Contact</a>
            </div>
        </nav>

        <div class="text-right lg:place-self-end flex items-center justify-between">
            <a href="#"
                class="block text-black lg:hover:text-main lg:hover:border-main transition-colors outline-none px-6 py-2 border rounded-md border-black capitalize font-[500]">
                Sign in
            </a>
            <a href="#" class="bg-[#000] group p-[9px] hover:bg-main transition-colors rounded-md block ml-4">
                <div
                    class="flex p-1 w-[25px] group-hover:text-main transition-colors text-black h-[25px] justify-center items-center bg-[#fff] rounded-full">
                    <ion-icon name="bag"></ion-icon>
                </div>
            </a>
        </div>
    </header>
    {{-- END HEADER --}}

    {{-- BANNER --}}
    <section class="max-w-full w-[1140px] px-5 mx-auto grid grid-cols-1 lg:grid-cols-2 mt-14">
        <div class="text-left p-4 lg:p-0">
            <h1 class="text-5xl text-center lg:text-left lg:text-8xl font-semibold">Cinnamon Essential Oil</h1>

            <p class="my-10 text-[#767676] font-medium text-base lg:text-[17px] text-justify lg:text-left">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, eos nihil porro, facilis quaerat
                cupiditate nam officiis officia laboriosam rerum suscipit adipisci possimus esse id dolor a, nulla magni
                iure.
            </p>

            <div class="flex gap-x-12 flex-col lg:flex-row">
                <a href="#"
                    class="inline-block text-center lg:hover:bg-main transition-colors ease-in-out outline-none px-[34px] py-4 text-2xl rounded-md uppercase font-[500] bg-black text-white">
                    Explore now
                </a>
                <div class="flex justify-center items-center mt-4 lg:mt-0">
                    <button
                        class="w-[61px] h-[61px] rounded-full shadow-3xl flex justify-center items-center text-main mr-5">
                        <ion-icon name="play" class="text-2xl"></ion-icon>
                    </button>
                    <p class="text-main capitalize font-medium text-lg">How to buy</p>
                </div>
            </div>

            <div class="mt-10 lg:mt-[100px] flex flex-col lg:flex-row">
                <div class="lg:mr-[30px] text-center">
                    <ion-icon name="chatbox-ellipses" class="text-7xl text-main"></ion-icon>
                </div>
                <p class="text-[#888888] text-base lg:text-[17px] text-justify lg:text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At velit dolore
                    ducimus quibusdam sed rem
                    quis. Tenetur, exercitationem in. Consectetur ad veritatis, fugiat ipsam maxime sunt. Cupiditate
                    rerum possimus aspernatur?
                </p>
            </div>
        </div>
        <div class="relative">
            <img src="{{ asset('storage/images/banner.png') }}" class="border-none w-full object-cover h-auto"
                alt="">

            <div class="absolute bg-transparent rounded-md top-[35%] backdrop-blur-lg right-10">
                <div class="flex p-3 relative ">
                    <div class="bg-main text-4xl w-14 h-14 rounded-md flex justify-center items-center text-white">
                        <ion-icon name="bus-outline"></ion-icon>
                    </div>
                    <div class="ml-7 pr-5">
                        <div class="flex items-center gap-3">
                            <div class="h-4 w-4 rounded-full bg-main"></div>
                            <span class="font-medium">12 hours</span>
                        </div>
                        <span class="font-semibold text-xl">Fast Delivery</span>
                    </div>
                    <div
                        class="text-6xl text-[#ffc42d] bg-[#a36a21] w-[60px] h-[60px] rounded-full flex justify-center items-center absolute top-[-30px] right-[-30px]">
                        <ion-icon name="happy"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
