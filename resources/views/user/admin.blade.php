@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"> MANAGE USERS </div>

        <div class="panel-body">
            {!! Form::open(['class' => 'form-inline', 'method' => 'GET']) !!}
                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Search User']) !!}
            <button type="submit" name="search" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
            <a href="/user/create" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAH USER</a>
            {!! Form::close() !!}

            <hr>

            <table class="table table-striped table-hover  ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Verified</th>
                        <th>Active</th>
                        <th>Register At</th>
                        <th>Last Login</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $s)
                    <tr>
                        <td>{{ $s->name }}</td>
                        <td><a href="mailto:{{ $s->email }}">{{ $s->email }}</a></td>
                        <td>{{ $s->role }}</td>
                        <td>
                            @if ($s->verified)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                            @endif
                        </td>
                        <td>
                            @if ($s->active)
                            <span class="label label-success">Yes</span>
                            @else
                            <span class="label label-danger">No</span>
                            @endif
                        </td>
                        <td>{{ $s->created_at->diffForHumans() }}</td>
                        <td>{{ $s->last_login ? $s->last_login->diffForHumans() : 'never' }}</td>
                        <td class="text-right">
                            {!! Form::open(['method' => 'DELETE', 'url' => '/user/'.$s->id]) !!}
                                @if (! $s->verified)
                                <a href="/user/{{ $s->id }}/verify" class="btn btn-default btn-sm">Verify</a>
                                @endif

                                @if (! $s->active)
                                <a href="/user/{{ $s->id }}/activate" class="btn btn-default btn-sm">Activate</a>
                                @else
                                <a href="/user/{{ $s->id }}/deactivate" class="btn btn-default btn-sm">Deactivate</a>
                                @endif

                                <a href="/user/{{ $s->id }}/edit" class="btn btn-default btn-sm">Edit</a>
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
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
            </div>
            {!! $users->appends(['q' => request('q')])->links() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
