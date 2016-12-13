@extends('layouts.register')

@section('form')
    @include('riwayat-pendidikan._form', ['method' => 'PUT', 'url' => '/riwayat-pendidikan'])
@endsection
