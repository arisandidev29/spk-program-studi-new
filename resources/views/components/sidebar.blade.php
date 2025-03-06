<div class="flex flex-col bg-dark-primary min-h-screen p-4 ">
    <img src="/asset/logo.png" alt="logo" class=" mx-auto">
    <ul class="flex flex-col gap-2 mt-8 w-[80%] mx-auto">
        @foreach (config('custome.sidebar') as $list)
            <li >
              <a href="{{url($list['route'])}}" class="group flex gap-4 items-center duration-300 hover:bg-white p-3 rounded-lg w-full ">
                    {!! $list['icon']!!}
                    <p class="font-poppins text-md text-white font-bold group-hover:text-primary duration-300">{{ $list['name'] }}</p>
                </a>
            </li>
        @endforeach
    </ul>

    <p class="mt-auto text-center text-divider font-poppins">Service from <a href="" class="underline italic font-bold">Stmik-TM</a> 
        <img src="/asset/stmik logo.png" alt="stmik" class="w-8 h-8 inline">
    </p>
</div>
