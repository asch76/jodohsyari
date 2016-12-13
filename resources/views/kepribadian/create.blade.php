@extends('layouts.register')

@section('form')
    @include('kepribadian._form', ['method' => 'POST', 'url' => '/kepribadian'])
@endsection
