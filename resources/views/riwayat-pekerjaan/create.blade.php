@extends('layouts.register')

@section('form')
    @include('riwayat-pekerjaan._form', ['method' => 'POST', 'url' => '/riwayat-pekerjaan'])
@endsection
