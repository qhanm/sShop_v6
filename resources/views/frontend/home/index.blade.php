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
            <a class="navbar-brand" href="#"><strong>Về đầu trang</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about1" data-offset="20">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#policy" data-offset="30">Chính sách riêng tư</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features" data-offset="100">Hỗ trợ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing" data-offset="30">Bảng giá dịch vụ</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#offer" data-offset="100">Offer</a>--}}
{{--                    </li>--}}

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
                            <h5 class="white-text mt-5">Hỗ trợ khách hàng 24/7</h5>
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
    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquach.nam.77%2Fvideos%2F2774394522838303%2F&width=854" width="854" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
    <!--First container-->
    <div class="container-fluid background-z">
        <div class="container">

            <!--Section: Possibilities-->
            <section class="py-4" id="about1">

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
        <section id="policy" class="about my-5">

            <!--Secion heading-->
            <h2 class="text-center text-uppercase font-weight-bold mt-5 pt-4 pt-4 spacing wow fadeIn" data-wow-delay="0.2s"><strong>Chính sách riêng tư</strong></h2>

            <!--Section description-->
            <p class="text-center text-uppercase font-weight-bold grey-text mb-5 pb-3 wow fadeIn" data-wow-delay="0.2s"><i
                    class="fas fa-square red-text-2 mr-2" aria-hidden="true"></i> Chính sách bảo mật khi sử dụng ứng dụng</p>

            <!--First row-->
            <div class="row">

                <!--First column column-->
                <div class="col-xl-5 col-lg-6 pb-1 wow fadeIn" data-wow-delay="0.4s">

                    <!--Description-->
                    <p align="justify">
                        Ứng dụng không sử dụng các thông tin các nhân của khách hàng cho mục đích thương mại khác
                    </p>

                    <p align="justify">
                        Các thông tin được sử dụng là những thông tin cần thiết để khách hàng có thể tạo và quản lý đơn hàng của mình
                    </p>

                    <p align="justify">
                        Thông tin của khách hàng sẽ được bảo mật an toàn tuyệt đối
                    </p>

                </div>
                <!--/First column-->

                <!--Column column-->
                <div class="col-xl-6 ml-lg-auto col-lg-6 mb-5 wow fadeIn" data-wow-delay="0.4s">

                    <!--Image-->
                    <img src="{{ asset('themes/img/policy.jpg') }}" class="img-fluid rounded z-depth-1"
                         alt="My photo">

                </div>
                <!--/Column column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: About-->

        <hr>

        <!--Section: Services-->

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
                        <p>Thành viên</p>
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
                        <h4 class="font-weight-bold dark-grey-text">Hoàng tiền 100%</h4>
                        <p class="grey-text">Hoàn tiền nếu không hài lòng với dịch vụ của chúng tôi</p>
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
                <h5 class="title mb-4 font-weight-bold">Thông tin về chúng tôi</h5>

                <p>Chúng tôi là nhóm nhà phát triển phần mềm với nhiều thành viên có giàu kinh nghiệp.</p>

                <p>Team chúng tôi chuyên cung cấp các phần mềm tiện ích và gia công phần mềm theo yêu cầu của khách hàng.</p>
                <!--/About -->
            </div>
            <!--/First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!--Search-->
                <h5 class="text-uppercase mb-4 font-weight-bold">Thông tin liên hệ</h5>

                <!--Info-->
                <p><i class="fas fa-home pr-1"></i> 356 Bến Vân Đồn, Phường 1, Quận 4, HCM</p>
                <p><i class="fas fa-envelope pr-1"></i> qhnam.67@gmail.com</p>
                <p><i class="fas fa-phone pr-1"></i> + 84 965 586 967</p>

            </div>
            <!--/Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-lg-3 ml-lg-auto col-md-4 mt-1 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!--Contact-->
                <h5 class="text-uppercase mb-4 font-weight-bold">Tin tức gần đây</h5>

                <ul class="footer-posts list-unstyled">
                    <li>
                        <a>Bảo trì và nâng cấp hệ thống</a>
                        <span>
                            <p class="red-text-2 font-small">01-01-2021</p>
                        </span>
                    </li>

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
            © 2019 Copyright: <a href="{{ url('/') }}" target="_blank"> MDBootstrap.com </a>
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
