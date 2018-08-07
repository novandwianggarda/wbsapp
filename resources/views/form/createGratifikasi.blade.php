<div class="container">
    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2" style="padding-top: 10%">
                Laporkan Gratifikasi
            </h2>
            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                Laporkan Gratifikasi disini brooo
            </h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8">


            {!! Form::open(['action' => 'FormGratifikasiController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class'=> 'mbr-form']) !!}
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
                {{Form::label('cerita', 'cerita')}}
                {{Form::textarea('cerita', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'cerita'])}}
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
                            <h5 class="modal-title" id="exampleModalLongTitle">Lapor Gratifikasi</h5>
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
</div>