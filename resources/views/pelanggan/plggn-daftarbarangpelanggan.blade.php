@extends('pelanggan.templatepelanggan')

@section('title', 'Pendaftaran Barang Pelanggan')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Pendaftaran Barang Pelanggan</h5>
            <form>
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Read only / Disabled" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input name="nama_barang" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Kerusakan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"> (☞ﾟヮﾟ)☞</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
