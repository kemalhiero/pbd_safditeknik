@extends('template')

@section('title', 'Perbaikan Barang')

@section('content')

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Data Pembayaran</h5> -->
              <br>
              <p>Daftar barang barang yang sedang atau sudah diperbaiki</p>

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
                    <!-- <span class="badge rounded-pill bg-secondary">Proses</span>
                    <span class="badge rounded-pill bg-danger">Batal</span> -->
                    

                    <!-- Vertically centered Modal -->
                      <button>
                      <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#verticalycentered"></i>
                      </button>
                      <div class="modal fade" id="verticalycentered" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <form action="" method="post">
                              <div class="modal-header">
                                <h5 class="modal-title">Ganti Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pilih</label>
                                <div class="col-sm-10">
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Status</option>
                                    <option value="selesai">Selesai</option>
                                    <option value="proses">Sedang Proses</option>
                                    <option value="batal">Batal</option>
                                  </select>
                                </div>
                              </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                              </div>
                              </form>
                            </div> 
                          
                        </div>
                      </div><!-- End Vertically centered Modal-->
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