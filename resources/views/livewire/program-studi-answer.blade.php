<div class="my-2">
    <div class="border border-primary px-4 py-2 rounded-lg shadow-xl text-primary mt-2">
        <p>{{$programStudi}}</p>
        @if($description)
        <p class="text-black text-sm mt-2">{{$description}}</p>
        @endif

    </div>

    <div x-data="{ selected: null }" class="flex md:w-[70%] mx-auto justify-around gap-4 mt-2">
        <x-radio-option value="1" label="1" description="sangat tertarik"   />
        <x-radio-option value="2" label="2" description="tertarik"  />
        <x-radio-option value="3" label="3" description="lumayan" />
        <x-radio-option value="4" label="4" description="tidak tertarik"  />
    </div>

    @error('selected')
    <p class="text-red-500 mt-2 font-roboto">{{$message}}</p>
    @enderror
</div>
