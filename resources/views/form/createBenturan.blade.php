



<section id="lapor" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Laporkan Pelaku Benturan Kepentingan</h3>
            <h1 class="display-2 display-2--light">Wes pokoke lapor sek, jan telo tenan</h1>
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
                    {{Form::file('bukti', ['multiple'=>'multiple'])}}
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

                <h3 class="h6 hide-on-fullwidth">Penjelasan Opo Pie ngono</h3>

                <div class="cinfo">
                    <h5>Gratifikasi</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

                <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section>