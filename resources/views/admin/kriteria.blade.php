<x-admin-layout title="Kriteria" breadcrumbs="kriteria">
    <x-card class="mx-auto max-w-5xl p-3!">
        <div class="flex items-center gap-4">
            <div class="bg-primary w-max rounded-xl p-4">
                <img src="/asset/kriteria.svg" alt="user" class="w-6" />
            </div>
            <p>Kriteria</p>
        </div>

        <a
            href="{{ route("admin.kriteria.create") }}"
            class="my-4 inline-block"
        >
            <x-button class="bg-primary text-sm text-white md:text-base">
                Buat Kriteria
            </x-button>
        </a>

        <div
            x-data="{
                modal: {
                    show: false,
                },
            }"
            class="flex flex-col gap-4 p-2 md:p-8"
        >
            {{-- kriteria --}}
            @for ($i = 1; $i < 10; $i++)
                <div class="relative">
                    <div
                        class="flex flex-col-reverse items-center justify-between gap-2 md:flex-row"
                    >
                        <div class="">
                            <p
                                class="border-primary text-primary inline-block rounded-full border p-2 text-xs"
                            >
                                C1
                            </p>
                            <p
                                class="border-primary text-primary inline-block rounded-full border p-2 text-xs"
                            >
                                Benefit
                            </p>
                            <p
                                class="border-dark-primary text-dark-primary inline-block rounded-full border p-2 text-xs"
                            >
                                Bobot : 40
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <a
                                wire:navigate
                                href="{{ route("admin.kriteria.edit", $i) }}"
                            >
                                <x-button
                                    class="group bg-secondary flex items-center gap-2 px-2! text-sm text-black duration-300 hover:bg-amber-500"
                                >
                                    Edit
                                    <svg
                                        class="w-4"
                                        width="20"
                                        height="19.991"
                                        viewBox="0 0 20 19.991"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g>
                                            <rect width="20" height="19.991" />
                                            <g
                                                id="Complete"
                                                transform="translate(1.667 1.666)"
                                            >
                                                <g id="edit">
                                                    <g id="Group">
                                                        <path
                                                            id="Path"
                                                            d="M15 9.99527C15 9.99527 15 13.327 15 13.327C15 14.2471 14.2538 14.9929 13.3333 14.9929C13.3333 14.9929 1.66667 14.9929 1.66667 14.9929C0.746192 14.9929 0 14.2471 0 13.327C0 13.327 0 1.66588 0 1.66588C0 0.745839 0.746192 0 1.66667 0C1.66667 0 5 0 5 0"
                                                            fill="none"
                                                            stroke-width="2"
                                                            stroke="#000000"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            transform="translate(0 1.666)"
                                                        />
                                                        <path
                                                            id="Path"
                                                            d="M3.75 11.4946L11.6667 3.49834L8.16667 0L0.25 7.91292L0 11.6611L3.75 11.4946L3.75 11.4946Z"
                                                            fill="none"
                                                            stroke-width="2"
                                                            stroke="#000000"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            transform="translate(5 0)"
                                                        />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </x-button>
                            </a>
                            <x-button
                                @click="$dispatch('modaldelete-open' )"
                                class="bg-red-500 p-1! duration-300 hover:bg-red-700"
                            >
                                <svg
                                    class="w-6"
                                    width="23"
                                    height="22.988"
                                    viewBox="0 0 23 22.988"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g>
                                        <rect width="23" height="22.988" />
                                        <path
                                            id="trash"
                                            d="M16.5312 5.74733C16.5312 5.74733 2.15625 5.74733 2.15625 5.74733C1.7595 5.74733 1.4375 5.4262 1.4375 5.02894C1.4375 4.63238 1.7595 4.31055 2.15625 4.31055C2.15625 4.31055 16.5312 4.31055 16.5312 4.31055C16.928 4.31055 17.25 4.63238 17.25 5.02894C17.25 5.4262 16.928 5.74733 16.5312 5.74733C16.5312 5.74733 16.5312 5.74733 16.5312 5.74733L16.5312 5.74733ZM15.8125 20.1151C15.8125 20.9082 15.1685 21.5519 14.375 21.5519C14.375 21.5519 4.3125 21.5519 4.3125 21.5519C3.519 21.5519 2.875 20.9082 2.875 20.1151C2.875 20.1151 2.875 7.18408 2.875 7.18408L15.8125 7.18408L15.8125 20.1151L15.8125 20.1151C15.8125 20.1151 15.8125 20.1151 15.8125 20.1151ZM7.1875 2.1554C7.1875 1.75814 7.5095 1.43701 7.90625 1.43701C7.90625 1.43701 10.7812 1.43701 10.7812 1.43701C11.178 1.43701 11.5 1.75814 11.5 2.1554C11.5 2.1554 11.5 2.87379 11.5 2.87379L7.1875 2.87379L7.1875 2.1554L7.1875 2.1554C7.1875 2.1554 7.1875 2.1554 7.1875 2.1554ZM17.25 2.87356L12.9375 2.87356C12.9375 2.87356 12.9375 1.43678 12.9375 1.43678C12.9375 0.643675 12.2935 0 11.5 0C11.5 0 7.1875 0 7.1875 0C6.394 0 5.75 0.643675 5.75 1.43678C5.75 1.43678 5.75 2.87356 5.75 2.87356C5.75 2.87356 1.4375 2.87356 1.4375 2.87356C0.643997 2.87356 0 3.51724 0 4.31034C0 4.31034 0 5.74712 0 5.74712C0 6.54023 0.643997 7.1839 1.4375 7.1839C1.4375 7.1839 1.4375 20.1149 1.4375 20.1149C1.4375 21.7019 2.72477 22.9885 4.3125 22.9885C4.3125 22.9885 14.375 22.9885 14.375 22.9885C15.9627 22.9885 17.25 21.7019 17.25 20.1149C17.25 20.1149 17.25 7.1839 17.25 7.1839C18.0435 7.1839 18.6875 6.54023 18.6875 5.74712C18.6875 5.74712 18.6875 4.31034 18.6875 4.31034C18.6875 3.51724 18.0435 2.87356 17.25 2.87356C17.25 2.87356 17.25 2.87356 17.25 2.87356L17.25 2.87356ZM9.34375 20.1151C9.7405 20.1151 10.0625 19.794 10.0625 19.3967C10.0625 19.3967 10.0625 10.776 10.0625 10.776C10.0625 10.3795 9.7405 10.0576 9.34375 10.0576C8.947 10.0576 8.625 10.3795 8.625 10.776C8.625 10.776 8.625 19.3967 8.625 19.3967C8.625 19.794 8.947 20.1151 9.34375 20.1151C9.34375 20.1151 9.34375 20.1151 9.34375 20.1151C9.34375 20.1151 9.34375 20.1151 9.34375 20.1151ZM5.75 20.1151C6.14675 20.1151 6.46875 19.794 6.46875 19.3967C6.46875 19.3967 6.46875 10.776 6.46875 10.776C6.46875 10.3795 6.14675 10.0576 5.75 10.0576C5.35325 10.0576 5.03125 10.3795 5.03125 10.776C5.03125 10.776 5.03125 19.3967 5.03125 19.3967C5.03125 19.794 5.35325 20.1151 5.75 20.1151C5.75 20.1151 5.75 20.1151 5.75 20.1151C5.75 20.1151 5.75 20.1151 5.75 20.1151ZM12.9375 20.1151C13.3343 20.1151 13.6562 19.794 13.6562 19.3967C13.6562 19.3967 13.6562 10.776 13.6562 10.776C13.6562 10.3795 13.3343 10.0576 12.9375 10.0576C12.5407 10.0576 12.2188 10.3795 12.2188 10.776C12.2188 10.776 12.2188 19.3967 12.2188 19.3967C12.2188 19.794 12.5407 20.1151 12.9375 20.1151C12.9375 20.1151 12.9375 20.1151 12.9375 20.1151C12.9375 20.1151 12.9375 20.1151 12.9375 20.1151Z"
                                            fill="#ECECEC"
                                            fill-rule="evenodd"
                                            transform="translate(2.156 0)"
                                        />
                                    </g>
                                </svg>
                            </x-button>
                        </div>
                    </div>
                    <x-question-head :number="$i" />
                    <div class="my-6">
                        <livewire:program-studi-answer
                            programStudi="Sistem informasi"
                        />
                        <livewire:program-studi-answer
                            programStudi="Sistem informasi"
                        />
                        <livewire:program-studi-answer
                            programStudi="Sistem informasi"
                        />
                    </div>
                </div>
                <hr class="text-divider my-4" />
            @endfor

            <x-modal-dialog
                x-data="{
                    show : false
                }"
                x-show="show"
                x-on:modaldelete-open.window="show = true"
                x-on:modaldelete-close.window="show = false"
            >
                <h2 class="text-center text-lg md:text-2xl">
                    Yakin hapus Kriteria ini ?
                </h2>
                <div class="mt-6 flex justify-center gap-4">
                    <x-button
                        class="bg-red-500 text-sm text-white md:text-base"
                    >
                        Ya
                    </x-button>
                    <x-button
                        @click="show = false"
                        class="bg-primary text-sm text-white md:text-base"
                    >
                        Tidak
                    </x-button>
                </div>
            </x-modal-dialog>
        </div>
    </x-card>
</x-admin-layout>
