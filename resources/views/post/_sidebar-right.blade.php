<div class="panel panel-default">
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#sering-dibaca" aria-controls="sering-dibaca" role="tab" data-toggle="tab">SERING DIBACA</a></li>
            <li role="presentation"><a href="#terbaru" aria-controls="terbaru" role="tab" data-toggle="tab">TERBARU</a></li>
        </ul>

        <br>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="sering-dibaca">
                @each('post._list-small', \App\Post::published()->favorit()->limit(10)->get(), 'p')
            </div>
            <div role="tabpanel" class="tab-pane fade" id="terbaru">
                @each('post._list-small', \App\Post::published()->latest()->limit(10)->get(), 'p')
            </div>
        </div>
    </div>
</div>
