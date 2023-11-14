<!doctype html>
<html lang="vn" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{URL::asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{URL::asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{URL::asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body>
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
 <!-- auth-page content -->
 <div class="auth-page-content overflow-hidden pt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4 auth-one-bg h-100">
                                <div class="bg-overlay"></div>
                                <div class="position-relative h-100 d-flex flex-column">
                                    <div class="mb-4">
                                        <a href="index.html" class="d-block">
                                            <img src="assets/images/logo-light.png" alt="" height="18">
                                        </a>
                                    </div>
                                    <div class="mt-auto">
                                        <div class="mb-3">
                                            <i class="ri-double-quotes-l display-4 text-success"></i>
                                        </div>

                                        <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner text-center text-white-50 pb-5">
                                                <div class="carousel-item active">
                                                    <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                </div>
                                                <div class="carousel-item">
                                                    <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                </div>
                                                <div class="carousel-item">
                                                    <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4">
                                <div>
                                    <h5 class="text-primary">Xin chào!</h5>
                                    <p class="text-muted">Đăng nhập để tiếp tục</p>
                                </div>

                                <div class="mt-4">
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Tên đăng nhập</label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Tên đăng nhập">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="/reset" class="text-muted">Quên mật khẩu?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Mật khẩu</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Mật khẩu" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Duy trì đăng nhập</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Đăng Nhập</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end auth page content -->

    <!-- JAVASCRIPT -->
    <script src="{{URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins.js')}}"></script>

    <!-- dropzone min -->
    <script src="{{URL::asset('assets/libs/dropzone/dropzone-min.js')}}"></script>

    <!--crypto-kyc init-->
    <script src="{{URL::asset('assets/js/pages/crypto-kyc.init.js')}}"></script>

    <!-- App js -->
    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    @yield('script')
</body>

</html>