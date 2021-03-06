@extends('welcome')
@section('titlepage','Hubungi Kami | belanjasemua.com')
<?php $y = Date('Y'); ?>
@section('deschomepage','Ayo konsultusi untuk upvc di rumah idaman kamu. Jangan ragu. Konsultasi sekarang juga, hubungi
musimpanen.co.id.')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
						============================================= -->
                <div class="col-lg-6">

                    <div class="fancy-title title-border">
                        <h3>Kirim Kami Pesan</h3>
                    </div>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform"
                            action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name"
                                        value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email"
                                        name="template-contactform-email" value=""
                                        class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                        value="" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message"
                                        name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck"
                                        name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                        class="button button-3d m-0">Kirim Pesan</button>
                                </div>
                            </div>
                            <input type="hidden" name="prefix" value="template-contactform-">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 min-vh-50">
                    <div class="alignright gmap" id="google-map2" data-latitude="3.5982323" data-longitude="98.6663704">
                    </div>
                </div>
            </div>
            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Our Office<span class="subtitle"> JL.Dadap No.5-A-3, RT.000/RW.000, Sekip, Kec. Medan
                                    Petisah, Kota Medan, Sumatera Utara 20113</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Speak to Us

                                <span class="subtitle">+62 823 7080 9595</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-email"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Email us<span class="subtitle">info@belanjasemua.com</span></h3>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info End -->
            <div class="row mb-5">
                <div class="col-sm-12 col-lg-12">
                    <a href="https://wa.me/6282370809595"
                        class="button button-3d border-bottom-0 button-full center text-right bottommargin-md font-weight-light font-primary"
                        style="font-size: 2rem;">
                        <div class="container clearfix">
                            Mau menghubungi kami secara langsung? <strong>Hubungi kami disini</strong> <i
                                class="icon-angle-right"></i>
                        </div>
                    </a>
                </div>
            </div><!-- Contact Info End -->

        </div>
    </div>
</section>
@endsection
