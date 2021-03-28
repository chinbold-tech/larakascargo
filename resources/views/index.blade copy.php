@extends('layouts.main')
@section('content')
    <!--================Home Banner Area =================-->
    <section id="banner" class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="image-box">
                            <img src="img/official/order_instruction.jpg" alt="">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="banner_content">
                            <h3>Build a better<br/>business & faster</h3>
                            <p>Subdue creature does face signs evening good sixth foreign gaered one. Fruit. Third every fruitful multiply subdue creature doesn't face signs evening good sixth tyou're.</p>
                            <a class="banner_btn" href="#">Begin Free Trial<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Service  Area =================-->
    
    <section id="feature" class="service-area area-padding">
        <div class="container">
            <div class="row">

                <div class="mt-10 max-w-xl mx-auto">
                    @foreach(\App\Models\Post::all() as $post)
                        <div class="border-b mb-5 pb-5 border-gray-200">
                            <img class="card-img-top" src="{{ asset($post['featured_image']) }}"
                        alt="{{ asset($post['featured_image'])  }}">
                            <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                            <p>{{ Str::limit($post->body, 100) }}</p>
                        </div>
                        
                    <div class="card-footer text-muted">
                        Posted on {{$post->created_at->format('M d Y')}} by
                        <a href="#">{{$post->user['name']}}</a>
                    </div>
                    @endforeach
                </div>
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Unique Design</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-image"></i>
                        </div>
                        <div class="service-content">
                            <h5>Business Solution</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Customer Support</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Service Area end =================-->


    <!--================About  Area =================-->
    <section class="area-padding-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="area-heading">
                        <h4>Form Female From<br>Cattle Evening. </h4>
                        <h6>And appear great open bearing evening dominion vodi </h6>

                        <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="image-box">
                        <img src="img/official/order_info.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================About  Area =================-->
    <section class="statics-area area-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="image-box">
                        <img src="img/banner/about3.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-6">
                    <div class="area-heading">
                        <h4>Form Female Froms<br>Cattle Evenings. </h4>
                        <h6>And appear great open bearing evening dominion vodi </h6>

                        <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-paint-bucket"></i>
                        <p>Set dry signs spirit a kind First shall them.</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-check-box"></i>
                        <p>He two face one moved dominion man you're likeness</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-ruler-pencil"></i>
                        <p>Sea forth fill have divide be dominion from life</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->





    <!--================ Start Portfolio Area =================-->
    <section id="price" class="pricing_area area-padding-top area-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="area-heading">
                        <h4>Our Pricing Plan</h4>
                        <p>Life firmament under them evening make after called dont saying likeness<br> isn't wherein also forth she'd air two without</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-home"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Standard</h5>
                            <h4>$25<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-bag"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Business</h5>
                            <h4>$35<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-car"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Premium</h5>
                            <h4>$45<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-gift"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Ultimate</h5>
                            <h4>$55<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Pricing Area =================-->

@endsection
