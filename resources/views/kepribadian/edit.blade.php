@extends('layouts.register')

@section('form')
    @include('kepribadian._form', ['method' => 'PUT', 'url' => '/kepribadian'])
@endsection
