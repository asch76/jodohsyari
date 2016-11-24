@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="/post/create"><i class="fa fa-plus"></i> New Post</a>
            </div>
            MANAGE POSTS
        </div>
        <div class="panel-body">

            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Kategori</th>
                        <th>Video URL</th>
                        <th>Status</th>
                        <th>Last Update</th>
                        <th class="text-right">Action</th>
                    </tr>
                    {!! Form::open() !!}
                    <tr>
                        <td>
                            {!! Form::text('title', request('title'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                        </td>
                        <td>
                            {!! Form::select('type', ['Post' => 'Post', 'Page' => 'Page'], request('type'), ['class' => 'form-control', 'placeholder' => '-Type-']) !!}
                        </td>
                        <td>
                            {!! Form::text('kategori', request('kategori'), ['class' => 'form-control', 'placeholder' => 'Kategori']) !!}
                        </td>
                        <td>
                            {!! Form::text('video_url', request('video_url'), ['class' => 'form-control', 'placeholder' => 'Video URL']) !!}
                        </td>
                        <td>
                            {!! Form::select('status', ['0' => 'Draft', '1' => 'Published', '2' => 'Archived'], request('status'), ['class' => 'form-control', 'placeholder' => '-Status-']) !!}
                        </td>
                        <td></td>
                        <td class="text-right">
                            <button type="submit" name="filter" class="btn btn-default"><i class="fa fa-filter"></i> Filter</button>
        					<a href="/post/admin" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</a>
                        </td>
                    </tr>
                    {!! Form::close() !!}
                </thead>
                <tbody>
                    @foreach ($posts as $s)
                    <tr>
                        <td>
                            <a href="/post/{{ $s->id }}-{{ str_slug($s->title ) }}" target="_blank">
                                {{ $s->title }}
                            </a>
                        </td>
                        <td>{{ $s->type ? 'Page' : 'Post' }}</td>
                        <td> {{ $s->kategori }} </td>
                        <td>
                            <a href="{{ $s->video_url }}" target="_blank">{{ $s->video_url }}</a>
                        </td>
                        <td>
                            @if ($s->status == 0)
                                Draft
                            @elseif ($s->status == 1)
                                Published
                            @else
                                Archived
                            @endif
                        </td>
                        <td>{{ $s->updated_at->diffForHumans() }}</td>
                        <td class="text-right">
                            {!! Form::open(['method' => 'DELETE', 'url' => '/post/'.$s->id]) !!}
                            <a href="/post/{{ $s->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                            <button type="submit" name="delete" class="btn btn-default btn-xs confirm"><i class="fa fa-trash"></i></button>
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
