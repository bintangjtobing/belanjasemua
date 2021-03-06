@extends('welcome')
@section('titlepage','belanjasemua.com - Mau beli barang dengan harga asli? Dengan harga jasa penawaran rendah?')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header include-topbar">
    <div class="slider-inner">

        <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
            data-arrows="false" data-pagi="false" style="background-color: #333;">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/1.jpg')!!}') center center; background-size: cover;">
                    </div>
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/2.jpg')!!}') center center; background-size: cover;">
                    </div>
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/3.jpg')!!}') center center; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div id="travel-slider-overlay">
            <div class="vertical-middle">
                <div class="container py-5 pt-5 pb-lg-0">
                    <div class="tabs travel-organiser-tabs mt-lg-5">
                        <ul class="tab-nav">
                            <li><a href="#tab-order"><i class="icon-cart"></i><span class="d-none d-md-inline-block">Yok
                                        belanja semua!</span></a></li>
                        </ul>

                        <div class="tab-container">
                            <div class="tab-content" id="tab-order">
                                <div class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center"
                                    style="margin-top: 0 !important;">
                                    <h4>Mau belanja apa nih sob?</h4>
                                </div>
                                @if(session('selamat'))
                                <div class="style-msg successmsg">
                                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong>
                                        {{session('selamat')}}</div>
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                </div>
                                @endif
                                <form action="/proses/belanja" method="post" class="mb-0">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12 bottommargin-sm">
                                            <label>Pesanan</label>
                                            <input type="text" name="produk" value="" class="sm-form-control my-2"
                                                placeholder="Produk atau URL Produk" required>
                                            <input type="text" id="rupiah" name="kisaran_harga" value=""
                                                class="sm-form-control my-2" placeholder="Kisaran harga barang"
                                                required>
                                            <input type="text" id="catatan" name="catatan" value=""
                                                class="sm-form-control my-2"
                                                placeholder="Catatan (warna, ukuran, tipe)">
                                        </div>
                                        <div class="col-md-6 col-12 bottommargin-sm">
                                            <label>Informasi Data Pribadi</label>
                                            <input type="text" name="nama_lengkap" value="" class="sm-form-control my-2"
                                                placeholder="Nama Lengkap" required>
                                            <input type="email" name="email" value="" class="sm-form-control my-2"
                                                placeholder="Email" required>
                                            <input type="tel" id="nohp" name="nohp" value=""
                                                class="sm-form-control my-2" placeholder="Nomor HP" required
                                                pattern=".{12,}" maxlength="15"
                                                oninvalid="setCustomValidity('Minimal panjang nomor telepon adalah 12 abjad/angka. ')"
                                                onchange="try{setCustomValidity('')}catch(e){}">
                                            <small class="text-muted">Format: 081234567890</small>
                                        </div>
                                        <div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
                                            <div class="row">
                                                <div class="col-md-12 col-6">
                                                    <label>Durasi Pengiriman</label>
                                                    <div>
                                                        <input id="radio-4" class="radio-style" name="tipe_pengiriman"
                                                            value="1" type="radio" checked>
                                                        <label for="radio-4" class="radio-style-1-label">Express</label>
                                                    </div>
                                                    <div>
                                                        <input id="radio-5" class="radio-style" name="tipe_pengiriman"
                                                            value="2" type="radio">
                                                        <label for="radio-5" class="radio-style-1-label">Regular</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <button type="submit" class="button button-3d m-0 rightmargin-sm">mulai
                                                belanja</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="section bottommargin-lg header-stick" style="margin-bottom: 0px !important;">
            <div class="container">
                <div class="row col-mb-30 mb-0">
                    <div class="col-sm-6 col-lg-4 text-center text-sm-left">
                        <div class="heading-block border-bottom-0 mb-0" style="margin-top: 0 !important;">
                            <span class="before-heading">Mengapa harus belanja di</span>
                            <h4><span>belanjasemua.com</span>?</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-plane"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Cepat</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-lock"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Transparan & Aman</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-check"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Resmi & Terjamin</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-cup"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Harga Terbaik</h4>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
</section>
@endsection
