@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"> MANAGE HALAMAN </div>
        <div class="panel-body">

            {!! Form::open(['method' => 'get', 'class' => 'form-inline']) !!}
                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Search Halaman']) !!}
                <button type="submit" name="search" class="btn btn-default"><i class="fa fa-search"></i> Search</button>

                <a href="/post/create?type=halaman" class="btn btn-primary">
                    <i class="fa fa-plus"></i> TAMBAH HALAMAN
                </a>
            {!! Form::close() !!}

            <hr>

            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th class="text-center">Slide</th>
                        <th>Last Update</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $s)
                    <tr>
                        <td>
                            <div style="width:40px;height:40px;">
                                <a href="{{ $s->url }}">
                                    <img src="{{ $s->img }}" class="img-responsive cover" />
                                </a>
                            </div>
                        </td>
                        <td>
                            <a href="/post/{{ $s->id }}-{{ str_slug($s->title ) }}" target="_blank">
                                {{ $s->title }}
                            </a>
                        </td>
                        <td> {{ $s->kategori }} </td>
                        <td>
                            @if ($s->status == 0)
                                <span class="label label-danger">Draft</span>
                            @elseif ($s->status == 1)
                                <span class="label label-success">Published</span>
                            @else
                                <span class="label label-default">Archived</span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if ($s->slide)
                            <i class="fa fa-check text-success"></i>
                            @else
                            <i class="fa fa-remove text-danger"></i>
                            @endif
                        </td>
                        <td>{{ $s->updated_at->diffForHumans() }}</td>
                        <td class="text-right">
                            {!! Form::open(['method' => 'DELETE', 'url' => '/post/'.$s->id]) !!}
                            @if ($s->status != 0)
                            <a href="/post/{{ $s->id }}/draft" class="btn btn-default btn-sm">Draft</a>
                            @endif

                            @if ($s->status != 1)
                            <a href="/post/{{ $s->id }}/publish" class="btn btn-default btn-sm">Publish</a>
                            @endif

                            @if ($s->status != 2)
                            <a href="/post/{{ $s->id }}/archive" class="btn btn-default btn-sm">Arsipkan</a>
                            @endif

                            <a href="/post/{{ $s->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                            <button type="submit" name="delete" class="btn btn-default btn-sm confirm">Hapus</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <div class="pull-right">
                Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} entries
            </div>
            {!! $posts->appends(['q' => request('q')])->links() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
