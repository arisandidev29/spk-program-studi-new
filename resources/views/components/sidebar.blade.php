<div class="bg-dark-primary flex min-h-screen flex-col p-4">
    <img src="/asset/logo.png" alt="logo" class="mx-auto" />
    <ul class="mx-auto mt-8 flex w-[80%] flex-col gap-2">
        @foreach (config("custome.sidebar") as $list)
            <li>
                <a
                    href="{{ url($list["route"]) }}"
                    class="group flex w-full items-center gap-4 rounded-lg p-3 duration-300 hover:bg-white"
                >
                    {!! $list["icon"] !!}
                    <p
                        class="font-poppins text-md group-hover:text-primary font-bold text-white duration-300"
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
</div>
