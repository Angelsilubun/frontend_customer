@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kelola Bangunan</h2>
            </div>
        </div>
<div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
         <div class="container mt-4 mb-4">
            <div class="row justify-content-center">
                <div class="card" style="background-color: #fff; width:80% ">
                    <div class="card-body">
                                    <p><b>Tambah layanan bangunan!</b>
                                    <p class="text-muted">Daftarkan layanan bangunan dengan mengisi data 
                                        dibawah ini</p><br>
                                    </p>
                                    <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                      </svg><b>Alamat Vendor</b></h6>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="ps-4">Untuk mengatur lokasi dan detail
                                                alamat vendor</p>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="bi bi-check2-square" style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                        
                                        </div>   
                                    </div>
                                    <hr>
                                    <div class="">
                                        <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                          </svg><b>Jenis bangunan</b></h6>
                                     <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis bangunan
                                                yang bisa dititipkan.</p>
                                        </div>
                                        <div class="col-md-2 mb-">
                                            <a href="/Vendor/Kelola-Bangunan/layanan_step3" data-bs-toggle="modal" data-bs-target="#exampleModal"><button class="btn btn-success mb-3"  >Tambah</button></a>
                                        </div>   
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
        <!--modal pilih bangunan-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" >Pilih Jenis Bangunan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="mb-2">
              <label for="exampleFormControlInput1" class="form-label"><b>Pilih bangunan yang ada di
                layanan Anda inginkan</b>
                <p class="text-muted">Silahkan pilih jenis bangunan yang 
                    anda sediakan</p>
          </label>
              </div>

              <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
              
                <div class="image-upload-wrap">
                  <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                  <div class="drag-text"><br>
                  <p>Tidak ada foto yang dipilih</p>
                  </div>
                </div>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="#" alt="your image" />
                  <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 mt-3">
                <label for="inputState" class="form-label"><h6>Pilih Jenis banguan yang ada di layanan anda</h6></label>
                <select>
                  <option selected>Pilih Kategori</option>
                  <option>Rumah</option>
                  <option>Apartement</option>
                  <option>Kost-Kostan</option>
                  <option>Kontrakan</option>
                  <option>Rumah sususn</option>

                </select>
              </div><br>
            <div class="mb-3">
                <label for="">Masukan harga penitipan </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
            </div>
            <div class="mb-3">
              <label for="">Deskripsi produk</label>
              <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea>
          </div>
        <a href="/Vendor/Kelola-Bangunan/layanan_step3"><button type="button" class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>
        </div>
    </div>
    </div> 
    </div>
    </div>
    </div>
</section>
@endsection