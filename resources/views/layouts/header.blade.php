@extends('master.master')

@section('header')
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top effect-main past-main">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand page-scroll" href="#main"><img src="{{asset('img/logoPTSP.png')}}" width="auto" height="30" alt="DPMPTSP Prov Jateng" /></a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="page-scroll" href="#main">Beranda</a></li>
                        <li><a class="page-scroll" href="#wbs">WBS</a></li>
                        <li><a class="page-scroll" href="#lapor">Lapor</a></li>
                        <li><a class="page-scroll" href="#contact">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar-collapse -->
    </div>
@endsection