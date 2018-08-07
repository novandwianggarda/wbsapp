<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">

        <div class="col-lg-4">

            <div class="ibox">
                <div class="ibox-content text-center">

                    <h3 class="m-b-xxs">Daftar Laporan Korupsi</h3>
                    <small>Ini adalah MANUSIA MANUSIA TERCYDUK</small>

                </div>

            </div>
            @foreach($post as $p)
                <ol>
                <div class="social-feed-box">

                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="{{ asset('adminpublic/img/a6.jpg') }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                {{ $p->nama_pelaku }}
                            </a>
                            <small class="text-muted">{{ $p->created_at }}</small>
                        </div>
                    </div>
                    <img class="img-responsive" style="padding-top: 10px; padding-bottom: 10px; padding-left: 5px;padding-right: 5px" src="{{ asset('storage/bukti/' .$p->bukti) }}">

                    </img>
                    <p >

                        {{ $p->cerita }}

                    </p>

                </div>
                </ol>
            @endforeach


        </div> {{--KORUPSI--}}


        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content text-center">

                    <h3 class="m-b-xxs">Daftar Laporan Gratifikasi</h3>
                    <small>MENUNGSO yang tercyduk</small>

                </div>

            </div>

            @foreach($grat as $g)
                <div class="social-feed-box">

                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="{{ asset('adminpublic/img/a6.jpg') }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                {{ $g->nama_pelaku }}
                            </a>
                            <small class="text-muted">{{ $g->created_at }}</small>
                        </div>
                    </div>
                    <img class="social-body" src="{{ $g->bukti }}">
                    <p>

                        {{ $g->cerita }}

                    </p>

                </div>
            @endforeach


        </div> {{--GRATIFIKASI--}}


        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content text-center">

                    <h3 class="m-b-xxs">Laporan Benturan Kepentingan</h3>
                    <small>MENUNGSO Egois yang tercyduk</small>

                </div>

            </div>

            @foreach($ben as $b)
                <div class="social-feed-box">

                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="{{ asset('adminpublic/img/a6.jpg') }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                {{ $b->nama_pelaku }}
                            </a>
                            <small class="text-muted">{{ $b->created_at }}</small>
                        </div>
                    </div>
                    <img class="social-body" src="storage/bukti/{{ $b->bukti }}">
                    <p>

                        {{ $b->cerita }}

                    </p>

                </div>
            @endforeach

        </div> {{--BENTURAN KEPENTINGAN--}}
    </div>
    </div>
</div>