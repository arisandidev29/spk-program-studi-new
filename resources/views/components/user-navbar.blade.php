<div x-cloak x-data="{ show: false }" class="flex items-center gap-4">
    <p>Arisandi</p>
    <div class="relative">
        <img
            @click="show = !show"
            @mouseover="show = !show"
            src="/asset/exampe user.png"
            alt="profile picute"
            class="h-10 w-10 rounded-full"
        />
        <div
            x-show="show"
            class="bg-white-light absolute top-14 right-0 z-10 w-72 rounded-md border-2 border-solid border-black p-4 shadow-md"
        >
            <p class="font-poppins my-3 text-center text-gray-400 italic">
                exampleuser@mail.com
            </p>
            <ul class="font-poppins flex flex-col gap-1">
                <li>
                    <a
                        href="{{ route("dashboard") }}"
                        class="group flex items-center gap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/house.svg"
                            alt="home"
                            class="w-6 transition duration-300 group-hover:invert-100 group-hover:transition group-hover:duration-500"
                        />
                        <span class="group-hover:text-divider italic">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href=""
                        class="group flex items-center gap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/people.svg"
                            alt="people"
                            class="w-6 transition-all group-hover:invert-100"
                        />
                        <span class="group-hover:text-divider italic">
                            Profile
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href=""
                        class="group flex items-center gap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/door.svg"
                            alt="door"
                            class="w-6 group-hover:invert-100"
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
