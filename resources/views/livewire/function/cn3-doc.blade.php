<div>
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
            <link
                href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto+Condensed&display=swap"
                rel="stylesheet">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        </head>
        <style>
            html,
            body {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse.png"), progress;
            }

            a:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
            }

            .btn:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
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
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">CAPCHA</h4>
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="/doc/cn1">TÀI LIỆU</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <div class="ribbon ribbon-primary ribbon-shape ">Biến môi trường
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre class="form-control">
    GEETEST_ID=e69dae1839c6c93fdf2843d13a3eae5e
    GEETEST_KEY=9c7ade79de450700eec6fcee98054c94
</pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <div class="ribbon ribbon-primary ribbon-shape ">Biến môi trường
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre class="form-control">
    GEETEST_ID=e69dae1839c6c93fdf2843d13a3eae5e
    GEETEST_KEY=9c7ade79de450700eec6fcee98054c94
</pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <div class="ribbon ribbon-primary ribbon-shape ">Biến môi trường
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre class="form-control">
    GEETEST_ID=e69dae1839c6c93fdf2843d13a3eae5e
    GEETEST_KEY=9c7ade79de450700eec6fcee98054c94
</pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                            @livewire('inc.footer')

                        </div>
                    </div>

                    <script src="/template/public/themesbrand/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/template/public/themesbrand/libs/simplebar/simplebar.min.js"></script>
                    <script src="/template/public/themesbrand/libs/node-waves/waves.min.js"></script>
                    <script src="/template/public/themesbrand/libs/feather-icons/feather.min.js"></script>
                    <script src="/template/public/themesbrand/js/pages/plugins/lord-icon-2.1.0.js"></script>
                    <script src="/template/public/themesbrand/js/plugins.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/jszip/jszip.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/vfs_fonts.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/codemirror.css">
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/theme/monokai.css">
                    <script src="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/codemirror.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/css/css.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/xml/xml.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
                    <script src="/template/public/themesbrand/js/app.js"></script>
                    <script
                        type="text/javascript">CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo1"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo2"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo3"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo4"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo5"), { mode: "htmlmixed", theme: "monokai" }); new ClipboardJS(".copy"); function copy() { cuteToast({ type: "success", message: "Đã sao chép vào bộ nhớ tạm", timer: 5000 }); }</script>
        </body>

    </div>

</div>
