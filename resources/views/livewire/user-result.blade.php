<div class="grid grid-cols-1   xl:grid-cols-2 gap-4 items-center my-4">
    <div class="order-2 xl:order-1">
        <h2 class="text-center  text-md  md:text-2xl">
            <p>
                Oke,
                <span class="text-primary">Kami</span>
                telah menganalisis nya
            </p>
            <p>
                Rekomendasi
                <span class="text-primary">Program Studi</span>
                untuk kamu yaitu !
            </p>
        </h2>

        <div class="bg-secondary text-black p-4 xl:p-6 rounded-xl flex w-max mx-auto my-4 items-center gap-4">
            <img src="/asset/conffenti.svg" alt="conffenti" class="w-8 xl:14">
            <p class=" text-lg xl:text-3xl font-poppins">{{$rekomendasi->alternative->name}}</p>
            <img src="/asset/conffenti.svg" alt="conffenti" class="w-8 xl:14">
        </div>

        <div class="flex flex-col gap-4 items-center mt-8">
            <small class="text-center block">Kamu Bisa Mengulagi lagi Pilhan mu !</small>
            <x-button class="bg-primary text-white rounded-md " wire:click='UlangiPilihan'>
                Ulangi Pilhan
            </x-button>
        </div>
    </div>

    <div class="order-1 xl:order-2">
        <img src="/asset/result.svg" alt="result image" class=" w-[50%] xl:w-[60%] mx-auto" />
    </div>
</div>
