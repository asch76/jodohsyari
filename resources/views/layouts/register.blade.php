@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="list-group">
                    <a class="list-group-item @if (url()->current() == url()) active @endif" href="/user/edit">
                        LOGIN INFORMATION
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        BIODATA
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        FISIK
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        KEPRIBADIAN
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        PENDIDIKAN
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        PEKERJAAN
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        KONTAK
                    </a>
                    <a class="list-group-item @if (url()->current() == url('biodata')) active @endif" href="/user/edit">
                        KELUARGA
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('form')
        </div>
    </div>
@endsection
