@extends('layouts.register')

@section('form')
    @include('riwayat-pekerjaan._form', ['method' => 'PUT', 'url' => '/riwayat-pekerjaan'])
@endsection
