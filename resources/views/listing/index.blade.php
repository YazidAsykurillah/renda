@extends('layouts.front-end.shop')

@section('content')
     <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>{{ $listingBreadcrumb }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Price</p>
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div>

                       
                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#">Asos</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">River Island</a></li>
                                    <li><a href="#">Topshop</a></li>
                                    <li><a href="#">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @if($results->count() > 0)
                                @foreach($results as $result)
                                <!-- Single Product -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="img/product-img/product-1.jpg" alt="">
                                            

                                            <!-- Product Badge -->
                                            <div class="product-badge new-badge">
                                                <span>New</span>
                                            </div>
                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                            
                                            <a href="{{ url('listing/'.$result->slug) }}">
                                                <h6>{{ $result->title }}</h6>
                                            </a>
                                            <p>
                                                <i class="fa fa-calendar"></i> {{ $result->manufactured_year}}
                                                <i class="fa fa-calendar"></i> {{ $result->cylinder_capacity}}
                                            </p>
                                            <div class="price-information">
                                                <p class="price-information-title">
                                                    <i class="fa fa-money"></i> Rental Price
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-6">Hourly</div>
                                                    <div class="col-md-6 price-nominal">{{number_format($result->hourly_price)}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">Daily</div>
                                                    <div class="col-md-6 price-nominal">{{number_format($result->daily_price)}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">Weekly</div>
                                                    <div class="col-md-6 price-nominal">{{number_format($result->weekly_price)}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">Monthly</div>
                                                    <div class="col-md-6 price-nominal">{{number_format($result->monthly_price)}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">Annual</div>
                                                    <div class="col-md-6 price-nominal">{{number_format($result->annual_price)}}</div>
                                                </div>
                                            </div>

                                            <div class="owner-information">
                                                <i class="fa fa-user"></i> {{ $result->user->name }}
                                            </div>

                                            <div class="location-information">
                                                <i class="fa fa-map-pin"></i> {{$result->city->province->name}} / {{$result->city->name}}
                                            </div>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="detail-btn">
                                                    <a href="{{ url('listing/'.$result->slug) }}" class="btn essence-btn">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection