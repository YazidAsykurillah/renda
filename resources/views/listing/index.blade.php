@extends('layouts.front-end.shop')

@section('content')
     <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>{{ $listingCategory }}</h2>
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
                        <h6>Search Filter</h6>

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand</label>
                                <select name="brand" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Apply</button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>{{$results->total() }} </span> {{$listingCategory}} found</p>
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
                            @if($results->total() > 0)
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
                                                <i class="fa fa-flag" title="Brand"></i> {{ ucwords($result->brand->name) }}
                                            </p>
                                            <p>
                                                <i class="fa fa-calendar"></i> {{ $result->manufactured_year}}
                                                &nbsp;&nbsp;
                                                <i class="fa fa-gears"></i> {{ ucwords($result->transmission)}}
                                                &nbsp;&nbsp;
                                                <i class="fa fa-fire"></i> {{ $result->cylinder_capacity}}cc

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
                            {{ $results->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection