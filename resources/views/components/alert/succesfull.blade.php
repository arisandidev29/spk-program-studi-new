@props([
    "event" => '',
])

<div
    x-data="{
        showAlert: false,
        message: '',
    }"
    x-cloak
    x-show="showAlert"

        @alert{{$event}}-success.window
        ="
            showAlert = true;
            message = $event.detail.message;
            setTimeout(() => {
                showAlert = false;
            }, 5000)
         "

    {{ $attributes }}
    x-transition:enter="transition duration-300 ease-out"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition duration-300 ease-out"
    x-transition:leave-start="opacity-0"
    x-transition:leave-end="opacity-100"
    {{ $attributes->merge(["class" => "bg-primary flex items-center gap-4 rounded-lg p-2 text-white my-2"]) }}
>
    <svg
        class="h-5 w-5 fill-slate-200"
        fill="#000000"
        width="800px"
        height="800px"
        viewBox="0 0 64 64"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xml:space="preserve"
        xmlns:serif="http://www.serif.com/"
        style="
            fill-rule: evenodd;
            clip-rule: evenodd;
            stroke-linejoin: round;
            stroke-miterlimit: 2;
        "
    >
        <rect
            id="Icons"
            x="-512"
            y="-64"
            width="1280"
            height="800"
            style="fill: none"
        />

        <g id="Icons1" serif:id="Icons">
            <g id="Strike"></g>

            <g id="H1"></g>

            <g id="H2"></g>

            <g id="H3"></g>

            <g id="list-ul"></g>

            <g id="hamburger-1"></g>

            <g id="hamburger-2"></g>

            <g id="list-ol"></g>

            <g id="list-task"></g>

            <g id="trash"></g>

            <g id="vertical-menu"></g>

            <g id="horizontal-menu"></g>

            <g id="sidebar-2"></g>

            <g id="Pen"></g>

            <g id="Pen1" serif:id="Pen"></g>

            <g id="clock"></g>

            <g id="external-link"></g>

            <g id="hr"></g>

            <path
                id="success"
                d="M56.103,16.824l-33.296,33.297l-14.781,-14.78l2.767,-2.767l11.952,11.952l30.53,-30.53c0.943,0.943 1.886,1.886 2.828,2.828Z"
                style="fill-rule: nonzero"
            />

            <g id="info"></g>

            <g id="warning"></g>

            <g id="plus-circle"></g>

            <g id="minus-circle"></g>

            <g id="vue"></g>

            <g id="cog"></g>

            <g id="logo"></g>

            <g id="radio-check"></g>

            <g id="eye-slash"></g>

            <g id="eye"></g>

            <g id="toggle-off"></g>

            <g id="shredder"></g>

            <g
                id="spinner--loading--dots-"
                serif:id="spinner [loading, dots]"
            ></g>

            <g id="react"></g>

            <g id="check-selected"></g>

            <g id="turn-off"></g>

            <g id="code-block"></g>

            <g id="user"></g>

            <g id="coffee-bean"></g>

            <g id="coffee-beans">
                <g id="coffee-bean1" serif:id="coffee-bean"></g>
            </g>

            <g id="coffee-bean-filled"></g>

            <g id="coffee-beans-filled">
                <g id="coffee-bean2" serif:id="coffee-bean"></g>
            </g>

            <g id="clipboard"></g>

            <g id="clipboard-paste"></g>

            <g id="clipboard-copy"></g>

            <g id="Layer1"></g>
        </g>
    </svg>
    <p
        class="flex-grow text-sm font-bold italic md:text-base"
        x-text="message"
    ></p>
    <svg
        @click="showAlert = false"
        class="h-6 w-6 cursor-pointer fill-white"
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
