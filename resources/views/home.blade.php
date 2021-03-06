<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>自助旅行</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="original-load"></div>
    </div>
</div>

<!-- Subscribe Modal -->
<div class="subscribe-newsletter-area">
    <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h5 class="title">Subscribe to my newsletter</h5>
                    <form action="#" class="newsletterForm" method="post">
                        <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                        <button type="submit" class="btn original-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-sm-8">
                    <div class="breaking-news-area">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">歡迎!!</a></li>
                                <li><a href="#">來場自助旅行吧!</a></li>
                                <li><a href="#">盡情的揮灑吧!</a></li>
                                <li><a href="#">快樂的出遊吧!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Social Area -->
                <div class="col-12 col-sm-4">
                    <div class="top-social-area">
                        <a  href="{{(route('register'))}}" title="註冊">註冊</a>
                        <a  href="{{(route('login'))}}" title="登入">登入</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area text-center">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <a href="home" class="original-logo" ><font size="6">Let's Go Deep Travel!</font></a>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- Nav Area -->--}}
{{--    <div class="original-nav-area" id="stickyNav">--}}
{{--        <div class="classy-nav-container breakpoint-off">--}}
{{--            <div class="container">--}}
{{--                <!-- Classy Menu -->--}}
{{--                <nav class="classy-navbar justify-content-between">--}}

{{--                    <!-- Subscribe btn -->--}}
{{--                    <div class="subscribe-btn">--}}
{{--                    </div>--}}

{{--                    <!-- Navbar Toggler -->--}}
{{--                    <div class="classy-navbar-toggler">--}}
{{--                        <span class="navbarToggler"><span></span><span></span><span></span></span>--}}
{{--                    </div>--}}
{{--123--}}
{{--                    <!-- Menu -->--}}
{{--                    <div class="classy-menu" id="originalNav">--}}
{{--                        <!-- close btn -->--}}
{{--                        <div class="classycloseIcon">--}}
{{--                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>--}}
{{--                        </div>--}}

{{--                        <!-- Nav Start -->--}}
{{--                        <div class="classynav">--}}
{{--                            <ul>--}}
{{--                                <li><a href="index.html">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a>--}}
{{--                                    <ul class="dropdown">--}}
{{--                                        <li><a href="index.html">Home</a></li>--}}
{{--                                        <li><a href="about-us.html">About Us</a></li>--}}
{{--                                        <li><a href="single-post.html">Single Post</a></li>--}}
{{--                                        <li><a href="contact.html">Contact</a></li>--}}
{{--                                        <li><a href="coming-soon.html">Coming Soon</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">Catagory</a>--}}
{{--                                    <ul class="dropdown">--}}
{{--                                        <li><a href="#">Catagory 1</a></li>--}}
{{--                                        <li><a href="#">Catagory 1</a></li>--}}
{{--                                        <li><a href="#">Catagory 1</a>--}}
{{--                                            <ul class="dropdown">--}}
{{--                                                <li><a href="#">Catagory 2</a></li>--}}
{{--                                                <li><a href="#">Catagory 2</a></li>--}}
{{--                                                <li><a href="#">Catagory 2</a>--}}
{{--                                                    <ul class="dropdown">--}}
{{--                                                        <li><a href="#">Catagory 3</a></li>--}}
{{--                                                        <li><a href="#">Catagory 3</a></li>--}}
{{--                                                        <li><a href="#">Catagory 3</a></li>--}}
{{--                                                        <li><a href="#">Catagory 3</a></li>--}}
{{--                                                        <li><a href="#">Catagory 3</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#">Catagory 2</a></li>--}}
{{--                                                <li><a href="#">Catagory 2</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="#">Catagory 1</a></li>--}}
{{--                                        <li><a href="#">Catagory 1</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="about-us.html">About Us</a></li>--}}
{{--                                <li><a href="#">Megamenu</a>--}}
{{--                                    <div class="megamenu">--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li class="title">Headline 1</li>--}}
{{--                                            <li><a href="#">Mega Menu Item 1</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 2</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 3</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 4</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 5</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li class="title">Headline 2</li>--}}
{{--                                            <li><a href="#">Mega Menu Item 1</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 2</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 3</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 4</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 5</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li class="title">Headline 3</li>--}}
{{--                                            <li><a href="#">Mega Menu Item 1</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 2</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 3</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 4</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 5</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li class="title">Headline 4</li>--}}
{{--                                            <li><a href="#">Mega Menu Item 1</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 2</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 3</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 4</a></li>--}}
{{--                                            <li><a href="#">Mega Menu Item 5</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li><a href="contact.html">Contact</a></li>--}}
{{--                            </ul>--}}

{{--                            <!-- Search Form  -->--}}
{{--                    --}}{{--                            <div id="search-wrapper">--}}
{{--                    --}}{{--                                <form action="#">--}}
{{--                    --}}{{--                                    <input type="text" id="search" placeholder="Search something...">--}}
{{--                    --}}{{--                                    <div id="close-icon"></div>--}}
{{--                    --}}{{--                                    <input class="d-none" type="submit" value="">--}}
{{--                    --}}{{--                                </form>--}}
{{--                    --}}{{--                            </div>--}}
{{--                    --}}{{--                        </div>--}}
{{--                        <!-- Nav End -->--}}
{{--                    </div>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
<!-- ##### Header Area End ##### -->

<!-- ##### 註解部分 ##### -->
{{--<div class="hero-area">--}}
{{--    <!-- Hero Slides Area -->--}}
{{--    <div class="hero-slides owl-carousel">--}}
{{--        <!-- Single Slide -->--}}
{{--        <div class="single-hero-slide bg-img" style="background-image: url({{Storage::url($photo->path)}});">--}}

{{--            <img class="figure-img img-fluid rounded"  >--}}
{{--            <div class="container h-100">--}}
{{--                <div class="row h-100 align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slide-content text-center">--}}
{{--                            <div class="post-tag">--}}
{{--                                <a href="#" data-animation="fadeInUp">{{$attraction->name}}</a>--}}
{{--                            </div>--}}
{{--                            <a href="{{route('login')}}" class="btn btn-link"style="background-color:#FFF0D4"data-animation="fadeInUp" ><font color="black">{{$content4}}..</font></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Single Slide -->--}}
{{--        <div class="single-hero-slide bg-img" style="background-image: url({{Storage::url($photo1->path)}});">--}}
{{--            <div class="container h-100">--}}
{{--                <div class="row h-100 align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slide-content text-center">--}}
{{--                            <div class="post-tag">--}}
{{--                                <a href="#" data-animation="fadeInUp">{{$attraction1->name}}</a>--}}
{{--                            </div>--}}

{{--                            <a href="{{route('login')}}" class="btn btn-link"style="background-color:#FFF0D4"data-animation="fadeInUp" ><font color="black">{{$content5}}..</font></a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Single Slide -->--}}
{{--        <div class="single-hero-slide bg-img" style="background-image: url({{Storage::url($photo2->path)}});">--}}
{{--            <div class="container h-100">--}}
{{--                <div class="row h-100 align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slide-content text-center">--}}
{{--                            <div class="post-tag">--}}
{{--                                <a href="#" data-animation="fadeInUp">{{$attraction2->name}}</a>--}}
{{--                            </div>--}}
{{--                            <a href="{{route('login')}}" class="btn btn-link"style="background-color:#FFF0D4"data-animation="fadeInUp" ><font color="black">{{$content6}}..</font></a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--再一個-->--}}
{{--        <div class="single-hero-slide bg-img" style="background-image: url({{Storage::url($photo3->path)}});">--}}
{{--            <div class="container h-100">--}}
{{--                <div class="row h-100 align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slide-content text-center">--}}
{{--                            <div class="post-tag">--}}
{{--                                <a href="#" data-animation="fadeInUp">{{$attraction3->name}}</a>--}}
{{--                            </div>--}}
{{--                            <a href="{{route('login')}}" class="btn btn-link"style="background-color:#FFF0D4"data-animation="fadeInUp" ><font color="black">{{$content7}}..</font></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- ##### Hero Area End ##### -->

<!-- ##### 開始修改 ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">
        <div class="row align-items-end">
{{--            <!-- Single Blog Area -->--}}
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-area clearfix mb-100">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                {{$attraction->name}}
                                <img class="figure-img "  src="{{Storage::url($photo->path)}}" width="1000">
                                <a href="#"></a>
                                <h4><a href="#" class="post-headline"></a>{{$content4}}</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction1->name}}
                        <img class="figure-img "  src="{{Storage::url($photo1->path)}}" width="1000" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content5}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction2->name}}
                        <img class="figure-img "  src="{{Storage::url($photo2->path)}}" width="1000">
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content6}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction3->name}}
                        <img class="figure-img "  src="{{Storage::url($photo3->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content7}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction4->name}}
                        <img class="figure-img "  src="{{Storage::url($photo4->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content8}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction5->name}}
                        <img class="figure-img "  src="{{Storage::url($photo5->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content9}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction6->name}}
                        <img class="figure-img "  src="{{Storage::url($photo6->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content10}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction7->name}}
                        <img class="figure-img "  src="{{Storage::url($photo7->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content11}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        {{$attraction8->name}}
                        <img class="figure-img "  src="{{Storage::url($photo8->path)}}" >
                        <a href="#"></a>
                        <h4><a href="#" class="post-headline"></a>{{$content12}}</h4>
                        <p></p>
                    </div>
                </div>
            </div>
{{--    <div class="container">--}}
        <div class="row">
            <div class="col-12 col-lg-9">

                <!-- Single Blog Area  -->
{{--                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-blog-thumbnail">--}}
{{--                                <img src="img/blog-img/3.jpg" alt="">--}}
{{--                                <div class="post-date">--}}
{{--                                    <a href="#">12 <span>march</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <!-- Blog Content -->--}}
{{--                            <div class="single-blog-content">--}}
{{--                                <div class="line"></div>--}}
{{--                                <a href="#" class="post-tag">Lifestyle</a>--}}
{{--                                <h4><a href="#" class="post-headline">Party people in the house</a></h4>--}}
{{--                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>--}}
{{--                                <div class="post-meta">--}}
{{--                                    <p>By <a href="#">james smith</a></p>--}}
{{--                                    <p>3 comments</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Blog Area  -->--}}
{{--                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-blog-thumbnail">--}}
{{--                                <img src="img/blog-img/4.jpg" alt="">--}}
{{--                                <div class="post-date">--}}
{{--                                    <a href="#">12 <span>march</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <!-- Blog Content -->--}}
{{--                            <div class="single-blog-content">--}}
{{--                                <div class="line"></div>--}}
{{--                                <a href="#" class="post-tag">Lifestyle</a>--}}
{{--                                <h4><a href="#" class="post-headline">We love colors in 2018</a></h4>--}}
{{--                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>--}}
{{--                                <div class="post-meta">--}}
{{--                                    <p>By <a href="#">james smith</a></p>--}}
{{--                                    <p>3 comments</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Blog Area  -->--}}
{{--                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1000ms">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="single-blog-thumbnail">--}}
{{--                                <img src="img/blog-img/7.jpg" alt="">--}}
{{--                                <div class="post-date">--}}
{{--                                    <a href="#">10 <span>march</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
                            <!-- Blog Content -->
{{--                            <div class="single-blog-content mt-50">--}}
{{--                                <div class="line"></div>--}}
{{--                                <a href="#" class="post-tag">Lifestyle</a>--}}
{{--                                <h4><a href="#" class="post-headline">10 Tips to organize the perfect party</a></h4>--}}
{{--                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>--}}
{{--                                <div class="post-meta">--}}
{{--                                    <p>By <a href="#">james smith</a></p>--}}
{{--                                    <p>3 comments</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Blog Area  -->--}}
{{--                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1000ms">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-blog-thumbnail">--}}
{{--                                <img src="img/blog-img/5.jpg" alt="">--}}
{{--                                <div class="post-date">--}}
{{--                                    <a href="#">12 <span>march</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <!-- Blog Content -->--}}
{{--                            <div class="single-blog-content">--}}
{{--                                <div class="line"></div>--}}
{{--                                <a href="#" class="post-tag">Lifestyle</a>--}}
{{--                                <h4><a href="#" class="post-headline">Party people in the house</a></h4>--}}
{{--                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>--}}
{{--                                <div class="post-meta">--}}
{{--                                    <p>By <a href="#">james smith</a></p>--}}
{{--                                    <p>3 comments</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Blog Area  -->--}}
{{--                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1000ms">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <div class="single-blog-thumbnail">--}}
{{--                                <img src="img/blog-img/6.jpg" alt="">--}}
{{--                                <div class="post-date">--}}
{{--                                    <a href="#">12 <span>march</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6">--}}
{{--                            <!-- Blog Content -->--}}
{{--                            <div class="single-blog-content">--}}
{{--                                <div class="line"></div>--}}
{{--                                <a href="#" class="post-tag">Lifestyle</a>--}}
{{--                                <h4><a href="#" class="post-headline">We love colors in 2018</a></h4>--}}
{{--                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>--}}
{{--                                <div class="post-meta">--}}
{{--                                    <p>By <a href="#">james smith</a></p>--}}
{{--                                    <p>3 comments</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Load More -->--}}
{{--                <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">--}}
{{--                    <a href="#" class="btn original-btn">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- ##### Sidebar Area ##### -->--}}
{{--            <div class="col-12 col-md-4 col-lg-3">--}}
{{--                <div class="post-sidebar-area">--}}

{{--                    <!-- Widget Area -->--}}
{{--                    <div class="sidebar-widget-area">--}}
{{--                        <form action="#" class="search-form">--}}
{{--                            <input type="search" name="search" id="searchForm" placeholder="Search">--}}
{{--                            <input type="submit" value="submit">--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                    <!-- Widget Area -->--}}
{{--                    <div class="sidebar-widget-area">--}}
{{--                        <h5 class="title subscribe-title">Subscribe to my newsletter</h5>--}}
{{--                        <div class="widget-content">--}}
{{--                            <form action="#" class="newsletterForm">--}}
{{--                                <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">--}}
{{--                                <button type="submit" class="btn original-btn">Subscribe</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Widget Area -->--}}
{{--                    <div class="sidebar-widget-area">--}}
{{--                        <h5 class="title">Advertisement</h5>--}}
{{--                        <a href="#"><img src="img/bg-img/add.gif" alt=""></a>--}}
{{--                    </div>--}}

{{--                    <!-- Widget Area -->--}}
{{--                    <div class="sidebar-widget-area">--}}
{{--                        <h5 class="title">Latest Posts</h5>--}}

{{--                        <div class="widget-content">--}}

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
{{--                                <div class="post-thumbnail">--}}
{{--                                    <img src="img/blog-img/lp1.jpg" alt="">--}}
{{--                                </div>--}}
                                <!-- Post Content -->
{{--                                <div class="post-content">--}}
{{--                                    <a href="#" class="post-tag" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nbsp;&nbsp;></a>--}}
{{--                                    <h4><a href="#" class="post-headline"></a></h4>--}}
{{--                                    <div class="post-meta">--}}
{{--                                        <p><a href="#"></a></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta">
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta">
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <div class="widget-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Wrapper End ##### -->

<!-- ##### Instagram Feed Area Start ##### -->
{{--<div class="instagram-feed-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="insta-title">--}}
{{--                    <h5>Follow us @ Instagram</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Instagram Slides -->
{{--    <div class="instagram-slides owl-carousel">--}}
{{--        <!-- Single Insta Feed -->--}}
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/1.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Single Insta Feed -->--}}
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/2.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Insta Feed -->
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/3.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Insta Feed -->
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/4.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Insta Feed -->
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/5.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Insta Feed -->
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/6.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Insta Feed -->
{{--        <div class="single-insta-feed">--}}
{{--            <img src="img/instagram-img/7.png" alt="">--}}
{{--            <!-- Hover Effects -->--}}
{{--            <div class="hover-effects">--}}
{{--                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- ##### Instagram Feed Area End ##### -->--}}

{{--<!-- ##### Footer Area Start ##### -->--}}
<footer class="footer-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">

{{--                <!-- Footer Nav Area -->--}}
{{--                <div class="classy-nav-container breakpoint-off">--}}
                    <!-- Classy Menu -->
{{--                        <nav class="classy-navbar justify-content-center">--}}

                        <!-- Navbar Toggler -->
{{--                        <div class="classy-navbar-toggler">--}}
{{--                            <span class="navbarToggler"><span></span><span></span><span></span></span>--}}
{{--                        </div>--}}

                        <!-- Menu -->
{{--                        <div class="classy-menu">--}}

                            <!-- close btn -->
{{--                            <div class="classycloseIcon">--}}
{{--                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>--}}
{{--                            </div>--}}

                            <!-- 底部 -->
                            <div class="classynav" >
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>


            </div>
        </div>
    </div>

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
{{--    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</footer>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

{{--</body>--}}

</html>
