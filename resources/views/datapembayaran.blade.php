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
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

@endsection