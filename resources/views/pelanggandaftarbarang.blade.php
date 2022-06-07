@extends('template')

@section('title', 'Pendaftaran')

@section('content')

  <div class="card">
    <div class="card-body">
      <br>
      <p>Form Konfirmasi dan Deskripsi Perbaikan barang</p>
      <br>
      <!-- General Form Elements -->
      <form>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Text</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
          <div class="col-sm-10">
            <input type="number" class="form-control">
          </div>
        </div>  
        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
          <div class="col-sm-10">
            <input type="time" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Disabled</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="Read only / Disabled" disabled>
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

