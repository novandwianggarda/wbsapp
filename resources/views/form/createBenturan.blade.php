



<section id="lapor" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <img src="{{asset('img/front/logo2.png')}}" width="20%" height="auto">
        </div>
    </div>

    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <h3 class="h6">Laporkan Pelaku Benturan Kepentingan</h3>

            {!! Form::open(['action' => 'FormBenturanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                    <h5>Benturan Kepentingan</h5>
                    <p>
                        Benturan yang timbul ketika kepentingan seseorang memungkinkan orang lain melakukan tindakan yang bertentangan dengan pihak tertentu, yang kepentingannya seharusnya dipenuhi oleh orang lain tersebut.
                    </p>
                </div>

                <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->
    <footer>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright WBS - DPMPTSP Prov Jateng 2018</span>
                </div>

                <div class="go-top" style="display: block;">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer>
</section>