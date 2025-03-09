<div>
    <head>
        <link class="main-stylesheet" href="/template/public/cute-alert/style.css" rel="stylesheet"
            type="text/css">
        <script src="/template/public/cute-alert/cute-alert.js"></script>
        <script src="/template/public/js/jquery-3.6.0.js"></script>
        <script src="/template/public/themesbrand/js/layout.js"></script>
        <link href="/template/public/themesbrand/css/bootstrap.min.css" rel="stylesheet"
            type="text/css" />
        <link href="/template/public/themesbrand/css/icons.min.css" rel="stylesheet"
            type="text/css" />
        <link href="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.css"
            rel="stylesheet" type="text/css" />
        <link href="/template/public/themesbrand/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/public/themesbrand/css/custom.min.css" rel="stylesheet"
            type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto+Condensed&display=swap"
            rel="stylesheet">
    </head>
    <style>
        html,
        body {
            cursor: url("/template/assets/img/mouse.png"), progress;
        }

        a:hover {
            cursor: url("/template/assets/img/mouse1.png"), progress;
        }

        .btn:hover {
            cursor: url("/template/assets/img/mouse1.png"), progress;
        }

        body {
            font-family: 'Oswald', sans-serif;
        }

        .ribbon-box .ribbon-primary {
            background: #15171A;
        }

        .ribbon-box .ribbon-primary.ribbon-shape::after {
            border-left-color: #15171A;
            border-bottom-color: #15171A;
        }

        .ribbon-box .ribbon-primary.ribbon-shape::before {
            border-left-color: #15171A;
            border-top-color: #15171A;
        }

        [data-layout=vertical][data-sidebar=dark] .navbar-menu {
            background: linear-gradient(#15171A, #15171A, #10101F);
            border-right: #15171A;
        }

        [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-link {
            color: #dfdfdf;
        }

        [data-layout=vertical][data-sidebar=dark] .menu-title {
            color: #838fb9;
        }

        [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-sm .nav-link {
            color: #c0c0c0;
        }

        [data-topbar=dark] #page-topbar {
            background-color: linear-gradient(#15171A, #15171A, #10101F);
            border-color: #15171A;
        }

        .navbar-menu .navbar-nav .nav-link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.625rem 1.5rem;
            color: var(--vz-vertical-menu-item-color);
            font-size: 16px;
            font-family: 'Oswald', sans-serif;
        }

        .navbar-menu .navbar-nav .nav-sm .nav-link {
            padding: 0.55rem 1.5rem !important;
            color: var(--vz-vertical-menu-sub-item-color);
            white-space: pre-line;
            position: relative;
            font-size: .813rem;
            font-family: 'Oswald', sans-serif;
        }

        .menu-icon {
            font-size: 16px;
            line-height: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            transition: transform 0.5s;
            margin-right: 10px;
            color: #6d8bb0;
        }
    </style>

    <body>
        <div class="auth-page-wrapper pt-5">
            <div class="auth-one-bg-position auth-one-bg"
                style="background-image: url(/template/assets/storage/images/bg_loginRJW.png)"
                id="auth-particles">
                <div class="bg-overlay"></div>
                <div class="shape"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg> </div>
            </div>
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div> <a href="/" class="d-inline-block auth-logo"> <img

                                            alt="" height="50"> </a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Chào Mừng Quay Lại !</h5>
                                        <p class="text-muted">Vui lòng đăng nhập để tiếp tục.</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="">
                                            <div class="mb-3"> <label for="username" class="form-label">Tên đăng
                                                    nhập</label> <input type="text" class="form-control" id="username"
                                                    value="" placeholder="Vui lòng nhập tên đăng nhập"> </div>
                                            <div class="mb-3">
                                                <div class="float-end"> <a href="#" class="text-muted">Quên mật khẩu?</a>
                                                </div> <label class="form-label" for="password-input">Mật khẩu</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3"> <input
                                                        type="password" class="form-control pe-5" value=""
                                                        placeholder="Vui lòng nhập mật khẩu" id="password"> <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                        type="button" id="password-addon"><i
                                                            class="ri-eye-fill align-middle"></i></button> </div>
                                            </div>
                                            <div class="form-check"> <input class="form-check-input" type="checkbox"
                                                    value="" id="auth-remember-check"> <label class="form-check-label"
                                                    for="auth-remember-check">Remember me</label> </div>
                                            <div class="mt-4"> <button class="btn btn-success w-100" id="btnLogin"
                                                    type="button">Đăng Nhập</button> </div>
                                            <div class="mt-4 text-center"> </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                {{-- <p class="mb-0">Bạn chưa có tài khoản ? <a
                                        href=""
                                        class="fw-semibold text-primary text-decoration-underline"> Đăng Ký Ngay </a> </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy;
                                    <script type="text/javascript">document.write(new Date().getFullYear())</script> LARAVEL 11
                                    <i class="mdi mdi-heart text-danger"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script
            src="/template/public/themesbrand/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/template/public/themesbrand/libs/simplebar/simplebar.min.js"></script>
        <script src="/template/public/themesbrand/libs/node-waves/waves.min.js"></script>
        <script src="/template/public/themesbrand/libs/feather-icons/feather.min.js"></script>
        <script src="/template/public/themesbrand/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="/template/public/themesbrand/js/plugins.js"></script>
        <script src="/template/public/themesbrand/libs/particles.js/particles.js"></script>
        <script src="/template/public/themesbrand/js/pages/particles.app.js"></script>
        <script src="/template/public/themesbrand/js/pages/password-addon.init.js"></script>
    </body>
    <script
        type="text/javascript">$("#btnLogin").on("click", function () {
                $('#btnLogin').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled', true); $.ajax({
                    url: "https://ecaptcha.sieuthicode.net/ajaxs/client/auth.php", method: "POST", dataType: "JSON", data: { action: 'Login', username: $("#username").val(), password: $("#password").val() }, success: function (respone) {
                        if (respone.status == 'success') { cuteToast({ type: "success", message: respone.msg, timer: 5000 }); setTimeout("location.href = 'https://ecaptcha.sieuthicode.net/';", 100); } else if (respone.status == 'verify') { cuteToast({ type: "warning", message: respone.msg, timer: 5000 }); setTimeout("location.href = '" + respone.url + "';", 1000); } else { cuteToast({ type: "error", message: respone.msg, timer: 5000 }); }
                        $('#btnLogin').html('Đăng Nhập').prop('disabled', false);
                    }, error: function () { cuteToast({ type: "error", message: 'Không thể xử lý', timer: 5000 }); $('#btnLogin').html('Đăng Nhập').prop('disabled', false); }
                });
            });</script>
</div>
