@extends('layouts.register')

@section('form')
    @include('fisik._form', ['method' => 'POST', 'url' => '/fisik'])
@endsection
