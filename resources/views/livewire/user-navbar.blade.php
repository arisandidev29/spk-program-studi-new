<div
    x-cloak
    x-data="{ show: false }"
    class="flex items-center gap-1 md:gap-4"
>
    <p class="text-xs md:text-base">{{ $user->name }}</p>
    <div class="relative">
        <img
            @click="show = !show"
            src="{{ $user->profile_pic ?  asset("storage/" . $user->profile_pic) : "/asset/default-user.svg"  }}"
            alt="profile picture"
            class="h-6 w-6 cursor-pointer rounded-full md:h-10 md:w-10"
        />

        <div
            x-show="show"
            class="bg-white-light absolute top-10 right-0 z-10 w-60 rounded-md border-2 border-solid border-black p-4 shadow-md md:top-14 md:w-72"
        >
            <p
                class="font-poppins my-3 text-center text-sm text-gray-400 italic md:text-base"
            >
                {{ $user->email }}
            </p>
            <ul class="font-poppins flex flex-col gap-1 text-sm md:text-base">
                <li>
                    <a
                        href="{{ route("dashboard") }}"
                        class="group flex items-center gap-2 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500 md:gap-4"
                    >
                        <img
                            src="/asset/house.svg"
                            alt="home"
                            class="w-5 transition duration-300 group-hover:invert-100 group-hover:transition group-hover:duration-500 md:w-6"
                        />
                        <span class="group-hover:text-divider italic">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route("user.profile") }}"
                        class="group md:Jgap-4 flex items-center gap-2 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/people.svg"
                            alt="people"
                            class="w-5 transition-all group-hover:invert-100 md:w-6"
                        />
                        <span class="group-hover:text-divider italic">
                            Profile
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route("logout") }}"
                        class="group flex items-center gap-2 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500 md:gap-4"
                    >
                        <img
                            src="/asset/door.svg"
                            alt="door"
                            class="w-5 group-hover:invert-100 md:w-6"
                        />
                        <span class="group-hover:text-divider italic">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
