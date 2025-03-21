<x-layout>
    <div class="order-3 mt-12 grid grid-cols-1 md:grid-cols-2 items-center justify-around">
        <div class="font-poppins order-2 md:order-1">
            <h2 class=" text-lg text-center md:text-left md:text-2xl  font-bold">
                Bingung Pilih
                <span class="text-primary">Program Studi</span>
                ?
            </h2>
            <h1 class="my-4 flex justify-center md:justify-start items-center gap-4 text-2xl text-center md:text-left md:text-5xl font-bold">
                <img
                    src="/asset/logo.svg"
                    alt="logo"
                    class="inline-block w-25 md:w-38"
                />
                Jawaban nya
            </h1>

            <small class="font-roboto my-2 md:my-8 block w-[80%] mx-auto md:mx-0 text-xs text-center md:text-left md:text-sm">
                Discover your path to academic success. We help you plan your
                future by choosing the right
                <span class="text-primary">Study Program</span>
                that matches your interests and potential.
            </small>

            <a href="{{route('login')}}">
                <x-button class="bg-secondary block mx-auto md:mx-0 text-black text-xs md:text-base ">
                    Mulai Pilihan Mu
                </x-button>
            </a>

            <small class="my-4 flex items-center gap-2 justify-center md:justify-start ">
                A Product From
                <a href="" class="underline">STMIK-TM</a>
                <img src="/asset/stmik logo.png" alt="logo" class="w-8" />
            </small>
        </div>

        <div class="order-1 md:order-2">
            <img
                src="/asset/welcome-image.svg"
                alt="welcome image"
                class=" w-[50%] my-2 md:w-[70%] mx-auto"
                id="welcome-image"
            />
        </div>
    </div>
</x-layout>
