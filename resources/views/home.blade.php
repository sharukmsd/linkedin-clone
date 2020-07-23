@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @include('_leftSideBar')
        </div>
        <div class="col-md-7">
            @include('_feed')
        </div>
        <div class="col-md-3">
            @include('_rightSideBar')
        </div>
    </div>
@endsection
