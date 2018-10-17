@extends('layout.app')
@include('layout.templates.app', array('useContainer' => false))

@section('css')
    @parent
@stop

@section('subheader-title')
    <i class="fa fa-html5"></i> GUI Components
@stop

@section('content')
    @yield('template')
@stop

@section('script')
    @parent
@stop
