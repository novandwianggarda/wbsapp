
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Launch demo modal
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
      </div> <!-- end contact-primary --> with MODAL

console.log(currentIndex);
if (currentIndex === 3) { //if last step
//remove default #finish button
$('#form').find('a[href="#finish"]').remove();
//append a submit type button
$('#form .actions li:last-child').append('<button type="submit" id="submit" name="submit" class="btn-large"><span class="fa fa-chevron-right"></span></button>');
}