@extends('layouts.front-end.index')

@section('content')
        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- ASIDE -->
                    <div id="aside" class="col-md-3">
                        <!-- aside Widget -->
                        <div class="aside">
                            <h3 class="aside-title">Brand</h3>
                            <div class="checkbox-filter">
                                @if(count($brands))
                                    @foreach($brands as $brand)
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="brand-{{$brand->name}}">
                                        <label for="brand-{{$brand->name}}">
                                            <span></span>
                                            {{ucfirst($brand->name)}}
                                            <small>(120)</small>
                                        </label>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /aside Widget -->

                        <!-- aside Widget -->
                        <div class="aside">
                            <h3 class="aside-title">Price</h3>
                            <div class="price-filter">
                                <h5>Hourly</h5>
                                <div id="price-slider"></div>
                                <div class="input-number price-min">
                                    <input id="price-min" type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                                <span>-</span>
                                <div class="input-number price-max">
                                    <input id="price-max" type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                        </div>
                        <!-- /aside Widget -->
                        
                    </div>
                    <!-- /ASIDE -->

                    <!-- STORE -->
                    <div id="store" class="col-md-9">
                        <!-- store top filter -->
                        <div class="store-filter clearfix">
                            <div class="store-sort">
                                <label>
                                    Sort By:
                                    <select class="input-select">
                                        <option value="0">Popular</option>
                                        <option value="1">Position</option>
                                    </select>
                                </label>

                                <label>
                                    Show:
                                    <select class="input-select">
                                        <option value="0">20</option>
                                        <option value="1">50</option>
                                    </select>
                                </label>
                            </div>
                            <ul class="store-grid">
                                <li class="active"><i class="fa fa-th"></i></li>
                                <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <!-- /store top filter -->

                        <!-- store products -->
                        <div class="row">
                            @if(count($listings))
                                @foreach($listings as $listing)
                                <!-- product -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                            <div class="product-label">
                                                <span class="product-location"> 
                                                    <i class="fa fa-map-pin"></i> DKI Jakarta / Jakarta Selatan
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $listing->category->name }} / {{ $listing->brand->name }}</p>
                                            <h3 class="product-title"><a href="#">{{ $listing->title }} ( {{$listing->manufactured_year }}) </a></h3>
                                            <br>
                                            <h4 class="product-price-title">Harga Sewa</h4>
                                            <div class="product-price-detail">
                                                <div class="row">
                                                    <div class="col-md-4">Perjam</div>
                                                    <div class="col-md-8">{{ number_format($listing->hourly_price)}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">Perhari</div>
                                                    <div class="col-md-8">{{ number_format($listing->daily_price) }}</div>
                                                </div>
                                            </div>
                                            <h3 class="product-owner">
                                                <a href="#"><i class="fa fa-user"></i> {{ $listing->user->name }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /product -->
                                @endforeach
                            @endif
                        </div>
                        <!-- /store products -->

                        <!-- store bottom filter -->
                        <div class="store-filter clearfix">
                            <span class="store-qty">Showing {{$listings->count()}} of {{$listings->total()}} result</span>
                            <ul class="store-pagination">
                                {{ $listings->links() }}
                            </ul>
                        </div>
                        <!-- /store bottom filter -->
                    </div>
                    <!-- /STORE -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
@endsection