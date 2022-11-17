@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
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
                <p class="fw-bold" style="font-size: 20px; cursor: pointer; margin-top:30px;">Hallo,Admin</p>
            </div>
        </div>

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Kunjungan</div>
                </div>

            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Kunjungan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="eye"></ion-icon>
                </div>
            </div>


            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">284</div>
                    <div class="cardName">Komentar</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="chatbubbles"></ion-icon>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">$28.500.865</div>
                    <div class="cardName">Pendapatan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="card"></ion-icon>
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

        <!-- data list -->
        <div class="details mt-3">
            <div class="recentOrders w-auto">
                <div class="cardHeader">
                    <h2>Recent Order</h2>
                    <a href="#" class="btn btn-thema fs-5">View All</a>
                </div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td class="text-center">NAMA</td>
                            <td class="text-center">HARGA</td>
                            <td class="text-start">PEMBAYARAN</td>
                            <td class="text-start">STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status inprogress">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status inprogress">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="status delivered">Delivered</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- New Customer -->
            <div class="recentCustomer">
                <div class="cardHeader">
                    <h2>Recent Customer</h2>
                </div>
                <table>
                    @for ($i = 0; $i < 8; $i++) <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('user.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Selena<br><span>Italy</h4>
                        </td>
                        </tr>
                        @endfor
                </table>
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
