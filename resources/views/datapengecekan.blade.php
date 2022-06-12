@extends('template')

@section('title', 'Data Pengecekan')

@section('content')

  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body"><br>
          <!-- <h5 class="card-title">Data Transaksi</h5> -->
          <p>Daftar pengecekan barang yang dilakukan teknisi</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Teknisi</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>P01</td>
                <td>Kipas Angin</td>
                <td>Valen</td>
                <td>adihtya</td>
                <td></td>
                <td>2022-05-25</td>
                <td>
                  <!-- <span class="badge rounded-pill bg-success">Bisa Diperbaiki</span> -->
                  <span class="badge rounded-pill bg-danger">Tidak Bisa Diperbaiki</span>
                </td>
              </tr>
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>P02</td>
                <td>Kompor</td>
                <td>Palen</td>
                <td>tya</td>
                <td></td>
                <td>2022-05-29</td>
                <td>
                  <span class="badge rounded-pill bg-success">Bisa Diperbaiki</span>
                  <!-- <span class="badge rounded-pill bg-danger">Tidak Bisa Diperbaiki</span> -->
                </td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>

@endsection
