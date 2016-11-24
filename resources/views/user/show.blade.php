@extends('layouts.app')

@section('title', $user->nama_lengkap)
@section('image', 'http://www.jodohsyari/'.$user->foto)
@section('imageSquare', 'http://www.jodohsyari/'.$user->foto)
@section('description', $user->profile)

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('user._search-form')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DETAIL MEMBER
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            @if ($user->foto)
                            <img src="{{ $user->foto }}" alt="{{ $user->nama_lengkap }}" class="thumbnail img-responsive" title="{{ $user->nama_lengkap }}" />
                            @else
                                <img src="/images/none.jpg" alt="{{ $user->nama_lengkap }}" class="thumbnail img-responsive" title="{{ $user->nama_lengkap }}" />
                            @endif
                        </div>
                        <div class="col-md-9">
                            <h2>{{ $user->nama_lengkap }} ({{ $user->nama_panggilan }})</h2>
                            <hr>
                            <blockquote cite="{{ $user->nama_panggilan }}">
                                <p>{{ $user->profile }}</p>
                            </blockquote>
                        </div>
                    </div>

                    @include('user._detail')
                </div>
            </div>
        </div>
    </div>

@endsection
