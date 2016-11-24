<div class="panel panel-default">
    <div class="panel-heading">
        HALAMAN
    </div>
    <div class="list-group">
        @foreach(\App\Post::page()->published()->get() as $page)
            <a class="list-group-item @if (url()->current() == url('/post/'.$page->id.'-'.str_slug($page->title))) active @endif" href="{{ url('/post/'.$page->id.'-'.str_slug($page->title)) }}">
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

<div class="panel panel-default">
    <div class="panel-heading">
        TERBARU
    </div>
    <div class="panel-body">
        @each('post._list-small', \App\Post::published()->post()->latest()->limit(5)->get(), 'p')
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        SERING DIBACA
    </div>
    <div class="panel-body">
        @each('post._list-small', \App\Post::published()->post()->favorit()->limit(5)->get(), 'p')
    </div>
</div>
