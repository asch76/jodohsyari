@extends('layouts.register')

@section('form')
    @include('kontak._form', ['method' => 'POST', 'url' => '/kontak'])
@endsection
