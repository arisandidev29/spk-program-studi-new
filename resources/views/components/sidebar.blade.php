<div
    x-cloak
    x-show="isMobile ? sidebar && isMobile : true"
    x-transition:enter="transition duration-300 ease-in-out"
    x-transition:enter-start="w-0 opacity-0"
    x-transition:enter-end="w-[80vw] opacity-100"
    x-transition:leave="transition duration-300 ease-in-out"
    x-transition:leave-start="w-[80vw] opacity-100"
    x-transition:leave-end="w-0 opacity-0"
    class="bg-dark-primary fixed z-50 flex min-h-screen w-[80vw] flex-col p-4 md:relative md:right-0 md:z-0 md:w-80"
>
    <img src="/asset/logo.png" alt="logo" class="mx-auto" />
    <ul class="mx-auto mt-8 flex w-[80%] flex-col gap-2">
        @foreach (config("custome.sidebar") as $list)
            <li>
                <a
                    href="{{ url($list["route"]) }}"
                    @class([
                        "group flex w-full items-center gap-4 rounded-lg p-3 duration-300 hover:bg-white",
                        "text-primary bg-white" => request()->routeIs($list["active_route"]),
                    ])
                >
                    <x-dynamic-component :component="$list['icon']"  class="{{request()->routeIs($list['active_route']) ? 'text-primary! ' : ''}}"/>
                    <p
                        @class([
                            "font-poppins text-md group-hover:text-primary font-bold text-white duration-300",
                            "text-primary!" => request()->routeIs($list["active_route"]),
                        ])
                    >
                        {{ $list["name"] }}
                    </p>
                </a>
            </li>
        @endforeach
    </ul>

    <p class="text-divider font-poppins mt-auto text-center">
        Service from
        <a href="" class="font-bold italic underline">Stmik-TM</a>
        <img src="/asset/stmik logo.png" alt="stmik" class="inline h-8 w-8" />
    </p>

    {{-- toggle button --}}
</div>
<x-button
    x-on:click="sidebar = !sidebar"
    ::class="sidebar ? 'left-[79vw] rotate-180' : 'left-0'"
    class="bg-dark-primary fixed top-36 z-50 flex items-center justify-center p-0! text-white md:hidden"
>
    <svg
        class="h-10 w-10"
        viewBox="0 0 26 31"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <g>
            <rect width="26" height="31" />
            <path
                id="Path"
                d="M0.321216 16.6667C0.744269 17.1711 1.43024 17.1711 1.85328 16.6667C1.85328 16.6667 7.14796 10.3475 7.14796 10.3475C7.99339 9.33855 7.99307 7.70356 7.14731 6.69503C7.14731 6.69503 1.84938 0.378316 1.84938 0.378316C1.42634 -0.126105 0.740369 -0.126105 0.317306 0.378316C-0.105769 0.882751 -0.105769 1.70058 0.317306 2.20502C0.317306 2.20502 4.85173 7.61147 4.85173 7.61147C5.27488 8.11586 5.27488 8.93375 4.85173 9.43814C4.85173 9.43814 0.321216 14.84 0.321216 14.84C-0.101858 15.3444 -0.101858 16.1622 0.321216 16.6667C0.321216 16.6667 0.321216 16.6667 0.321216 16.6667Z"
                fill="#FFFFFF"
                transform="translate(6.198 6.961)"
            />
        </g>
    </svg>
</x-button>
