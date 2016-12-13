@extends('layouts.register')

@section('form')
    @include('riwayat-pendidikan._form', ['method' => 'POST', 'url' => '/riwayat-pendidikan'])
@endsection
