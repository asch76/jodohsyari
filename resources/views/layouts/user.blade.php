@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="list-group">
                    <a class="list-group-item @if (url()->current() == url('dashboard')) active @endif" href="/dashboard">
                        <i class="fa fa-th-large"></i> DASHBOARD
                    </a>
                    <a class="list-group-item @if (url()->current() == url('me')) active @endif" href="/me">
                        <i class="fa fa-user"></i> PROFIL
                    </a>
                    <a class="list-group-item @if (url()->current() == url('notifikasi')) active @endif" href="/notifikasi">
                        <i class="fa fa-envelope"></i> NOTIFIKASI
                        <span class="badge">{{ auth()->user()->unreadNotifications->count() }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('user-content')
        </div>
    </div>
@endsection
