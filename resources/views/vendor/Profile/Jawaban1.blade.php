@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="p-4 container card mt-5" style="width: 85%" > 
    
    <div class=""style="font-size: 20px">
        <a href="/vendor/Profile/profile_vendor" class="ps-3 "><i class="bi bi-arrow-left btn btn-success col-sm-1" style=" font-size: 20px; color: rgb(255, 255, 255);"></i></a>
        <div class="card-body">
        <nav aria-label="breadcrumb "  class="card-header" style="height: 40px; width:100%">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="/vendor/Profile/profile_vendor">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pusat Bantuan</li>
            </ol>
        </nav>
        </div>
    </div>
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">
          

            <div class="row ">
                <div class="col-md-12">
                    <div class="card" style="background-color: #fff;">
                        <div class="card-body">
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="faq" class="form-label"><b>FAQ</b></label><hr>
                        <div class="card">
                            <div class="card-body">
                            <p><a href="/Vendor/Profile/Jawaban1"></a>Apa itu titipsini.com?</p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/Vendor/Profile/Jawaban2">Bagaimana mengkonfirmasi ulang KTP? ?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/Vendor/Profile/Jawaban3">Bagaimana cara menambahkan layanan?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/Vendor/Profile/Jawaban4">Bagaimana jika KTP dan KK tidak sinkron?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/Vendor/Profile/Jawaban5">Mengapa saya tidak bisa membatalkan
                                pesanan yang terlanjur diambil?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/Vendor/Profile/Jawaban6">Mengapa saya tidak mendapatkan
                                notifikasi penarikan?</a></p>
                            </div>
                        </div>
                        <br>
                    </form>
                    </div>
                </div>
            </div> 

          </div>
        </div>
        <div class="col" style="width: 800px">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></i>Jawaban</h5>
              <hr width="100%" color="#c0c0c0">
            <div class="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
            </div>

              <a href=""><p>Apakah jawaban ini membantu?</p></a>
          </div>
        </div>
        </div>
      </div>
      <div class="mt-5">
        <label for="faq" class="form-label">Hubungi Kami</label><br>
      <a href="#" class="btn btn-success"><i class="bi bi-envelope"></i> Send E-mail</a>
      <a href="#" class="btn btn-success"><i class="bi bi-telephone"></i> Call Us</a>
      <div class="d-grid gap-2 mt-2">
          <button class="btn btn-success col-sm-4" type="button"  href="#"><i class="bi bi-whatsapp" style="font-size: 20px"></i><b> WhatsApp</b></button>
      </div>
      
      </div>
</div></section>
@endsection