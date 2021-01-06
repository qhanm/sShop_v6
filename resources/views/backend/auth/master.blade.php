<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="{{ asset('themes/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/mdb.min.css') }}" rel="stylesheet">
    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }
        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view  {
                height: 650px;
            }
        }

        .qhn-invalid-feedback {
            display: block;
            color: #a5071d;
            margin-left: 40px;
        }
    </style>
</head>

<body class="login-page">

<header>
    <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            @yield('content')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</header>

<script type="text/javascript" src="{{ asset('themes/js/jquery-3.4.1.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('themes/js/popper.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('themes/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/mdb.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.pjax.js')  }}"></script>
<script>
    new WOW().init();

    $(document).ready(function(){
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 1000; // time in milliseconds
        }

    });
</script>
</body>

</html>
