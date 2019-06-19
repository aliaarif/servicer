@extends('layouts.master')

@section('title')
Quicker
@endsection

@section('header-class')
is_sticky menu_fixed
@endsection

@section('content')
<main>
        <div id="quicker_page">
            <div class="wrapper">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-lg-9">
                            <h2>GET IT DONE!</h2>
                            <p>Choose from thousands of Service providers ready to do something awesome for you.</p>
                                <div class="quicker_search_bar">
                                    <input type="text" class="flexdatalist form-control" data-min-length='0' placeholder="What service do you need?" required="" list="languages" id="quoteCategory">
                                        <datalist id="languages" onmouseleave="this.form.submit()">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        </datalist>
                                    <input type="submit" value="Get Quotes" id="getQuoteBtn" data-backdrop="static" data-keyboard="false">
                                </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /hero_single -->   

        <div class="bg_color_1">
            <div class="container padding_55_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Explore Quickers</h2>
                    <p>Search Quickers around you by categories to get things done.</p>
                </div>
                <div class="row justify-content-center quicker-category">
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/024-cleaning-spray.svg')}}" width="65" height="65" alt="">
                            <h3>Cleaning</h3>
                            <ul>
                                <li><strong>1240</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/034-paint.svg')}}" width="65" height="65" alt="">
                            <h3>Painting</h3>
                            <ul>
                                <li><strong>20</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/037-lawn-mower.svg')}}" width="65" height="65" alt="">
                            <h3>Gardening</h3>
                            <ul>
                                <li><strong>266</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/035-house.svg')}}" width="65" height="65" alt="">
                            <h3>Furnishing</h3>
                            <ul>
                                <li><strong>56</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/024-cleaning-spray.svg')}}" width="65" height="65" alt="">
                            <h3>Plumbing</h3>
                            <ul>
                                <li><strong>522</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/028-bleach.svg')}}" width="65" height="65" alt="">
                            <h3>Pest Control</h3>
                            <ul>
                                <li><strong>63</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/019-gloves.svg')}}" width="65" height="65" alt="">
                            <h3>Electrical</h3>
                            <ul>
                                <li><strong>466</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a href="#" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img src="{{asset('assets/icons/svg/019-gloves.svg')}}" width="65" height="65" alt="">
                            <h3>Electrical</h3>
                            <ul>
                                <li><strong>466</strong>Quickers</li>
                            </ul>
                        </a>
                    </div>
                </div>
            <!-- /row -->
            </div>
            <!-- /container --> 
        </div>

        <div class="call_section">
            <div class="wrapper">
                <div class="container padding_55_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>How it Works</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how wow">
                                <i class="pe-7s-search"></i>
                                <h3>Search Locations</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-info"></i>
                                <h3>View Location Info</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-like2"></i>
                                <h3>Book, Reach or Call</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                
                </div>
            </div>
            <!-- /wrapper -->
        </div>

        <div class="container-fluid padding_55_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Popular Quickers</h2>
                <p>Recent Popular quickers to make your life easy!</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Cleaning</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Plumbing</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Electrical</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>painting</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Cleaning</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Cleaning</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="#" class="wish_bt"></a>
                            <a href="#"><img src="{{asset('assets/img/location_1.jpg')}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
                            <small>Cleaning</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="#">Da Alfredo</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="">Auckland, NZ</span>
                        </div>
                        <ul>
                            <li><a class="btn btn-sm btn-outline-primary" href="#">Get Quote</a></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /carousel -->
            <div class="container">
                <div class="btn_home_align"><a href="#" class="btn_1 rounded">View all</a></div>
            </div>
            <!-- /container -->
        </div>
        <!-- /container -->

        <div class="call_section">
            <div class="wrapper">
                <div class="container padding_55_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>What's great with us?</h2>
                        <p>Benefits of joining Quicker</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how wow">
                                <i class="pe-7s-search"></i>
                                <h3>Search Locations</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-info"></i>
                                <h3>View Location Info</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-like2"></i>
                                <h3>Book, Reach or Call</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    
                </div>
            </div>
            <!-- /wrapper -->
        </div>

        <div class="containerr-fluid padding_55_55" style="background: white">
            <div class="main_title_2" style="margin-bottom: 15px;">
                <span><em></em></span>
                <h2>Quicker App Available</h2>
                <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
            </div>
            <div class="justify-content-center text-center">
                <div class="col-md-12">
                    <img src="{{asset('assets/img/mobile.svg')}}" style="max-width: 50%;" class="img-fluid add_bottom_45">
                    <div class="app_icons"><a href="#0" class="pr-lg-2"><img src="{{asset('assets/img/app_android.svg')}}" alt=""></a> <a href="#0" class="pl-lg-2"><img src="{{asset('assets/img/app_apple.svg')}}" alt=""></a></div>
                    <!-- <div class="add_bottom_15"><small>*An eum dolores tractatos, aeterno menandri deseruisse ut eum.</small></div> -->
                </div>
            </div>
        </div>

        <div class="container-fluid padding_55_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Testimonial</h2>
                <!-- <p>Recent Popular quickers to make your life easy!</p> -->
            </div>
            
            <div class="container">
                <div id="testimonial">
                      <div class="row reviews-container">
                        <div class="col-lg-6">
                            <div class="review-box">
                                <figure class="rev-thumb"><img src="{{asset('assets/img/avatar1.jpg')}}" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Nick - Aukland, NZ
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review-box">
                                <figure class="rev-thumb"><img src="{{asset('assets/img/avatar1.jpg')}}" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Nick - Aukland, NZ
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- /container -->

        <div class="call_section d-none d-lg-block d-md-block">
            <div class="wrapper">
                <div class="container padding_15 quicker-counter">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how wow">
                                <i class="pe-7s-search"></i>
                                <h2>1,00,564</h2>
                                <h3>TOTAL JOBS POSTED</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-users"></i>
                                <h2>50,564</h2>
                                <h3>REGISTERED USERS</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-add-user"></i>
                                <h2>25,564</h2>
                                <h3>REGISTERED QUICKERS</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wrapper -->
        </div>



        <!--/call_section-->
    </main>
    <!-- /main -->
@endsection

@section('modals')

@endsection

@section('scripts')

@endsection

