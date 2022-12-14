@extends('layouts.main')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-4 mb-4" data-aos="fade-up">
            <div class="row row-layanan">

                <figure class="figure">
                    <img src="{{ asset('assets/img/titip.png') }}" class="figure-img img-fluid rounded" alt="..." style="width: 120px; margin-left: 45%; margin-top: 25px">
                </figure>

                <p class="text-center fs-5">
                    TERIMAKASIH ATAS KONFIRMASI PEMBAYARAN ANDA
                </p>

                <p class="text-center fs-6">
                    <small class="fw-bold">Jangan bagikan bukti pembayaran kepada siapapun!</small>
                </p>

                <div class="container">
                    <div class="card mb-5 mt-4">
                        <div class="card-body">
                            <dl class="row">
                                <p class="fw-bold">Informasi</p>
    
                                <dt class="col-sm-3">Tanggal : </dt>
                                <dd class="col-sm-9">22/10/2022</dd>
                              
                                <dt class="col-sm-3">Id Pembayaran :</dt>
                                <dd class="col-sm-9">1241241414141</dd>
                              
                                <dt class="col-sm-3">Pembayaran dari Bank :</dt>
                                <dd class="col-sm-9">Bank BRI/Alvi Nurbaetri</dd>
                              
                                <dt class="col-sm-3 text-truncate">Rekening tujuan :</dt>
                                <dd class="col-sm-9">Bank BCA/Leon Penitipan</dd>
                              
                                <dt class="col-sm-3">Total pembayaran :</dt>
                                <dd class="col-sm-9">Rp 155.000.851</dd>
                            </dl>
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <a class="btn btn btn-success" href="/user/layanan" role="button">Pesan Lagi</a>
                                <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/History/on" role="button">Pesanan Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

    