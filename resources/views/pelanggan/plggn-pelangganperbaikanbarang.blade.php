@extends('pelanggan.templatepelanggan')

@section('title', 'Perbaikan Barang')

@section('content')

<!-- <p>Daftar barang barang yang sedang atau sudah diperbaiki</p> -->
      <div class="row">
        <div class="col-lg-12">      
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Data Pembayaran</h5> -->
                <!-- <nav class="d-flex justify-content-end">
                 <a href="/pelanggan-daftarbarangpelanggan" class="btn btn-primary rounded-pill">+ Daftarkan Barang</a><br><br>
                </nav> -->
                <br>
                <p>Daftar barang yang sedang diperbaiki atau di cek oleh teknisi</p>
                <br>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Progres</th>
                    <!-- <th scope="col">Biaya (Rp)</th> -->
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Kipas Angin</td>
                    <td>
                    <!-- <span class="badge rounded-pill bg-success">Bisa Diperbaiki</span> -->
                    <span class="badge rounded-pill bg-secondary">Sedang Proses</span>
                    <!-- <span class="badge rounded-pill bg-danger">Tidak Bisa Diperbaiki</span> -->
                    </td>
                    <!-- <td>20.000</td>   -->
                    <td>
                        <!-- Vertically centered Modal -->
                        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                            Detail Pembayaran
                        </button>
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Detail Pembayaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                invoice pembayaran
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Setuju</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- End Vertically centered Modal-->
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