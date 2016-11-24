<ul class="breadcrumb">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    @foreach($breadcrumb as $url => $label)
        @if ($url == '#')
            <li class="active">{{ $label }}</li>
        @else
            <li><a href="{{ $url }}">{{ $label }}</a></li>
        @endif
    @endforeach
</ul>
