<div class="panel panel-default">
    <div class="panel-heading">
        HALAMAN
    </div>
    <div class="list-group">
        @foreach(\App\Post::halaman()->published()->get() as $page)
            <a class="list-group-item @if (url()->current() == $page->url) active @endif" href="{{ $page->url }}">
                <i class="fa fa-file"></i> {{ $page->title }}
            </a>
        @endforeach
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        KATEGORI
    </div>
    <div class="list-group">
        @foreach(\App\Post::selectRaw('distinct(kategori) as kategori')->whereRaw('kategori != "" AND type = 0 AND `status` = 1')->get() as $k)
        <a class="list-group-item @if ($k->kategori == request('kategori')) active @endif" href="/post?kategori={{ $k->kategori }}">
            <i class="fa fa-folder-open"></i> {{ $k->kategori }}
        </a>
        @endforeach
    </div>
</div>
