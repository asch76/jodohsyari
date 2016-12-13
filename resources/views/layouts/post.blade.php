@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            @include('post._sidebar-left')
        </div>
        <div class="col-sm-6">
            @yield('post-content')
        </div>
        <div class="col-sm-3">
            @include('post._sidebar-right')
        </div>
    </div>
@endsection
