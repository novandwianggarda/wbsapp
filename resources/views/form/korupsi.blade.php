@extends('master.master')

@section('header')
    @include('layouts.header')
@endsection


@section('lapor')
    <h3>{{$post->nama_pelaku}}</h3>
@endsection

@section('sikil')
    @include('layouts.sikil')
@endsection

