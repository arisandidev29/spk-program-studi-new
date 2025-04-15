<div
    x-data="{
        show: false,
        playsound() {
            const audio = new Audio('{{ asset("asset/sound.mp3") }}')
            audio.play()
        },
    }"
    x-show="show"
    x-cloak
    x-on:showmodalpdf.window="
        show = true
        playsound()
    "
    x-on:closemodalpdf.window="show = false"
    class="border-primary fixed right-5 bottom-2 flex min-w-64 items-center justify-between gap-2 rounded-md border bg-white p-2 text-sm"
>
    <p>Membuat Pdf :</p>

    @if ($isPdfUrlGenerated)
        <a href="{{ $pdfUrl }}" target="_blank">
            <p @click="show = false" class="text-primary italic underline">
                success !! dawnload Pdf
            </p>
        </a>
    @else
        {{-- loading spiner --}}
        <svg
            class="stroke-primary w-5 animate-spin"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M20.0001 12C20.0001 13.3811 19.6425 14.7386 18.9623 15.9405C18.282 17.1424 17.3022 18.1477 16.1182 18.8587C14.9341 19.5696 13.5862 19.9619 12.2056 19.9974C10.825 20.0328 9.45873 19.7103 8.23975 19.0612"
                stroke-width="3.55556"
                stroke-linecap="round"
            />
        </svg>
    @endif

    <svg
        @click="show = false"
        class="h-6 w-6 cursor-pointer fill-black"
        fill="#000000"
        width="800px"
        height="800px"
        viewBox="0 0 22 22"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="M12.1458333,9.85416667 L12.1458333,6.74047388 C12.1458333,6.4826434 11.9382041,6.28571429 11.6820804,6.28571429 L10.3179196,6.28571429 C10.0656535,6.28571429 9.85416667,6.48931709 9.85416667,6.74047388 L9.85416667,9.85416667 L6.74047388,9.85416667 C6.4826434,9.85416667 6.28571429,10.0617959 6.28571429,10.3179196 L6.28571429,11.6820804 C6.28571429,11.9343465 6.48931709,12.1458333 6.74047388,12.1458333 L9.85416667,12.1458333 L9.85416667,15.2595261 C9.85416667,15.5173566 10.0617959,15.7142857 10.3179196,15.7142857 L11.6820804,15.7142857 C11.9343465,15.7142857 12.1458333,15.5106829 12.1458333,15.2595261 L12.1458333,12.1458333 L15.2595261,12.1458333 C15.5173566,12.1458333 15.7142857,11.9382041 15.7142857,11.6820804 L15.7142857,10.3179196 C15.7142857,10.0656535 15.5106829,9.85416667 15.2595261,9.85416667 L12.1458333,9.85416667 Z"
            id="Combined-Shape"
            transform="translate(11.000000, 11.000000) rotate(-45.000000) translate(-11.000000, -11.000000) "
        ></path>
    </svg>
</div>
