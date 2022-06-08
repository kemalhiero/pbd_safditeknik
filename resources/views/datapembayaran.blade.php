@extends('template')

@section('title', 'Data Pembayaran')

@section('content')

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Data Pembayaran</h5> -->
              <br>
              <p>Daftar data pembayaran barang (barang sudah dikonfirmasi bisa diperbaiki teknisi)</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Struk</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi Perbaikan</th>
                    <th scope="col">Harga perbaikan</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>ST01</td>
                    <td>Kipas Angin</td>
                    <td>Perbaikan Spinner</td>
                    <td>Rp50.000</td>
                    <td>
                    <span class="badge rounded-pill bg-success">Selesai</span>
                    <span class="badge rounded-pill bg-secondary">Proses</span>
                    <span class="badge rounded-pill bg-danger">Batal</span>
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