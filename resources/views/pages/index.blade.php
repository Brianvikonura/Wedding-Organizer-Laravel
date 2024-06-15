@extends('layouts.user.app')

@section('content')
    <!-- hero section -->
    <div class="main-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item">
                        <div class="header-text">
                            <h2>Dengan JeWePe, menikah menjadi lebih mudah</h2>
                            <p>Pernikahan Indah, Perencanaan Mudah Bersama JeWePe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about section -->
    <div class="about">
        <div class="container">
            <h2 class="text-center mb-5 text-uppercase">Tentang Kami</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item">
                        <div class="main-content">
                            <h4 class="text-center">Visi</h4>
                            <p>Menjadi wedding organizer terdepan yang mewujudkan pernikahan impian setiap pasangan
                                dengan profesionalisme, kreativitas, dan layanan terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item">
                        <div class="main-content">
                            <h4 class="text-center">Misi</h4>
                            <p>
                                1. Memberikan layanan wedding planning yang komprehensif dan terencana dengan baik. <br>
                                2. Memahami dan mewujudkan setiap keinginan dan kebutuhan pasangan dalam pernikahan
                                mereka. <br>
                                3. Bekerja sama dengan vendor pernikahan terpercaya untuk memastikan kualitas terbaik di
                                setiap aspek pernikahan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- catalogue section -->
    <div class="catalogue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mb-5 fw-bold">
                        <h2 class="text-uppercase">Katalog</h2>
                    </div>
                </div>
            </div>
            <ul class="catalogue_filter">
                <li>
                    <a class="is_active text-decoration-none" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" class="text-decoration-none" data-filter=".allinone">All in One</a>
                </li>
                <li>
                    <a href="#!" class="text-decoration-none" data-filter=".intimate">Intimate</a>
                </li>
                <li>
                    <a href="#!" class="text-decoration-none" data-filter=".organizeonly">Organize Only</a>
                </li>
            </ul>
            <div class="row catalogue_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 catalogue_outer allinone">
                    <div class="catalogue_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('user/images/all in one.jpg') }}" alt=""></a>
                            <span class="category">All in One</span>
                        </div>
                        <div class="down-content">
                            <h4>All in One Package</h4>
                            <p>Rp. 200.000.000</p>
                            <a href="#" class="detail">Detail klik disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 catalogue_outer intimate">
                    <div class="catalogue_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('user/images/intimate.jpg') }}" alt=""></a>
                            <span class="category">Intimate</span>
                        </div>
                        <div class="down-content">
                            <h4>Intimate Package</h4>
                            <p>Rp. 100.000.000</p>
                            <a href="#" class="detail">Detail klik disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 catalogue_outer organizeonly">
                    <div class="catalogue_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('user/images/organize only.jpg') }}" alt=""></a>
                            <span class="category">Organize Only</span>
                        </div>
                        <div class="down-content">
                            <h4>Organize Only Package</h4>
                            <p>Rp. 50.000.000</p>
                            <a href="#" class="detail">Detail klik disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
