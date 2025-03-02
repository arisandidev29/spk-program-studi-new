@unless ($breadcrumbs->isEmpty())
    <nav class="container mx-auto">
        <ol class="py-4 rounded flex flex-wrap bg-gray-300 text-sm text-gray-800 font-poppins">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}" class=" text-gray-600">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li >
                        <a href="{{$breadcrumb->url}}" class="text-primary" >
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @endif

                @unless($loop->last)
                    <li class="text-gray-500 px-2">
                        /
                    </li>
                @endif

            @endforeach
        </ol>
    </nav>
@endunless
