@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"> MANAGE USERS </div>

        <div class="panel-body">
            {!! Form::open(['class' => 'form-inline', 'method' => 'GET']) !!}
                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Search User']) !!}
            <button type="submit" name="search" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
            {!! Form::close() !!}

            <hr>

            <table class="table table-striped table-hover  ">
                <thead>
                    <tr>
                        <th>Nama Lengkap (Panggilan)</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Jenis Kelamin</th>
                        <th>Kontak</th>
                        <th>Status Pernikahan/Jml Anak</th>
                        <th>Negara Asal/Suku</th>
                        <th>TTL/Usia</th>
                        <th>Pend. Terakhir</th>
                        <th>Pekerjaan</th>
                        <th style="width:70px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $s)
                    <tr>
                        <td>
                            <a href="/user/{{ $s->id }}-{{ str_slug($s->title ) }}" target="_blank">
                                {{ $s->nama_lengkap }}<br>
                                ({{ $s->nama_panggilan }})
                            </a>
                        </td>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->role }}</td>
                        <td>{{ $s->jenis_kelamin ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>
                            <a href="mailto:{{ $s->email }}">{{ $s->email }}</a><br>
                            {{ $s->telepon }}
                        </td>
                        <td>{{ $s->status_pernikahan }}<br>{{ $s->jumlah_anak }}</td>
                        <td>{{ $s->negara_asal }}<br>{{ $s->suku }}</td>
                        <td>
                            {{ $s->tempat_lahir }}<br>{{ $s->tanggal_lahir}}<br>{{ $s->umur }}
                        </td>
                        <td>{{ $s->pendidikan_terakhir }}</td>
                        <td>{{ $s->pekerjaan }}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'url' => '/user/'.$s->id]) !!}
                                <a href="/user/{{ $s->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
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
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
            </div>
            {!! $users->appends(['q' => request('q')])->links() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
