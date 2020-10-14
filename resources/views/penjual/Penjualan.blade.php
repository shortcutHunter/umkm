@extends('template.PenjualTemplate')

@section('content')


    <div class="mb-4 umkm-title">PENJUALAN</div>
    <div class="mb-1 py-3 umkm-subtitle umkm-flex-between">
        <span>Daftar Pesanan</span>
        <button class="btn btn-dark rounded-pill py-2 px-4">
           <i class="fa fa-print"></i>
           Unduh Report
        </button>
    </div>

    <div class="row">
        <div class="col-12">
            
            <div class="card umkm-rounded shadow">
                <div class="card-body">

                    <ul class="nav nav-tabs border-0 mb-3 row">
                       <li class="nav-item">
                           <h4 class="nav-link font-weight-bold no-event">
                               STATUS
                           </h4>
                       </li> 
                       <li class="nav-item">
                           <a href="#semua_pesanan" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark active">
                               Semua Pesanan
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_baru" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Baru
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_dikirim" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Dikirim
                           </a>
                       </li> 
                       <li class="nav-item">
                           <a href="#pesanan_selesai" data-toggle="tab" class="nav-link umkm-nav rounded-pill text-dark">
                               Pesanan Selesai
                           </a>
                       </li> 
                    </ul>

                    <div class="tab-content mb-3">
                        <div class="tab-pane fade show active" id="semua_pesanan">
                            <div class="row">
                                <div class="col-5">
                                    <div class="rounded-pill shadow umkm-border-green d-flex p-1 pl-4 align-items-center">
                                        <i class="fa fa-calendar fa-lg"></i>
                                        <input type="text" name="tanggal" placeholder="17 Desember 2020 - 20 Desember 2020" class="form-control border-0 mr-2">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="rounded-pill shadow umkm-border-green d-flex p-1 pr-4 align-items-center">
                                        <input type="text" name="tanggal" placeholder="Cari Nama Toko, Nomor Invoice..." class="form-control border-0 ml-2">
                                        <i class="fa fa-search fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="pesanan_baru">
                            <div class="row">
                                <div class="col-5">
                                    <div class="rounded-pill shadow umkm-border-green d-flex p-1 pl-4 align-items-center">
                                        <i class="fa fa-calendar fa-lg"></i>
                                        <input type="text" name="tanggal" placeholder="17 Desember 2020 - 20 Desember 2020" class="form-control border-0 mr-2">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="rounded-pill shadow umkm-border-green d-flex p-1 pr-4 align-items-center">
                                        <input type="text" name="tanggal" placeholder="Cari Nama Toko, Nomor Invoice..." class="form-control border-0 ml-2">
                                        <i class="fa fa-search fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        
        <div class="col-12">
            <div class="card umkm-rounded shadow">
                <div class="card-body p-0">

                    <div class="umkm-header border-bottom border-dark py-2 px-4 d-flex align-items-center">
                        <div class="white-box mr-2 border border-dark">&nbsp;</div>
                        <span>234gH79A</span>
                    </div>
                    
                    <div class="row px-1 py-3 d-flex flex-wrap">
                        <div class="col-sm-4 d-flex">
                            <div class="col-4">
                                <img src="{{ asset('/assets/images/pixie.jpg') }}" alt="Sample Images" class="w-100">
                            </div>
                            <div class="col-8 text-uppercase">
                                <div class="umkm-header font-weight-bold">
                                    Endang Kitchen Set
                                </div>
                                <div class="small text-muted">
                                    1 Product @ Rp.99.000,-
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 border-left border-dark">
                            <div class="card-title text-uppercase font-weight-bold">
                                Alamat
                            </div>
                            <div class="small text-muted">
                                Endang Sukamto <br>
                                Jl. Kenangan 9 No. 5, Ikat Kasih <br>
                                Jakarta 14045 <br>
                                08765432167
                            </div>
                        </div>
                        <div class="col-sm-4 border-left border-dark">
                            <div class="card-title font-weight-bold">
                                Total Harga
                            </div>
                            <div class="text-success">
                                Rp.99.900
                            </div>
                        </div>
                    </div>
                    <div class="p-3 umkm-flex-between border-top border-dark">
                        <span><i class="fa fa-file fa-lg mr-2"></i> Status Pesanan</span>
                        <button class="btn text-uppercase umkm-btn btn-dark" data-popup="penjualan/terima_pesanan">
                            Terima Pesanan
                        </button>
                    </div>

                </div>
            </div>
        </div>
        

        <div class="col-12 mt-4 mb-4 d-flex justify-content-center">
          <button class="btn umkm-btn umkm-bg-white px-4 shadow">LIHAT LEBIH BANYAK</button>
        </div>

    </div>

@endsection