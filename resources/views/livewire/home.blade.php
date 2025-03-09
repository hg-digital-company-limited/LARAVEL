<div>

    <head>
        <link class="main-stylesheet" href="/template/public/cute-alert/style.css" rel="stylesheet" type="text/css">
        <script src="/template/public/cute-alert/cute-alert.js"></script>
        <script src="/template/public/js/jquery-3.6.0.js"></script>
        <script src="/template/public/themesbrand/js/layout.js"></script>
        <link href="/template/public/themesbrand/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/public/themesbrand/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
            type="text/css" />
        <link href="/template/public/themesbrand/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/public/themesbrand/css/custom.min.css" rel="stylesheet" type="text/css" />
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
        <div id="layout-wrapper">
            @livewire('inc.header')
            <div class="app-menu navbar-menu">
                @livewire('inc.sidebar')
            </div>
            <div class="vertical-overlay"></div>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card rounded-0 bg-soft-success border-top">
                                    <div class="px-4">
                                        <div class="row">
                                            <div class="col-xxl-5 align-self-center">
                                                <div class="py-4">
                                                    <h4 class="display-6 coming-soon-text">Xin chào 2509roblox!</h4>
                                                    <p class="text-success fs-15 mt-3">
                                                    <p>Ch&agrave;o mừng bạn đến với hệ thống giải captcha tự động</p>
                                                    </p>
                                                    <p>Captcha đã giải: <b class="text-danger">39.540.665</b></p>
                                                    <div class="hstack flex-wrap gap-2"> </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 ms-auto">
                                                <div class="mb-n5 pb-1 faq-img d-none d-xxl-block"> <img
                                                        src="/template/public/themesbrand/images/faq-img.png" alt=""
                                                        class="img-fluid"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row justify-content-evenly">
                                    <div class="col-xxl-4 col-lg-4">
                                        <div class="card pricing-box">
                                            <div class="card-body bg-light m-2 p-4">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-grow-1"> <img
                                                            src="/template/assets/storage/images/category12NS.png"
                                                            width="50" height="50" alt=""><span
                                                            class="mb-0 fw-semibold ps-1">Vietcombank - Giải
                                                            Captcha</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <p class="month mb-0">3đ/1 captcha</p>
                                                    </div>
                                                </div>
                                                <p class="text-muted">Hệ thống giải captcha tự động</p>
                                                <ul class="list-unstyled vstack gap-3">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1"> <i
                                                                    class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1"> <b>Giải siêu nhanh:</b> 1S </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1"> <i
                                                                    class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1"> <b>Tiết kiệm chi phí</b> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1"> <i
                                                                    class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1"> <b>Trạng thái:</b> Hoạt động
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-3 pt-2"> <a
                                                        href="https://ecaptcha.sieuthicode.net/document/vietcombank-giai-captcha"
                                                        class="btn btn-info w-100">Sử Dụng</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script type="text/javascript">
                                    document.write(new Date().getFullYear())
                                </script> © Anti
                                Captcha Việt - Giải mã captcha tốc độ cực nhanh, độ chính xác cao -
                                ecaptcha.sieuthicode.net
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block"> Version <b style="color: red;">1.0.0</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="/template/public/themesbrand/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/template/public/themesbrand/libs/simplebar/simplebar.min.js"></script>
        <script src="/template/public/themesbrand/libs/node-waves/waves.min.js"></script>
        <script src="/template/public/themesbrand/libs/feather-icons/feather.min.js"></script>
        <script src="/template/public/themesbrand/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="/template/public/themesbrand/js/plugins.js"></script>
        <script src="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="/template/public/AdminLTE3/plugins/codemirror/codemirror.js"></script>
        <script src="/template/public/AdminLTE3/plugins/codemirror/mode/css/css.js"></script>
        <script src="/template/public/AdminLTE3/plugins/codemirror/mode/xml/xml.js"></script>
        <script src="/template/public/AdminLTE3/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="/template/public/themesbrand/js/app.js"></script>
    </body>

</div>
