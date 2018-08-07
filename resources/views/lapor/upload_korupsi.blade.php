<div class="container">



    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form>

                {{ csrf_field() }}

                <label for="Bukti">Lampirkan BUKTI (bisa lebih dari satu):</label>

                <br />

                <input type="file" class="form-control" name="bukti[]" multiple />

                <br /><br />

            </form>

        </div>

    </div>

</div>