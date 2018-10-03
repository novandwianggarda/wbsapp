{{--<div class="container">
    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2" style="padding-top: 10%">
                Laporkan Korupsi
            </h2>
            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                Laporkan Korupsi disini brooo
            </h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8">


            {!! Form::open(['action' => 'FormKorupsiController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class'=> 'mbr-form']) !!}
            <div class="row row-sm-offset">
                <div class="col-md-4 multi-horizontal">
                    <div class="form-group">
                        {{Form::label('nama_pelaku', 'Nama')}}
                        {{Form::text('nama_pelaku', '', ['class' => 'form-control', 'placeholder' => 'Nama'])}}
                    </div>
                </div>
                <div class="col-md-4 multi-horizontal">
                    <div class="form-group">
                        {{Form::label('nip_pelaku', 'NIP')}}
                        {{Form::text('nip_pelaku', '', ['class' => 'form-control', 'placeholder' => 'NIP'])}}
                    </div>
                </div>
                <div class="col-md-4 multi-horizontal">
                    <div class="form-group">
                        {{Form::label('jabatan', 'Jabatan')}}
                        {{Form::text('jabatan', '', ['class' => 'form-control', 'placeholder' => 'Jabatan'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('deskripsi', 'deskripsi')}}
                {{Form::textarea('deskripsi', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'deskripsi'])}}
            </div>
            <div class="form-group">
                {{Form::file('bukti', ['multiple'=>'multiple'])}}
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Laporkan
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Lapor Korupsi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="kembali">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pastikan Data yg Anda Laporkan Benar
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <span class="input-group-btn">
                                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>--}}

<section id="lapor" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <img src="{{asset('img/front/logo2.png')}}" width="20%" height="auto">
    </div>

    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <h3 class="h6">Laporkan Pelaku Korupsi</h3>

            {!! Form::open(['action' => 'FormKorupsiController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <fieldset>

                    <div class="form-field">
                        {{Form::label('nama_pelaku', 'Nama')}}
                        {{Form::text('nama_pelaku', '', ['class' => 'full-width', 'placeholder' => 'Nama'])}}
                    </div>
                    <div class="form-field">
                        {{Form::label('jabatan', 'Jabatan')}}
                        {{Form::text('jabatan', '', ['class' => 'full-width', 'placeholder' => 'Jabatan'])}}
                    </div>
                    <div class="form-field">
                        {{Form::label('nip_pelaku', 'NIP')}}
                        {{Form::text('nip_pelaku', '', ['class' => 'full-width', 'placeholder' => 'NIP'])}}
                    </div>
                    <div class="form-field">
                        {{Form::label('no_telp', 'Nomor Telepon')}}
                        {{Form::text('no_telp', '', ['class' => 'full-width', 'placeholder' => 'Nomor Telepon'])}}
                    </div>
                    <div class="form-field">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', '', ['class' => 'full-width', 'placeholder' => 'Email'])}}
                    </div>
                    <div class="form-field">
                        {{Form::label('deskripsi', 'deskripsi')}}
                        {{Form::textarea('deskripsi', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
                    </div>
                    <div class="form-field">
                        {{Form::file('bukti', ['multiple'=>'multiple', 'type' => 'file', 'class' => 'full-width'])}}
                    </div>
                    <div class="form-field">
                        {{Form::submit('Submit', ['class'=>'full-width btn--primary'])}}
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            {!! Form::close() !!}

            <!-- contact-warning -->
            <div class="message-warning">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class="message-success">
                Your report was sent, thank you!<br>
            </div>

        </div> <!-- end contact-primary -->

        <div class="contact-secondary">
            <div class="contact-info">
                <div class="cinfo">
                    <h5>Korupsi</h5>
                    <p>
                        Korupsi adalah tindakan seseorang yang menyalahgunakan kepercayaan dalam suatu masalah atau organisasi untuk mendapatkan keuntungan. Tindakan korupsi ini terjadi karena beberapa faktor faktor yang terjadi di dalam kalangan masyarakat.
                    </p>
                </div>

                 <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section>