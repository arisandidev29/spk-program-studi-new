 {{-- resources/views/partials/breadcrumbs.blade.php --}}

 @unless ($breadcrumbs->isEmpty())
 <ol class="breadcrumb">
    <h1>helo</h1>
     @foreach ($breadcrumbs as $breadcrumb)

         @if (!is_null($breadcrumb->url) && !$loop->last)
             <li class="breadcrumb-item text-primary"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
         @else
             <li class="breadcrumb-item active text-primary">{{ $breadcrumb->title }}</li>
         @endif

     @endforeach
 </ol>
@endunless