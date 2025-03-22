<div x-cloak x-data="{ show: false}" class="flex items-center gap-1 md:gap-4 ">
    <p class="text-xs md:text-base"><?php echo e($user->name); ?></p>
    <div class="relative">
        <img
            @click="show = !show"
            src="<?php echo e(asset("storage/". $user->profile_pic)); ?>"
            alt="profile picture"
            class="w-6 h-6 md:h-10 md:w-10 rounded-full cursor-pointer"
        />
        
        <div
            x-show="show"
            class="bg-white-light absolute top-10 md:top-14 right-0 z-10 w-60 md:w-72 rounded-md border-2 border-solid border-black p-4 shadow-md"
        >
            <p class="font-poppins text-sm md:text-base my-3 text-center text-gray-400 italic"><?php echo e($user->email); ?></p>
            <ul class="font-poppins flex flex-col gap-1 text-sm md:text-base">
                <li>
                    <a
                        href="<?php echo e(route("dashboard")); ?>"
                        class="group flex items-center gap-2 md:gap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/house.svg"
                            alt="home"
                            class="w-5 md:w-6 transition duration-300 group-hover:invert-100 group-hover:transition group-hover:duration-500"
                        />
                        <span class="group-hover:text-divider italic">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="<?php echo e(route('user.profile')); ?>"
                        class="group flex items-center gap-2 md:Jgap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/people.svg"
                            alt="people"
                            class="w-5 md:w-6 transition-all group-hover:invert-100"
                        />
                        <span class="group-hover:text-divider italic">
                            Profile
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="<?php echo e(route('logout')); ?>"
                        class="group flex items-center gap-2 md:gap-4 rounded-md p-2 transition duration-300 hover:bg-gray-500 hover:transition hover:duration-500"
                    >
                        <img
                            src="/asset/door.svg"
                            alt="door"
                            class="w-5 md:w-6 group-hover:invert-100"
                        />
                        <span class="group-hover:text-divider italic">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/livewire/user-navbar.blade.php ENDPATH**/ ?>