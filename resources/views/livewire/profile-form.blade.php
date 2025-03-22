<x-card class="mx-auto max-w-5xl">
    <h1
        class="font-poppins text-primary my-4 text-center text-2xl md:text-left md:text-3xl"
    >
        Profile {{ $name }}
    </h1>
    <p
        x-data="{ show: false }"
        x-show="show"
        x-cloak
        x-on:profile-updated.window="show = true"
        class="bg-primary my-6 rounded-xl p-2 text-center text-sm text-white md:text-base"
    >
        Profile Berhasil Di Ubah !
    </p>
    <form
        wire:submit="editProfile"
        x-data="data"
        class="my-2 grid grid-cols-1 items-center gap-8 md:grid-cols-[max-content_1fr]"
        @input-change="enableEditBtn"
    >
        <div class="relative md:w-fit">
            @error('profile_pic')
                <p class="text-red-500 text-center mt-4">{{$message}}</p>
            @enderror
            <img
                :src="profilePic"
                alt=""
                class="border-primary mx-auto aspect-square w-[60%] rounded-full border-4 border-solid object-cover md:h-64 md:w-64"
                />

            <label
                for="edit-photo"
                class="absolute right-18 bottom-2 cursor-pointer md:right-10"
            >
                <input
                    x-ref="input_photo"
                    type="file"
                    id="edit-photo"
                    class="hidden"
                    wire:model="profile_pic"
                    @change="previewImage"
                    wire:model="profile_pic"
                />
                <x-button
                    type="button"
                    @click="$refs.input_photo.click()"
                    class="bg-primary !p-2"
                >
                    <img
                        src="/asset/photo-edit.svg"
                        alt="edit photo"
                        class="w-5 md:w-8"
                    />
                </x-button>
            </label>

        </div>
        <div class="mx-auto w-[90%]">
            <x-input
                placeholder="Username"
                wire:model="name"
                error="name"
                :value="$name"
                @change="$dispatch('input-change')"
            />
            <x-input
                placeholder="Email"
                wire:model="email"
                error="email"
                :value="$email"
                @change="$dispatch('input-change')"
            />
            <x-button
                ::disabled="!edit_btn_active"
                ::class="{
                    '!bg-yellow-200 text-gray-500 !cursor-not-allowed': ! edit_btn_active,
                }"
                class="bg-secondary my-4 text-sm md:text-base"
            >
                Edit
            </x-button>
        </div>
    </form>
</x-card>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('data', () => ({
            profilePic:
                '{{ asset("storage/" . auth()->user()->profile_pic) }}',

            edit_btn_active: false,

            previewImage(event) {
                const [file] = event.target.files;
                this.enableEditBtn();
                if (file) {
                    this.profilePic = URL.createObjectURL(file);
                }
            },

            enableEditBtn() {
                console.log('open');
                this.edit_btn_active = true;
            },
        }));
    });
</script>
