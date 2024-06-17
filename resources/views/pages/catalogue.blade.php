@extends('layouts.user.app')

@section('content')
    <div class="catalogue" style="padding: 170px 0px 120px 0px; margin-top: 0;">
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
                @foreach ($categories as $category)
                    <li>
                        <a href="#!" class="text-decoration-none"
                            data-filter=".{{ str_replace(' ', '-', strtolower($category->name)) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="row catalogue_box">
                @foreach ($catalogues as $catalogueItem)
                    <div
                        class="col-lg-4 col-md-6 align-self-center mb-30 catalogue_outer {{ str_replace(' ', '-', strtolower($catalogueItem->category->name)) }}">
                        <div class="catalogue_item">
                            <div class="thumb">
                                <a href="{{ route('user.catalogue.detail', $catalogueItem->catalogue_id) }}"><img
                                        src="{{ Storage::url('catalogue/' . basename($catalogueItem->image)) }}"
                                        alt=""></a>
                                <span class="category">{{ $catalogueItem->category->name }}</span>
                            </div>
                            <div class="down-content">
                                <h4>{{ $catalogueItem->package_name }}</h4>
                                <p>Rp. {{ number_format($catalogueItem->price, 0, ',', '.') }}</p>
                                <a href="{{ route('user.catalogue.detail', $catalogueItem->catalogue_id) }}"
                                    class="detail">Detail klik disini</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush