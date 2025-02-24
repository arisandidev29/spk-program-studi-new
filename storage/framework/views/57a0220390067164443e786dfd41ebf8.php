<div x-data="{show : false }"  class="flex items-center gap-4">
    <p >Arisandi</p>
    <div  class="relative">
        <img @click="show = !show" @mouseover="show = !show"  src="/asset/exampe user.png" alt="profile picute" class="w-10 h-10 rounded-full">
        <div
            x-show="show"
            class="absolute right-0 top-14 w-72 bg-white-light p-4 border-2 border-black border-solid rounded-md shadow-md z-10">
            <p class="my-3 text-center text-gray-400 font-poppins italic ">exampleuser@mail.com</p>
            <ul class="font-poppins flex flex-col gap-1">
                <li><a href="" class="group flex items-center gap-4 hover:bg-gray-500 hover:transition hover:duration-500 transition duration-300 p-2 rounded-md">
                        <img src="/asset/house.svg" alt="home" class="w-6 group-hover:invert-100 group-hover:transition group-hover:duration-500 transition duration-300">
                        <span class="italic group-hover:text-divider   ">Dashboard</span>
                    </a></li>
                <li><a href="" class=" group flex items-center gap-4 hover:bg-gray-500  hover:transition hover:duration-500 transition duration-300  p-2 rounded-md">
                        <img src="/asset/people.svg" alt="people" class="w-6 group-hover:invert-100 transition-all">
                        <span class="italic group-hover:text-divider">Profile</span>
                    </a></li>
                <li><a href="" class="group flex items-center gap-4 hover:bg-gray-500 hover:transition hover:duration-500 transition duration-300  p-2 rounded-md">
                        <img src="/asset/door.svg" alt="door" class="w-6 group-hover:invert-100">
                        <span class="italic group-hover:text-divider">Logout</span>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /media/arisandi/New Volume/coding/skripsi/spk-program-studi/resources/views/components/user-navbar.blade.php ENDPATH**/ ?>