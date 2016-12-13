<div class="media" style="height:125px;">
    @if ($p->img)
    <div class="media-left">
        <div  style="width:100px;height:100px;">
            <a href="{{ $p->url }}">
                <img class="media-object cover" src="{{ $p->img }}" alt="{{ $p->title }}" />
            </a>
        </div>
    </div>
    @endif
    <div class="media-body">
        <a href="{{ $p->url }}">
            <h4 style="margin:0;">{{ $p->title }}</h4>
        </a>
        <small>
            {{ $p->created_at->diffForHumans() }} /
            <a href="/post/?kategori={{ $p->kategori }}">{{ $p->kategori }}</a> /
            {{ $p->view }} views
        </small>
        <p> {!! str_limit(strip_tags($p->content), 200) !!}</p>
    </div>
</div>
