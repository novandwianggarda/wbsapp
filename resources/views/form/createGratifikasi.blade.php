
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

            <h3 class="h6">Laporkan Pelaku Korupsi</h3>

            {!! Form::open(['action' => 'FormGratifikasiController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <fieldset>

                <div class="form-field">
                    {{--{{Form::label('nama_pelaku', 'Nama')}}--}}
                    {{Form::text('nama_pelaku', '', ['class' => 'full-width', 'placeholder' => 'Nama'])}}
                </div>
                <div class="form-field">
                    {{--{{Form::label('jabatan', 'Jabatan')}}--}}
                    {{Form::text('jabatan', '', ['class' => 'full-width', 'placeholder' => 'Jabatan'])}}
                </div>
                <div class="form-field">
                    {{--{{Form::label('nip_pelaku', 'NIP')}}--}}
                    {{Form::text('nip_pelaku', '', ['class' => 'full-width', 'placeholder' => 'NIP'])}}
                </div>
                <button type="button" class="full-width btn--primary" data-toggle="modal" data-target="#exampleModalCenter">
                    LANJYUUUT
                </button>
            </fieldset>


            <!-- contact-warning -->
            <div class="message-warning">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class="message-success">
                Your report was sent, thank you!<br>
            </div>
        </div> <!-- end contact-primary --> {{--with MODAL--}}

        <div class="contact-secondary">
            <div class="contact-info">
                <div class="cinfo">
                    <h5>Gratifikasi</h5>
                    <p>
                        Pemberian dalam arti luas, yakni meliputi pemberian uang, barang, rabat (discount), komisi, pinjaman tanpa bunga, tiket perjalanan, fasilitas penginapan, perjalanan wisata, pengobatan cuma-cuma, dan fasilitas lainnya. Gratifikasi tersebut baik yang diterima di dalam negeri maupun di luar negeri dan yang dilakukan dengan menggunakan sarana elektronik atau tanpa sarana elektronik.
                    </p>
                </div>

                <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Data Pelapor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"  align="center" style="color: #0d0d0d">
                    <div class="form-field">
                        {{--{{Form::label('nama', 'Nama Pelapor')}}--}}
                        {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama Pelapor'])}}
                    </div>
                    <div class="form-field">
                        {{--{{Form::label('no_telp', 'Nomor Telepon')}}--}}
                        {{Form::text('no_telp', '', ['class' => 'full-width', 'placeholder' => 'Nomor Telepon'])}}
                    </div>
                    <div class="form-field">
                        {{--{{Form::label('email', 'Email')}}--}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value="ex">External</label>
                        <label><input type="radio" name="status" value="in">Internal</label>
                    </div>
                    <div class="form-field">
                        {{--{{Form::label('deskripsi', 'deskripsi')}}--}}
                        {{Form::textarea('deskripsi', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
                    </div>
                    <div class="form-field">
                        {{Form::file('bukti', ['multiple'=>'multiple', 'type' => 'file', 'class' => 'full-width','align'=>'center'])}}
                    </div>
                    <p style="color: red" align="center">Tanggungjawab hlo brooooo, ojo fitnah</p>
                    <input type="checkbox" name="disclaimer" value="yes" style="margin-right: auto; margin-left: auto"><br>
                    <p style="color: #0C0C0C; font-style: italic">dengan ini saya bertanggungjawab atas apa yang saya laporkan terhadap pihak terkait. Dan apabila dikemudian hari diperlukan laporan ini dimintai pertanggungjawaban, saya MAMPU PAAAAK!</p>


                </div>
                <div class="modal-footer">
                    <div class="form-field">
                        {{Form::submit('Submit', ['class'=>'full-width btn--primary'])}}
                        {!! Form::close() !!}
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div> {{--THE MODAL--}}
</section>