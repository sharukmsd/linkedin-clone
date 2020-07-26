@extends('layouts.app')
@section('Header')
    @include('layouts.header')
@endsection
@section('content')
    <p>{{$user->name}}</p>
@endsection
