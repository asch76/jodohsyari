@extends('layouts.app')

@section('title', 'Post')

@section('content')

<div class="row">
    <div class="col-md-3">
        @include('user._search-form')
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                DAFTAR MEMBER SESUAI KRITERIA
            </div>
            <div class="panel-body">
                <div class="row">
                    @each('user._list', $users, 'u')
                </div>
            </div>
            <div class="panel-footer">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
