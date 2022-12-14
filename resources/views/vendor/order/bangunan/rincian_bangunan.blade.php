@extends('layouts.vendor')
<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
            <div class="container mt-4 mb-4">

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col" style="width: 400px">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                                <div class="row">
                                    <div style="background: #F2F2F2">

                                        <div class="row">
                                            <div class="col-6">
                                                <b><p class="mb-1">Order Id</p></b>
                                            </div>
                                            <div class="col-md text-end">
                                                <b>1234569098</b>
                                            </div>   
                                        </div>
                                        
                                    </div>
                                </div><br>

                                <div class="col-md">
                                    <b><p class="mb-1">Sinta Sari Dwi Putra</p></b>
                                    <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                                </div><br>

                                <div class="col-md">
                                    <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan, Bantul, Yogyakarta</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 700px">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-success"><b>Rincian Order</b></h5>
                          <hr width="100%" color="#c0c0c0">
                                <div class="card-body">
                                     {{-- <div class="container-fluid"> --}}
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Rumah</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>x1</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Kosan</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>x2</p>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Pick Up</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>-</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Durasi Penitipan</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                <p>5 hari</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Vendor Pick Up</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                <p>-</p>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Subtotal</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 2.500.000
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Diskon</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>0</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Biaya Penjemputan</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                <p>-</p>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Total</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 2.550.000</p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal24">Ambil pesanan</button>
                                            <a class="btn btn-outline-secondary" href="/orderan_bangunan" role="button">Tolak</a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="text-center">
                                                        <div class="card-body">
                                                          <img src="assets/img/centanghijauuu.png" alt="centangHijau" width="100px" height="100px">
                                                          <p class="congratulations" style="padding-top: 20px"><b>Congratulations!!!<b></p>
                                                          <h5 class="berhasil" style="padding-top: 5px; color: grey">Selamat anda telah berhasil menyelesaikan pesanan anda</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                      </div>
                    </div>
                   
                    
                </div>
                
            </div>
        

    </section>
     @endsection