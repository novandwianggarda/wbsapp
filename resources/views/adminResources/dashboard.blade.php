@extends('adminResources.master.main-master')

@section('menu')
    @include('adminResources.layouts.menu')
@endsection

@section('header')
    @include('adminResources.layouts.header')
@endsection

@section('content')
    @include('adminResources.content.home-content')
@endsection

@section('footer')
    @include('adminResources.layouts.sikiladmin')
@endsection