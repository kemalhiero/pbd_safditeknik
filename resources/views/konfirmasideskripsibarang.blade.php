@extends('template')

@section('title', 'Konfirmasi dan Deskripsi Perbaikan barang')

@section('content')

  <div class="card">
    <div class="card-body">
      <br>
      <p>Form Konfirmasi dan Deskripsi Perbaikan barang</p>
      <br>
      <!-- General Form Elements -->
      <form>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="Read only / Disabled" disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="Read only / Disabled" disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Disabled</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="Read only / Disabled" disabled>
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Konfirmasi</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                Bisa diperbaiki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Tidak bisa diperbaiki
              </label>
            </div>
            <!-- <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
              <label class="form-check-label" for="gridRadios3">
                Third disabled radio
              </label>
            </div> -->
          </div>
        </fieldset>

        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px"></textarea>
          </div>
        </div>



        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Select</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Submit Button</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit Form</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>

@endsection

