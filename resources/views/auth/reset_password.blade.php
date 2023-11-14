<!doctype html>
<html lang="vn" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Quên mật khẩu</title>
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
                            <div class="row justify-content-center g-0">
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
                                        <h5 class="text-primary">Quên mật khẩu?</h5>

                                        <div class="mt-2 text-center">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                                            </lord-icon>
                                        </div>

                                        <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                            Nhập email của bạn để được cấp mật khẩu mới
                                        </div>
                                        <div class="p-2">
                                            <form action="/reset" method="post">
                                                @csrf
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="username" value="{{ old('username') }}" class="form-control" id="email" placeholder="Email">
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Gửi</button>
                                                </div>
                                            </form><!-- end form -->
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Đăng nhập<a href="/login" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
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

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
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