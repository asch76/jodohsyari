@extends('layouts.app')

@if (count($sliders))
@section('slider')
    <div class="container">
        @include('layouts._slider')
    </div>
    <br>
@endsection
@endif

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        @include('layouts._step')
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading"> ARTIKEL TERBARU </div>
            <div class="panel-body">
                @foreach ($artikels as $p)
                    @include('post._list', ['p' => $p])
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading"> VIDEO TERBARU </div>
            <div class="panel-body">
                @foreach ($videos as $p)
                    @include('post._list', ['p' => $p])
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection
