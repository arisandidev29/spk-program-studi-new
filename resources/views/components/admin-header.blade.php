@props(['title', 'breadcrumbs' => 'dashboard'])
<header class="flex justify-between bg-white shadow- shadow-xl rounded-2xl px-4 py-4">
    <div>
        <h1 class="text-2xl font-poppins text-primary">{{ $title }}</h1>
        {{ Breadcrumbs::render($breadcrumbs) }}
    </div>

    <x-user-navbar />

</header>
