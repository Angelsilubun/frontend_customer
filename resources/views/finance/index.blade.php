@extends('finance.adminlayout')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="home-content" id="liveToastBtn">
                <i class='bx bx-bell' style="font-size: 35px; cursor: pointer; margin-top:13px; margin-left:1650%"></i>
            </div>
            <div class="home-content">
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="rounded-circle" alt="profile" style="font-size: 35px; cursor: pointer; margin-top:13px; margin-left:480%">
            </div>
            <div class="home-content">
                <p class="fw-bold" style="font-size: 20px; cursor: pointer; margin-top:30px;">Hallo,Finance</p>
            </div>
        </div>

        <div class="cardBox" style="width: 6rem;">
            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">20</div>
                    <div class="cardName">Payment</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="wallet"></ion-icon>
                </div>
            </div>

            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">300</div>
                    <div class="cardName">In Work</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="person"></ion-icon>
                </div>
            </div>
            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">600</div>
                    <div class="cardName">Done</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="checkmark-circle"></ion-icon>
                </div>
            </div>

            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">2</div>
                    <div class="cardName">Failed</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="alert"></ion-icon>

                </div>
            </div>
            <div class="card border-0" style="width:170" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">400</div>
                    <div class="cardName">Penarikan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="archive"></ion-icon>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="graphBox">
            <div class="card border-0 w-auto">
                <canvas id="myChart"></canvas>
            </div>
            <div class="card border-0 w-auto">
                <canvas id="earning"></canvas>
            </div>
        </div>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Notifikasi Baru</strong>
                <small>11 menit yang lalu</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                Layanan mu akan segera selesai
              </div>
            </div>
        </div>
    </div>
</section>
<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if(toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }
</script>
@endsection
