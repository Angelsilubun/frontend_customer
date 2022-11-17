@extends('layouts.main')
@section('container') 

<section id="history" class="history section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-2 mb-2" data-aos="fade-up">
        <div class="row row-layanan">
            <ul class="nav nav-tabs">
                <li class="nav-item col-md-6">
                  <a class="nav-link text-center active text-success fw-bold fs-5" aria-current="page" href="/user/pemesanan/History/On_Progress">Pesanan</a>
                </li>
                <li class="nav-item col-md-6">
                  <a class="nav-link text-center text-dark fs-5" href="/user/pemesanan/History/last">History</a>
                </li>
            </ul>
            <div class="mt-3">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="mt-2" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-3 p-4">
                                <img src="{{ asset('assets/img/motor.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 100%; margin-left: 10px">
                            </div>
                            <div class=" col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="Pesanan fs-5"><b>Leon Penitipan</b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="tglTransaksi" style="font-size: 14px">
                                                Tanggal Transaksi: <b>16/09/2022</b> | 
                                                Total: <b> Rp 155.000. 851</b> |
                                                Penitipan selama 4 hari
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-outline-success btn-sm">Batalkan Layanan</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end mt-5">
                                        <p class="text-success" style="font-size: 14px"><b>Lihat detail transaksi</b>
                                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaksi">
                                                <i class="bi bi-three-dots text-dark p-2 mt-2"></i>
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal udah bayar -->
    <div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Transaksi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/titip.png') }}" class="figure-img img-fluid rounded detail-transaksi" alt="logo" style="margin-left: 40%; width:100px">
                    <p class="text-success text-center fw-bold fs-4">Titipsini.com</p>
                    <div class="row">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-success rounded-pill" disabled><i class="bi bi-check-circle-fill p-2 text-success"></i>Pembayaran Berhasil</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <p>Id Transaksi</p>
                        </div>
                        <div class="col-6 mt-3 text-end">
                            <p>Order M-012912811288</p>
                        </div>
                        <div class="col-6">
                            <p>Metode Pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Transfer Bank</p>
                        </div>
                        <div class="col-6">
                            <p>Tanggal</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>25 Oktober 2022</p>
                        </div>
                        <div class="col-6">
                            <p>Waktu</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>10:00 Wib</p>
                        </div>
                        <div class="col-6">
                            <p>Total Pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Rp 155.000.851</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Perpanjang Layanan 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perpanjang Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-0">
                        <p class="fw-bold">Layanan saat ini</p>
                        <div class="col-md-5 mt-2">
                            <img src="{{ asset('assets/img/motor.jpg') }}" class="img-fluid rounded-start" style="width: 100%">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="Pesanan" style="font-size: 20px"><b>Leon Penitipan</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="tglTransaksi" style="font-size: 13px">
                                            Tanggal Transaksi: <b>16/09/2022</b> <br> 
                                            Total: <b> Rp 155.000. 851</b> <br>
                                            Penitipan selama 4 hari
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div><hr>
                    <div class="row">
                        <p class="fw-bold">Form Perpanjang Layanan</p>
                        <div class="col-12">
                            <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Perpanjang</p>
                            <input type="date" class="form-control" id="tanggal">
                            <p class="text-danger mt-1" style="font-size: 11px"><i class="bi bi-exclamation-circle-fill p-1"></i>Wajib diisi tanggal perpanjang</p>
                        </div>
                        <div class="col-12">
                            <label for="tanggalkeluar" class="form-label" style="font-size: 14px">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tanggal">
                            <p class="text-danger mt-1" style="font-size: 11px"><i class="bi bi-exclamation-circle-fill p-1"></i>Wajib diisi tanggal selesai</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Perpanjang Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!--Congrats perpanjang-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/img/per.jpg') }}" class="figure-img img-fluid rounded detail-transaksi" alt="logo" style="margin-left: 25%; width:50%">
                    <p class="text-success text-center fw-bold fs-5">Perpanjang Layanan Berhasil Dibuat</p>
                    <p class="text-success text-center text-muted">Untuk menyelesaikan perpanjang layanan, anda perlu menyelesaikan pembayaran. Terimakasih karena telah percaya kepada Titipsini.com</p>

                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a class="btn btn-outline-success" href="/user/pemesanan/baru" role="button">Selesaikan Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal blm bayar -->
    <div class="modal fade" id="detailTransaksi2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Transaksi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/titip.png') }}" class="figure-img img-fluid rounded detail-transaksi" alt="logo" style="margin-left: 40%; width:100px">
                    <p class="text-success text-center fw-bold fs-4">Titipsini.com</p>
                    <div class="row">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-warning rounded-pill" disabled><i class="bi bi-exclamation-circle-fill p-2 text-warning"></i>Belum Bayar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <p>Id Transaksi</p>
                        </div>
                        <div class="col-6 mt-3 text-end">
                            <p>Order M-012912811288</p>
                        </div>
                        <div class="col-6">
                            <p>Metode Pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Transfer Bank</p>
                        </div>
                        <div class="col-6">
                            <p>Tanggal</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>25 Oktober 2022</p>
                        </div>
                        <div class="col-6">
                            <p>Waktu</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>10:00 Wib</p>
                        </div>
                        <div class="col-6">
                            <p>Total Pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Rp 140.000</p>
                        </div>
                        <div class="d-grid gap-2">
                            <a class="btn btn-success" href="/user/pemesanan/pembayaran" role="button">Lanjutkan Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pesanan selesai -->
    <div class="modal fade" id="Selesai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container text-center" style="font-size:20px">
              <p> Saya telah memastikan bahwa kendaraan yang dititipkan telah diterima kembali dan tidak ada masalah apapun.</p>
              <div>
                <a href="/user/pemesanan/History/last"><button class="btn btn-outline-success col-md-12">Konfirmasi</button></a>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection