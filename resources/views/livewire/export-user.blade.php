<div x-data="{ show: false }" class="relative my-2">
    <x-button
        @click="show = !show"
        @click.outside="show = false"
        class="bg-secondary flex items-center gap-2 text-xs font-bold text-black duration-300 hover:bg-amber-400 md:text-sm"
    >
        Export / Cetak
        <svg
            :class="show ? '-rotate-90' : '' "
            class="h-4 w-4 transition duration-300"
            width="800px"
            height="800px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                fill="currentColor"
            />
        </svg>
    </x-button>

    <div
        x-clock
        x-show="show"
        class="border-secondary absolute bottom-0 left-[160px] flex flex-col gap-1 rounded-lg border-2 bg-white p-1 md:left-[190px]"
    >
        <x-button
            @click="$wire.exportAllUser()"
            class="bg-secondary text-xs text-black"
        >
            Export Semua User
        </x-button>
        <x-button
            @click="$wire.exportUserOnlyThisYear()"
            class="bg-secondary text-xs text-black"
        >
            Export User Tahun ini
        </x-button>
        <x-button
            @click="$wire.exortUserOnlyHasChoise()"
            class="bg-secondary text-xs text-black"
        >
            Export User yang Sudah pilih
        </x-button>
    </div>
</div>
