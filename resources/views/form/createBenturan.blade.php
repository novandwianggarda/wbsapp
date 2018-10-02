



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
                    {{Form::label('cerita', 'cerita')}}
                    {{Form::textarea('cerita', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'cerita'])}}
                </div>
                <div class="form-field">
                    <span class="btn btn-primary btn-file">
                        Lampirkan Bukti | .jpg .doc .pdf{{Form::file('bukti', ['multiple'=>'multiple', 'type' => 'file'])}}
                    </span>
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

</section>