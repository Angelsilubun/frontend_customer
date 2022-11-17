@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Data Penarikan Vendor</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="cardHeader">
                                    <!-- Search -->
                                    <div class="search mb-2" data-aos="fade-left" data-aos-duration="1000">
                                        <label>
                                            <input type="text" placeholder="Cari Disini">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </label>
                                    </div>
                                </div>
                                <div class="rincian d-inline mt-3">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#Filtervendor" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Filter All</button>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nama Vendor</td>
                                        <td>No Rekening</td>
                                        <td>Jenis Rekening</td>
                                        <td>Jumlah Penarikan</td>
                                        <td>Tanggal</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Leon Penitipan</td>
                                        <td>T120917243434</td>
                                        <td>Bank BCA</td>
                                        <td>Rp 500.000</td>
                                        <td>06/09/2022</td>
                                        <td>
                                            <p class="mt-3"><i class="bi bi-circle-fill p-2 text-success"></i>Done</p>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verifikasi">Verifikasi</button>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#DetailUser">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Filtervendor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="filter" class="form-label">FILTER BERDASARKAN STATUS</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1">
                        On process
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                        Done
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Cancel
                        </label>
                    </div><br>
                    <label for="filter" class="form-label">FILTER BERDASARKAN RENTANG WAKTU</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Enable
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Terbaru</option>
                                <option value="1">Terlama</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Perbulan</option>
                                <option value="1">Perminggu</option>
                            </select>
                        </div>
                    </div>
                </div>
                    <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block mt-3" alt="image">
                <p class="text-center text-success fw-bold fs-5 mt-2">PENARIKAN DARI BANK BCA</p>
                <div class="row">
                    <div class="col-6">
                        <p>Tanggal : 27/10/2022</p>
                    </div>
                    <div class="col-6 text-end">
                        <p>Waktu : 10:00:00</p>
                    </div>
                    <div class="col-12">
                        <p>Id Penarikan : 1241121241</p>
                    </div>
                    <div class="col-6">
                        <p>Penarik : </p>
                    </div>
                    <div class="col-6 text-end">
                        <p>Leon Penitipan</p>
                    </div>
                    <div class="col-6">
                        <p>Jenis rekening : </p>
                    </div>
                    <div class="col-6 text-end">
                        <p>Bank BCA</p>
                    </div>
                    <div class="col-6">
                        <p>Jumlah penarikan : </p>
                    </div>
                    <div class="col-6 text-end">
                        <p>Rp 500.000</p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success" type="button">Verifikasi</button>
                        <button class="btn btn-secondary" type="button">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('java')
<!-- DataTables -->
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script type="text/javascript">
    $(function () {
        $('#example1').DataTable()
    })
</script>
@endsection