<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('themes/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('themes/css/mdb.min.css') }}" rel="stylesheet">
    <style>
        html,
        body,
        header,
        .jarallax {
            height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .jarallax {
                height: 500px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .jarallax {
                height: 600px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #24355c!important;
            }
            .navbar {
                box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
            }
        }

        .transport-lp .navbar {
            background-color: #24355c;
        }
        .pricing-card .price .number::after {
            position: absolute;
            margin-top: 1rem;
            font-size: 1.88rem;
            content: "/tháng";
        }

        .pricing-card .price .number::before {
            position: absolute;
            margin-top: .7rem;
            margin-left: -1.2rem;
            font-size: 1.88rem;
            content: "đ";
        }
        .pricing-card .price .number {
            padding: 1.5rem;
            font-size: 3rem;
            font-weight: 300;
        }
    </style>
</head>

<body class="intro-page transport-lp">

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-offset="100">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" data-offset="30">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features" data-offset="100">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing" data-offset="30">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#offer" data-offset="100">Offer</a>
                    </li>

                </ul>

                <!--Social Icons-->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/Navbar-->

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url({{ asset('themes/img/bg_fb_home.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-black-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row smooth-scroll">
                    <div class="col-md-12 white-text text-center">
                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <h1 class="display-4 text-uppercase rgba-black-light px-3 py-2"><strong class="font-weight-bold">Ứng dụng tự động Chốt đơn</strong></h1>
                            <h5 class="white-text mt-5">Hỗ trợ khách hàng 27/7</h5>
                            <h2 class="white-text text-uppercase h2-responsive font-weight-bold mb-5 mt-4">Tạo đơn và quản lý đơn nhanh chóng</h2>
{{--                            <a href="#getaquote" data-offset="100" class="btn btn-danger-2 btn-rounded">Get a quote</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--/Navigation & Intro-->

<!--Main content-->
<main>

    <!--First container-->
    <div class="container-fluid background-z">
        <div class="container">

            <!--Section: Possibilities-->
            <section class="py-4">

                <!--Secion heading-->
                <h2 class="text-center text-uppercase font-weight-bold mt-5 pt-4 spacing wow fadeIn" data-wow-delay="0.2s"><strong>Dịch vụ</strong></h2>

                <!--Section description-->
                <p class="text-center text-uppercase font-weight-bold grey-text mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s"><i
                        class="fas fa-square red-text-2 mr-2" aria-hidden="true"></i> Danh sách các chức năng có trong ứng dụng</p>

                <!--First row-->
                <div class="row mb-5 wow fadeIn" data-wow-delay="0.4s">

                    <div class="col-lg-3 col-md-6 text-center pt-1">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <br>
                            <strong>Tạo đơn hàng</strong>
                            <p>Tạo đơn hàng trực tiếp từ các bình luận trực tiếp khi live stream</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center pt-1">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            <br>
                            <strong>Quản lý đơn hàng</strong>
                            <p>Quy trình quản lý đơn hàng từ khâu tạo đơn hàng đến khi xuất hàng</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center pt-1">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-train"></i>
                            </div>
                            <br>
                            <strong>Quản lý sản phẩm</strong>
                            <p>Quản lý danh sách các sản phẩm, số lượng</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center pt-1">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <br>
                            <strong>Thống kê</strong>
                            <p>Tạo thống kê hàng tuần hàng tháng giúp người dùng dễ dàng tính được doanh thu hàng tuần hàng tháng</p>
                        </div>
                    </div>

                </div>
                <!--/First row-->

            </section>
            <!--/Section: Possibilities-->

        </div>
    </div>
    <!--/First container-->

    <!--Second container-->
    <div class="container">

        <!--Section: About-->
        <section id="about" class="about my-5">

            <!--Secion heading-->
            <h2 class="text-center text-uppercase font-weight-bold mt-5 pt-4 pt-4 spacing wow fadeIn" data-wow-delay="0.2s"><strong>About
                    us</strong></h2>

            <!--Section description-->
            <p class="text-center text-uppercase font-weight-bold grey-text mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s"><i
                    class="fas fa-square red-text-2 mr-2" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>

            <!--First row-->
            <div class="row">

                <!--First column column-->
                <div class="col-xl-5 col-lg-6 pb-1 wow fadeIn" data-wow-delay="0.4s">

                    <!--Description-->
                    <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione
                        quisquam, dicta
                        ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.
                    </p>

                    <p align="justify">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus
                        voluptatum, magni
                        impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam ad perferendis
                        iusto sint tempora.</p>

                    <ul>
                        <li>Nemo animi soluta ratione</li>
                        <li>Beatae maxime temporibus</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Repellendus voluptatum, impedit</li>
                    </ul>

                </div>
                <!--/First column-->

                <!--Column column-->
                <div class="col-xl-6 ml-lg-auto col-lg-6 mb-5 wow fadeIn" data-wow-delay="0.4s">

                    <!--Image-->
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Technology/4-col/img%20%288%29.jpg" class="img-fluid rounded z-depth-1"
                         alt="My photo">

                </div>
                <!--/Column column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: About-->

        <hr>

        <!--Section: Services-->
        <section class="mt-5 mb-3" id="services">

            <!--Grid row-->
            <div class="row mt-5 pt-5 pb-3">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <!--Secion heading-->
                    <h4 class="font-weight-bold mb-4 wow fadeIn" data-wow-delay="0.2s"><strong class="red-text-2 font-weight-bold"><i
                                class="fas fa-square red-text-2 mr-2" aria-hidden="true"></i> </strong>Our
                        Services
                    </h4>

                    <!--Description-->
                    <p align="" class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                        soluta ratione quisquam, dicta
                        ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.Soluta ratione
                        quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit.
                    </p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <img src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" class="img-fluid z-depth-1 rounded" alt="sample image">

                    <!--Secion heading-->
                    <h5 class="font-weight-bold dark-grey-text mt-4 mb-3 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum</h5>

                    <!--Description-->
                    <p align="justify" class=" font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                        soluta ratione quisquam, dicta
                        ab cupiditate iure eaque.
                    </p>
                    <a>
                        <h6 class="font-weight-bold dark-grey-text font-small"> Read more<i class="fas fa-long-arrow-alt-right ml-2"
                                                                                            aria-hidden="true"></i></h6>
                    </a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <img src="https://mdbootstrap.com/img/Photos/Others/images/32.jpg" class="img-fluid z-depth-1 rounded" alt="sample image">

                    <!--Secion heading-->
                    <h5 class="font-weight-bold dark-grey-text mt-4 mb-3 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum</h5>

                    <!--Description-->
                    <p align="justify" class=" font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                        soluta ratione quisquam, dicta
                        ab cupiditate iure eaque.
                    </p>
                    <a>
                        <h6 class="font-weight-bold dark-grey-text font-small"> Read more<i class="fas fa-long-arrow-alt-right ml-2"
                                                                                            aria-hidden="true"></i></h6>
                    </a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <img src="https://mdbootstrap.com/img/Photos/Others/images/30.jpg" class="img-fluid z-depth-1 rounded" alt="sample image">

                    <!--Secion heading-->
                    <h5 class="font-weight-bold dark-grey-text mt-4 mb-3 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum</h5>

                    <!--Description-->
                    <p align="justify" class=" font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi
                        soluta ratione quisquam, dicta
                        ab cupiditate iure eaque.
                    </p>
                    <a>
                        <h6 class="font-weight-bold dark-grey-text font-small"> Read more<i class="fas fa-long-arrow-alt-right ml-2"
                                                                                            aria-hidden="true"></i></h6>
                    </a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--/Section: Services-->

    </div>
    <!--/Second container-->

    <!--Streak-->
    <div class="streak streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%2821%29.jpg')">
        <div class="mask flex-center rgba-black-light">
            <div class="container">

                <!--First row -->
                <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

                    <!--First column -->
                    <div class="col-md-3 mb-2">
                        <h1 class="white-text mb-1 font-weight-bold"><strong>12</strong></h1>
                        <p>Khách hàng</p>
                    </div>
                    <!-- First column -->

                    <!--Second column -->
                    <div class="col-md-3 mb-2">
                        <h1 class="white-text mb-1 font-weight-bold"><strong>320</strong></h1>
                        <p>Lượt truy cập</p>
                    </div>
                    <!-- Second column -->

                    <!--Third column -->
                    <div class="col-md-3 mb-2">
                        <h1 class="white-text mb-1 font-weight-bold"><strong>6</strong></h1>
                        <p>Đang hoạt đông</p>
                    </div>
                    <!-- Third column -->

                    <!--Fourth column -->
                    <div class="col-md-3">
                        <h1 class="white-text mb-1 font-weight-bold"><strong>720</strong></h1>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <!-- Fourth column -->

                </div>
                <!-- First row -->
            </div>
        </div>
    </div>
    <!--/Streak-->

    <!--Third container-->
    <div class="container">

        <!--Section: Features v.4-->
        <section id="features" class="feature-box">

            <!--Secion heading-->
            <h2 class="text-center text-uppercase font-weight-bold mt-5 pt-4 spacing wow fadeIn" data-wow-delay="0.2s"><strong>Hỗ trợ</strong></h2>

            <!--Section description-->
            <p class="text-center text-uppercase font-weight-bold grey-text mb-5 wow fadeIn" data-wow-delay="0.2s"><i class="fas fa-square red-text-2 mr-2"
                                                                                                                      aria-hidden="true"></i> Chính sách hổ trợ khách hàng</p>

            <!--Grid row-->
            <div class="row features-small pt-4">

                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <div class="col-1 col-md-2 float-left">
                        <i class="fas fa-phone red-text-2 fa-2x"></i>
                    </div>
                    <div class="col-10 col-md-9 col-lg-10 float-right">
                        <h4 class="font-weight-bold dark-grey-text">Hổ trợ 24/7</h4>
                        <p class="grey-text">Khách hàng có thể liên hệ trực tiếp để được hổ trợ một cách nhanh chóng</p>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <div class="col-1 col-md-2 float-left">
                        <i class="fas fa-home red-text-2 fa-2x"></i>
                    </div>
                    <div class="col-10 col-md-9 col-lg-10 float-right">
                        <h4 class="font-weight-bold dark-grey-text">Bảo hành trọn đời</h4>
                        <p class="grey-text">Ứng dụng sẽ luôn cập nhật nhưng tính năng mới nhất và liên tục phát triển để tăng trải nghiêm cho khách hàng</p>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <div class="col-1 col-md-2 float-left">
                        <i class="fas fa-globe red-text-2 fa-2x"></i>
                    </div>
                    <div class="col-10 col-md-9 col-lg-10 float-right">
                        <h4 class="font-weight-bold dark-grey-text">Tracking service</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                            aperiam
                            minima assumenda.</p>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--/Section: Features v.4-->

    </div>
    <!--/Third container-->

    <!--Fourth container-->
    <div class="container-fluid background-z">
        <div class="container">

            <!--Section: Pricing v.5-->
            <section id="pricing" class="pb-5 pt-1">

                <!--Secion heading-->
                <h2 class="text-center text-uppercase font-weight-bold pt-5 mt-4 mb-3 spacing wow fadeIn" data-wow-delay="0.2s"><strong>Bảng Giá Dịch Vụ</strong></h2>

                <!--Section description-->
                <p class="text-center text-uppercase grey-text font-weight-bold mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s"><i
                        class="fas fa-square red-text-2 mr-2" aria-hidden="true"></i>Các gói dịch vụ hiện có của chúng tôi</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card pricing-card">

                            <!--Content-->
                            <div class="card-body">
                                <h5 class="font-weight-bold mt-3">Vip 1</h5>

                                <!-- Price -->
                                <div class="price pt-0">
                                    <h5 class="number red-text mb-0">199</h5>
                                </div>
                                <!--Price-->
                                <ul class="striped darker-striped">
                                    <li>
                                        <p><strong>500</strong> đơn hàng</p>
                                    </li>
                                    <li>
                                        <p><strong>10</strong> kêt nối tài khoản</p>
                                    </li>
                                    <li>
                                        <p><strong>Không giới hạng</strong> số lượng video live stream</p>
                                    </li>
                                </ul>
                                <a class="btn btn-danger btn-rounded mb-4"> Đăng ký ngay</a>
                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!-- Card -->
                        <div class="card pricing-card">

                            <!-- Content -->
                            <div class="card-body">
                                <h5 class="font-weight-bold mt-3">Vip 2</h5>

                                <!-- Price -->
                                <div class="price pt-0">
                                    <h5 class="number red-text mb-0">399</h5>
                                </div>
                                <!--Price-->
                                <ul class="striped darker-striped">
                                    <li>
                                        <p><strong>1500</strong> đơn hàng</p>
                                    </li>
                                    <li>
                                        <p><strong>20</strong> kêt nối tài khoản</p>
                                    </li>
                                    <li>
                                        <p><strong>Không giới hạng</strong> số lượng video live stream</p>
                                    </li>
                                </ul>
                                <a class="btn btn-danger btn-rounded mb-4"> Đăng ký ngay</a>
                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card pricing-card">

                            <!--Content-->
                            <div class="card-body">
                                <h5 class="font-weight-bold mt-3">Vip 3</h5>

                                <!-- Price -->
                                <div class="price pt-0">
                                    <h5 class="number red-text mb-0">599</h5>
                                </div>
                                <!--Price-->
                                <ul class="striped darker-striped">
                                    <li>
                                        <p><strong>Không giới hạng</strong> đơn hàng</p>
                                    </li>
                                    <li>
                                        <p><strong>Không giới hạn</strong> kêt nối tài khoản</p>
                                    </li>
                                    <li>
                                        <p><strong>Không giới hạng</strong> số lượng video live stream</p>
                                    </li>
                                </ul>
                                <a class="btn btn-danger btn-rounded mb-4"> Đăng ký ngay</a>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--/Section: Pricing v.5-->

        </div>
    </div>
    <!--/Fourth container-->

   

</main>
<!--/Main content-->

<!--Footer-->
<footer class="page-footer mdb-color darken-3 text-center text-md-left pt-5">

    <!--Footer Links-->
    <div class="container mb-3">

        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!--About-->
                <h5 class="title mb-4 font-weight-bold">ABOUT COMPANY</h5>

                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>

                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                    and JS framework - Bootstrap.</p>
                <!--/About -->

                <div class="footer-socials mt-2">

                    <!--Facebook-->
                    <a type="button" class="btn-floating  btn-danger-2"><i class="fab fa-facebook-f"></i></a>
                    <!--Dribbble-->
                    <a type="button" class="btn-floating  btn-danger-2"><i class="fab fa-dribbble"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating  btn-danger-2"><i class="fab fa-twitter"></i></a>
                    <!--Google +-->
                    <a type="button" class="btn-floating  btn-danger-2"><i class="fab fa-google-plus-g"></i></a>

                </div>
            </div>
            <!--/First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!--Search-->
                <h5 class="text-uppercase mb-4 font-weight-bold">Search something</h5>

                <ul class="footer-search list-unstyled">
                    <li>
                        <form class="search-form" role="search">
                            <div class="md-form">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </li>
                </ul>

                <!--Info-->
                <p><i class="fas fa-home pr-1"></i> New York, NY 10012, US</p>
                <p><i class="fas fa-envelope pr-1"></i> info@example.com</p>
                <p><i class="fas fa-phone pr-1"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print pr-1"></i> + 01 234 567 89</p>

            </div>
            <!--/Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!--Contact-->
                <h5 class="text-uppercase mb-4 font-weight-bold">Recent news</h5>

                <ul class="footer-posts list-unstyled">
                    <li><a>Ut enim ad minim veniam nostrud.</a><span>
                <p class="red-text-2 font-small">28 july 2018</p>
              </span></li>
                    <li><a>Duis aute dolor in reprehenderit.</a><span>
                <p class="red-text-2 font-small">27 july 2018</p>
              </span></li>
                    <li><a>Excepteur sint occaecat cupidatat.</a><span>
                <p class="red-text-2 font-small">26 july 2018</p>
              </span></li>
                    <li><a>Sed perspiciatis unde omnis iste.</a><span>
                <p class="red-text-2 font-small">25 july 2018</p>
              </span></li>
                </ul>

            </div>
            <!--/Third column-->

        </div>
        <!--/First row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
    </div>
    <!--/Copyright-->

</footer>
<!--/Footer-->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{ asset('themes/js/jquery-3.4.1.min.js') }}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('themes/js/popper.min.js') }}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('themes/js/bootstrap.min.js') }}"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('themes/js/mdb.min.js') }}"></script>

<script>
    //Animation init
    new WOW().init();

</script>

</body>

</html>
