<x-admin-layout title="Dashboard">
    <div class="flex flex-col gap-4 sm:flex-row">
        <div class="flex-grow">
            <x-card class="grid grid-cols-3 gap-2 text-center md:gap-4">
                <div
                    class="font-poppins flex flex-col items-center justify-center border border-gray-400 p-2 md:p-4"
                >
                    <h1
                        class="text-sm text-gray-500 md:text-lg dark:text-gray-300"
                    >
                        Total User
                    </h1>
                    <p class="my-2 text-xl md:text-2xl dark:text-gray-200">
                        {{ $users->count() }}
                    </p>
                    <a
                        href="{{ route("admin.users") }}"
                        class="text-primary text-xs"
                    >
                        Visit User Page
                    </a>
                </div>
                <div
                    class="font-poppins flex flex-col items-center justify-center border border-gray-400 p-2 md:p-4"
                >
                    <h1
                        class="text-sm text-gray-500 md:text-lg dark:text-gray-300"
                    >
                        Total Kriteria
                    </h1>
                    <p class="my-2 text-xl md:text-2xl dark:text-gray-200">
                        {{ $kriteriasCount }}
                    </p>
                    <a
                        href="{{ route("admin.kriteria") }}"
                        class="text-primary text-xs"
                    >
                        Visit Kriteria Page
                    </a>
                </div>
                <div
                    class="font-poppins flex flex-col items-center justify-center border border-gray-400 p-2 md:p-4"
                >
                    <h1
                        class="text-sm text-gray-500 md:text-lg dark:text-gray-300"
                    >
                        Total Alternative
                    </h1>
                    <p class="my-2 text-xl md:text-2xl dark:text-gray-200">
                        {{ $alternativesCount }}
                    </p>
                    <a
                        href="{{ route("admin.alternative") }}"
                        class="text-primary text-xs"
                    >
                        Visit Alternative Page
                    </a>
                </div>
            </x-card>
            <x-card class="my-2 aspect-video w-full">
                <canvas
                    id="UserRegistration"
                    width="200px"
                    data-user-registration-data="{{ json_encode($userRegistrationData) }}"
                ></canvas>
            </x-card>
        </div>
        <div>
            <x-card class="py-8">
                <h2 class="text-primary font-bold">
                    Program studi paling Populer
                </h2>

                <div class="my-2">
                    @foreach ($presentaseProgramStudi as $presentase)
                        <x-popular-study-program-card
                            :programStudy="$presentase['programStudi']"
                            :percentage="$presentase['presentase'] . '%'"
                        />
                    @endforeach
                </div>
            </x-card>

            <x-card class="my-4">
                <canvas
                    id="TotalUserChart"
                    data-user-distribution="{{ json_encode($distribution) }}"
                ></canvas>
            </x-card>
        </div>
    </div>
    @vite("resources/js/chart.js")
</x-admin-layout>
