<div class="my-4 grid grid-cols-1 items-center gap-4 xl:grid-cols-2">
    <div class="order-2 xl:order-1">
        <h2 class="text-md text-center md:text-2xl">
            <p class="dark:text-gray-200">
                Oke,
                <span class="text-primary">Kami</span>
                telah menganalisis nya
            </p>
            <p class="dark:text-gray-200">
                Rekomendasi
                <span class="text-primary">Program Studi</span>
                untuk kamu yaitu !
            </p>
        </h2>

        <div
            class="bg-secondary mx-auto my-4 flex w-max items-center gap-4 rounded-xl p-4 text-black xl:p-6"
        >
            <img src="/asset/conffenti.svg" alt="conffenti" class="xl:14 w-8" />
            <p class="font-poppins text-lg xl:text-3xl">
                {{ $rekomendasi->alternative->name }}
            </p>
            <img src="/asset/conffenti.svg" alt="conffenti" class="xl:14 w-8" />
        </div>

        <div class="mt-8 flex flex-col items-center gap-4">
            <small class="block text-center dark:text-gray-200">
                Kamu Bisa Mengulagi lagi Pilhan mu !
            </small>
            <x-button
                class="bg-primary rounded-md text-white"
                wire:click="UlangiPilihan"
            >
                Ulangi Pilhan
            </x-button>
        </div>
    </div>

    <div class="order-1 xl:order-2">
        <img
            src="/asset/result.svg"
            alt="result image"
            class="mx-auto w-[50%] xl:w-[60%]"
        />
    </div>
</div>
